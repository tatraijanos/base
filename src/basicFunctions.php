<?php
	require_once dirname(__FILE__).'/allandok.php';
	
	$bf = BasicFunctions::getInstance();

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
			if(empty($_SESSION['projectKod'])) {
				header("Location: ./index.php?errorCode=1");
			}
		}
		
		public function isEmpty($str) : bool {
			if($str == null || $str == '') {
				return true;
			}
			return false;
		}
	}
?>