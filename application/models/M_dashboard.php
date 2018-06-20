<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function jmlUser(){
		$query = $this->db->query('SELECT COUNT(id) AS num FROM tb_user');
		return $query->row()->num;

	}
	public function jmlAset(){
		$query = $this->db->query('SELECT COUNT(id_aset) AS num FROM tb_aset');
		return $query->row()->num;

	}
	public function jmlTiketSelesai(){
		$query = $this->db->query('SELECT COUNT(id_perbaikan) AS num  FROM tb_listperbaikan WHERE status="selesai"');
		return $query->row()->num;

	}
	public function jmlTiket(){
		$query = $this->db->query('SELECT COUNT(id_perbaikan) AS num  FROM tb_listperbaikan');
		return $query->row()->num;

	}
	// public function grafik(){
	// 	$query = $this->db->query("SELECT fakultas_id FROM tb_aset HAVING COUNT((fakultas_id) > 1)");
          
 //        if($query->num_rows() > 0){
 //            foreach($query->result() as $data){
 //                $hasil[] = $data;
 //            }
 //            return $hasil;
 //        }

	// }

}
