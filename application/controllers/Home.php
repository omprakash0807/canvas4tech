<?php

class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_Model');
		if(empty($this->session->userdata('logintrue')))
		{
			redirect(base_url('auth/login'));	
		}
	}
	
	public function index()
	{
	// if($this->session->userdata('logintrue'))
	// {
	$this->load->view('common/header');	
	$token = $this->session->userdata('logintrue');
	$result['data'] = $this->Home_Model->getlLoggedInUserData($token);
	$this->load->view('home_view',$result);
	$this->load->view('common/footer');		
	// }else{
	// 		redirect(base_url('auth/login'));
	// }
}
	public function logout(){
		$this->session->unset_userdata("logintrue");
		redirect(base_url());
	}
	public function editprofile(){
		$token = $this->session->userdata('logintrue');
		$status['data']=$this->Home_Model->getlLoggedInUserData($token);
		$this->load->view('common/header',$status);
		$this->form_validation->set_rules("uname","Username","trim|required|min_length[4]");
		$this->form_validation->set_rules("email","Email","trim|required|min_length[4]|valid_email");
		$this->form_validation->set_rules("mobile","Mobile","trim|required|numeric|exact_length[10]");
		$this->form_validation->set_rules("gender","Gender","trim|required");
	if ($this->form_validation->run()==true) {

		   $uname = html_escape($this->security->xss_clean($this->input->post("uname")));
		   $email = html_escape($this->security->xss_clean($this->input->post("email")));
		   $mobile = html_escape($this->security->xss_clean($this->input->post("mobile")));
		   $gender = html_escape($this->security->xss_clean($this->input->post("gender")));
		   $data= $this->Home_Model->checkEmail($token);
			if($data->email != $email)
			{
		  $status = $this->Home_Model->updateProfile($uname,$email,$mobile,$gender,$token);
		  if($status == true)
		  {
			$this->session->set_userdata("username",$uname);
			$this->session->set_tempdata("success","Profle updated successfully",2);
			 redirect(base_url('home'));
		  }else{
			$this->session->set_tempdata("error"," Sorry! Profle Not updated",2);
			redirect(current_url());
		  }
 }else{
	$this->session->set_tempdata("error"," Sorry! This email is already registered by someone",2);
	redirect(current_url());
 }
}
	else{
		$this->load->view('edit_profile_view');
		$this->load->view('common/footer');
	}
}
public function changePassword()
	{
		$token = $this->session->userdata('logintrue');
		$this->load->view('common/header');
		$this->form_validation->set_rules('oldpass','Old password','required');
		$this->form_validation->set_rules('newpass','New password','required');
		$this->form_validation->set_rules('confpass','Confirm password','required|min_length[4]|matches[newpass]');
		if($this->form_validation->run()==true)
		{
			$oldpass = html_escape($this->security->xss_clean($this->input->post('oldpass')));
			$password = html_escape($this->security->xss_clean($this->input->post('newpass')));
			$newpass = password_hash($password,PASSWORD_DEFAULT);
			$data = $this->Home_Model->getlLoggedInUserData($token);
		    if(!empty($data))
			{
			if(password_verify($oldpass, $data->password))
			{
				$status = $this->Home_Model->changePassword($token,$newpass);
				if($status == true){
					$this->session->set_tempdata('success','Password updated successfully',2);
					redirect(current_url());
				}

			}else{
				$this->session->set_tempdata('error','Sorry! Old password did not matched',2);
				redirect(current_url());
			}
		}else{
			$this->session->set_tempdata('error','Something went wrong please contact admin',2);
			redirect(current_url());
		}
		}else{
		$this->load->view('change_password_view');
		$this->load->view('common/footer');	
		}
	}
	public function uploadAvtar()
	{

		$this->load->view('common/header');
		$token = $this->session->userdata("logintrue");//session

		$config['upload_path'] = './assets/profile/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		// $config['max_size']     = '10000';
		// $config['max_width'] = '1024';
		// $config['max_height'] = '768';

		$this->upload->initialize($config);
		if($this->upload->do_upload("avatar"))
		{
			$fdata = $this->upload->data();
			$filename = $fdata['file_name'];
			$data = $this->Home_Model->updateAvatar($token,$filename);
			if($data == true)
			{
			 $this->session->set_tempdata('success','Profile pic successfully updated',2);
			 redirect(base_url('home'));	
			}			
		}else{
			$this->session->set_tempdata('error','Sorry! Somethig went wrong please try again',2);
		}
		$this->load->view('upload_avtar_view');
		
		$this->load->view('common/footer');
		
}
}
?>