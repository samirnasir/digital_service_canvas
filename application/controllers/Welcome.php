<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct()
	{
		parent:: __construct();
		if(!$this->ion_auth->logged_in())
        {
            redirect(site_url('login'));
        }
		
		$this->load->model('welcome_model');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$model['model'] = $this->welcome_model->get_all();
		$data['content'] = $this->load->view('index',$model, TRUE);
		$this->load->admin('template', $data);
	}
}
