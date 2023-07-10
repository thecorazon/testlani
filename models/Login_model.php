<?php 	


class Login_model{
	private $table = 'admin';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function cekAdmin($user, $pass){
		$this->db->query('SELECT * FROM '. $this->table . ' WHERE username=:user AND password=:pass');
		$this->db->bind('user',$user);
		$this->db->bind('pass',$pass);
		$this->db->execute();
		return $this->db->rowCount();



	}

}