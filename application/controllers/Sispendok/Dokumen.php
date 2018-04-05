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

		//menghilangkan tanda baca
		$deskripsi=preg_replace("/[[:punct:]]+/"," ",$deskripsi);

		//agar kecil semua
		$data=strtolower($deskripsi);

		//menghitung keseluruhan kata 
		$kata=str_word_count($data,1);
		$panjang_dokumen=count($kata);


		$this->M_dokumen->insert($judul, $deskripsi, $langkah, $tgl_buat,$panjang_dokumen);
		$id_dokumen = $this->db->insert_id();

		$this->preprocessing($id_dokumen,$deskripsi);
		$this->index();

		
	}

	public function update() {
		
		$id=$this->input->post('id');
		$curr_index= $this->M_dokumen->select_AllTermIndex($id);
		$curr_TFindex=$this->M_dokumen->select_AllTFIndex($id);

		$judul=$this->input->post('judul');
		$deskripsi= $this->input->post('deskripsi');
		$langkah=$this->input->post('langkah');
		$tgl_edit = date("Y-m-d");
		$this->M_dokumen->update($id, $judul, $deskripsi, $langkah, $tgl_edit);
		$this->M_dokumen->deleteIndex($id);

		//membuat index baru
		$this->preprocessing($id,$deskripsi);
		$new_index= $this->M_dokumen->select_AllTermIndex($id);
		$new_TFindex=$this->M_dokumen->select_AllTFIndex($id);
		$jum_term_index=count($curr_index);
		
		//hapus term
		for ($i = 0; $i < $jum_term_index; $i++)
        {
			$this->M_dokumen->subtractTFTerm($curr_index[$i],$curr_TFindex[$i]);
		}




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
		$term_tersimpan_index = $this->M_dokumen->select_AllTermIndex($id);
		$tf_tersimpan_index = $this->M_dokumen->select_AllTFIndex($id);
		
		$jum_term_index=count($term_tersimpan_index);

		for ($i = 0; $i < $jum_term_index; $i++)
        {
        $term_tersimpan = $this->M_dokumen->select_AllTerm();
		if (in_array($term_tersimpan_index[$i], $term_tersimpan)) {
        		$this->M_dokumen->subtractTFTerm($term_tersimpan_index[$i],$tf_tersimpan_index[$i]);
        	}
		}

		$this->M_dokumen->delete($id);
		$this->index();

	}

	public function preprocessing($id_dokumen,$deskripsi){

		//menghilangkan tanda baca
		$deskripsi=preg_replace("/[[:punct:]]+/"," ",$deskripsi);

		//agar kecil semua
		$data=strtolower($deskripsi);

		//menghitung keseluruhan kata dan menjadikan array
		$kata=str_word_count($data,1);
		
		//pencocokan kata atau stopwords
		$file_stopword= base_url().'assets/file/stopword.txt';
		$stopwords=file($file_stopword, FILE_IGNORE_NEW_LINES);
		$stopword=array_values(array_diff($kata,$stopwords));
		
		//hitung tf
		$tf = array_values(array_count_values($stopword));

		// // kata yg unik
		$kata_unik = array_values(array_unique($stopword));

		//Stemming					
		$jum_kata_unik=count($kata_unik);
		

		//echo $jum_kata_unik;
			$i=0;
			while ( $i< $jum_kata_unik) {
					$this->load->library('stemmingg');
					$teksAsli = $kata_unik[$i];
					//echo "Teks asli : ".$teksAsli.'<br/>';
					$stemming = $this->stemmingg->stemming($teksAsli);
					if ($stemming=='') {
					$term[$i] = $kata_unik[$i];
					}
					else{
					$term[$i] = $stemming;
					}
					
					$i++;
		 		}

		 	//jika term kosong
		 	if ($jum_kata_unik==0) {
		 		$this->M_dokumen->delete($id_dokumen);
				
		 	} else {
		 		$this->addIndex($term,$tf,$jum_kata_unik,$id_dokumen);	
		 	}
		 	

			

		// $objek=array('id_dokumen'=>$id_dokumen, 'id_term'=>$id_term);
		// $this->db->insert('tb_index', $objek);		

		// $this->index();
		//$this->load->view('admin/v_contoh',$data);

	}

	
	public function addIndex($term,$tf,$jum_kata_unik,$id_dokumen){

		//$term_unik = array_values(array_unique($term));
		//$jum_kata = count($term_unik);

		for ($i = 0; $i < $jum_kata_unik; $i++)
        {
        	$term_tersimpan_index=$this->M_dokumen->select_AllTermIndex($id_dokumen);

        	if (in_array($term[$i], $term_tersimpan_index)) {
        		$this->M_dokumen->countTFIndex($id_dokumen,$term[$i],$tf[$i]);
        	} else {
        		$dataTerm = array(
        			'id_dokumen'=>$id_dokumen,
	                'term' => $term[$i],
	                'tf' => $tf[$i],
	            );
				$this->db->insert('tb_index', $dataTerm);
        		
        	}

	        //$this->M_dokumen->addIndex($id_dokumen,$term[$i]);
        } 

		$this->addTerm($term,$tf,$jum_kata_unik);	
		
	}

	public function addTerm($term,$tf,$jum_kata_unik){
		

		for ($i = 0; $i < $jum_kata_unik; $i++)
        {
        	$term_tersimpan=$this->M_dokumen->select_AllTerm();
        	
        	if (in_array($term[$i], $term_tersimpan)) {
        		$this->M_dokumen->countTF($term[$i],$tf[$i]);
        	} else {
        		$dataTerm = array(
	                'term' => $term[$i],
	                'tf' => $tf[$i],
	            );
				$this->db->insert('tb_term', $dataTerm);
        		
        	}
        	
			
		}
		//$this->index();

	}


}
