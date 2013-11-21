<?php
class Carousel_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	if ( !$this->session->userdata('is_admin') ) {
	 		redirect('admin/login');
	 	}
	 	$this->load->model('carousel_model');
	 }

	 function index()
	 {
	 	$data['carousels'] = $this->carousel_model->index();

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/carousel/index', $data);
	 	$this->load->view('admin/footer');
	 }

	  function show($id)
	 {
	 	$data['carousel'] = $this->carousel_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/carousel/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_carousel()
	 {	
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/carousel/new');
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	
	 	$data['carousel'] = $this->carousel_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/carousel/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->carousel_model->delete($id);
		redirect('/admin/carousel', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();

	 	$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/assets/uploads/carousel';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '6000';
		$config['max_height']  = '6000';


		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$upload_data = $this->upload->data();
		$data['photo_url'] = $upload_data['file_name'];
	 	$this->carousel_model->create($data);
		redirect('/admin/carousel', 'refresh');
	 }

	 function update()
	 {
	 	$data = $this->input->post();
	 	$this->carousel_model->update($data);
		redirect('/admin/carousel/'. $data['id'], 'refresh');
	 }
}