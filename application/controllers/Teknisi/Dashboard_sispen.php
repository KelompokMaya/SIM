<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_sispen extends CI_Controller {

	public function index(){
		
		$this->load->view('teknisi/v_dashboard_sispen');

	}
	
	
}
