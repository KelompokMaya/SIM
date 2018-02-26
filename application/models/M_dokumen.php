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

	public function select_all() {

		$this->db->select('*');
		$this->db->order_by('id_dokumen', 'DESC');
		return $this->db->get('tb_dokumen'); 
	}

	public function delete($id) {
		$this->db->where('id_dokumen', $id);
		$this->db->delete('tb_dokumen');
	}
}