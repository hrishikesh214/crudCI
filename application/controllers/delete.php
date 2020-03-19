<?php 
	
	class Delete extends CI_Controller{
		public function index(){
			if(isset($_GET['qid'])){
				$data['qid'] = $_GET['qid'];
				$this->load->model('delete_model','dm');
				$deleteProcess = $this->dm->deleteLog($_GET['qid']);
				if($deleteProcess){
					$this->load->view('delete_view',$data);
				}
				else{
					echo "FAILURE";
				}
			}
		}
	}

 ?>