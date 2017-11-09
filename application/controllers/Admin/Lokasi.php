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
		$data['cari']=$this->M_lokasi->selectAll();
		
		$this->load->view('admin/v_lokasi',$data);

	}

	public function create_fakultas(){
		$fakultas = $this->input->post('fakultas');
		$kampus = $this->input->post('kampus');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$data = array(
			'nama_fakultas' => $fakultas,
			'kampus_id' => $kampus,
			'lat' => $lat,
			'lng' => $lng
		);
		$this->db->insert('tb_fakultas', $data);
		$this->index();
	}

	public function create_jurusan(){
		$kampus = $this->input->post('kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');

		$data = array(
			'kampus_id' => $kampus,
			'fakultas_id' => $fakultas,
			'nama_jurusan'=> $jurusan,
			'lat' => $lat,
			'lng' => $lng
		);
		$this->db->insert('tb_jurusan', $data);
		$this->index();
	}

	public function create_lokasi(){
		$kampus = $this->input->post('kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lokasi = $this->input->post('lokasi');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');


		$data = array(
			'kampus_id' => $kampus,
			'fakultas_id' => $fakultas,
			'jurusan_id'=> $jurusan,
			'nama_lokasi' => $lokasi,
			'lat' => $lat,
			'lng' => $lng
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

		$this->db->where('id_fakultas', $fakultas);
		$this->db->delete('tb_fakultas');
		$this->index(); 
		}
		elseif ($lokasi=='0' || $lokasi=='') {
		$this->db->where('jurusan_id', $jurusan);
		$this->db->delete('tb_lokasi');

		$this->db->where('id_jurusan', $jurusan);
		$this->db->delete('tb_jurusan');
		$this->index();
		
		}else{
		$this->db->where('id_lokasi', $lokasi);
		$this->db->delete('tb_lokasi');
		$this->index(); 
		}
	} 

	public function cariLokasi(){
		$kampus = $this->input->post('kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lokasi = $this->input->post('lokasi');
		//print_r($this->input->post());exit;
		
		$this->db->select('*');
		if ($kampus=='0') {
		}
		elseif ($fakultas=='0') {
			$this->db->where('kampus_id', $kampus);

		}
		elseif ($jurusan=='0' || $jurusan=='') {
			$this->db->where('fakultas_id', $fakultas);
		}
		elseif ($lokasi=='0' || $lokasi=='') {
			$this->db->where('jurusan_id', $jurusan);
		}
		else{
			$this->db->where('lokasi_id', $lokasi);
		}
		
		$data['cari']=$this->db->get('tb_aset');
		
		$this->load->view('admin/v_hasilCari',$data);
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


	//menampilkan maps
	public function maps(){
		$kampus = $this->input->post('kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$lokasi = $this->input->post('lokasi');
		//print_r($this->input->post());exit;
		
		$this->db->select('lat,lng');
		if ($kampus=='0') {
		}
		elseif ($fakultas=='0') {
			$this->db->where('id_kampus', $kampus);
			$data['maps']=$this->db->get('tb_kampus');

			
		}
		elseif ($jurusan=='0' || $jurusan=='') {
			$this->db->where('id_fakultas', $fakultas);
			$data['maps']=$this->db->get('tb_fakultas');
		}
		elseif ($lokasi=='0' || $lokasi=='') {
			$this->db->where('id_jurusan', $jurusan);
			$data['maps']=$this->db->get('tb_jurusan');
		}
		else{
			$this->db->where('id_lokasi', $lokasi);
			$data['maps']=$this->db->get('tb_lokasi');
		}
		
		
		$this->load->view('admin/v_maps',$data);
	}
}