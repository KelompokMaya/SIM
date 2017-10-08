<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');

		if (!$this->session->userdata('isLoggedIn')){
			$this->load->view('admin/v_redirect_login');
			return;
		}
	}
	
	public function index(){
		$data['user']=$this->M_admin->select_all();
		$this->load->view('admin/v_user', $data);

	}
	public function select($id){
		$user=$this->M_admin->select($id)->row();
		echo json_encode($user);
	}

	public function create() {
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$pass = $this->input->post('password');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$lokasi = $this->input->post('lokasi');
		$aktif = 'ya';
		
		$this->M_admin->create($username, $fullname,$pass, $email,$phone,$lokasi,$aktif);
		$this->index();
	}

	public function update(){
		$id= $this->input->post('id');
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		//$pass = $this->input->post('password');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$lokasi = $this->input->post('lokasi');
		$aktif = $this->input->post('aktif');
		
		$this->M_admin->update($id,$username, $fullname, $email,$phone,$lokasi,$aktif);
		$this->index();

	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tb_user');
		$this->index();

	}
}
