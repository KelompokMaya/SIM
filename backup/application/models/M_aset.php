<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aset extends CI_Model {

	public function select($id){
		$this->db->select('*');
		$this->db->where('id_aset',$id);
		return $this->db->get('tb_aset');

		/* $this->db->select('*');
		$this->db->from('tb_aset');
		$this->db->join('tb_fakultas', 'tb_fakultas.id = tb_aset.fakultas_id');
		$this->db->join('tb_jurusan', 'tb_jurusan.id = tb_aset.jurusan_id');
		$this->db->join('tb_lokasi', 'tb_lokasi.id = tb_aset.lokasi_id', 'left');
		$this->db->where('tb_aset.id',$id);
		return $this->db->get();*/
	}

	public function select_aset($id_aset){
		return $this->db->query("select *, 
		
		(select nama_kampus from tb_kampus where id_kampus=kampus_id) as kampus,
		(select nama_fakultas from tb_fakultas where id_fakultas=fakultas_id) as fakultas, 
		(select nama_jurusan from tb_jurusan where id_jurusan=jurusan_id) as jurusan,
		(select nama_lokasi from tb_lokasi where id_lokasi=lokasi_id) as lokasi
		from tb_aset where id_aset='".$id_aset."' "); 
	}

	public function currLokasi($id){
		$this->db->select('*');
		$this->db->from('tb_aset');
		$this->db->join('tb_kampus', 'tb_kampus.id_kampus = tb_aset.kampus_id','left');
		$this->db->join('tb_fakultas', 'tb_fakultas.id_fakultas = tb_aset.fakultas_id','left');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_aset.jurusan_id','left');
		$this->db->join('tb_lokasi', 'tb_lokasi.id_lokasi = tb_aset.lokasi_id', 'left');
		$this->db->where('tb_aset.id_aset',$id);
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
		$this->db->where('id_aset',$id);
		$this->db->update('tb_aset', $data);
		//print_r($this->input->post());	
	}

	public function updateLokasi($id,$nama_aset,$curr_kampus,$curr_fakultas,$curr_jurusan,$curr_lokasi,$kampus_id,$fakultas_id, $jurusan_id, $lokasi_id,$tanggal_pindah){

		$data = array(
			'kampus_id' => $kampus_id,
			'fakultas_id' => $fakultas_id,
			'jurusan_id' => $jurusan_id,
			'lokasi_id'=> $lokasi_id
		);
		$this->db->where('id_aset',$id);
		$this->db->update('tb_aset', $data);


		$data_history = array(
			'aset_id' => $id,
			'nama_aset' => $nama_aset,
			'awal_kampus_id' => $curr_kampus,
			'awal_fakultas_id' => $curr_fakultas,
			'awal_jurusan_id' => $curr_jurusan,
			'awal_lokasi_id'=> $curr_lokasi,
			'sekarang_kampus_id' => $kampus_id,
			'sekarang_fakultas_id' => $fakultas_id,
			'sekarang_jurusan_id' => $jurusan_id,
			'sekarang_lokasi_id'=> $lokasi_id,
			'tanggal_pindah'=> $tanggal_pindah);
		$this->db->insert('tb_history', $data_history);
		//print_r($this->input->post());	
	}


	public function select_all(){
		$this->db->select('*');
		$this->db->order_by('id_aset', 'DESC');
		//$this->db->where('aktif', 'ya');
		return $this->db->get('tb_aset');
	}
		
}
