<?php
/**
 * Hooks for OnlineStatusBar api's
 *
 * @group Extensions
 */

class ApiOnlineStatus extends ApiQueryBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'onlinestatus' );
	}

	public function execute() {
		$params = $this->extractRequestParams();
		$result = OnlineStatusBar::getUserInfoFromString( $params['user'] );

		// if user is IP and we track them
		if ( $result === false && User::isIP( $params['user'] )  ) {
			$result = OnlineStatusBar::getAnonFromString( $params['user'] );
		}

		if ( $result === false ) {
			$ret = 'unknown';
			$gender = 'unknown';
		} else {
			$ret = $result[0];
			$gender = GenderCache::singleton()->getGenderOf( $result[1]->getName() );
		}

		$this->getResult()->addValue(
			null, $this->getModuleName(), array(
				'status' => $ret,
				'gender' => $gender
			)
		);
	}

	public function getAllowedParams() {
		// params
		return array(
			'user' => array (
					ApiBase::PARAM_TYPE => 'string',
					ApiBase::PARAM_REQUIRED => true
				),
		);
	}

	public function getParamDescription() {
		return array(
			'user' => 'Username of user you want to get status for',
		);
	}

	public function getDescription() {
		return 'Returns online status and gender of user.';
	}

	public function getExamples() {
		return array(
			'api.php?action=query&prop=onlinestatus&onlinestatususer=Petrb',
		);
	}
}
