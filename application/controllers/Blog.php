<?php
class Blog extends CI_Controller{

	public function index(){

		$this->load->view("common/header");
		$this->load->view("blog_view");	
		$this->load->view("common/footer");
	}
}
?>