<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class SysUser extends BasicModel {
		public static $table_name = 'sys_users';
		public static $primary_key = 'id';
		
		
		public function getNev() {
			return $this -> nev;
		}
		public function setNev($nev) {
			$this -> nev = $nev;
		}
		
		public function getFelhasznaloNev() {
			return $this -> felhasznalo_nev;
		}
		public function setFelhasznaloNev($felhasznaloNev) {
			$this -> felhasznalo_nev= $felhasznaloNev;
		}
		
		public function getJelszo() {
			return $this -> jelszo;
		}
		public function setJelszo($jelszo) {
			$this -> jelszo = $jelszo;
		}
		
		public function getEMail() {
			return $this -> e_mail;
		}
		public function setEMail($eMail) {
			$this -> e_mail = $eMail;
		}
		
		public function isElsoBelep10() {
			return $this -> elso_belep_10;
		}
		public function setElsoBelep10($elsoBelep10) {
			$this -> elso_belep_10= $elsoBelep10;
		}
		
	}
?>