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

}
