<?php

class Galeri_model{
	private $table = 'galeri';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getGaleri(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY galeri_id DESC');
		return $this->db->resultSet();
	}

	public function getGaleriLimit(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY galeri_id DESC LIMIT 6');
		return $this->db->resultSet();
	}


	public function upGambarGaleri(){
		$targetDirectory = "C:/xampp/htdocs/smk/public/img/galeri/";
		// Periksa apakah ada file yang diunggah
		if ($_FILES['gambar']['name']) {
			$result = $this->db->uploadGambar($_FILES['gambar'], $targetDirectory);
    // Tampilkan pesan hasil
			echo $result;
		}

	}


	public function tambahGaleri($data){
		$this->upGambarGaleri();
		$data['foto'] = $_FILES['gambar']['name'];
		return $this->db->create("galeri", $data);

	}




	public function hapusGaleri($id){
	$this->db->hapusGambar('C:/xampp/htdocs/smk/public/img/galeri/'.$id);
			$query = "DELETE FROM galeri WHERE foto = :id";
			$this->db->query($query);
			$this->db->bind('id', $id);
			$this->db->execute();
		return $this->db->rowCount(); 
	}




}