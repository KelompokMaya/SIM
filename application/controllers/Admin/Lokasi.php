<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_lokasi');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}
	
	public function index(){
		$data['fakultas']=$this->M_lokasi->select_fakultas();
		
		$this->load->view('admin/v_lokasi',$data);

	}

	public function create_fakultas(){
		$fakultas = $this->input->post('fakultas');
		$data = array(
			'nama_fakultas' => $fakultas
		);
		$this->db->insert('tb_fakultas', $data);
		$this->index();
	}

	public function create_jurusan(){
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');

		$data = array(
			'fakultas_id' => $fakultas,
			'nama_jurusan'=> $jurusan
		);
		$this->db->insert('tb_jurusan', $data);
		$this->index();
	}

	public function create_lokasi(){
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lokasi = $this->input->post('lokasi');

		$data = array(
			'fakultas_id' => $fakultas,
			'jurusan_id'=> $jurusan,
			'nama_lokasi' => $lokasi
		);
		$this->db->insert('tb_lokasi', $data);
		$this->index();
	}


	//dropdown lokasi
	
	public function select_jurusan($fakultas_id){
		$data['jurusan']=$this->M_lokasi->select_jurusan($fakultas_id);
		if ($data['jurusan']!=0) {
			$this->load->view('admin/dropdown/v_dropdown_jurusan',$data);
		}
		
	}
	public function select_lokasi($jurusan_id){
		$data['lokasi']=$this->M_lokasi->select_lokasi($jurusan_id);
		if ($data['lokasi']!=0) {
		$this->load->view('admin/dropdown/v_dropdown_lokasi',$data);
		}
	}
}