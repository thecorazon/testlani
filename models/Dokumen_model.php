<?php

class Dokumen_model{
		private $table = 'dokumen';
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

	public function getDokumen(){
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
		return $this->db->resultSet();
	}

	public function upFileDokumen(){
		$targetDirectory = LOKAL."/dokumen/";
		// Periksa apakah ada file yang diunggah
		if ($_FILES['dokumen']['name']) {
			$result = $this->db->uploadDokumen($_FILES['dokumen'], $targetDirectory);
    // Tampilkan pesan hasil
			echo $result;
		}

	}


	public function tambahDokumen($data){
		$this->upFileDokumen();
		$data['nama_dokumen'] = $_FILES['dokumen']['name'];
		$data['tanggal_upload'] = date('Y-m-d H:i:s');
		return $this->db->create($this->table, $data);

	}


	public function hapusDokumen($id){

	$this->db->hapusGambar(LOKAL.'/dokumen/'.$id);
			$query = "DELETE FROM dokumen WHERE id = :id";
			$this->db->query($query);
			$this->db->bind('id', $id);
			$this->db->execute();
		return $this->db->rowCount(); 
	}




}