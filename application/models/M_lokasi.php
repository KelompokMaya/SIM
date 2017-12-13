<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {

	public function selectAll_fakultas(){
		$this->db->select('*');
		//$this->db->where('aktif', 'ya');
		$sql_fakultas= $this->db->get('tb_fakultas');
		if($sql_fakultas->num_rows()>0){

			return $sql_fakultas;
		} 
		
	}
	public function selectAll(){
		$this->db->select('*');
		//$this->db->where('aktif', 'ya');
		return $this->db->get('tb_aset');
		
	}
	public function select_fakultas($kampus_id){
		$this->db->select('*');
		$this->db->where('kampus_id', $kampus_id);
		$sql_fakultas= $this->db->get('tb_fakultas');
		if($sql_fakultas->num_rows()>0){
			return $sql_fakultas;
		} else{
			$result=0;
			return $result;
		}
        
	}

	public function select_jurusan($fakultas_id){
		$this->db->select('*');
		$this->db->where('fakultas_id', $fakultas_id);
		$sql_jurusan= $this->db->get('tb_jurusan');
		if($sql_jurusan->num_rows()>0){
			return $sql_jurusan;
		} else{
			$result=0;
			return $result;
		}
        
	}
	public function select_lokasi($jurusan_id){
		$this->db->select('*');
		$this->db->where('jurusan_id', $jurusan_id);
		$sql_lokasi = $this->db->get('tb_lokasi');
	   if($sql_lokasi->num_rows()>0){
			return $sql_lokasi;
		} else{
			$result=0;
			return $result;
		}
	}

	public function cariKampus($kampus_id){
		$this->db->select('*');
		$this->db->where('kampus_id', $kampus_id);
		return $this->db->get('tb_aset');
	}

	public function cariLokasi($kampus,$fakultas,$jurusan, $lokasi){

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
		
		return $this->db->get('tb_aset');
	}

	public function maps($kampus,$fakultas,$jurusan, $lokasi){
		$this->db->select('lat,lng');
		if ($kampus=='0') {
		}
		elseif ($fakultas=='0') {
			$this->db->where('id_kampus', $kampus);
			return $this->db->get('tb_kampus');

			
		}
		elseif ($jurusan=='0' || $jurusan=='') {
			$this->db->where('id_fakultas', $fakultas);
			return $this->db->get('tb_fakultas');
		}
		elseif ($lokasi=='0' || $lokasi=='') {
			$this->db->where('id_jurusan', $jurusan);
			return $this->db->get('tb_jurusan');
		}
		else{
			$this->db->where('id_lokasi', $lokasi);
			return $this->db->get('tb_lokasi');
		}
		
	}


	public function deletelokasi($fakultas,$jurusan, $lokasi){
		if ($jurusan=='0'|| $jurusan=='') {
		$this->db->where('fakultas_id', $fakultas);
		$this->db->delete('tb_lokasi');

		$this->db->where('fakultas_id', $fakultas);
		$this->db->delete('tb_jurusan');

		$this->db->where('id_fakultas', $fakultas);
		$this->db->delete('tb_fakultas');
		//$this->index(); 
		}
		elseif ($lokasi=='0' || $lokasi=='') {
		$this->db->where('jurusan_id', $jurusan);
		$this->db->delete('tb_lokasi');

		$this->db->where('id_jurusan', $jurusan);
		$this->db->delete('tb_jurusan');
		//$this->index();
		
		}else{
		$this->db->where('id_lokasi', $lokasi);
		$this->db->delete('tb_lokasi');
		//$this->index(); 
		}
	}

}