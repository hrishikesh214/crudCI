<?php 

class Insert extends CI_Controller{
	public function index(){
		$this->load->view('insert_view');
	}

	public function show(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$this->load->model('insert_model','im');
		$this->im->index($fname,$lname);
	}
}

 ?>