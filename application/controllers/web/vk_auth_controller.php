<?php
class Vk_auth_controller extends CI_Controller {
	 
	 public function __construct()
	 {	 	
	 	parent::__construct();
	 	session_start();
	 	define('VK_APP_ID', '4010067');
    define('VK_APP_SECRET', 'E2RG4d5lQJmgIIMWbXVz');
    define('VK_URL_CALLBACK', 'http://sladost.org');
    define('VK_URL_ACCESS_TOKEN', 'https://oauth.vk.com/access_token');
    define('VK_URL_AUTHORIZE', 'https://oauth.vk.com/authorize');
    define('VK_URL_GET_PROFILES', 'https://api.vk.com/method/getProfiles');
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
                  ->verify_user(
                     $this->input->post('email'), 
                     $this->input->post('password')
                  );

         if ( isset($res) ) {
            $userdata = array('email' => $res->email, 'username' => $res->username, 'is_logged_in' => TRUE, 'user_id' => $res->id);
            $this->session->set_userdata($userdata);
            redirect('');
         }

      }

      $this->load->view('web/header');
      $this->load->view('web/sign_in/index');
      $this->load->view('web/footer');
	 }

    function logout()
    {
      session_destroy();
      $this->session->unset_userdata('is_logged_in');
      redirect('');
    }
}