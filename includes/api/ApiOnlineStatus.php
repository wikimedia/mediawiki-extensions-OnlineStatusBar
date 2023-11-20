<?php

use MediaWiki\MediaWikiServices;
use MediaWiki\User\UserNameUtils;

class ApiOnlineStatus extends ApiQueryBase {
	/**
	 * @var UserNameUtils
	 */
	private $userNameUtils;

	/**
	 * @param ApiQuery $query
	 * @param string $moduleName
	 * @param UserNameUtils $userNameUtils
	 */
	public function __construct( ApiQuery $query, $moduleName, UserNameUtils $userNameUtils ) {
		parent::__construct( $query, $moduleName, 'onlinestatus' );
		$this->userNameUtils = $userNameUtils;
	}

	public function execute() {
		$params = $this->extractRequestParams();
		$result = OnlineStatusBar::getUserInfoFromString( $params['user'] );

		// if user is IP and we track them
		if ( $result === false && $this->userNameUtils->isIP( $params['user'] ) ) {
			$result = OnlineStatusBar::getAnonFromString( $params['user'] );
		}

		if ( $result === false ) {
			$ret = 'unknown';
			$gender = 'unknown';
		} else {
			$ret = $result[0];
			$genderCache = MediaWikiServices::getInstance()->getGenderCache();
			$gender = $genderCache->getGenderOf( $result[1]->getName() );
		}

		$this->getResult()->addValue(
			null, $this->getModuleName(), [
				'status' => $ret,
				'gender' => $gender
			]
		);
	}

	/** @inheritDoc */
	public function getAllowedParams() {
		// params
		return [
			'user' => [
					ApiBase::PARAM_TYPE => 'string',
					ApiBase::PARAM_REQUIRED => true
				],
		];
	}

	/** @inheritDoc */
	protected function getExamplesMessages() {
		return [
			'action=query&prop=onlinestatus'
				=> 'apihelp-query+onlinestatus-example',
		];
	}
}
