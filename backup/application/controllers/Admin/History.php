<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_history');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}

	public function index(){
		$data['history']=$this->M_history->select_all();
		$this->load->view('admin/v_history',$data);
	}
	public function select($id){
		$data['DetailPerpindahan']=$this->M_history->select($id);
		$this->load->view('admin/v_historyPerpindahan',$data);
	}

}