<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	* 
	*/
	class m_user extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function addUser()
		{
			$id = date('smHYdi');
			$exp = null;
			if($this->input->post('member_type') == "gold"){
				$exp = date('Y-m-d',strtotime('+1 Months'));
			}
			$data = array(
				'id_user'	=> $id,
				'email'		=> $this->input->post('email'),
				'name'		=> $this->input->post('name'),
				'username'	=> $this->input->post('username'),
				'password'	=> $this->input->post('password'),
				'type'		=> $this->input->post('type'),
				'expired'	=> $exp,
				'phone'		=> $this->input->post('phone'),
				'updated'	=> 0);
			$this->db->insert('t_user', $data);
		}
		function delUser($id)
		{
			$this->db->where('id_user', $id)->delete('t_user');
		}
		function getUser()
		{
			return $this->db->get('t_user')->result();
		}
		function getUserById($id)
		{
			return $this->db->where('id_user', $id)->get('t_user')->result();
		}
		function updateUser($id)
		{
			$exp = null;
			if($this->input->post('member_type') == "gold"){
				$exp = date('Y-m-d',strtotime('+1 Months'));
			}
			$data = array(
				'email'		=> $this->input->post('email'),
				'name'		=> $this->input->post('name'),
				'username'	=> $this->input->post('username'),
				'password'	=> $this->input->post('password'),
				'type'		=> $this->input->post('member_type'),
				'expired'	=> $exp,
				'phone'		=> $this->input->post('phone'),
				'updated'	=> 0);
			return $this->db->where('id_user', $id)->update('t_user', $data);
		}
		function cekUser($username){
			$count = $this->db->where("username",$username)->from("t_user")->count_all_results();
			if($count > 0){
				return false;
			}else{
				return true;
			}
		}
		function cekEmail($email){
			$count = $this->db->where("email",$email)->from("t_user")->count_all_results();
			if($count > 0){
				return false;
			}else{
				return true;
			}
		}
		
	}