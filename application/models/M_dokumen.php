<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen extends CI_Model {

	public function jmlDokumen(){
		$query = $this->db->query('SELECT COUNT(id_dokumen) AS num FROM tb_dokumen');
		return $query->row()->num;

	}
	public function jmlTerm(){
		$query = $this->db->query('SELECT SUM(tf) AS tf FROM tb_index ');
		// if($query->num_rows() > 0){
  //           foreach($query->result() as $data){
  //               $hasil[] = $data;
  //           }
           
  //       }

		 return $query->row()->tf;


	}

	public function select($id) {
		$this->db->select('id_dokumen, judul, deskripsi, langkah,tgl_buat,tgl_edit,teknisi_id');
		$this->db->from('tb_dokumen');
		$this->db->where('id_dokumen', $id);
		return $this->db->get();
	}

	public function selectDokumen($id) {
		$this->db->select('tb_dokumen.*,tb_user.fullname');
		$this->db->from('tb_dokumen');
		$this->db->join('tb_user', 'tb_user.id_user = tb_dokumen.teknisi_id','left');
		$this->db->where('id_dokumen', $id);
		return $this->db->get();
	}

	public function insert($judul, $deskripsi, $langkah,$tgl_buat,$panjang_dokumen) {
		$currUserid=$this->session->userdata('id_user');

		$objek=array('judul'=>$judul, 'deskripsi'=>$deskripsi, 'langkah'=>$langkah, 'tgl_buat'=>$tgl_buat, 'panjang_dokumen'=>$panjang_dokumen,'teknisi_id'=>$currUserid);
		$this->db->insert('tb_dokumen', $objek);
		
	}

	public function update($id, $judul, $deskripsi, $langkah, $tgl_edit,$panjang_dokumen) {
		

		$objek=array('judul'=>$judul, 'deskripsi'=>$deskripsi, 'langkah'=>$langkah,'panjang_dokumen'=>$panjang_dokumen, 'tgl_edit'=>$tgl_edit);
		$this->db->where('id_dokumen', $id);
		$this->db->update('tb_dokumen', $objek);
	}

	public function addLangkah($id, $langkah, $tgl_buat) {

		$objek=array('id_dokumen'=>$id, 'langkah'=>$langkah, 'tgl_buat'=>$tgl_buat);
		$this->db->insert('tb_solusi_tambahan', $objek);
		
	}
	public function selectsolusitambahan($id) {
		$this->db->select('*');
		$this->db->from('tb_solusi_tambahan');
		$this->db->where('id_dokumen', $id);
		return $this->db->get();
	}

	public function selectSolusi($id) {
		$this->db->select('langkah');
		$this->db->from('tb_solusi_tambahan');
		$this->db->where('id', $id);
		return $this->db->get();
	}

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id_dokumen', 'DESC');
		return $this->db->get('tb_dokumen'); 
	}

	public function delete($id) {
		$this->db->where('id_dokumen', $id);
		$this->db->delete('tb_dokumen');

		$this->deleteIndex($id);
	}

	//index
	public function select_AllTermIndex($id_dokumen) {

		$this->db->select('term');
		$this->db->where('id_dokumen', $id_dokumen);
		$query= $this->db->get('tb_index');
		$array= $query->result_array(); 
		$arr = array_map (function($value){
		    return $value['term'];
		} , $array);
		return $arr;

	}
	public function select_AllTFIndex($id_dokumen) {

		$this->db->select('tf');
		$this->db->where('id_dokumen', $id_dokumen);
		$query= $this->db->get('tb_index');
		$array= $query->result_array(); 
		$arr = array_map (function($value){
		    return $value['tf'];
		} , $array);
		return $arr;
		
	}
	public function select_termIndex($id_dokumen,$term){
		$this->db->select('tf');
		$this->db->where('id_dokumen', $id_dokumen);
		$this->db->where('term', $term);
		$query= $this->db->get('tb_index');
		return $query->row()->tf;
	}

	public function addIndex($id_dokumen,$term){

		$dataIndex= array(
              'term' => $term,
               'id_dokumen' => $id_dokumen,);

           $this->db->insert('tb_index', $dataIndex);
	}
	public function countTFIndex($id_dokumen,$term,$tf){
		$curr_TF= $this->select_termIndex($id_dokumen,$term);
		$new_TF=$curr_TF+$tf;

        $dataTerm = array(
	          'tf' => $new_TF,
	    );
	    $this->db->where('id_dokumen', $id_dokumen);
	    $this->db->where('term', $term);
	    $this->db->update('tb_index', $dataTerm);	

	}

	public function deleteIndex($id_dokumen){
		$this->db->where('id_dokumen', $id_dokumen);
		$this->db->delete('tb_index');

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

	public function subtractTFTerm($term,$tf){

		$curr_TF= $this->select_term($term);

		if ($curr_TF==1) {
			$this->db->where('term', $term);
			$this->db->delete('tb_term');
		}
		else{
			$new_TF=$curr_TF-$tf;

	        $dataTerm = array(
		          'tf' => $new_TF,
		    );
		    $this->db->where('term', $term);
		    $this->db->update('tb_term', $dataTerm);
		}
	}

	//bm25
	public function select_ALLidDokumen(){
		$this->db->select('id_dokumen');
		$query= $this->db->get('tb_dokumen');
		$array= $query->result_array(); 
		$arr = array_map (function($value){
		    return $value['id_dokumen'];
		} , $array);
		return $arr;
	}

	public function select_panjangDokumen($id_dokumen){
		$this->db->select('panjang_dokumen');
		$this->db->where('id_dokumen', $id_dokumen);
		$query= $this->db->get('tb_dokumen');
		return $query->row()->panjang_dokumen;
	}

	public function select_df($term){
		$query = $this->db->query("SELECT COUNT(id) AS num  FROM tb_index WHERE term='$term'");
		return $query->row()->num;

	}

	public function cekterm($term,$id_dokumen){

		$query = $this->db->query("SELECT COUNT(id) AS num  FROM tb_index WHERE id_dokumen='$id_dokumen' AND term='$term'");
		$result = $query->row()->num;

	
		if($result>0){
			return true; // True jika ada
		}else{
			return false; // jika tidak ada FALSE
		}
	}
	public function ALLpanjangDok(){
		$query = $this->db->query('SELECT SUM(panjang_dokumen) AS num FROM tb_dokumen');
		return $query->row()->num;
	}
}
