<?php 

class Insert_model extends CI_Model{
	public function index($f,$l){
		$data=array(
			'id' => NULL,
			'firstname'=>$f,
			'lastname' =>$l,
			'time' => NULL
		);
		$this->db->insert('logs',$data);
		header('location: '.base_url().'Lister');
	}
}


 ?>