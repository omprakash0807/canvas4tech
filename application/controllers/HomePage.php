<?php
class HomePage extends CI_Controller
{

	public function index(){
		$this->load->view('common/header');
		$this->load->view('homepage_view');
		$this->load->view('common/footer');
		}
	public function about(){
		$this->load->view('common/header');
		$this->load->view('about_view');
		$this->load->view('common/footer');
	}
	public function team(){
		$this->load->view('common/header');
		$this->load->view('team_view');
		$this->load->view('common/footer');
	}
	public function services(){
		$this->load->view('common/header');
		$this->load->view('services_view');
		$this->load->view('common/footer');		
	}
	public function portfolio(){
		$this->load->view('common/header');
		$this->load->view('portfolio_view');
		$this->load->view('common/footer');			
	}
	public function pricing(){
		$this->load->view('common/header');
		$this->load->view('pricing_view');
		$this->load->view('common/footer');		
	}
	public function contact(){
		$this->load->view('common/header');
		$this->load->view('contact_view');
		$this->load->view('common/footer');
	}

}
?>