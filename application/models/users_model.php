<?php

class Users_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}

	function create($username, $email, $password)
	{
		$data = array('username' => $username, 'email' => $email, 'password' => sha1($password));
		$res = $this
			->db
			->insert('users', $data);
		echo $res->id;
	}

	function verify_user($email, $password)
	{
		$q = $this
			->db
			->where('email', $email)
			->where('password', sha1($password))
			->limit(1)
			->get('users');

		if ( $q->num_rows > 0 ) {
         	return $q->row();
      	}
      	return false;
	}
}