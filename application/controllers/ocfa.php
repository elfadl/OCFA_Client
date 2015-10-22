<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OCFA extends CI_Controller {

	
	function __construct() {
		parent::__construct();
		$this->load->model('m_foodspot');
		$this->load->model('m_category');
		$this->load->model('m_login');
		$this->load->model('m_adm');
		$this->load->model('m_user');
		$this->load->model('m_member');
		$this->load->model('m_login_member');
	}
	
	public function index()
	{
		$this->load->view('index.php');
	}
}

