<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';

	class LoginException extends Exception{
		public function __construct($message = null, $code = 0) {
			if($message != null) {
				parent::__construct('<div style="color:red;">'.$message.'</div>', $code);
			} else {
				parent::__construct('Hiba', $code);
			}
		}
	}
?>