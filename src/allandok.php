<?php
	define("ROOT", dirname(dirname(__FILE__)).'/');

	require_once ROOT.'library/php-activerecord/ActiveRecord.php';
	
	
	require_once ROOT.'src/dao/masterDataDao.php';
	require_once ROOT.'src/dao/sysUserDao.php';
	
	require_once ROOT.'src/exceptions/loginException.php';
	
	require_once ROOT.'src/models/basicModel.php';
	require_once ROOT.'src/models/masterData.php';
	require_once ROOT.'src/models/mdGroup.php';
	require_once ROOT.'src/models/sysProject.php';
	require_once ROOT.'src/models/sysTodo.php';
	require_once ROOT.'src/models/sysTodosView.php';
	require_once ROOT.'src/models/sysUser.php';
	
	require_once ROOT.'src/services/impl/sysUserServiceImpl.php';
	
	require_once ROOT.'src/services/sysUserService.php';
	
	require_once ROOT.'src/basicFunctions.php';

	class Allandok {
		
	}
?>