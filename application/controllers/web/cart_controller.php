<?php
class Cart_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('cart_model');
	 	$this->load->model('orders_model');
	 }

	 function index()
	 {
	 	if ( !$this->session->userdata('is_logged_in') ) {
	 		redirect('login');
	 	}

	 	$data['cart_items'] = $this->cart_model->index();

	 	$this->load->view('web/header');
	 	$this->load->view('web/cart/index', $data);
	 	$this->load->view('web/footer');
	 }

	 function delete()
	 {
	 	$this->cart_model->delete($_POST['id']);
	 }

	 function empty_cart()
	 {
	 	$this->cart_model->delete_by_user($this->session->userdata('user_id'));
	 	redirect('cart');
	 }

	 function make_order()
	 {
	 	$data['user_id'] = $this->session->userdata('user_id');
	 	$order_id = $this->orders_model->create($data);
	 	$items = $this->cart_model->fetch_by_user_order($data['user_id']);
	 	foreach ($items as $item) :
	 		$this->cart_model->set_order($item['id'], $order_id);
	 	endforeach;

	 	$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'mamonov.nick@gmail.com',
			'smtp_pass' => 'stopit311',
			'mailtype'  => 'html', 
			'charset'   => 'utf-8'
		);
	 	
	 	$this->load->library('email', $config);
	 	$this->email->set_newline("\r\n");

	 	$this->email->from('mamonov.nick@gmail.com', 'Заказан звонок');
        $this->email->to('mamonov.nick@gmail.com'); 

        $this->email->subject('Сделан заказ');
        $this->email->message('Сделан новый заказ! Ознакомьтесь с подробностями в панели администратора!');

        $this->email->send();

	 	redirect('');
	 }

}