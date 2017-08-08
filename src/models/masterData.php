<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class MasterData extends BasicModel {
		public static $table_name = 'master_data';
		public static $primary_key = 'id';
		
		
		public function getMdGroupId() {
			return $this -> md_group_id;
		}
		public function setMdGroupId($mdGroupId) {
			$this -> md_group_id = $mdGroupId;
		}
		
		public function getCimke() {
			return $this -> cimke;
		}
		public function setCimke($cimke) {
			$this -> cimke = $cimke;
		}
		
	}
?>