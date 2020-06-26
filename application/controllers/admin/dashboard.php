<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata("adminlogintrue"))
        {
            redirect(base_url('admin/login'));
        }
    }
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard_view');
        $this->load->view('admin/footer');
    } 
    public function logout(){
		$this->session->unset_userdata("adminlogintrue");
        redirect(base_url('admin/login'));
    }
}

?>