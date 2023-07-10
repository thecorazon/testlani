<?php

class Tampilan_model{
	private $table = 'tampilan';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getUrutan(){
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE status = "on" ORDER BY urutan');
		return $this->db->resultSet();
	}
	public function getTampilan(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY urutan');
		return $this->db->resultSet();
	}

	public function ubahArray(){
		// return $this->getUrutan();
		
		$data = $this->getUrutan();
		// Mengambil nilai "halaman" dari setiap elemen array
		$halaman = array_column($data, "halaman");

// Mengurutkan array baru sesuai dengan nilai "urutan"
		array_multisort(array_column($data, "urutan"), $halaman);

// Menampilkan hasil
		return $halaman;
	}
	public function UbahTampilan(){
		$array = $_POST;
		$bagian_array = array_keys($array);
		$output = "'" . implode("', '", $bagian_array) . "'";

		$query = "UPDATE tampilan SET status = 
		CASE
		WHEN kode IN ($output) THEN 'on'
		ELSE 'off'
		END	";


		$this->db->query($query);
		$this->db->execute();

		return $this->db->rowCount(); 
	}
}