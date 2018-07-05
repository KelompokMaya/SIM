<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perbaikan extends CI_Model {

	public function select_all(){
		// $this->db->select('*');
		// $this->db->where('id_aset',$id);
		// return $this->db->get('tb_aset');
		$hak_akses= $this->session->userdata('hak_akses');

		if ($hak_akses=='Admin') {
			return $this->db->query('select *, 
		
		(select nama from tb_aset where id_aset=aset_id) as nama_aset,
		(select tipe from tb_aset where id_aset=aset_id) as tipe_aset
		from tb_historyperbaikan  order by id_perbaikan desc '); 
		} else{
		$id=$this->session->userdata('id');
		return $this->db->query('select *, 
		
		(select nama from tb_aset where id_aset=aset_id) as nama_aset,
		(select tipe from tb_aset where id_aset=aset_id) as tipe_aset
		from tb_historyperbaikan where teknisi_id='.$id.'  order by id_perbaikan desc '); 
		}
		
	}

	public function create($id_aset, $tgl_perbaikan,$id_teknisi, $status,$catatan){
		$data = array(
			'aset_id' => $id_aset,
			'tgl_perbaikan' => $tgl_perbaikan,
			'teknisi_id'=> $id_teknisi,
			'status' => $status,
			'catatan' => $catatan,
			
		);
		$this->db->insert('tb_historyperbaikan', $data);
	}

	public function update_status($id_aset, $status){
		$data = array(
			'status' => $status
		);
		$this->db->where('id_aset',$id_aset);
		$this->db->update('tb_aset', $data);
	}
	public function update_dokumen($id_perbaikan, $id_dokumen){
		$data = array(
			'dokumen_id' => $id_dokumen
		);
		$this->db->where('id_perbaikan',$id_perbaikan);
		$this->db->update('tb_historyperbaikan', $data);
	}

	public function perbaikanSelesai($id, $tgl_selesai, $status){
		$data = array(
			'tgl_selesai' => $tgl_selesai,
			'status' => $status,
		);
		$this->db->where('id_perbaikan',$id);
		$this->db->update('tb_historyperbaikan', $data);
	}

	public function select($id_perbaikan){
		$this->db->select('catatan,dokumen_id');
		$this->db->where('id_perbaikan', $id_perbaikan);
		$query= $this->db->get('tb_historyperbaikan');
		return $query;
	}

	public function select_catatan($id_perbaikan){
		$this->db->select('*');
		$this->db->where('id_perbaikan', $id_perbaikan);
		return $this->db->get('tb_historyperbaikan');
	}
	
	public function select_idAset($id_perbaikan){
		$this->db->select('aset_id');
		$this->db->where('id_perbaikan', $id_perbaikan);
		$query= $this->db->get('tb_historyperbaikan');
		return $query->row()->aset_id;
	}
}