<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_dashboard');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('v_redirect_login');
			return;
		}
	}

	public function index(){
		$data['jml_user']=$this->M_dashboard->jmlUser();
		$data['jml_aset']=$this->M_dashboard->jmlAset();
		//$data['grafik']=$this->M_dashboard->grafik();
		$data['total_perbaikan']=$this->M_dashboard->jmlTiket();
		$data['perbaikan_selesai']=$this->M_dashboard->jmlTiketSelesai();
		$this->load->view('admin/v_dashboard',$data);
	}



}