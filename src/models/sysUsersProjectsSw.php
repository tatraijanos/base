<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';

	class SysUsersProjectsSw extends BasicModel {
		public static $table_name = 'sys_users_projects_sw';
		public static $primary_key = 'id';
		
		
		public function getSysUserId() {
			return $this -> sys_user_id;
		}
		public function setSysUserId($sysUserId) {
			$this -> sys_user_id = $sysUserId;
		}
		
		public function getSysProjectId() {
			return $this -> sys_project_id;
		}
		public function setSysProjectId($sysProjectId) {
			$this -> sys_project_id = $sysProjectId;
		}
		
		public function isAdmin10() {
			return $this -> admin_10;
		}
		public function setAdmin10($admin10) {
			$this -> admin_10 = $admin10;
		}
		
	}
	
	class SysUsersProjectsSwDao {
		public static function isJogosult($userId, $projectId) : bool {
			
			$entity = SysUsersProjectsSw::find('first', 
					array('conditions' => 
							array('sys_user_id = ? AND sys_project_id = ?', $userId, $projectId)
					)
			);
			
			if($entity != null && !$entity -> isDeleted10()) {
				return true;
			}
			
			return false;
		}
	}
?>