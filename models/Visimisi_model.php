<?php

class Visimisi_model{
	private $table = 'visimisi';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getVisimisi(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function ubahVisi($data){
		$query = "UPDATE visimisi SET
		visi = :visi";

		$this->db->query($query);
		$this->db->bind('visi', $data['visi']);
		$this->db->execute();

		return $this->db->rowCount(); 
	}

	public function ubahMisi($data){
		$query = "UPDATE visimisi SET
		misi = :misi";

		$this->db->query($query);
		$this->db->bind('misi', $data['misi']);
		$this->db->execute();

		return $this->db->rowCount(); 

	}


}