<?php
/**
 * File which contains status check for Online status bar extension.
 *
 * @file
 * @ingroup Extensions
 * @author Petr Bena <benapetr@gmail.com>
 * @license GPL-2.0-or-later
 * @link https://www.mediawiki.org/wiki/Extension:OnlineStatusBar Documentation
 */

use MediaWiki\MediaWikiServices;

// phpcs:ignore Squiz.Classes.ValidClassName.NotCamelCaps
class OnlineStatusBar_StatusCheck {
	/**
	 * Return cache key
	 * @param string $user
	 * @param string $type
	 * @return string
	 */
	private static function getCacheKey( $user, $type ) {
		// get a key for cache
		return ObjectCache::getLocalClusterInstance()->makeKey( 'onlinestatusbar_cache', $type, $user );
	}

	/**
	 * Create a cache
	 * @param string $user
	 * @param string $values
	 * @param string $type
	 * @param int|null $time
	 * @return bool true
	 */
	private static function setCache( $user, $values, $type, $time = null ) {
		global $wgOnlineStatusBar_WriteTime;

		// get a key
		$cache_key = self::getCacheKey( $user, $type );

		if ( $time === null ) {
			$time = $wgOnlineStatusBar_WriteTime;
		}

		ObjectCache::getLocalClusterInstance()->set( $cache_key, $values, $time );
		return true;
	}

	/**
	 * Return cache value
	 * @param string $user
	 * @param string $type
	 * @return mixed
	 */
	private static function getCache( $user, $type ) {
		// get a key
		$cache_key = self::getCacheKey( $user, $type );

		// get a value
		return ObjectCache::getLocalClusterInstance()->get( $cache_key );
	}

