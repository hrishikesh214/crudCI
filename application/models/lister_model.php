<?php 

class Lister_model extends CI_Model{
	public function getData(){
		$q = $this->db->query("SELECT * FROM `logs`");
		$r = $q->result_array();

		return $r;
	}
}



 ?>