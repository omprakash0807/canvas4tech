<?php
class register_model extends CI_Model{

	public function insertData($uname,$email,$pass,$mobile,$gender,$terms,$token,$ip){

		$data = array(
			"username"=>$uname,
			"email"=>$email,
			"password"=>$pass,
			"mobile"=>$mobile,
			"gender"=>$gender,
			"terms"=>$terms,
			"token"=>$token,
			"ip"=>$ip
		);
		$this->db->insert('users',$data);
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}


	public function verifyToken($token){
		$this->db->where('token',$token);
		$results = $this->db->get('users');;
		
		if ($results->num_rows()===1) {
			return true;
		}else{
			return false;
		}

	}
	public function updateStatus($token)
	{
		$this->db->where('token',$token);
		$data = $this->db->update("users",array("status"=>"active"));
		if($data = $this->db->affected_rows()==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}

?>