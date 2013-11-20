<?php
class Login_controller extends CI_Controller {
	 
	 public function __construct()
	 {	 	
	 	parent::__construct();
	 	session_start();
	 	$this->load->model('users_model');
	 }

	 function index()
	 {

	 	 if ( isset($_SESSION['username']) ) {
         redirect('');
      }

      $this->load->library('form_validation');
      $this->form_validation->set_rules('email', 'Адрес эл. почты', 'valid_email|required');
      $this->form_validation->set_rules('password', 'Пароль', 'required|min_length[4]');

      if ( $this->form_validation->run() !== false ) {
         // then validation passed. Get from db
         $this->load->model('users_model');
         $res = $this
                  ->users_model
                  ->verify_admin(
                     $this->input->post('email'), 
                     $this->input->post('password')
                  );

         if ($res) {
            $userdata = array('email' => $res->email, 'username' => $res->username, 'is_admin' => TRUE, 'is_logged_in' => TRUE, 'user_id' => $res->id);
            $this->session->set_userdata($userdata);
            redirect('admin');
         }

      }

      $this->load->view('admin/header');
      $this->load->view('admin/sign_in/index');
      $this->load->view('admin/footer');
	 }

    function logout()
    {
      session_destroy();
      $this->session->unset_userdata('is_admin');
      $this->session->unset_userdata('is_logged_in');
      redirect('admin');
    }
}