<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function login()
    {
        $this->form_validation->set_rules('identity', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == TRUE)
        {
            $identity = $this->input->post('identity');
            $password = $this->input->post('password');
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($identity, $password, $remember))
            {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect(site_url('welcome'));
            }
            else
            {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect(site_url('login'));
            }
        }
        else
        {
            $this->load->admin('login');
        }
    }

    public function forgot($id){
      $model['model'] = $this->auth_model->get_by($id);
      $data ['content'] = $this->load->view('forgot_password',$model,TRUE);
      $this->load->admin('template', $data);
    }

    public function logout()
    {
        $this->ion_auth->logout();
        redirect(site_url('login'));
    }

    public function rp(){
      $id = get_user('id');
      $model['model'] = $this->auth_model->get_by($id);
      $data ['content'] = $this->load->view('after_reset',$model,TRUE);
      $this->load->admin('template', $data);

    }


    public function reset($id){
      $this->form_validation->set_rules('password','password','required');
      if($this->form_validation->run()==TRUE){
        $save = array(
          'password' => $this->input->post('password')
        );
      $this->ion_auth->update($id, $save);
      redirect(site_url('auth/rp'));
    }else{
      redirect(site_url('api'));
    }
}
}
