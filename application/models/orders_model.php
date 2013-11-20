<?php

class Orders_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{	
		$this->db->select('o.id, u.email as email, o.updated_at, o.is_closed');
		$this->db->from('order as o');
		$this->db->join('users as u', 'o.user_id = u.id');
		$this->db->order_by('updated_at','desc');
		$this->db->order_by('is_closed','asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	function show($id)
	{

		$this->db->select('o.id, u.email as email, o.updated_at, o.is_closed');
		$this->db->from('order as o');
		$this->db->join('users as u', 'o.user_id = u.id');
		$this->db->order_by('updated_at','desc');
		$query['order'] = $this->db->get();

		$this->db->select('c.id, amount, quantity, item_id, i.title, i.weight');
		$this->db->from('cart as c');
		$this->db->where('order_id', $id);
		$this->db->join('items as i', 'i.id = c.item_id');
		$query['items'] = $this->db->get();

		$query['order'] = $query['order']->row_array();
		$query['items'] = $query['items']->result_array();
		return $query;
	}

	function create($data)
	{
		$data = array('user_id' => $data['user_id'], 'is_closed' => 0);
		$this->db->insert('order', $data);
		$str = $this->db->insert_id();
		return $str;
	}

	function delete($id)
	{
		$this->db->delete('order', array('id' => $id));
	}

	function close($id)
	{
		$order = array('is_closed' => 1);
		$this->db->where('id', $id);
		$this->db->update('order', $order);
	}
}