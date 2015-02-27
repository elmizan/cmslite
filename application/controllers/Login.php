<?php

class Login extends CI_Controller{

	public function index()
	{
		if(!$this->session->userdata('logged_in'))
		 {
		 	$data = ['menuitems' => [['link' => 'index.php/welcome/login', 'title' => 'Login'],
									],
					];
			$this->parser->parse('header', $data);
			$this->load->view('login');
			$this->load->view('footer');
		 }
		 else
		 {
			redirect('admin', 'refresh');		 	
		 }

	}

	public  function validate()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_username');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->index();
		}
		else
		{
			redirect('admin', 'refresh');
		}
	}

 	public function check_username($password)
 	{
 		$username = $this->input->post('username');
	 	$result = $this->User_model->login($username, $password);
	 	if($result)
	 	{
	 		foreach($result as $data)
 			{
				$this->session->set_userdata('username',$data->username);
				$this->session->set_userdata('logged_in',true);
			}
			return true;
 		}
 		else
 		{
 			$this->form_validation->set_message('check_username','<b class="text-danger">Wrong password or username</b>');
 			return false;
 		}
 	}
}