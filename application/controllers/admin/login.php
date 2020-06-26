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
        $this->form_validation->set_rules('password','password','trim|required|min_length[4]');
        if($this->form_validation->run() == true)
        {
            $email = html_escape($this->security->xss_clean($this->input->post("email")));
            $password = html_escape($this->security->xss_clean($this->input->post("password")));
            $data = $this->Auth_model->verifyEmail($email);
            if(!empty($data))
            {
                if($data->roll_id == 'admin')
                    {
               if(password_verify($password,$data->password))
               {
                if($data->status == 'active'){
                    
                        $this->session->set_userdata("adminlogintrue",$data->id);
                        redirect(base_url('admin/dashboard'));
                }else{
                    $this->session->set_tempdata('error','please activate your account',2);
                }
               }else{
                   $this->session->set_tempdata('error','Wrong password entered',2);
               } 
            }else{
                $this->session->set_tempdata('error','Only admin can login here',2); 
            }

            }else{
                $this->session->set_tempdata('error','Email does not exist',2);
            }

        }
        $this->load->view('admin/admin_login_view');
    }
}

?>