<?php
class register_model extends CI_Model{

	public function insertData($uname,$email,$pass,$mobile,$gender,$terms,$token,$ip){
		$this->db->query("insert into users(username,email,password,mobile,gender,terms,token,ip) values('$uname','$email','$pass','$mobile','$gender','$terms','$token','$ip')");
		if ($this->db->affected_rows()>0) {
			return true;
		}else{
			return false;
		}
	}

	public function verifyToken($token){
		$query = $this->db->query("select token from users where token='$token'");
		if ($query->num_rows()===1) {
			return true;
		}else{
			return false;
		}

	}
	public function updateStatus($token)
	{
		$query = $this->db->query("update users set status='active' where token='$token'");
		if($query = $this->db->affected_rows()==1)
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