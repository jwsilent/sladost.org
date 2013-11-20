<?php
class Registration_controller extends CI_Controller {
	 
	 public function __construct()
	 {	 	
	 	parent::__construct();
	 	session_start();
	 	$this->load->model('users_model');
	 }

	 public function index()
	 {

	 	if ( isset($_SESSION['username']) ) {
        	redirect('');
      	}

      	$this->load->library('form_validation');
      	$this->form_validation->set_rules('username', 'Имя пользователя', 'required');
      	$this->form_validation->set_rules('email', 'Адрес эл. почты', 'valid_email|required');
      	$this->form_validation->set_rules('password', 'Пароль', 'required|min_length[4]');

      	if ( $this->form_validation->run() !== false ) {
        	$this->load->model('users_model');
         	$res = $this
                  	->users_model
                  	->create(
                  		$this->input->post('username'),
                     	$this->input->post('email'), 
                     	$this->input->post('password')
                  	);

         if ($res) {
            $us = $this->users_model->show($res);
            $userdata = array('email' => $us->email, 'username' => $us->username, 'is_logged_in' => TRUE, 'user_id' => $us->id);
            $this->session->set_userdata($userdata);
            redirect('');
         }

      }
      $this->load->view('web/header');
      $this->load->view('web/sign_up/index');
      $this->load->view('web/footer');
	 }
}