<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('news');
			
			return $query->result_array();
		}
	
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
	public function set_news()
	{
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('title1'), 'dash', TRUE);
	
		$data = array(
				'title1' => $this->input->post('title1'),
				'slug' => $slug,
				'text' => $this->input->post('text')
		);
	
		return $this->db->insert('news', $data);
	}
	public function edit_news($id)
	{
		
		$this->load->helper('url'); // this function to get url from browser only
		$slug = url_title($this->input->post('title1'), 'dash', TRUE); // this function put dash between title words to use it in url
			$data = array(
				'title1' => $this->input->post('title1'),
					'slug' => $slug,
				'text' => $this->input->post('text')
					
		);
		/*	$this->db->get_where('news', array('id' =>$id));  //this first way to update
			return $this->db->update('news', $data); */
			return $this->db->update('news', $data,array('id' =>$id)); //this second way to update
	}
}

