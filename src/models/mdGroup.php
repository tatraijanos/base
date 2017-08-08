<?php	
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class MdGroup extends BasicModel{
		public static $table_name = 'md_group';
		public static $primary_key = 'id';
		
		
		public function getSysProjectId() {
			return $this -> sys_project_id;
		}
		public function setSysProjectId($sysProjectId) {
			$this -> sys_project_id = $sysProjectId;
		}
		
		public function getCsoportNeve() {
			return $this -> csoport_neve;
		}
		public function setCsoportNeve($csoportNeve) {
			$this -> csoport_neve = $csoportNeve;
		}
		
		public function getCsoportKod() {
			return $this -> csoport_kod;
		}
		public function setCsoportKod($csoportKod) {
			$this -> csoport_kod = $csoportKod;
		}
		
		public function isCsakAdminSzerk10() {
			return $this -> csak_admin_szerk_10;
		}
		public function setCsakAdminSzerk10($csakAdminSzerk10) {
			$this -> csak_admin_szerk_10= $csakAdminSzerk10;
		}
		
	}
?>