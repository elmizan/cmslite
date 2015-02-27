<?php

class User_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	function login($username, $password)
	{
		//$query = $this->db->get_where('user', ['username' => $username, 'password' => md5($password)]);
        //return $query->row();
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->limit(1);

		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			$result = $query->result();
			return $result;
	   }
	   else
	   {
	   		return false;
	   }
	}
}