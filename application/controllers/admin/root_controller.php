<?php
class Root_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 }

	 function index()
	 {
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/index');
	 	$this->load->view('admin/footer');
	 }
}