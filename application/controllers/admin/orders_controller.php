<?php
class Orders_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	if ( !$this->session->userdata('is_admin') ) {
	 		redirect('admin/login');
	 	}
	 	$this->load->model('orders_model');
	 }

	 function index()
	 {
	 	$data['orders'] = $this->orders_model->index();

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/orders/index', $data);
	 	$this->load->view('admin/footer');
	 }

	  function show($id)
	 {
	 	$model_data = $this->orders_model->show($id);
	 	$data['order'] = $model_data['order'];
	 	$data['items'] = $model_data['items'];
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/orders/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_orders_item()
	 {	
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/orders/new');
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	
	 	$data['orders_item'] = $this->orders_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/orders/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->orders_model->delete($id);
		redirect('/admin/orders', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();
	 	$this->orders_model->create($data['title'], $data['body']);
		redirect('/admin/orders', 'refresh');
	 }

	 function close($id)
	 {
	 	$this->orders_model->close($id);
	 	redirect('/admin/orders', 'refresh');
	 }

	 function update()
	 {
	 	$data = $this->input->post();
	 	$this->orders_model->update($data);
		redirect('/admin/orders/'. $data['id'], 'refresh');
	 }
}