<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aset extends CI_Model {

	public function select($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('tb_aset');

		/* $this->db->select('*');
		$this->db->from('tb_aset');
		$this->db->join('tb_fakultas', 'tb_fakultas.id = tb_aset.fakultas_id');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_aset.jurusan_id');
		$this->db->join('tb_lokasi', 'tb_lokasi.id = tb_aset.lokasi_id', 'left');
		$this->db->where('tb_aset.id',$id);
		return $this->db->get();*/
	}

	public function currLokasi($id){
		$this->db->select('*');
		$this->db->from('tb_aset');
		$this->db->join('tb_kampus', 'tb_kampus.id = tb_aset.kampus_id');
		$this->db->join('tb_fakultas', 'tb_fakultas.id = tb_aset.fakultas_id','left');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_aset.jurusan_id','left');
		$this->db->join('tb_lokasi', 'tb_lokasi.id = tb_aset.lokasi_id', 'left');
		$this->db->where('tb_aset.id',$id);
		return $this->db->get();

		
	}

	public function create($nama, $manufaktur, $status,$kampus_id, $fakultas_id, $jurusan_id, $lokasi_id, $noseri, $tipe, $model,$noinventory,$tgldipasang, $trakhirdiperbaiki){

		$data = array(
			'nama' => $nama,
			'manufaktur' => $manufaktur,
			'status' => $status,
			'kampus_id' => $kampus_id,
			'fakultas_id' => $fakultas_id,
			'jurusan_id' => $jurusan_id,
			'lokasi_id'=> $lokasi_id,
			'noseri'=> $noseri,
			'tipe'=> $tipe,
			'model'=> $model,
			'noinventory'=> $noinventory,
			'tgldipasang'=> $tgldipasang,
			'trakhir_diperbaiki'=> $trakhirdiperbaiki

		);

		$this->db->insert('tb_aset', $data);
		//print_r($this->input->post());	
	}

	public function update($id, $nama, $manufaktur, $status ,/*$fakultas_id, $jurusan_id, $lokasi_id,*/ $noseri, $tipe, $model,$noinventory,$tgldipasang, $trakhirdiperbaiki){

		$data = array(
			'nama' => $nama,
			'manufaktur' => $manufaktur,
			'status' => $status,
			/*'fakultas_id' => $fakultas_id,
			'jurusan_id' => $jurusan_id,
			'lokasi_id'=> $lokasi_id,*/
			'noseri'=> $noseri,
			'tipe'=> $tipe,
			'model'=> $model,
			'noinventory'=> $noinventory,
			'tgldipasang'=> $tgldipasang,
			'trakhir_diperbaiki'=> $trakhirdiperbaiki

		);
		$this->db->where('id',$id);
		$this->db->update('tb_aset', $data);
		//print_r($this->input->post());	
	}

	public function updateLokasi($id,$fakultas_id, $jurusan_id, $lokasi_id){

		$data = array(
			'fakultas_id' => $fakultas_id,
			'jurusan_id' => $jurusan_id,
			'lokasi_id'=> $lokasi_id
		);
		$this->db->where('id',$id);
		$this->db->update('tb_aset', $data);
		//print_r($this->input->post());	
	}


	public function select_all(){
		$this->db->select('*');
		//$this->db->where('aktif', 'ya');
		return $this->db->get('tb_aset');
	}
		
}
