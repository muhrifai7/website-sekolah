<?php 

class Auth_model{
	private $table = 'admin';

	// tampung data
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAdmin(){

		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	// public function getAdminId(data){
		
	// }
}












