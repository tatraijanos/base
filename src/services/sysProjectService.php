<?php
require_once dirname(dirname(__FILE__)).'/allandok.php';

interface SysProjectService {
	public function getProjectByCode($code) : SysProject;
	
	public function isJogosult($usrId, $projectId) : bool;
}
?>