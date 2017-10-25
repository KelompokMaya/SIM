<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

		// Load database
		 public function __construct() {
		 parent::__construct();
		 $this->load->model('M_excel');
		 }


		public function export_excel(){
		 $data = array( 'title' => 'Laporan Aset',
		 				'aset' => $this->M_excel->listing());

		 //print_r($data);
		 $this->load->view('admin/laporan_excel',$data);
		 }
}