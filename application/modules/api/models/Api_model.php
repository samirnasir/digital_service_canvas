<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Api_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_all(){
    return $this->db->get('view_api')->result();
  }

  function save_api($data){
    $this->db->insert('api', $data);
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah ditambah</div>');
  }

  function update_api($data){
    $this->db->update('api', $data, array('id_api' => $data['id_api']));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dirubah</div>');
  }

  function delete_api($id){
    $this->db->delete('api', array('id_api' => $id));
    $this->session->set_flashdata('alert','<div class="alert alert-info"><i class="fa fa-check-circle"></i> Data telah dihapus</div>');
  }

  function get_by($id){
    return $this->db->get_where('api', array('id_api' => $id))->row();
  }

  function save_mashup($data){
    $this->db->insert('mashup_api', $data);
}
}
