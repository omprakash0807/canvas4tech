<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard_view');
        $this->load->view('admin/footer');
    } 
}

?>