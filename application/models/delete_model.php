<?php 

class Delete_model extends CI_Model{
	public function deleteLog($id){
		$this->db->where('id',$id);
		$delete = $this->db->delete('logs');
		if($delete){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}


 ?>