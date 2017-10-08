<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aset extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}


	public function index(){
		$this->load->view('admin/v_aset');
	}
}
	