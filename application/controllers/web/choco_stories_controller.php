<?php
class Choco_stories_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('choco_stories_model');
	 }

	 function index()
	 {
	 	$data['stories'] = $this->choco_stories_model->index();

	 	$this->load->view('web/header');
	 	$this->load->view('web/choco_stories/index', $data);
	 	$this->load->view('web/footer');
	 }

	  function show($id)
	 {
	 	$data['stories'] = $this->choco_stories_model->index();
	 	$data['story'] = $this->choco_stories_model->show($id);

	 	$this->load->view('web/header');
	 	$this->load->view('web/choco_stories/show', $data);
	 	$this->load->view('web/footer');	
	 }
}