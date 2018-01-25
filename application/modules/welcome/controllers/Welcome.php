<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	 public function __construct(){
		 parent:: __construct();
		if(!$this->ion_auth->logged_in())
        {
            redirect(site_url('login'));
        }

		$this->load->model('welcome_model');
	 }

	public function index()
	{
		$id = get_user('id');
		$data['title'] = 'Dashboard';
		$model['model'] = $this->welcome_model->get_by($id);
		$content['content']=$this->load->view('home_view',$model,TRUE);
		$this->load->admin('template', $content);
	}
}
