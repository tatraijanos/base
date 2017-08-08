<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';
	
	class SysTodosView extends ActiveRecord\Model {
		public static $table_name = 'sys_todos_view';
		public static $primary_key = 'id';
		
		public function getId() {
			return $this -> id;
		}
		
		public function getProjekt() {
			return $this -> projekt;
		}
		
		public function getJavaslat() {
			return $this -> javaslat;
		}
		
		public function getHiba() {
			return $this -> hiba;
		}
	}
?>