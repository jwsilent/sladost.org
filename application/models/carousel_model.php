<?php

class Carousel_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function index_last_five()
	{	
		$this->db->order_by('id','desc');
		$query = $this->db->get('carousel', 5);
		return $query->result_array();
	}

	function index()
	{	
		$query = $this->db->get('carousel');
		return $query->result_array();
	}

	function show($id)
	{
		$query = $this->db->get_where('carousel', array('id' => $id));
		return $query->row_array();
	}

	function create($data)
	{	
		$data = array('text' => $data['text'], 'url' => $data['url'], 'photo_url' => $data['photo_url']);
		$str = $this->db->insert('carousel', $data);
	}

	function delete($id)
	{
		$this->db->delete('carousel', array('id' => $id));
	}

	function update($data)
	{
		$id = $data['id'];
		$carousel = array('text' => $data['text'], 'url' => $data['url']);
		$this->db->where('id', $id);
		$this->db->update('carousel', $carousel);
	}
}