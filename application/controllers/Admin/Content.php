<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}
	
	public function index(){
		$data['currUser']=$this->session->userdata('fullname');
		

		$this->load->view('admin/v_metadata');
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar',$data);
		$this->load->view('admin/v_content');
		$this->load->view('admin/v_footer');

	}
}
