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
	public function select_all(){
		$this->db->select('*');
		//$this->db->where('aktif', 'ya');
		return $this->db->get('tb_user');
	}
	public function select($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('tb_user');
	}

	public function create($username, $fullname, $pass, $email, $phone, $lokasi, $aktif){
		$password = md5($pass);
		$data = array(
			'username' => $username,
			'fullname' => $fullname,
			'password' => $password,
			'email' => $email,
			'phone' => $phone,
			'lokasi'=> $lokasi,
			'aktif'=> $aktif
		);
		$this->db->insert('tb_user', $data);
		//return ($this->db->affected_rows() != 1) ? 'failed' : 'success';
	}
	public function update($id, $username, $fullname, $email, $phone, $lokasi, $aktif){
		$data=array(
			'username' => $username,
			'fullname' => $fullname,
			'email' => $email,
			'phone' => $phone,
			'lokasi'=> $lokasi,
			'aktif'=> $aktif

		);
		$this->db->where('id',$id);
		$this->db->update('tb_user',$data);

	}
	

}

