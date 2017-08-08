<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class BasicModel extends ActiveRecord\Model {
			
		public function getId() {
			return $this -> id;
		}
		public function setId($id) {
			$this -> id = $id;
		}
		
		public function getCreated() {
			return $this -> created;
		}
		public function setCreated($created) {
			$this -> created = $created;
		}
		
		public function getCreator() {
			return $this -> creator;
		}
		public function setCreator($creator) {
			$this -> creator = $creator;
		}
		
		public function getModified() {
			return $this -> modified;
		}
		public function setModified($modified) {
			$this -> modified = $modified;
		}
		
		public function getModifier() {
			return $this -> modifier;
		}
		public function setModifier($modifier) {
			$this -> modifier = $modifier;
		}
		
		public function isDeleted10() {
			return $this -> deleted_10;
		}
		public function setDeleted10($deleted10) {
			$this -> deleted_10 = $deleted10;
		}
		
		public function getVersion() {
			return $this -> version;
		}
		public function setVersion($version) {
			$this -> version = $version;
		}
	}
?>