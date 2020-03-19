<?php 


class Update_model extends CI_Model{

	public function getDetails($qid){
		$result = $this->db->query("SELECT * From `logs` WHERE id = '".$qid."'" );
		return $result->result_array();
	}

	public function updateLog($qid,$f,$l){
		$this->db->where('id',$qid);
		$data = array('firstname'=>$f,'lastname'=>$l);
		$progress = $this->db->update('logs',$data);
		if($progress){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}


 ?>