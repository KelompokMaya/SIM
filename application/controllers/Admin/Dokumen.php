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
		$id_dokumen = $this->db->insert_id();

		$this->preprocessing($id_dokumen,$deskripsi);
		
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
	public function addLangkah() {
		
		$id=$this->input->post('id');
		// $judul=$this->input->post('judul');
		// $deskripsi= $this->input->post('deskripsi');
		$langkah=$this->input->post('langkah');
		$tgl_buat = date("Y-m-d");
		$this->M_dokumen->addLangkah($id, $langkah, $tgl_buat);
		$this->index();
	}

	public function delete($id){
		$this->M_dokumen->delete($id);
		$this->index();

	}

	public function preprocessing($id_dokumen,$deskripsi){

		$file_stopword= base_url().'assets/file/stopword.txt';

		//menghilangkan tanda baca
		$deskripsi=preg_replace("/[[:punct:]]+/"," ",$deskripsi);

		//agar kecil semua
		$data['deskripsi']=strtolower($deskripsi);

		//menghitung keseluruhan kata dan menjadikan array
		$kata=str_word_count($deskripsi,1);

		//pencocokan kata atau stopwords
		$stopwords=file($file_stopword, FILE_IGNORE_NEW_LINES);
		$data['stopword']=array_values(array_diff($kata,$stopwords));
		
		//hitung tf
		$data['tf'] = array_values(array_count_values($data['stopword']));

		// // kata yg unik
		$data['kata_unik'] = array_values(array_unique($data['stopword']));




		// $objek=array('id_dokumen'=>$id_dokumen, 'id_term'=>$id_term);
		// $this->db->insert('tb_index', $objek);		

		// $this->index();
		$this->load->view('admin/v_contoh',$data);


	}
	
}
