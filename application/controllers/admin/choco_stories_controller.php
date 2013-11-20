<?php
class Choco_stories_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('choco_stories_model');
	 }

	 function index()
	 {
	 	$data['choco_stories'] = $this->choco_stories_model->index();

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_stories/index', $data);
	 	$this->load->view('admin/footer');
	 }

	 function show($id)
	 {
	 	$data['story'] = $this->choco_stories_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_stroies/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_story()
	 {	
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_stroies/new');
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	
	 	$data['story'] = $this->choco_stories_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/choco_stories/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->choco_stories_model->delete($id);
		redirect('/admin/choco_stories', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();
	 	$this->choco_stories_model->create($data['title'], $data['body']);
		redirect('/admin/choco_stories', 'refresh');
	 }

	 function update()
	 {
	 	$data = $this->input->post();
	 	$this->choco_stroies_model->update($data);
		redirect('/admin/choco_stories/'. $data['id'], 'refresh');
	 }
}