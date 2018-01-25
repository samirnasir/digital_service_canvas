<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Monolithic extends MX_Controller{

  function __construct(){
      parent:: __construct();
      $this->load->model('monolithic_model');
      $this->load->library('form_validation');
  }

  public function index(){
    $model ['model'] = $this->monolithic_model->get_all();
    $data ['content'] = $this->load->view('monolithic_view',$model,TRUE);
		$this->load->admin('template', $data);
  }

  function add_monolithic(){
    $this->form_validation->set_rules('category','category','required');
    $this->form_validation->set_rules('detail','detail','required');
    if($this->form_validation->run()==FALSE){
      $data ['content'] = $this->load->view('add_monolithic','',TRUE);
      $this->load->admin('template', $data);
    }else{
      $save = array(
        'category' => $this->input->post('category'),
        'detail' => $this->input->post('detail')
      );
      $this->monolithic_model->submit_data($save);
     redirect('monolithic');
     $this->session->set_flashdata('succes', 'Data berhasil ditambahkan!');
    }
  }

  public function edit($id)
	{
		$model['monolithic'] = $this->monolithic_model->get_by($id);
    $data ['content'] = $this->load->view('form-edit',$model,TRUE);
		$this->load->admin('template', $data);
	}

  public function update($id){
    $this->form_validation->set_rules('category','category','required');
    $this->form_validation->set_rules('detail','detail','required');
    if($this->form_validation->run()==TRUE){
      $save = array(
        'category' => $this->input->post('category'),
        'detail' => $this->input->post('detail')
      );
      $this->monolithic_model->submit_data($save, $id);
      redirect(site_url('monolithic'));
    }else{
      redirect(site_url('monolithic'));
    }
  }

  public function delete($id)
	{
		$this->db->where('id_monolithic', $id);
		$this->db->delete('api_monolithic');
    redirect('monolithic');
    $this->session->set_flashdata('succes', 'Data berhasil dihapus!');
	}

}
