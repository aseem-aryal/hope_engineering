<?php
class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header.php');
		$this->load->view('includes/sidebar.php');
		$this->load->view('search.php');
		$this->load->view('includes/footer.php');
		
	}
	
	public function query(){
		$search_query=$this->input->get(); 
		$data['query']=$search_query['query'];
		$this->load->view('includes/header.php');
		$this->load->view('includes/sidebar.php');
		$this->load->view('query_result.php', $data);
		$this->load->view('includes/footer.php');
	}
	
	
	
}
?>