<?php
class Categories_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	if ( !$this->session->userdata('is_admin') ) {
	 		redirect('admin/login');
	 	}
	 	$this->load->model('categories_model');
	 }

	 function index()
	 {
	 	$data['categories'] = $this->categories_model->index();

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/categories/index', $data);
	 	$this->load->view('admin/footer');
	 }

	  function show($id)
	 {
	 	$data['category'] = $this->categories_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/categories/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_category()
	 {	
	 	$categories = $this->categories_model->index();
	 	$data['options'] = array('0' => 'В корень');

	 	foreach($categories as $category)
	 	{
	 		$data['options'][$category['id']] = $category['title'];
	 	}

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/categories/new', $data);
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	

	 	$categories = $this->categories_model->index();
	 	$data['options'] = array('0' => 'В корень');

	 	foreach($categories as $category)
	 	{
	 		$data['options'][$category['id']] = $category['title'];
	 	}
	 	
	 	$data['category'] = $this->categories_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/categories/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->categories_model->delete($id);
		redirect('/admin/categories', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();
	 	$this->categories_model->create($data);
		redirect('/admin/categories', 'refresh');
	 }

	 function update()
	 {
	 	$data = $this->input->post();
	 	$this->categories_model->update($data);
		redirect('/admin/categories/'. $data['id'], 'refresh');
	 }
}