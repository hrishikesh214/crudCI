<?php 

class Update extends CI_Controller{
	public function Show_form(){
		if ($_GET['qid'] !== NULL ) {
			$qid = $_GET['qid'];
			$this->load->model('update_model','um');
			$data['oD'] = $this->um->getDetails($qid);
			$this->load->view('update_view',$data);
		}
	}
	public function Change(){
		$this->load->model('update_model','um');
		$qid = $this->input->get('qid');
		$fname = $this->input->post('fname');
		$lname= $this->input->post('lname');

		$progress = $this->um->updateLog($qid, $fname,$lname);
		
		if($progress){
			$data['oD'] = $this->um->getDetails($qid);
			$data['msg'] = "One Row Changed!";
			$this->load->view('update_view',$data);
		}
	}
}

 ?>