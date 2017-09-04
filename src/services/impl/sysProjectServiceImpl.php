<?php
require_once dirname(dirname(dirname(__FILE__))).'/allandok.php';

require_once dirname(dirname(dirname(__FILE__))).'/services/sysProjectService.php';	//nem tudom miért

class SysProjectServiceImpl implements SysProjectService {
	private static $instance;
	private static $dao;
	
	private function __clone() {}
	
	private function __construct() {
		self::$dao = SysProjectDao::getInstance();
	}
	
	
	public static function getInstance() : SysProjectService {
		if (!isset(self::$instance)) {
			$c = __CLASS__;
			self::$instance = new $c;
		}
		return self::$instance;
	}
	
	public function getProjectByCode($code) : SysProject {
		$entity = self::$dao -> getProjectByCode($code);
		if($entity == null) {
			$entity = new SysProject();
		}
		return $entity;
	}
	
	public function isJogosult($usrId, $projectId) : bool {
		return self::$dao -> isJogosult($usrId, $projectId);
	}

}
?>