<?php
require_once dirname(dirname(__FILE__)).'/allandok.php';

class SysProjectDao {
	private static $instance;
	private function __construct() {}
	private function __clone() {}
	
	public static function getInstance() : SysProjectDao{
		if (!isset(self::$instance)) {
			$c = __CLASS__;
			self::$instance = new $c;
		}
		return self::$instance;
	}
	
	public function getProjectByCode($code) : SysProject {
		$entity = SysProject::find(array('conditions' => array('kod = ?', $code)));
		if($entity == null) {
			$entity = new SysProject();
		}
		return $entity;
	}
	
	public function isJogosult($usrId, $projectId) : bool {
		$entity = SysUsersProjectsSw::find(array('conditions' => array('sys_user_id = ? AND sys_project_id = ?', $usrId, $projectId)));
		if($entity != null) {
			if(!$entity -> isDeleted10()) {
				return true;
			}
		} 
		return false;
	}

}
?>