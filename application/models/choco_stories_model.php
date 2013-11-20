<?php

class Choco_stories_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{	
		$this->db->order_by('created_at','desc');
		$query = $this->db->get('choco_stories');
		return $query->result_array();
	}

	function show($id)
	{
		$query = $this->db->get_where('choco_stories', array('id' => $id));
		return $query->row_array();
	}

	function create($title, $body)
	{
		$data = array('title' => $title, 'body' => $body);
		$str = $this->db->insert('choco_stories', $data);
	}

	function delete($id)
	{
		$this->db->delete('choco_stories', array('id' => $id));
	}

	function update($data)
	{
		$id = $data['id'];
		$recipe = array('title' => $data['title'], 'body' => $data['body']);
		$this->db->where('id', $id);
		$this->db->update('choco_recipes', $recipe);
	}
}