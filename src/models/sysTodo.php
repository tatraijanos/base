<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class SysTodo extends BasicModel{
		public static $table_name = 'sys_todos';
		public static $primary_key = 'id';
		
		
		public function getSysProjectId() {
			return $this -> sys_project_id;
		}
		public function setSysProjectId($sysProjectId) {
			$this -> sys_project_id = $sysProjectId;
		}
		
		public function getJavaslat() {
			return $this -> javaslat;
		}
		public function setJavaslat($javaslat) {
			$this -> javaslat = $javaslat;
		}
		
		public function isHiba10() {
			return $this -> hiba_10;
		}
		public function setHiba10($hiba10) {
			$this -> hiba_10 = $hiba10;
		}
		
		public function getAllapotCd() {
			return $this -> allapot_cd;
		}
		public function setAllapotCd($allapotCd) {
			$this -> allapot_cd = $allapotCd;
		}
		
		public function getEszlelesVerzio() {
			return $this -> eszleles_verzio;
		}
		public function setEszlelesVerzio($eszlelesVerzio) {
			$this -> eszleles_verzio = $eszlelesVerzio;
		}
		
		public function getJavitasVerzio() {
			return $this -> javitas_verzio;
		}
		public function setJavitasVerzio($javitasVerzio) {
			$this -> javitas_verzio = $javitasVerzio;
		}
		
	}
?>