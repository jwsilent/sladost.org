<?php
class News_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('news_model');
	 }

	 function index()
	 {
	 	$data['news'] = $this->news_model->index();

	 	$this->load->view('web/header');
	 	$this->load->view('web/news/index', $data);
	 	$this->load->view('web/footer');
	 }

	  function show($id)
	 {	
	 	$data['news'] = $this->news_model->index();
	 	$data['news_item'] = $this->news_model->show($id);

	 	$this->load->view('web/header');
	 	$this->load->view('web/news/show', $data);
	 	$this->load->view('web/footer');	
	 }
}