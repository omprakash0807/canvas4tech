<?php

class Auth_Model extends CI_Model
{
	public function verifyEmail($email)
	{
		$this->db->select('username,password,status,token');
		$this->db->from('users');
		$this->db->where('email',$email);
		$result = $this->db->get();
		// $result = $this->db->query("select username,password,status,token from users where email='$email'");
		if ($result->num_rows()==1) 
		{
			return $result->row();
		}
		else
		{
			return false;
		}
	}
	public function varifyEmail($email){

		$this->db->select('username,password,status,token');
		$this->db->from('users');
		$this->db->where('email',$email);
		$result = $this->db->get();

		// $result = $this->db->query("select username,password,status,token from users where email='$email'");
		if ($result->num_rows()==1) {
			return $result->row();
		}else{
			echo "not found";
		}
	}
	public function veryfyToken($token){


		$this->db->select('username,password,status,token');
		$this->db->from('users');
		$this->db->where('token',$token);
		$result = $this->db->get();

		// $result = $this->db->query("select username,password,token from users where token='$token'");

		if ($result->num_rows()==1) {
			return $result->row();
		}else{
			return false;
		}
	}
	public function resetPassword($pwd,$token){
		// $this->db->query("update users set password ='$pwd' where token = '$token'");
		$data = array("password"=>$pwd);

		$this->db->update('users',$data);
		$this->db->where('token',$token);
		if($this->db->affected_rows()>0)
		{
			return true;
		}else{
			return false;
		}
	}
}

?>