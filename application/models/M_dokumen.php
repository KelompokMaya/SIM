<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen extends CI_Model {

	public function select($id) {
		$this->db->select('id_dokumen, judul, deskripsi, langkah');
		$this->db->from('tb_dokumen');
		$this->db->where('id_dokumen', $id);
		return $this->db->get();
	}

	public function insert($judul, $deskripsi, $langkah,$tgl_buat) {

		$objek=array('judul'=>$judul, 'deskripsi'=>$deskripsi, 'langkah'=>$langkah, 'tgl_buat'=>$tgl_buat);
		$this->db->insert('tb_dokumen', $objek);
		
	}

	public function update($id, $judul, $deskripsi, $langkah, $tgl_edit) {
		

		$objek=array('judul'=>$judul, 'deskripsi'=>$deskripsi, 'langkah'=>$langkah, 'tgl_edit'=>$tgl_edit);
		$this->db->where('id_dokumen', $id);
		$this->db->update('tb_dokumen', $objek);
	}

	public function addLangkah($id, $langkah, $tgl_buat) {

		$objek=array('id_dokumen'=>$id, 'langkah'=>$langkah, 'tgl_buat'=>$tgl_buat);
		$this->db->insert('tb_langkah_perbaikan', $objek);
		
	}

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id_dokumen', 'DESC');
		return $this->db->get('tb_dokumen'); 
	}

	public function delete($id) {
		$this->db->where('id_dokumen', $id);
		$this->db->delete('tb_dokumen');
	}

	//index
	public function addIndex($id_dokumen,$term){

		$dataIndex= array(
              'term' => $term,
               'id_dokumen' => $id_dokumen,);

           $this->db->insert('tb_index', $dataIndex);
	}


	//term
	public function select_AllTerm() {

		$this->db->select('term');
		$query= $this->db->get('tb_term');
		$array= $query->result_array(); 
		$arr = array_map (function($value){
		    return $value['term'];
		} , $array);
		return $arr;
	}
	public function select_term($term){
		$this->db->select('tf');
		$this->db->where('term', $term);
		$query= $this->db->get('tb_term');
		return $query->row()->tf;
	}

	public function countTF($term,$tf){
		$curr_TF= $this->select_term($term);
		$new_TF=$curr_TF+$tf;

        $dataTerm = array(
	          'tf' => $new_TF,
	    );
	    $this->db->where('term', $term);
	    $this->db->update('tb_term', $dataTerm);	

	}
}
