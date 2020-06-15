<?php

class Home_Model extends CI_Model
{
	
	public function getlLoggedInUserData($token)
	{
		$this->db->where('token',$token);
		$results = $this->db->get('users');
		if ($results->num_rows()==1)
		{
			
			return $results->row();
		}
		else
		{
			return false;
		}
	}
	public function UpdateProfile($uname,$email,$mobile,$gender,$token)
	{
		$data = array(
		"username"=>$uname,
		"email"=>$email,
		"mobile"=>$mobile,
		"gender"=>$gender
	);
	$this->db->where('token', $token);
	$result = $this->db->update('users', $data);
	if($this->db->affected_rows()==1)
	{
		return true;
	}else{
		return false;
	}

	}
	public function checkEmail($token){
		$this -> db -> where('token !=', $token);
		$result = $this->db->get('users');
		if($this->db->affected_rows()==1)
		{
			return $result->row();
		}else{
			return false;
		}
	}
	public function changePassword($token,$newpass)
	{
		$this->db->where('token',$token);
		$result = $this->db->update('users',array('password' => $newpass));
		if($this->db->affected_rows()==1)
		{
			return true;
		}else{
			return false;
		}
	}
	public function updateAvatar($token,$filename)
	{
		$this->db->where('token',$token);
		$this->db->update('users',array('profile'=>$filename));
		if($this->db->affected_rows()==1)
		{
			return true;
		}else{
			return false;
		}
	}
}
?>