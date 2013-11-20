<?php
class Choco_recipes_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('choco_recipes_model');
	 }

	 function index()
	 {
	 	$data['recipes'] = $this->choco_recipes_model->index();

	 	$this->load->view('web/header');
	 	$this->load->view('web/choco_recipes/index', $data);
	 	$this->load->view('web/footer');
	 }

	  function show($id)
	 {	
	 	$data['recipes'] = $this->choco_recipes_model->index();
	 	$data['recipe'] = $this->choco_recipes_model->show($id);

	 	$this->load->view('web/header');
	 	$this->load->view('web/choco_recipes/show', $data);
	 	$this->load->view('web/footer');	
	 }
}