	/**
	 * Status check
	 * @param User $user
	 * @param bool $delayed_check
	 * @return string
	 */
	public static function getStatus( $user, $delayed_check = false ) {
		global $wgOnlineStatusBarDefaultOffline, $wgOnlineStatusBarDefaultOnline;

		// instead of delete every time just select the records which are not that old
		if ( !$delayed_check ) {
			// first try to use cache
			$result = self::getCache( $user->getName(), ONLINESTATUSBAR_NORMAL_CACHE );

			if ( $result == '' ) {
				$t_time = OnlineStatusBar::getTimeoutDate();
				$dbr = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_REPLICA );
				$result = $dbr->selectField(
					'online_status',
					'timestamp',
					[ 'username' => $user->getName(),
					'timestamp > ' .
					$dbr->addQuotes( $dbr->timestamp( $t_time ) ) ],
					__METHOD__, [ 'LIMIT 1', 'ORDER BY timestamp DESC' ]
				);

				// cache it
				self::setCache( $user->getName(), $result, ONLINESTATUSBAR_NORMAL_CACHE );
			}
		} else {
			// checking only if we need to do write or not
			$result = self::getCache( $user->getName(), ONLINESTATUSBAR_DELAYED_CACHE );
			$w_time = OnlineStatusBar::getTimeoutDate( ONLINESTATUSBAR_CK_DELAYED );

			if ( $result == '' ) {
				$dbr = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_REPLICA );
				$result = $dbr->selectField(
					'online_status',
					'timestamp',
					[ 'username' => $user->getName() ],
					__METHOD__, [ 'LIMIT 1', 'ORDER BY timestamp DESC' ]
				);

				// cache it
				if ( $result !== false && $result > wfTimestamp( TS_MW, $w_time ) ) {
					self::setCache( $user->getName(), $result, ONLINESTATUSBAR_DELAYED_CACHE );
				}
			}
		}

		if ( $result === false ) {
			$status = $wgOnlineStatusBarDefaultOffline;
		} else {
			// let's check if it isn't anon
			if ( $user->isRegistered() ) {
				$userOptionsManager = MediaWikiServices::getInstance()->getUserOptionsManager();
				$status = $userOptionsManager->getOption(
					$user,
					'OnlineStatusBar_status',
					$wgOnlineStatusBarDefaultOnline
				);

				if ( $delayed_check ) {
					// check if it's old or not
					if ( $result < wfTimestamp( TS_MW, $w_time ) ) {
						$status = 'write';
					}
				} elseif ( $userOptionsManager->getOption( $user, 'OnlineStatusBar_away', true ) ) {
					$timeoutDate = wfTimestamp(
						TS_MW,
						OnlineStatusBar::getTimeoutDate( ONLINESTATUSBAR_CK_AWAY, $user )
					);
					if ( $result < $timeoutDate ) {
						$status = 'away';
					}
				}
			} else {
				$status = $wgOnlineStatusBarDefaultOnline;
				if ( $delayed_check ) {
					if ( $result < wfTimestamp( TS_MW, $w_time ) ) {
						$status = 'write';
					}
				}
			}
		}

		if ( $status == 'hidden' && !( $delayed_check ) ) {
			$status = $wgOnlineStatusBarDefaultOffline;
		}

		return $status;
	}

	/**
	 * Insert to the database
	 * @param User $user
	 * @return bool
	 */
	public static function updateDB( $user ) {
		// Skip users we don't track
		if ( !OnlineStatusBar::isValid( $user ) ) {
			return false;
		}

		// If we track them, let's insert it to the table
		$dbw = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_PRIMARY );
		$timestamp = $dbw->timestamp();
		$row = [
			'username' => $user->getName(),
			'timestamp' => $timestamp,
		];
		self::setCache( $user->getName(), $timestamp, ONLINESTATUSBAR_NORMAL_CACHE );
		$dbw->insert( 'online_status', $row, __METHOD__ );
		return false;
	}

	/**
	 * Delete user who logged out
	 * @param string $userName
	 * @return bool
	 */
	public static function deleteStatus( $userName ) {
		$dbw = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_PRIMARY );
		// delete user
		$dbw->delete( 'online_status', [ 'username' => $userName ], __METHOD__ );

		// remove from cache
		self::setCache( $userName, '', ONLINESTATUSBAR_NORMAL_CACHE );
		self::setCache( $userName, '', ONLINESTATUSBAR_DELAYED_CACHE );

		return true;
	}

	/**
	 * Update status of user
	 * @param User $user
	 * @return bool
	 */
	public static function updateStatus( $user ) {
		global $wgOnlineStatusBarDefaultOffline;

		// if anon users are not tracked and user is anon leave it
		if ( !OnlineStatusBar::isValid( $user ) ) {
			return false;
		}
		$user_status = self::getStatus( $user, true );
		if ( $user_status == $wgOnlineStatusBarDefaultOffline ) {
			self::updateDB( $user );
			return true;
		}

		if ( $user_status == 'write' ) {
			$dbw = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_PRIMARY );
			$timestamp = $dbw->timestamp();
			$dbw->update(
				'online_status',
				[ 'timestamp' => $timestamp ],
				[ 'username' => $user->getName() ],
				__METHOD__
			);
			self::setCache( $user->getName(), $timestamp, ONLINESTATUSBAR_NORMAL_CACHE );
			self::deleteOld();
		}
		return true;
	}

	/**
	 * Delete old records from the table, this function is called frequently to keep the table as small as possible
	 * it's also possible to disable this function to set automatic job in cron to do that
	 * @return int
	 */
	public static function deleteOld() {
		global $wgOnlineStatusBarAutoDelete;

		if ( !$wgOnlineStatusBarAutoDelete ) {
			return 0;
		}

		if ( self::getCache( 'null', 'delete' ) == 'true' ) {
			return 0;
		}

		// Check if we actually need to delete something before we write to master
		$dbr = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_REPLICA );
		$time = OnlineStatusBar::getTimeoutDate();
		$result = $dbr->selectField(
			'online_status',
			'timestamp',
			[ 'timestamp < ' .
			$dbr->addQuotes( $dbr->timestamp( $time ) ) ],
			__METHOD__, [ 'LIMIT 1' ]
		);

		if ( $result === false ) {
			// no need for delete
			return 0;
		}

		// calculate time and convert it back to mediawiki format
		$dbw = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_PRIMARY );
		$dbw->delete( 'online_status',
			[ 'timestamp < ' . $dbw->addQuotes( $dbw->timestamp( $time ) ) ],
			__METHOD__
		);
		// remember we deleted it for 1 hour so that we avoid calling this too many times
		self::setCache( 'null', 'true', 'delete', 3600 );
		return 0;
	}
}
