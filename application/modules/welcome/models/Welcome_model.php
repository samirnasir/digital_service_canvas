<?php

class Welcome_model extends CI_Model{
  function __construct(){
    parent:: __construct();
    $this->load->database();
  }

  function get_by($id){
    return $this->db->get_where('users', array('id' => $id))->row();
  }

}
