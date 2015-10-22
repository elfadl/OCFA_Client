<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	
	function __construct() {
		parent:: __construct();
		$this->load->model('m_foodspot');
		$this->load->model('m_member');
		$this->load->model('m_category');
		$this->load->model('m_adm');
		$this->load->model('m_user');
		$this->load->library('session');
		//$this->load->helper(array('captcha','url'));
		
/* 		if ($this->session->userdata['id_admin'] != "") {
			//redirect(base_url());
		}
		else{
			//redirect(base_url());
			$this->load->view('login.php');
		} */
	}

	//Page
	function inputFs()
	{
		if($this->m_adm->loginStatus()){
			$data['cat'] = $this->db->get('t_kategori')->result(); 
			$this->load->view('input_fs.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function dataFs()
	{
		if($this->m_adm->loginStatus()){
			$data['fs'] = $this->m_foodspot->getFs();
			$this->load->view('data_resto.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function inputCat()
	{
		if($this->m_adm->loginStatus()){
			$this->load->view('input_cat.php');
		}else{
			$this->load->view('login.php');
		}
	}
	function dataCat()
	{
		if($this->m_adm->loginStatus()){
			$data['cat'] = $this->m_category->getCat();
			$this->load->view('data_cat.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function detFs()
	{
		if($this->m_adm->loginStatus()){
			$id = $this->input->post('id');
			$data['det'] = $this->m_foodspot->getFsById($id);
			$this->load->view('det_fs.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function editFs()
	{
		if($this->m_adm->loginStatus()){
			$id = $this->input->post('id');
			$data['edit'] = $this->m_foodspot->getFsById($id);
			$data['cat'] = $this->m_category->getCat();
			$this->load->view('input_fs.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function editCat()
	{
		if($this->m_adm->loginStatus()){
			$id = $this->input->post('id');
			$data['cat'] = $this->m_category->getCatById($id);
			$this->load->view('input_cat.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function gethint()
	{
		$data['q'] = $this->input->get('q');
		$this->load->view('gethint.php', $data);
	}
	function getrequest()
	{
		$data['q'] = $this->input->get('q');
		$this->load->view('getrequest.php', $data);
	}
	function getUserType()
	{
		$data['id'] = $this->input->get('id');
		$this->load->view('getTypeById.php', $data);
	}
	function inputUser()
	{
		if($this->m_adm->loginStatus()){
			$this->load->helper('captcha');
			$vals = array(
				'img_path'	=> './captcha/',
				'img_url'	=> base_url().'captcha/',
				'img_width'	=> '200',
				'img_height'=> 60,
				'border'	=> 0,
				'expiration'=> 7200
			);
			$cap = create_captcha($vals);
			$data['image'] = $cap['image'];
			$this->session->set_userdata('mycaptcha', $cap['word']);
			
			$this->load->view('input_adm.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function dataUser()
	{
		if($this->m_adm->loginStatus()){
			$data['adm'] = $this->m_adm->getAdm();
			$data['user'] = $this->m_user->getUser();
			$this->load->view('data_adm.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function editAdmin()
	{
		if($this->m_adm->loginStatus()){
			$id = $this->input->post('id');
			$data['adm'] = $this->m_adm->getAdmById($id);
			$this->load->view('input_adm.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function editUser()
	{
		if($this->m_adm->loginStatus()){
			$this->load->helper('captcha');
			$vals = array(
				'img_path'	=> './captcha/',
				'img_url'	=> base_url().'captcha/',
				'img_width'	=> '200',
				'img_height'=> 60,
				'border'	=> 0,
				'expiration'=> 7200
			);
			$cap = create_captcha($vals);
			$data['image'] = $cap['image'];
			$this->session->set_userdata('mycaptcha', $cap['word']);
			$id = $this->input->post('id');
			$data['users'] = $this->m_user->getUserById($id);
			$this->load->view('input_adm.php', $data);
		}else{
			$this->load->view('login.php');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	function admin()
	{
		if($this->session->userdata('logged_in') != FALSE && $this->session->userdata('level') == 'admin'){
			$this->load->view('admin_index.php');
		}else{
			$this->load->view('login.php');
		}
	}
	function foodspotsList()
	{
		$data['fs'] = $this->m_foodspot->getFs();
		$this->load->view('foodspots_list.php',$data);
	}
	function fsRegist()
	{
		$this->load->view('foodspots_regis.php');
	}
	function fsLogin()
	{
		
		$this->load->view('login_member.php');
	}
	
	function memberRequest(){
		$this->load->view("data_request");
	}
	
	function MemberReg()
	{
		$vals = array(
			'img_path'	=> './captcha/',
			'img_url'	=> base_url().'captcha/',
			'img_width'	=> '200',
			'img_height'=> 60,
			'border'	=> 0,
			'expiration'=> 7200
		);
		$cap = create_captcha($vals);
		$data['image'] = $cap['image'];
		$this->session->set_userdata('mycaptcha', $cap['word']);
		// $data['membertype'] = $this->input->post('membertype');
		$data['membertype'] = $this->input->get('membertype');

		$this->load->view('regist.php', $data);
	}

	//Member
	function member()
	{
		if($this->m_member->loginStatus()){
			$id = $this->db->where('id_user',$this->session->userdata['id_user'])->get('t_user')->row()->resto_id;
			$data['det'] = $this->m_foodspot->getFsById($id);
			$this->load->view('user_index.php',$data);
		}else{
			$this->load->view('login_member.php');
		}
	}

	function regsuccess()
	{
		$this->load->view('reg_success.php');
	}
	function notfound()
	{
		$this->load->view('404.html');
	}
	
	function mEditFs()
	{
		if($this->m_member->loginStatus()){
			$id = $this->db->where('id_user',$this->session->userdata['id_user'])->get('t_user')->row()->resto_id;
			$data['edit'] = $this->m_foodspot->getFsById($id);
			$data['cat'] = $this->m_category->getCat();
			$this->load->view('member_edit_fs.php',$data);
		}else{
			$this->load->view('login_member.php');
		}
	}
	
	function profil()
	{
		if($this->m_member->loginStatus()){
			$id = $this->session->userdata('id_user');
			$data['det'] = $this->m_member->getUserById($id);
			$this->load->view('profil_user.php', $data);
		}else{
			$this->load->view('login_member.php');
		}
	}
	
	function editProfil()
	{
		if($this->m_member->loginStatus()){
			$id = $this->session->userdata('id_user');
			$data['det'] = $this->m_member->getUserById($id);
			$this->load->view('edit_profil.php', $data);
		}else{
			$this->load->view('login_member.php');
		}
	}
	
	function settings(){
		$data["set"] = $this->m_adm->settingsWeb();
		$this->load->view('settings.php',$data);
	}
}

