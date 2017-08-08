<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class SysProject extends BasicModel{
		public static $table_name = 'sys_projects';
		public static $primary_key = 'id';
		
		
		public function getElnevezes() {
			return $this -> elnevezes;
		}
		public function setElnevezes($elnevezes) {
			$this -> elnevezes= $elnevezes;
		}
		
		public function getKod() {
			return $this -> kod;
		}
		public function setKod($kod) {
			$this -> kod = $kod;
		}
		
		public function isProgramVerzio() {
			return $this -> program_verzio;
		}
		public function setProgramVerzio($programVerzio) {
			$this -> program_verzio= $programVerzio;
		}
		
	}
?>