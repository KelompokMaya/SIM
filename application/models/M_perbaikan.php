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

	public function create($id_aset, $tgl_perbaikan, $status){
		$data = array(
			'aset_id' => $id_aset,
			'tgl_perbaikan' => $tgl_perbaikan,
			'status' => $status
		);
		$this->db->insert('tb_listperbaikan', $data);
	}
}