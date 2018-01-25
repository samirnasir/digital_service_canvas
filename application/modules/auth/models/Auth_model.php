<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Auth_model extends CI_Model{

	function __construct(){
    parent:: __construct();
    $this->load->database();
  }

	function update_password($data){
		$this->db->update('users', $data, array('username' => $data['email']));
		$this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dirubah</div>');
	}

	public function get_by($id){
		return $this->db->get_where('users', array('id' => $id))->row();
	}
}
