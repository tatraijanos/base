<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class SysUserDao {
		private static $instance;
		private function __construct() {}
		private function __clone() {}
		
		public static function getInstance() : SysUserDao{
			if (!isset(self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c;
			}
			return self::$instance;
		}
		
		public function getUserByUsrName($usr, $psw) : SysUser {
			$entity = SysUser::find(array('conditions' => array('felhasznalo_nev = ? AND jelszo = ?', $usr, $psw)));
			if($entity == null) {
				$entity = new SysUser();
			}
			return $entity;
		}
	}
?>