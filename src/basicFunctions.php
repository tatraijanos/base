<?php
	session_start();

	require_once dirname(__FILE__).'/allandok.php';
	
	$basicFunctions = BasicFunctions::getInstance();

	class BasicFunctions {
		private static $instance;
		private function __construct() {
			$cfg = ActiveRecord\Config::instance();
			$cfg->set_model_directory(dirname(__FILE__).'/models');
			$cfg->set_connections(array('development' => 'mysql://root:@localhost/hostinger;charset=utf8'));
		}
		private function __clone() {}
		
		public static function getInstance() : BasicFunctions {
			if (!isset(self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c;
			}
			return self::$instance;
		}
		
		public function isJogosult() {
			if(empty($_SESSION['felhasznaloId']) || empty($_SESSION['projectKod'])) {
				session_destroy();
				return false;
			}
			return true;
		}
		
		public function isEmpty($str) : bool {
			if($str == null || trim($str) == '') {
				return true;
			}
			return false;
		}
	}
?>