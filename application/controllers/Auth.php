<?php
class Auth extends CI_Controller
{
	
	public function login()
	{
		$this->load->view('common/header');
		$this->form_validation->set_rules("email","Username","trim|required|valid_email",array("required"=>"Email is required",
			"valid_email"=>"Please enter valid email"
			));
		$this->form_validation->set_rules("password","Password","trim|required");
		if($this->form_validation->run()==true){
			$email = html_escape($this->security->xss_clean($this->input->post("email")));
			$password = html_escape($this->security->xss_clean($this->input->post("password")));
			// $this->load->model('Auth_Model');
			$data = $this->Auth_model->verifyEmail($email);
			if (!empty($data)) {
				if (password_verify($password, $data->password)) {
					if ($data->status == 'active') {
					$this->session->set_userdata(
						array("logintrue" => $data->token,
							  "username" => $data->username
							));
					redirect(base_url());
				
				}else{
					$this->session->set_tempdata('error','Account not activated',2);
					redirect(current_url());
				}
			}
				else{
					$this->session->set_tempdata('error','Wrong password entered',2);
					redirect(current_url());
				}
			}else{
				$this->session->set_tempdata('error','This email does not exists',2);
					redirect(current_url());
			}
		}
		else
		{
		$this->load->view('login_view');	
		}
		$this->load->view('common/footer');
	}

	public function forgotpassword(){
		$this->load->view('common/header');
		$this->form_validation->set_rules("email","Email","trim|required|valid_email",array(
			'required' => "Email is Required",
			'valid_email' => "Please Enter Valid Email"
		));
		if ($this->form_validation->run()) {
			$email=html_escape($this->security->xss_clean($this->input->post('email')));
			$data = $this->Auth_model->varifyEmail($email);
			if (!empty($data)) {
				$subject = "Password reset Link";
				$message = "Hi ".ucwords($data->username).",<br><br> Please click in the link bellow to change Password <br> <br> <a href='".base_url()."auth/resetPassword/".$data->token."'>Reset Password</a><br><br> Thanks,<br>canvas4tech";
					// print_r($message);die;
					$config = array(
					"protocol" => "smtp",
					"smtp_host" => "ssl://smtp.gmail.com",
					"smtp_timeout" => 30,
					"smtp_port" => 465,
					"smtp_user" => 'ommbest@gmail.com',
					"smtp_pass" => 'mymomisbest@0807',
					"charset" => 'utf-8',
					"mailtype" => 'html',
					"newline" => '\r\n',
				);
				$this->email->initialize($config);
				
				
				$this->email->set_newline("\r\n");
				$this->email->set_crlf("\r\n");
				
				$this->email->to($email);
				$this->email->from('your@company.com', 'My Company');
				$this->email->subject($subject);

				$this->email->message($message);
				
				if($this->email->send())
				{
					
					$this->session->set_tempdata("success","Reset password link has been sent to your email. Please check",2);
					redirect(current_url());
				}
				else
				{
					$this->session->set_tempdata("error","Sorry! Unable to sent reset password link,Contact Admin",2);
					redirect(current_url());
				}
			}
			else{
				$this->session->set_tempdata("error","Sorry! Unable to find your email account",2);
				redirect(current_url());
			}		
		}
		else
		{
		$this->load->view('forgot_password_view');
	}
	$this->load->view('common/footer');
	}
	public function resetPassword($token){
		$this->load->view('common/header');
		$this->form_validation->set_rules('pwd','Password','required|min_length[4]');
		$this->form_validation->set_rules('cpwd','Confirm password','required|min_length[4]|matches[pwd]');
		if ($this->form_validation->run()==true) {

			$pwd = html_escape($this->security->xss_clean($this->input->post('pwd')));
			$pwd = password_hash($pwd, PASSWORD_DEFAULT);
			$data = $this->Auth_model->veryfyToken($token);
			// print_r($data);die;
			if (!empty($data)) {
				$result = $this->Auth_model->resetPassword($pwd,$token);
				if($result == true)
				{
					$this->session->set_tempdata('success','Password updated successfully,Please Login',2);
					redirect(base_url('auth/login'));
				}else{
					$this->session->set_tempdata('error','"Sorry! Unable to update the password. Try again"',2);
					redirect(current_url());
					
				}
			}
			
		}else{
			$this->load->view('reset_password_view');
			$this->load->view('common/footer');
		}
		
	}
	
}

?>