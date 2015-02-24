<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$config['base_url'] = $this->config->site_url('index.php/welcome/index/');
		$config['total_rows'] = $this->db->count_all('article');;
		$config['per_page'] = 7;

		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		$data = [
			'blog_entries' => $this->Article_model->get_last_fifteen_entries($config['per_page'], $this->uri->segment(3)),
			'blog_title' => 'CMS Lite',
			'menuitems' => [['link' => '', 'title' => 'Home'],
							['link' => 'index.php/welcome/login', 'title' => 'Login'],
							],
				];

		$this->pagination->initialize($config);
		$this->parser->parse('header', $data);
		$this->parser->parse('welcome_message', $data);
		$this->load->view('footer', $data);
	}

	 public function detail($id)
	{
    	$detail = $this->Article_model->get_detail($id);		
		$data = [
			'blog_title' => 'CMS Lite',
			'menuitems' => [['link' => '', 'title' => 'Home'],
							['link' => 'index.php/welcome/login', 'title' => 'Login'],
							],
				];

    	$this->parser->parse('header', $data);
		$this->parser->parse('detail', $detail);
		$this->load->view('footer');
	}

	public function login()
	{
		$data = [
			'blog_title' => 'CMS Lite | Login Form',
			'menuitems' => [['link' => '', 'title' => 'Home'],
							['link' => 'index.php/welcome/login', 'title' => 'Login'],
							],
				];

		$this->parser->parse('header', $data);
		$this->load->view('login');
		$this->load->view('footer');

	}
}
