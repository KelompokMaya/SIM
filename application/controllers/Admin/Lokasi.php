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
		$data['fakultas']=$this->M_lokasi->selectAll_fakultas();
		
		$this->load->view('admin/v_lokasi',$data);

	}

	public function create_fakultas(){
		$fakultas = $this->input->post('fakultas');
		$kampus = $this->input->post('kampus');
		$data = array(
			'nama_fakultas' => $fakultas,
			'kampus_id' => $kampus
		);
		$this->db->insert('tb_fakultas', $data);
		$this->index();
	}

	public function create_jurusan(){
		$kampus = $this->input->post('kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');

		$data = array(
			'kampus_id' => $kampus,
			'fakultas_id' => $fakultas,
			'nama_jurusan'=> $jurusan
		);
		$this->db->insert('tb_jurusan', $data);
		$this->index();
	}

	public function create_lokasi(){
		$kampus = $this->input->post('kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lokasi = $this->input->post('lokasi');

		$data = array(
			'kampus_id' => $kampus,
			'fakultas_id' => $fakultas,
			'jurusan_id'=> $jurusan,
			'nama_lokasi' => $lokasi
		);
		$this->db->insert('tb_lokasi', $data);
		$this->index();
	}

	public function deleteLokasi(){
		
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lokasi = $this->input->post('lokasi');

		if ($jurusan=='0'|| $jurusan=='') {
		$this->db->where('fakultas_id', $fakultas);
		$this->db->delete('tb_lokasi');

		$this->db->where('fakultas_id', $fakultas);
		$this->db->delete('tb_jurusan');

		$this->db->where('id', $fakultas);
		$this->db->delete('tb_fakultas');
		$this->index(); 
		}
		elseif ($lokasi=='0' || $lokasi=='') {
		$this->db->where('jurusan_id', $jurusan);
		$this->db->delete('tb_lokasi');

		$this->db->where('id', $jurusan);
		$this->db->delete('tb_jurusan');
		$this->index();
		
		}else{
		$this->db->where('id', $lokasi);
		$this->db->delete('tb_lokasi');
		$this->index(); 
		}
	} 


	//dropdown lokasi
	public function select_fakultas($kampus_id){
		$data['fakultas']=$this->M_lokasi->select_fakultas($kampus_id);
		if ($data['fakultas']!=0) {
			$this->load->view('admin/dropdown/v_dropdown_fakultas',$data);
		}
		
	}

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