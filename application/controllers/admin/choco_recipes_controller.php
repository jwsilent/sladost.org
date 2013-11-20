<?php
class Choco_recipes_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	if ( !$this->session->userdata('is_admin') ) {
	 		redirect('admin/login');
	 	}
	 	$this->load->model('choco_recipes_model');
	 }

	 function index()
	 {
	 	$data['recipes'] = $this->choco_recipes_model->index();

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_recipes/index', $data);
	 	$this->load->view('admin/footer');
	 }

	 function show($id)
	 {
	 	$data['recipe'] = $this->choco_recipes_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_recipes/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_recipe()
	 {	
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_recipes/new');
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	
	 	$data['recipe'] = $this->choco_recipes_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_recipes/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->choco_recipes_model->delete($id);
		redirect('/admin/choco_recipes', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();
	 	$this->choco_recipes_model->create($data['title'], $data['body']);
		redirect('/admin/choco_recipes', 'refresh');
	 }

	 function update()
	 {
	 	$data = $this->input->post();
	 	$this->choco_recipes_model->update($data);
		redirect('/admin/choco_recipes/'. $data['id'], 'refresh');
	 }
}