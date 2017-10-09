<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aset extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_aset');
		$this->load->model('M_lokasi');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}


	public function index(){
		$data['fakultas']=$this->M_lokasi->select_fakultas();
		$data['aset']=$this->M_aset->select_all();
		$this->load->view('admin/v_aset',$data);
	}

	public function select($id){
		$aset=$this->M_Aset->select($id)->row();
		echo json_encode($aset);
	}

	public function create(){
		$nama = $this->input->post('nama');
		$manufaktur = $this->input->post('manufaktur');
		$status = $this->input->post('status');
		$fakultas_id = $this->input->post('fakultas_id');
		$jurusan_id = $this->input->post('jurusan_id');
		$lokasi_id = $this->input->post('lokasi_id');
		$noseri = $this->input->post('noseri');
		$tipe = $this->input->post('tipe');
		$model = $this->input->post('model');
		$trakhirdiperbaiki = $this->input->post('trakhirdiperbaiki');
		
		
		$this->M_aset->create($nama, $manufaktur, $status, $fakultas_id, $jurusan_id, $lokasi_id, $noseri, $tipe, $model, $trakhirdiperbaiki);
		$this->index();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_aset');
		$this->index();
	}
}
	