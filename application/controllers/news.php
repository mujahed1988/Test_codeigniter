<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('table');
	}
	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['news_item'] = $this->news_model->get_news($slug);
	
		if (empty($data['news_item']))
		{
			show_404();
		}
	
		$data['title1'] = $data['news_item']['title1'];
	
		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}
		
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title1'] = 'Create a news item';
	
		$this->form_validation->set_rules('title1', 'Title', 'trim|required|xss_clean|alpha');
		$this->form_validation->set_rules('text', 'Text', 'trim|required|xss_clean|alpha');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');
	
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}
	public function edit($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title1'] = 'update a news item';
	
		$this->form_validation->set_rules('title1', 'Title', 'trim|required');
		$this->form_validation->set_rules('text', 'Text', 'trim|required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('news/edit');
			$this->load->view('templates/footer');
	
		}
		else
		{
			$this->news_model->edit_news($id);
			$this->load->view('templates/header');
			$this->load->view('news/success');
			$this->load->view('templates/footer');
		}
	}
	public function delete($id)
	{
		$this->load->helper(array('form', 'url'));

		if (!(isset($_POST['ms'])))
		{
			$this->load->view('templates/header');
			$this->load->view('news/delete');
			$this->load->view('templates/footer');
		}else if( $_POST['ms']=="0"){
		
			 header('location:../');
			
			} else if(isset($_POST['ms'])and $_POST['ms']=="1")
		{
		//echo $_POST['ms'];
			$this->news_model->delete_news($id);
			$this->load->view('templates/header');
			$this->load->view('news/success');
			$this->load->view('templates/footer');
		}
	}
}