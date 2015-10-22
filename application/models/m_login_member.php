<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	* 
	*/
	class m_login_member extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function cek_login()
		{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');



			$this->db->where('username',$user);
			$this->db->where('password',$pass);
			$query = $this->db->get('t_user')->result();
			//return $query->row();
			
			if($query != 0){
				return $query;
				
			} else {
				return false;
			}
			
		}
		
	}