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
		$data['fakultas']=$this->M_lokasi->selectAll_fakultas();
		$data['aset']=$this->M_aset->select_all();
		$this->load->view('admin/v_aset',$data);
	}

	public function select($id){
		$aset=$this->M_aset->select($id)->row();
		echo json_encode($aset);

	}

	public function create(){
		$nama = $this->input->post('nama');
		$manufaktur = $this->input->post('manufaktur');
		$status = $this->input->post('status');
		$kampus_id = $this->input->post('kampus_id');
		$fakultas_id = $this->input->post('fakultas_id');
		$jurusan_id = $this->input->post('jurusan_id');
		$lokasi_id = $this->input->post('lokasi_id');
		$noseri = $this->input->post('noseri');
		$tipe = $this->input->post('tipe');
		$model = $this->input->post('model');
		$noinventory = $this->input->post('noinventory');
		$tgldipasang = $this->input->post('tgldipasang');
		$trakhirdiperbaiki = $this->input->post('trakhirdiperbaiki');
		
		if ($nama!='') {
			$this->M_aset->create($nama, $manufaktur, $status,$kampus_id, $fakultas_id, $jurusan_id, $lokasi_id, $noseri, $tipe, $model,$noinventory,$tgldipasang, $trakhirdiperbaiki);
		}
		
		$this->index();
	}
	
	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$manufaktur = $this->input->post('manufaktur');
		$status = $this->input->post('status');
		/*$fakultas_id = $this->input->post('fakultas_id');
		$jurusan_id = $this->input->post('jurusan_id');
		$lokasi_id = $this->input->post('lokasi_id');
		*/$noseri = $this->input->post('noseri');
		$tipe = $this->input->post('tipe');
		$model = $this->input->post('model');
		$noinventory = $this->input->post('noinventory');
		$tgldipasang = $this->input->post('tgldipasang');
		$trakhirdiperbaiki = $this->input->post('trakhirdiperbaiki');
		
		
		$this->M_aset->update($id,$nama, $manufaktur, $status, /*$fakultas_id, $jurusan_id, $lokasi_id,*/ $noseri, $tipe, $model,$noinventory,$tgldipasang, $trakhirdiperbaiki);
		$this->index();
	}
	public function updateLokasi(){
		$id = $this->input->post('id');
		$nama_aset = $this->input->post('nama');
		$curr_kampus = $this->input->post('curr_kampus');
		$curr_fakultas = $this->input->post('curr_fakultas');
		$curr_jurusan = $this->input->post('curr_jurusan');
		$curr_lokasi= $this->input->post('curr_lokasi');
		$kampus_id = $this->input->post('kampus_id');
		$fakultas_id = $this->input->post('fakultas_id');
		$jurusan_id = $this->input->post('jurusan_id');
		$lokasi_id = $this->input->post('lokasi_id');
		$tanggal_pindah = $this->input->post('tanggal_pindah');
		
		
		
		$this->M_aset->updateLokasi($id,$nama_aset,$curr_kampus,$curr_fakultas,$curr_jurusan,$curr_lokasi,$kampus_id,$fakultas_id, $jurusan_id, $lokasi_id,$tanggal_pindah);
		$this->index();
	}

	public function delete($id){
		$this->db->where('id_aset', $id);
		$this->db->delete('tb_aset');
		$this->index();
	}

	public function currLokasi($id){
		$lokasi=$this->M_aset->currLokasi($id)->row();
		echo json_encode($lokasi);
	}
}
	