<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aset extends CI_Model {

	public function select($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('tb_aset');
	}

	public function create($nama, $manufaktur, $status ,$fakultas_id, $jurusan_id, $lokasi_id, $noseri, $tipe, $model, $trakhirdiperbaiki){

		$data = array(
			'nama' => $nama,
			'manufaktur' => $manufaktur,
			'status' => $status,
			'fakultas_id' => $fakultas_id,
			'jurusan_id' => $jurusan_id,
			'lokasi_id'=> $lokasi_id,
			'noseri'=> $noseri,
			'tipe'=> $tipe,
			'model'=> $model,
			'trakhir_diperbaiki'=> $trakhirdiperbaiki

		);

		$this->db->insert('tb_aset', $data);
		//print_r($this->input->post());	
	}


	public function select_all(){
		$this->db->select('*');
		//$this->db->where('aktif', 'ya');
		return $this->db->get('tb_aset');
	}
		
}
