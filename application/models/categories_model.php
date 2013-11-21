<?php

class Categories_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{	
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	function index_root()
	{
		$query = $this->db->get_where('categories', array('parent_category_id' => 0));
		return $query->result_array();
	}

	function show($id)
	{
		$query = $this->db->get_where('categories', array('id' => $id));
		return $query->row_array();
	}

	function create($data)
	{
		$data = array('title' => $data['title'], 'description' => $data['description'], 'parent_category_id' => $data['parent_category_id']);
		$this->db->insert('categories', $data);
	}

	function delete($id)
	{
		$this->db->delete('categories', array('id' => $id));
	}

	function update($data)
	{
		$id = $data['id'];
		$data = array('title' => $data['title'], 'description' => $data['description'], 'parent_category_id' => $data['parent_category_id']);
		$this->db->where('id', $id);
		$this->db->update('categories', $data);
	}
}