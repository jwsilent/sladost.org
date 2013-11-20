<?php
class Main_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('carousel_model');
	 	$this->load->model('items_model');
	 }

	 function index()
	 {
	 	$data['carousels'] = $this->carousel_model->index_last_five();
	 	$data['items'] = $this->items_model->index_last_ten();

	 	$this->load->view('web/header');
	 	$this->load->view('web/main/carousel', $data);
	 	$this->load->view('web/main/catalogue', $data);
	 	$this->load->view('web/main/moto');
	 	$this->load->view('web/main/about');
	 	$this->load->view('web/main/delivery');
	 	$this->load->view('web/footer');
	 }

	 function reserve_call()
	 {
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

        $this->email->subject('Заказан звонок');
        $this->email->message($this->input->post('phone'));

        $this->email->send();
        redirect('');
	 }

}