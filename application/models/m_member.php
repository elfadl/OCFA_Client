<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class m_member extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function cek_member()
	{
		$query = $this->db->where('');
	}
	
	function getUserById($id){
		return $this->db->where('id_user',$id)->get('t_user')->result();
	}
	
	function updateProfil($pass){
		$id = $this->input->post('id');
		$update = $this->db->where("id_user",$id)->get("t_user")->row()->updated;
		if($pass=="pass"){
			$data = array(
				"name"		=> $this->input->post('name'),
				"username"	=> $this->input->post('username'),
				"password"	=> $this->input->post('password'),
				"email"		=> $this->input->post('email'),
				"phone"		=> $this->input->post('phone'),
				"updated"	=> $update+1
			);
		}else{
			$data = array(
				"name"		=> $this->input->post('name'),
				"username"	=> $this->input->post('username'),
				"email"		=> $this->input->post('email'),
				"phone"		=> $this->input->post('phone'),
				"updated"	=> $update+1
			);
		}
		return $this->db->where('id_user', $id)->update('t_user', $data);
	}
	
	function loginStatus(){
		if($this->session->userdata('logged_in') != FALSE && $this->session->userdata('level') == 'member'){
			return true;
		}else{
			return false;
		}
	}
	
	function upgradeToGold($id){
		$data = array(
			"up_req"	=> 1
		);
		return $this->db->where('id_user', $id)->update('t_user', $data);
	}
	
	function reject($id){
		$data = array(
			"up_req"	=> 2
		);
		return $this->db->where('id_user', $id)->update('t_user', $data);
	}
	function unreject($id){
		$data = array(
			"up_req"	=> 1
		);
		return $this->db->where('id_user', $id)->update('t_user', $data);
	}

}