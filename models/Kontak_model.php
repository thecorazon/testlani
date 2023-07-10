<?php

class Kontak_model{
		private $table = 'kontak';
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

	public function getKontak(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function ubahKontak($data){

		return $this->db->update("kontak", $data, "id = 1");
	}

}