<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_dokumen');
		$this->load->model('M_admin');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}

	public function view($id) {
		$data['id_dokumen']=$id;
		$data['currUser']=$this->session->userdata('fullname');
		$data['dokumen']=$this->M_dokumen->select($id);
		//$data['solusi_tambahan']=$this->M_dokumen->selectsolusitambahan($id);

		$this->load->view('admin/v_metadata');
		$this->load->view('admin/v_header');
	    $this->load->view('admin/v_detailDokumen',$data);
		$this->load->view('admin/v_footer');
		
	}
	public function print($id_dokumen){
		$dokumen['data']= $this->M_dokumen->select($id_dokumen);
		$dokumen['cek']=0;
		
		$this->load->view('admin/v_cetak',$dokumen);

	}
	public function printSL($id_dokumen,$id_solusi){
		$dokumen['data']= $this->M_dokumen->select($id_dokumen);
		$dokumen['solusi']= $this->M_dokumen->selectSolusi($id_solusi);
		$dokumen['cek']=1;
		
		$this->load->view('admin/v_cetak',$dokumen);

	}




}