<?php
 /**
  * 
  */
 class Register extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
		$this->load->model("register_model");
		$this->load->database();
	} 	
 	public function index()
 	{
		 $this->load->view('common/header');
		 
 		$this->form_validation->set_rules("uname","Username","trim|required|min_length[4]");
 		$this->form_validation->set_rules("email","Email","trim|required|min_length[4]|valid_email|is_unique[users.email]");
 		$this->form_validation->set_rules("pwd","password","trim|required|min_length[4]|max_length[16]");
 		$this->form_validation->set_rules("cpwd","confirm Password","trim|required|matches[pwd]");
 		$this->form_validation->set_rules("mobile","Mobile","trim|required|numeric|exact_length[10]|is_unique[users.mobile]");
 		$this->form_validation->set_rules("gender","Gender","trim|required");
 		$this->form_validation->set_rules("terms","Terms and condition","trim|required");
 	if ($this->form_validation->run()==true) {
 			$uname = html_escape($this->security->xss_clean($this->input->post("uname")));
			$email = html_escape($this->security->xss_clean($this->input->post("email")));
			$pwd = html_escape($this->security->xss_clean($this->input->post("pwd")));
			$pass = password_hash($pwd, PASSWORD_DEFAULT);
			$mobile = html_escape($this->security->xss_clean($this->input->post("mobile")));
			$gender = html_escape($this->security->xss_clean($this->input->post("gender")));
			$terms = html_escape($this->security->xss_clean($this->input->post("terms")));
			$token = md5(str_shuffle($uname.$email.$mobile.time()));
			$ip = $this->input->server("REMOTE_ADDR");

 		$status = $this->register_model->insertData($uname,$email,$pass,$mobile,$gender,$terms,$token,$ip);
 		if ($status==true) {
 			
 			$config=array(
 				"protocol" => "smtp",
				"smtp_host" => "ssl://smtp.gmail.com",
				"smtp_timeout" => 30,
				"smtp_port" => 465,
				"smtp_user" => 'ommbest@gmail.com',
				"smtp_pass" => 'mymomisbest@0807',
				"charset" => 'utf-8',
				"mailtype" => 'html',
				"newline" => '\r\n',
				"wordwrap" => true,
 			);
 	$this->email->initialize($config);

 	$this->email->set_newline("\r\n");
	$this->email->set_crlf("\r\n");

 	$this->email->from('ommbest@gmail.com');
 	$this->email->to($email,$uname);
 	$this->email->cc('ommbest@gmail.com');
 	$this->email->subject('Activation link');
 	$message =  "Hi $uname,<br><br>Thanks for creating an account with us.Please click the below link to activate your account<br><br>
				<a href='".base_url()."Register/activate/$token' target='_blank'>Activate Now</a><br><br>Thanks";
 
 	$this->email->message($message);
 	if ($this->email->send()) {
 		
 		$this->session->set_tempdata("success","Account created successfully. Please check your mail to activate your account",2);
 		redirect(base_url('auth/login'));
 	}else{
 		$this->session->set_tempdata("error","Account created successfully. Unable to send email activation link, Contact Admin",2);
 		redirect(current_url());
 	}
 	}
 	}else{
		 $this->load->view("register_view");	
	 }
	 $this->load->view('common/footer');

 	}
 	public function activate($token=null)
	{
		$data=[];
		if(!empty($token))
		{
			$status = $this->register_model->verifyToken($token);
			if($status == true)
			{
				$ustatus = $this->register_model->updateStatus($token);
				if($ustatus==true)
				{
					$data['message']="Account Activated Successfully. Please Login Now";
				}
				else
				{
					$data['message']="Your account is already activated";
				}
			}
			else
			{
				$data['message'] = "Sorry! Unable find your account";
			}
		}
		else
		{
			$data['message'] = "Sorry! We are unable to process your request";
		}
		$this->load->view("activate_view",$data);	
	}

 }
?>