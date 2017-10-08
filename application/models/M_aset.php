<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aset extends CI_Model {

	public function insert($title, $body) {
		$slug=$this->slugify($title);
		$this->db->select('COUNT(id) as count');
		$this->db->where('slug', $slug);
		$count=$this->db->get('article')->row()->count;
		$slug=$count>0?$slug.'-'.$count: $slug;

		$object=array('title'=>$title, 'slug'=>$slug, 'body'=>$body, 'author'=>1);
		$this->db->insert('article', $object);

		return;
	}
}
