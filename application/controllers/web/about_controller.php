<?php
class About_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 }

	 function index()
	 {
	 	$this->load->view('web/header');
	 	$this->load->view('web/about/index');
	 	$this->load->view('web/footer');
	 }

	 function feedback()
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

	 	$this->email->from('mamonov.nick@gmail.com', 'Обратная связь');
        $this->email->to('mamonov.nick@gmail.com'); 

        $this->email->subject('Обратная связь');
        $this->email->message("Имя: \n".$this->input->post('name')."\n Тема: \n".$this->input->post('subject')."\n Обращение: \n".$this->input->post('body'));
        $this->email->send();
        redirect('/about');
	 }
}