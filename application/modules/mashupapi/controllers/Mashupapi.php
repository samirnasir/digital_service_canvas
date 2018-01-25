<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mashupapi extends MX_Controller{
  function __construct(){
    parent:: __construct();
	  $this->load->library('form_validation');
    $this->load->model('mashupapi_model');
  }

  public function index(){
    $model ['model'] = $this->mashupapi_model->get_all();
	  $data ['content'] = $this->load->view('mashupapi_view',$model,TRUE);
	  $this->load->admin('template', $data);
  }
}
