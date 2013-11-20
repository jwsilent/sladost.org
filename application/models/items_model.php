<?php

class Items_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function index_last_ten()
	{	
		$this->db->order_by('id','desc');
		$query = $this->db->get('items', 10);
		return $query->result_array();
	}

	function index()
	{	
		$query = $this->db->get('items');
		return $query->result_array();
	}

	function show($id)
	{
		$query = $this->db->get_where('items', array('id' => $id));
		return $query->row_array();
	}

	function create($data)
	{
		$data = array('title' => $data['title'], 'price' => $data['price'], 'description' => $data['description'], 'weight' => $data['weight'], 'size' => $data['size'], 'category_id' => $data['category_id'], 'photo_url' => $data['photo_url']);
		$str = $this->db->insert('items', $data);
	}

	function index_by_category($category_id)
	{
		$query = $this->db->get_where('items', array('category_id' => $category_id));
		return $query->result_array();
	}

	function delete($id)
	{
		$this->db->delete('items', array('id' => $id));
	}

	function update($data)
	{
		$id = $data['id'];
		$data = array('title' => $data['title'], 'price' => $data['price'], 'description' => $data['description'], 'weight' => $data['weight'], 'size' => $data['size'], 'category_id' => $data['category_id'], 'photo_url' => $data['photo_url']);
		$this->db->where('id', $id);
		$this->db->update('items', $data);
	}
}