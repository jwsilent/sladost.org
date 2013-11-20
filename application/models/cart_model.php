<?php

class Cart_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{	
		$this->db->select('c.id, amount, quantity, item_id, i.title, i.weight');
		$this->db->from('cart as c');
		$this->db->where('order_id', 0);
		$this->db->join('items as i', 'i.id = c.item_id');
		$query = $this->db->get();

		return $query->result_array();
	}

	function show($id)
	{
		$query = $this->db->get_where('cart', array('id' => $id));
		return $query->row_array();
	}

	function create($item_id, $user_id, $amount)
	{
		$data = array('item_id' => $item_id, 'user_id' => $user_id, 'quantity' => 1, 'amount' => $amount, 'order_id' => 0);
		$str = $this->db->insert('cart', $data);
	}

	function delete($id)
	{
		$this->db->delete('cart', array('id' => $id));
	}

	function update($data)
	{
		// Here post update function
	}

	function delete_by_user($user_id)
	{
		$this->db->delete('cart', array('user_id' => $user_id));
	}

	function set_order($id, $order_id)
	{
		$c_item = array('order_id' => $order_id);
		$this->db->where('id', $id);
		$this->db->update('cart', $c_item);
	}

	function fetch_by_user_order($user_id)
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('order_id', 0);
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();

		return $query->result_array();
	}
}