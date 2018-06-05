<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perbaikan extends CI_Model {

	public function select_all(){
		// $this->db->select('*');
		// $this->db->where('id_aset',$id);
		// return $this->db->get('tb_aset');

		return $this->db->query('select *, 
		
		(select nama from tb_aset where id_aset=aset_id) as nama_aset,
		(select tipe from tb_aset where id_aset=aset_id) as tipe_aset
		from tb_listperbaikan  order by id_perbaikan desc '); 
	}

	public function create($id_aset, $tgl_perbaikan,$id_teknisi, $status){
		$data = array(
			'aset_id' => $id_aset,
			'tgl_perbaikan' => $tgl_perbaikan,
			'teknisi_id'=> $id_teknisi,
			'status' => $status
		);
		$this->db->insert('tb_listperbaikan', $data);
	}

	public function update_status($id_aset, $status){
		$data = array(
			'status' => $status
		);
		$this->db->where('id_aset',$id_aset);
		$this->db->update('tb_aset', $data);
	}

	public function perbaikanSelesai($id, $tgl_selesai, $status,$catatan){
		$data = array(
			'tgl_selesai' => $tgl_selesai,
			'status' => $status,
			'catatan' => $catatan
		);
		$this->db->where('id_perbaikan',$id);
		$this->db->update('tb_listperbaikan', $data);
	}

	public function select($id){
		$this->db->select('catatan');
		$this->db->from('tb_listperbaikan');
		$this->db->where('id_perbaikan',$id);
		return $this->db->get();
	}
}