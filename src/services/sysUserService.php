<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';

	interface SysUserService {
		public function validUser($usr, $psw);
	}
?>