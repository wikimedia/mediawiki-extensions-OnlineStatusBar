<?php

use MediaWiki\MediaWikiServices;

class OnlineStatusBarHooks {
	/**
	 * @param DatabaseUpdater $updater
	 */
	public static function ckSchema( DatabaseUpdater $updater ) {
		$updater->addExtensionUpdate( [
			'addtable',
			'online_status',
			__DIR__ . '/../sql/OnlineStatusBar.sql',
			true
		] );
	}

	/**
	 * Called everytime when user logout
	 * @param User &$user
	 * @return true
	 */
	public static function logout( &$user ) {
		global $wgOnlineStatusBarDefaultEnabled;
		// check if user had enabled this feature before we write to db
		$userOptionsManager = MediaWikiServices::getInstance()->getUserOptionsManager();
		if ( $userOptionsManager->getOption( $user, 'OnlineStatusBar_active', $wgOnlineStatusBarDefaultEnabled ) ) {
			$userName = $user->getName();
			OnlineStatusBar_StatusCheck::deleteStatus( $userName );
			OnlineStatusBar::purge( $userName );
		}
		return true;
	}

	/**
	 * Called everytime on login
	 * @param User &$user
	 * @param string &$inject_html
	 * @param bool $direct
	 * @return bool
	 */
	public static function onUserLoginComplete( &$user, &$inject_html, $direct ) {
		if ( OnlineStatusBar::isValid( $user ) ) {
			// Update status
			OnlineStatusBar_StatusCheck::updateStatus( $user );
			// Purge user page (optional)
			OnlineStatusBar::purge( $user );
		}
		return true;
	}

	/**
	 * Creates a bar
	 * @param Article &$article
	 * @param bool &$outputDone
	 * @param string &$pcache
	 * @return bool
	 */
	public static function renderBar( &$article, &$outputDone, &$pcache ) {
		$context = $article->getContext();
		// Update status of all users who wants to be tracked
		OnlineStatusBar_StatusCheck::updateStatus( $context->getUser() );

		// Performance fix
		$title = $article->getTitle();
		if ( $title->getNamespace() != NS_USER && $title->getNamespace() != NS_USER_TALK ) {
			return true;
		}

		// Retrieve status of user parsed from title
		$result = OnlineStatusBar::getUserInfoFromTitle( $title );

		$userNameUtils = MediaWikiServices::getInstance()->getUserNameUtils();
		// In case that status can't be parsed we check if it isn't anon
		if ( $result === false && $userNameUtils->isIP( $title->getBaseText() ) ) {
			$result = OnlineStatusBar::getAnonFromTitle( $title );
		}

		// In case we were unable to get a status let's quit
		if ( $result === false ) {
			return true;
		}

		// Don't display status of those who don't want to show bar but only use magic
		if ( $result->getOption( 'OnlineStatusBar_hide', false ) ) {
			return true;
		}
		$context->getOutput()->addModules( 'ext.OnlineStatusBar' );

		return true;
	}

	/**
	 * Insert user options
	 * @param User $user
	 * @param array &$preferences
	 * @return bool
	 */
	public static function preferencesHook( User $user, array &$preferences ) {
		global $wgOnlineStatusBar_LogoutTime;

		$preferences['OnlineStatusBar_active'] = [
			'type' => 'toggle',
			'label-message' => 'onlinestatusbar-used',
			'section' => 'misc/onlinestatus'
		];
		$preferences['OnlineStatusBar_hide'] = [
			'type' => 'toggle',
			'label-message' => 'onlinestatusbar-hide',
			'section' => 'misc/onlinestatus'
		];
		$preferences['OnlineStatusBar_away'] = [
			'type' => 'toggle',
			'label-message' => 'onlinestatusbar-away',
			'section' => 'misc/onlinestatus'
		];
		$preferences['OnlineStatusBar_autoupdate'] = [
			'type' => 'toggle',
			'label-message' => 'onlinestatusbar-purge',
			'section' => 'misc/onlinestatus'
		];
		$preferences['OnlineStatusBar_status'] = [
			'type' => 'radio',
			'label-message' => 'onlinestatusbar-status',
			'section' => 'misc/onlinestatus',
			'options' => [
				wfMessage( 'onlinestatusbar-title-online', $user->getName() )->escaped() => 'online',
				wfMessage( 'onlinestatusbar-title-busy', $user->getName() )->escaped() => 'busy',
				wfMessage( 'onlinestatusbar-title-away', $user->getName() )->escaped() => 'away',
				wfMessage( 'onlinestatusbar-title-hidden', $user->getName() )->escaped() => 'hidden'
			],
		];
		$preferences['OnlineStatusBar_awaytime'] = [
			'min' => 2,
			'max' => $wgOnlineStatusBar_LogoutTime,
			'type' => 'int',
			'label-message' => 'onlinestatusbar-away-time',
			'section' => 'misc/onlinestatus'
		];
		return true;
	}

	/**
	 * @param array &$defaultOptions
	 * @return bool
	 */
	public static function setDefaultOptions( &$defaultOptions ) {
		global $wgOnlineStatusBar_AwayTime, $wgOnlineStatusBarDefaultOnline, $wgOnlineStatusBarDefaultEnabled;
		// set defaults
		$defaultOptions['OnlineStatusBar_autoupdate'] = false;
		$defaultOptions['OnlineStatusBar_status'] = $wgOnlineStatusBarDefaultOnline;
		$defaultOptions['OnlineStatusBar_away'] = true;
		$defaultOptions['OnlineStatusBar_active'] = $wgOnlineStatusBarDefaultEnabled;
		$defaultOptions['OnlineStatusBar_hide'] = false;
		$defaultOptions['OnlineStatusBar_awaytime'] = $wgOnlineStatusBar_AwayTime;
		// quit
		return true;
	}

	/**
	 * @param array &$vars
	 * @return bool
	 */
	public static function magicWordSet( &$vars ) {
		$vars[] = 'ISONLINE';
		return true;
	}

	/**
	 * @param Parser $parser
	 * @param array &$varCache
	 * @param string $index
	 * @param array &$ret
	 * @return bool
	 */
	public static function parserGetVariable( $parser, &$varCache, $index, &$ret ) {
		global $wgOnlineStatusBarCacheTime;
		if ( $index != 'ISONLINE' ) {
			return true;
		}

		// get a status of user parsed from title
		$result = OnlineStatusBar::getUserInfoFromString( $parser->getTitle()->getBaseText() );
		$userNameUtils = MediaWikiServices::getInstance()->getUserNameUtils();
		// if user is IP and we track them
		if ( $userNameUtils->isIP( $parser->getTitle()->getBaseText() ) && $result === false ) {
			$result = OnlineStatusBar::getAnonFromString( $parser->getTitle()->getBaseText() );
		}

		if ( $result === false ) {
			$ret = $varCache[$index] = 'unknown';
			return true;
		}

		// if user is tracked we need to remove parser cache so that page update when status change
		if ( $result !== false ) {
			$parser->getOutput()->updateCacheExpiry( $wgOnlineStatusBarCacheTime[$result[0]] * 60 );
		}

		$ret = $varCache[$index] = $result[0];
		return true;
	}
}
