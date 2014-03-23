<?php
class users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_users($user_id = FALSE)
	{
		if ($user_id  === FALSE)
		{
			$query = $this->db->get('users');
			
			return $query->result_array();
		}
	
		$query = $this->db->get_where('users', array('user_id' => $user_id));
		return $query->row_array();
	}
	public function set_users()
	{
		$this->load->helper('url');
	
		$data = array(
				'user_name' => $this->input->post('user_name'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email')
		);
	
		return $this->db->insert('users', $data);
	}
	public function edit_users($user_id)
	{
		
		$this->load->helper('url'); 
			$data = array('password' => $this->input->post('password'));
		
			return $this->db->update('users', $data,array('user_id' =>$user_id)); //this second way to update
	}
	public function chk_login($user_name,$password)
	{  
	$this->load->helper('url'); 
	$usname=$user_name;
	$pass=md5($password);
	   $query = $this->db->get_where('users', array('user_name' => $usname,'password' => $pass));
	   if ($query->num_rows() > 0)
	   {
   $row = $query->row_array(); 
   if($row['user_name']==$usname and $row['password']==$pass)
		return 1;
		else if($row['user_name']!=$usname or $row['password']!=$pass)
		return 0;    
	}
	 }
}