<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model {

	public function select_all(){
		/*$this->db->select('*');
		$this->db->from('tb_history');
		$this->db->join('tb_kampus', 'tb_kampus.id_kampus = tb_history.awal_kampus_id','left');
		$this->db->join('tb_fakultas', 'tb_fakultas.id_fakultas = tb_history.awal_fakultas_id','left');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_history.awal_jurusan_id','left');
		$this->db->join('tb_lokasi', 'tb_lokasi.id_lokasi = tb_history.awal_lokasi_id', 'left');
		return $this->db->get(); */


		return $this->db->query('select nama_aset,aset_id, tanggal_pindah,
		(select nama_kampus from tb_kampus where id_kampus=awal_kampus_id) as awal_kampus,
		(select nama_fakultas from tb_fakultas where id_fakultas=awal_fakultas_id) as awal_fakultas, 
		(select nama_jurusan from tb_jurusan where id_jurusan=awal_jurusan_id) as awal_jurusan,
		(select nama_lokasi from tb_lokasi where id_lokasi=awal_lokasi_id) as awal_lokasi,
		(select nama_kampus from tb_kampus where id_kampus=sekarang_kampus_id) as sekarang_kampus,
		(select nama_fakultas from tb_fakultas where id_fakultas=sekarang_fakultas_id) as sekarang_fakultas, 
		(select nama_jurusan from tb_jurusan where id_jurusan=sekarang_jurusan_id) as sekarang_jurusan,
		(select nama_lokasi from tb_lokasi where id_lokasi=sekarang_lokasi_id) as sekarang_lokasi
		from tb_history order by id desc;'); 

	}

}