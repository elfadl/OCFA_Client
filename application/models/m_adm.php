<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	* 
	*/
	class m_adm extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function addAdm()
		{
			$id = date('smHYdi');
			$data = array(
				'id_admin'	=> $id,
				'username'	=> $this->input->post('username'),
				'password'	=> $this->input->post('password'));
			$this->db->insert('t_admin', $data);
		}
		function delAdm($id)
		{
			$this->db->where('id_admin', $id)->delete('t_admin');
		}
		function getAdm()
		{
			return $this->db->get('t_admin')->result();
		}
		function getAdmById($id)
		{
			return $this->db->where('id_admin', $id)->get('t_admin')->result();
		}
		function updateAdm($id)
		{
			$data = array(
				'username'	=> $this->input->post('username'),
				'password'	=> $this->input->post('password'));
			return $this->db->where('id_admin', $id)->update('t_admin', $data);
		}
		
		function upgradeToGold($id){
			$exp = $this->input->post("exp");
			$expTime = date("Y-m-d",strtotime($exp));
			//echo $expTime.date("Y-m-d");
			$data = array(
				"expired"	=> $expTime,
				"type"		=> "gold",
				"up_req"	=> 0
			);
			return $this->db->where('id_user', $id)->update('t_user', $data);
		}
		
		function settingsWeb(){
			return $this->db->get("t_settings")->result();
		}
		
		function saveSettingsWeb($name,$value){
			return $this->db->where("name",$name)->update("t_settings", array("value" => $value));
		}
		
		function loginStatus(){
		if($this->session->userdata('logged_in') != FALSE && $this->session->userdata('level') == 'admin'){
			return true;
		}else{
			return false;
		}
	}
		
	}