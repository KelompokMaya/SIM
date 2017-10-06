<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function getAdminLogin($user,$pass)
	{
		$this->db->select('id,fullname,username');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tb_user');
	} 
	

}

