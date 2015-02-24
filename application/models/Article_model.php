<?php

class Article_model extends CI_Model
{
	
	function __construct()
	{
		
	}

	function get_last_fifteen_entries($num, $offset)
	{
		$this->db->select('*');
	    $this->db->order_by("post_date","desc");
		$query = $this->db->get('article', $num, $offset);
		return $query->result();
	}

	function get_detail($id)
	{
		$query = $this->db->get_where('article', array('id' => $id));
        return $query->row_array();
	}
}