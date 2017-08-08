<?php
	require_once dirname(dirname(__FILE__)).'/allandok.php';

	class MasterDataDao {
		public function getMdListByGroupName($csoportKod) {
			$mdGroupEntity = MdGroup::all(array('conditions' => array('csoport_kod = ? AND deleted_10 = ?', $csoportKod, false)));
			
			if($mdGroupEntity != null) {
				$param = array('md_group_id = ? AND deleted_10 = ?', $mdGroupEntity[0] -> getId(), false);
				$list = MasterData::all(array('conditions' => $param));
				
				return $list;
			} else {
				return null;
			}
			
		}
	}
?>