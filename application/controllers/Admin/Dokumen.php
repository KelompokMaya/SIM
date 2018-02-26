<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_dokumen');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}
	
	public function index(){
		$data['dokumen']=$this->M_dokumen->select_all();
		$this->load->view('admin/v_dokumen',$data);

	}
	public function select($id){
		$dokumen=$this->M_dokumen->select($id)->row();
		echo json_encode($dokumen);
	}


	public function insert() {

		$judul=$this->input->post('judul');
		$deskripsi= $this->input->post('deskripsi');
		$langkah=$this->input->post('langkah');
		$tgl_buat=date("Y-m-d");


		$this->M_dokumen->insert($judul, $deskripsi, $langkah, $tgl_buat);
		$this->index();
		
	}

	public function update() {
		
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$deskripsi= $this->input->post('deskripsi');
		$langkah=$this->input->post('langkah');
		$tgl_edit = date("Y-m-d");
		$this->M_dokumen->update($id, $judul, $deskripsi, $langkah, $tgl_edit);
		$this->index();
	}

	public function delete($id){
		$this->M_dokumen->delete($id);
		$this->index();

	}
	
}
