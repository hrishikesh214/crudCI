<?php 

class Lister extends CI_Controller{
	public function index(){
		$this->load->model('lister_model','lm');
		$data['results'] = $this->lm->getData();

		$this->load->view('lister_view.php',$data);
	}
} 


 ?>