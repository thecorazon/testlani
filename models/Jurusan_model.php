<?php

class Jurusan_model{
	private $table = 'jurusan';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getJurusan(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function ubahJurusan($data){


		$targetDirectory = 'C:/xampp/htdocs/smk/public/img/jurusan/';

		if ($_FILES['gambar']['name']) {
			$this->db->uploadGambar($_FILES['gambar'], $targetDirectory);
			$data['gambar'] = $_FILES['gambar']['name'];
			$this->db->hapusGambar('C:/xampp/htdocs/smk/public/img/jurusan/'.$data['gambar_lama']);
		} else {
			$data['gambar'] = $data['gambar_lama'];
		}



		$query = "UPDATE jurusan SET
		nama_jurusan = :nama_jurusan,
		deskripsi = :deskripsi,
		gambar = :gambar
		WHERE jurusan_id = :id";

		$this->db->query($query);
		$this->db->bind('nama_jurusan', $data['nama_jurusan']);
		$this->db->bind('deskripsi', $data['deskripsi']);
		$this->db->bind('gambar', $data['gambar']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount(); 

	}



}