<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }
    public function index()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('pwd','password','trim|required|min_length[4]');
        if($this->form_validation->run() == true)
        {

        }
        $this->load->view('admin/admin_login_view');
    }
}

?>