<?php
	require_once dirname(dirname(dirname(__FILE__))).'/allandok.php';
	
	require_once dirname(dirname(dirname(__FILE__))).'/services/sysUserService.php';	//nem tudom miért
	
	class SysUserServiceImpl implements SysUserService {
		private static $instance;
		private static $dao;
		
		private function __clone() {}
		
		private function __construct() {
			self::$dao = SysUserDao::getInstance();
		}
		
		
		public static function getInstance() : SysUserService {
			if (!isset(self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c;
			}
			return self::$instance;
		}
		
		public function validUser($usr, $psw, $projectCode) : bool {
			$entity = self::$dao -> getUserByUsrName($usr, $psw);
			if($entity -> getId() != null) {
				if (!$entity -> isDeleted10()) {
					$projctService = SysProjectServiceImpl::getInstance();
					
					$projectEntity = $projctService -> getProjectByCode($projectCode);
					$jogosult = $projctService -> isJogosult($entity -> getId(), $projectEntity -> getId());
					if($jogosult) {
						$_SESSION['projectKod'] = $projectCode;
						$_SESSION['usrName'] = $entity -> getId();
						return true;
					} else  {
						throw new LogicException('Önnek nincs jogosultsága a(z) '.$projectEntity -> getElnevezes().' programhoz!');
						
					}
					return false;
				} else {
					throw new LogicException("Inaktív felhasználó!");
				}
			} else {
				throw new LogicException("Nem létező felhasználó és/vagy hibás jelszó!");
			}
			
			
		}
		
	}
?>