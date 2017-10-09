<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lokasi extends CI_Model {

	public function select_fakultas(){
		$this->db->select('*');
		//$this->db->where('aktif', 'ya');
		$sql_fakultas= $this->db->get('tb_fakultas');
		if($sql_fakultas->num_rows()>0){

			return $sql_fakultas;
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

}