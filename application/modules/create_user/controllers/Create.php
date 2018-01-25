<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        #$this->load->library('form_validation');
    }

    public function index()
	{

		$username = 'admin';
		$password = 'password';
		$email = 'admin@gmail.com';
		$additional_data = array(
								'active' => '1'
								);
		$group = array('1'); // Sets user to admin.

		$this->ion_auth->register($username, $password, $email, $additional_data, $group);




	}
}
