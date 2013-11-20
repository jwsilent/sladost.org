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

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/news/index', $data);
	 	$this->load->view('admin/footer');
	 }

	  function show($id)
	 {
	 	$data['news_item'] = $this->news_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/news/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_news_item()
	 {	
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/news/new');
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	
	 	$data['news_item'] = $this->news_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/news/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->news_model->delete($id);
		redirect('/admin/news', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();
	 	$this->news_model->create($data['title'], $data['body']);
		redirect('/admin/news', 'refresh');
	 }

	 function update()
	 {
	 	$data = $this->input->post();
	 	$this->news_model->update($data);
		redirect('/admin/news/'. $data['id'], 'refresh');
	 }
}