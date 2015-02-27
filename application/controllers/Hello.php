<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hello extends CI_Controller
{
	public function index()
	{
		$myvar = $this->input->post('myvar');
		$this->load->view('myview', array('myvar' => $myvar));
	}
}