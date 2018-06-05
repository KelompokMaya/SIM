<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_aset');
		$this->load->model('M_lokasi');
		$this->load->model('M_perbaikan');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}


	public function index(){
		$data['fakultas']=$this->M_lokasi->selectAll_fakultas();
		$data['aset']=$this->M_aset->select_all();
		$data['listPerbaikan']=$this->M_perbaikan->select_all();
		$this->load->view('admin/v_listPerbaikan',$data);
	}

	public function select($id){
		$aset=$this->M_aset->select($id)->row();
		echo json_encode($aset);

	}

	public function create(){
		$id_aset = $this->input->post('id_aset');
		$tgl_perbaikan = date("Y/m/d");
		$id_teknisi=$this->session->userdata('id');
		$status='perbaikan';
	
	    $this->M_perbaikan->create($id_aset, $tgl_perbaikan,$id_teknisi, $status);
	    $this->M_perbaikan->update_status($id_aset, $status);

		$this->index();
	}
	
	public function perbaikanSelesai(){
		$id_aset = $this->input->post('id');
		$catatan = $this->input->post('catatan');
		$tgl_selesai = date("Y/m/d");
		$status='selesai';
		$status2='aktif';
	
	    $this->M_perbaikan->perbaikanSelesai($id_aset, $tgl_selesai, $status,$catatan);
	    $this->M_perbaikan->update_status($id_aset,$status2);

		$this->index();
	}

	public function lihatCatatan($id){
		$catatan=$this->M_perbaikan->select($id)->row();
		echo json_encode($catatan);
	}
}
	