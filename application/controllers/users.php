<?php
class users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->library('table');
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['username'] = 'Create an Account';
$this->form_validation->set_rules('user_name', 'user_name', 'trim|required|min_length[5]|max_length[12]|callback_username_check|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[users.email]|valid_email');
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('users/create');
			$this->load->view('templates/footer');
	
		}
			else
		{
			$this->users_model->set_users();
			$this->load->view('users/login');
		}
	}

	public function username_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('username_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	public function login()
	{
	  $this->load->helper('form');
	  $this->load->library('form_validation');
	  $data['username'] = 'login to access data';
	  $this->form_validation->set_rules('user_name', 'user_name', 'trim|required|xss_clean');
	  $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
	  $check=$this->users_model->chk_login($this->input->post('user_name'),$this->input->post('password'));
	  if (($this->form_validation->run() === FALSE )or($check ==0))
		{
		
			$this->load->view('templates/header', $data);
			$this->load->view('users/login');
			$this->load->view('templates/footer');
			
		}
		
			else
		header('Refresh: 2; URL=../news/');
			
		
		}

}