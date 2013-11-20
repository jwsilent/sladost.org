<?php
class Catalogue_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('categories_model');
	 	$this->load->model('items_model');
	 	$this->load->model('cart_model');
	 }

	 function index()
	 {
	 	$data['categories'] = $this->categories_model->index();
	 	$data['items'] = $this->items_model->index_last_ten();

	 	$this->load->view('web/header');
	 	$this->load->view('web/catalogue/index', $data);
	 	$this->load->view('web/footer');
	 }

	 function index_by_category()
	 {
	 	$post_data = $_POST['category_id'];
	 	$data['items'] = $this->items_model->index_by_category($post_data);
	 	$data['category'] = $this->categories_model->show($post_data);
	 	echo ($this->load->view('web/catalogue/items', $data));
	 }

	 function add_to_cart()
	 {
		$this->cart_model->create($_POST['item_id'], $_POST['user_id'], $_POST['price']);
	 }
}