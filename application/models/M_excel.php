<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_excel extends CI_Model {

	public function listing()
	{
		

		return $this->db->query('select *,
		(select nama_kampus from tb_kampus where id_kampus=kampus_id) as kampus,
		(select nama_fakultas from tb_fakultas where id_fakultas=fakultas_id) as fakultas, 
		(select nama_jurusan from tb_jurusan where id_jurusan=jurusan_id) as jurusan,
		(select nama_lokasi from tb_lokasi where id_lokasi=lokasi_id) as lokasi
		from tb_aset ;')->result();
	} 

}