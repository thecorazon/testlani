<?php

class Berita_model{
		private $table = 'berita';
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

	public function getBerita(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY berita_id DESC');
		return $this->db->resultSet();
	}

	public function getBeritaLimit(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY berita_id DESC LIMIT 3');
		return $this->db->resultSet();
	}

	public function getBeritaById($id){
		$this->db->query('SELECT * FROM '. $this->table . ' WHERE berita_id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function upGambarBerita(){
		$targetDirectory = LOKAL."img/berita/";
		// Periksa apakah ada file yang diunggah
		if ($_FILES['gambar']['name']) {
			$result = $this->db->uploadGambar($_FILES['gambar'], $targetDirectory);
    // Tampilkan pesan hasil
			echo $result;
		}

	}


	public function tambahBerita($data){
		$this->upGambarBerita();
		$data['gambar'] = $_FILES['gambar']['name'];
		return $this->db->create("berita", $data);

	}




	public function hapusBerita($id){
	$this->db->hapusGambar('C:/xampp/htdocs/smk/public/img/berita/'.$id);
			$query = "DELETE FROM berita WHERE berita_id = :id";
			$this->db->query($query);
			$this->db->bind('id', $id);
			$this->db->execute();
		return $this->db->rowCount(); 
	}



public function ubahBerita($data){

		$targetDirectory = 'C:/xampp/htdocs/smk/public/img/berita/';

		if ($_FILES['gambar']['name']) {
			$this->db->uploadGambar($_FILES['gambar'], $targetDirectory);
			$data['gambar'] = $_FILES['gambar']['name'];
			$this->db->hapusGambar('C:/xampp/htdocs/smk/public/img/berita/'.$data['gambar_lama']);
		} else {
			$data['gambar'] = $data['gambar_lama'];
		}



		$query = "UPDATE berita SET
		judul = :judul,
		konten = :konten,
		gambar = :gambar
		WHERE berita_id = :id";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('konten', $data['konten']);
		$this->db->bind('gambar', $data['gambar']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount(); 

	}

	




}