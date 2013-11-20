<?php
class Items_controller extends CI_Controller {
	 
	 public function __construct()
	 {
	 	parent::__construct();
	 	if ( !$this->session->userdata('is_admin') ) {
	 		redirect('admin/login');
	 	}
	 	$this->load->model('items_model');
	 	$this->load->model('categories_model');
	 }

	 function index()
	 {
	 	$categories = $this->categories_model->index();
	 	$data['options'] = array('0' => 'Корень');
	 	
	 	foreach($categories as $category)
	 	{
	 		$data['options'][$category['id']] = $category['title'];
	 	}
	 	$data['items'] = $this->items_model->index();

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/items/index', $data);
	 	$this->load->view('admin/footer');
	 }

	 function index_by_category()
	 {	

	 	$data = $this->input->post();
	 	$categories = $this->categories_model->index();
	 	$data['options'] = array('0' => 'Корень');

	 	foreach($categories as $category)
	 	{
	 		$data['options'][$category['id']] = $category['title'];
	 	}
	 	$data['items'] = $this->items_model->index_by_category($data['category_id']);
	
	 	$this->load->view('admin/header');
	 	$this->load->view('admin/items/index', $data);
	 	$this->load->view('admin/footer');
	 }

	  function show($id)
	 {
	 	$data['item'] = $this->items_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/items/show', $data);
	 	$this->load->view('admin/footer');	
	 }

	 function new_item()
	 {	
	 	$categories = $this->categories_model->index();

	 	foreach($categories as $category)
	 	{
	 		$data['options'][$category['id']] = $category['title'];
	 	}

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/items/new', $data);
	 	$this->load->view('admin/footer');
	 }

	 function edit($id)
	 {	
	 	$categories = $this->categories_model->index();
	 	foreach($categories as $category)
	 	{
	 		$data['options'][$category['id']] = $category['title'];
	 	}

	 	$data['item'] = $this->items_model->show($id);

	 	$this->load->view('admin/header');
	 	$this->load->view('admin/items/edit', $data);
	 	$this->load->view('admin/footer');
	 }

	 function delete($id)
	 {	
	 	$this->items_model->delete($id);
		redirect('/admin/items', 'refresh');
	 }

	 function create()
	 {
	 	$data = $this->input->post();
	 	$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/sladost.org/assets/uploads/items';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '6000';
		$config['max_height']  = '6000';


		$this->load->library('upload', $config);
		$this->upload->do_upload('photo');
		$upload_data = $this->upload->data();
		$data['photo_url'] = $upload_data['file_name'];

	 	$this->items_model->create($data);
		redirect('/admin/items', 'refresh');
	 }

	 function create_from_xls()
	 {	
	 	$post_data = $this->input->post();

	 	$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . '/sladost.org/assets/uploads/xls';
		$config['allowed_types'] = 'xls|xlsx';

		$this->load->library('upload', $config);
		$this->upload->do_upload('xls_file');
		
		$upload_data = $this->upload->data();
		$this->load->library('Spreadsheet_Excel_Reader');
		
		$uploadpath = $_SERVER['DOCUMENT_ROOT'] . '/sladost.org/assets/uploads/xls/' . $upload_data['file_name'];
		$xls_data = new Spreadsheet_Excel_Reader($uploadpath);
		$data['category_id'] = $post_data['category_id'];
		for($row = 2; $row < $xls_data->rowcount(0); $row++)
		{
			for($col = 1; $col <= $xls_data->colcount(0); $col++)
			{
				switch ($col) 
            	{
					case 1:
    				$data['title'] = $xls_data->val($row, $col);
    				break;
					case 2:
    				$data['size'] = $xls_data->val($row, $col);
    				break;
					case 3:
    				$data['weight'] = $xls_data->val($row, $col);
    				break;
    				case 4:
    				$data['price'] = $xls_data->val($row, $col);
    				break;
    				case 5:
    				$data['description'] = $xls_data->val($row, $col);
    				break;
				}
			}
			$this->items_model->create($data);
		}
		
		$this->load->helper("file");
		unlink($uploadpath); 
		
	 	redirect('/admin/items', 'refresh'); 
	 	// First get the xls (upload or not?)
	 	// Parse it and get every required row into data array
	 	// Create cycle that calls create method from items_model with parametrs in each row
	 	// Delete uploaded xls (if it has been uploaded)
	 	// Profit
	 }

	 function update()
	 {
	 	$data = $this->input->post();

	 	$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/sladost.org/assets/uploads/items';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '6000';
		$config['max_height']  = '6000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('photo');
		$upload_data = $this->upload->data();
		$data['photo_url'] = $upload_data['file_name'];


	 	$this->items_model->update($data);
		redirect('/admin/items/'. $data['id'], 'refresh');
	 }
}