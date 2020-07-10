<?php 
class Test extends CI_Controller{

    public function allUser()
	{
        $this->db->select('*');
		$this->db->from('users');
        $this->db->where('username','omprakash');
        $results = $this->db->get();
		if ($results->num_rows()>=1)
		{	
           print_r($results->result_array());
            
		}
		else
		{
			return false;
		}
	}
}



?>