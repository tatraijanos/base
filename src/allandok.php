<?php
	define("ROOT", dirname(dirname(__FILE__)).'/');

	require_once ROOT.'library/php-activerecord/ActiveRecord.php';
	
	require_once ROOT.'src/models/basicModel.php';
	require_once ROOT.'src/models/masterData.php';
	require_once ROOT.'src/models/mdGroup.php';
	require_once ROOT.'src/models/sysProject.php';
	require_once ROOT.'src/models/sysTodo.php';
	require_once ROOT.'src/models/sysTodosView.php';
	require_once ROOT.'src/models/sysUser.php';
	require_once ROOT.'src/models/sysUsersProjectsSw.php';
	
	require_once ROOT.'src/basicFunctions.php';

	// Emlékek SysProject kód
	define('EMLEKEK', 'MEMO');
?>