
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stemming extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	
	public function stemming($kata){
		$kataAsal = $kata;

	}

}

