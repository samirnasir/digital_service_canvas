<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Monolithic_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_all(){
    return $this->db->get('api_monolithic')->result();
  }

  function submit_data($data, $id=false){
    if($id){
      $this->db->where('id_monolithic', $id);
      $this->db->update('api_monolithic', $data);
      $this->session->set_flashdata('sukses', 'Data berhasil dirubah!');
    }else{
      $this->db->set($data);
      $this->db->insert('api_monolithic', $data);
      $this->session->set_flashdata('sukses', 'Data berhasil ditambah!');
    }
  }

  function get_by($id){
    return $this->db->get_where('api_monolithic', array('id_monolithic' => $id))->row();
  }

}
