<?php

class Admin_model{
		private $table = 'visimisi';
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

	public function getVisimisi(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}


}