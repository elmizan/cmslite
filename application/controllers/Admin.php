<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function index($id=NULL)
	{
		if ($this->session->userdata('logged_in'))
		{
			$config['base_url'] = $this->config->site_url('index.php/admin/index/');
			$config['total_rows'] = $this->db->count_all('article');;
			$config['per_page'] = 15;
			$config['num_links'] = 1;

			/*styling the pagination */
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
			/*end of styling the pagination */

			$this->pagination->initialize($config);	

			$data = ['blog_entries' => $this->Article_model->get_last_fifteen_entries($config['per_page'], $id),
						'menuitems' => [['link' => 'index.php/admin', 'title' => 'Login']],
						'halaman' => $this->pagination->create_links()
					];

			$this->load->view('header-admin');
			$this->parser->parse('admin', $data);
			$this->load->view('footer');

		}
		else
		{
			redirect('welcome/login','refresh');
		}
	}
     
	 public function read($id)
	{
		if ($this->session->userdata('logged_in'))
		{
	    	$detail = $this->Article_model->get_detail($id);		

	    	$this->load->view('header-admin');
			$this->parser->parse('read-detail', $detail);
			$this->load->view('footer');
		}
		else
		{
			redirect('welcome/login','refresh');
		}
	}

    public function create()
    {
    	if ($this->session->userdata('logged_in'))
		{
			$this->form_validation->set_rules('title', 'Title', 'required');    
            $this->form_validation->set_rules('description', 'Description', 'required');    
			$this->form_validation->set_rules('content', 'Content', 'required');    
                
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
            if ($this->form_validation->run() == FALSE)
            {
				$this->load->view('header-admin');
            	$this->load->view('add-content');
				$this->load->view('footer');
            }
            else
            {
            	$data = array('post_date' => date('Y-m-d H:i:s', now()),
		            		'title' => $this->input->post('title'), 
            				'description' => $this->input->post('description'),
            				'content' => $this->input->post('content'));
	            $this->Article_model->add($data);
	            redirect('admin');
            }   
		}
		else
		{
			redirect('welcome/login','refresh');
		}
    }

	public function update()
	{
		if ($this->session->userdata('logged_in'))
		{
            $id = $this->uri->segment(3);
            $article = $this->Article_model->getById($id)->row();
            if ($id==$article->id && $id!="")
            {
				$this->form_validation->set_rules('title', 'Title', 'required');    
	            $this->form_validation->set_rules('description', 'Description', 'required');    
				$this->form_validation->set_rules('content', 'Content', 'required');    
	                
	            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
           		if ($this->form_validation->run() == FALSE)
           		{
           			$data['article'] = $this->Article_model->getById($id);		
			    	$this->load->view('header-admin');
					$this->load->view('update-content', $data);
					$this->load->view('footer');
            	}
            	else
            	{
            	$data = array('title' => $this->input->post('title'), 
            				'description' => $this->input->post('description'),
            				'content' => $this->input->post('content'));
	            	$this->Article_model->update($id,$data);
	            	redirect('admin');
	            }     
	            }else
	            {
	            	redirect('admin');
	            }
		}
		else
		{
			redirect('welcome/login','refresh');
		}
    }

	public function delete()
	{
		if ($this->session->userdata('logged_in'))
		{
			$id = $this->uri->segment(3);
			$article = $this->Article_model->getById($id)->row();
			if($id==$article->id && $id!="")
			{
				$this->Article_model->delete($id);    
				redirect('admin');
			}
		}
		else
		{
			redirect('welcome/login','refresh');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
        redirect('welcome/login','refresh');
	}

}