<?php

class DetailSekolah_model{
	private $table = 'detail_sekolah';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getDetail(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}


	// public function ubahDetail($data){
	// 	$query = "UPDATE detail_sekolah SET
	// 	data = :data,
	// 	isi = :isi
	// 	WHERE id = :id";

	// 	$this->db->query($query);
	// 	$this->db->bind('data', $data['data']);
	// 	$this->db->bind('isi', $data['isi']);
	// 	$this->db->bind('id', $data['id']);

	// 	$this->db->execute();

	// 	return $this->db->rowCount(); 

	// }






	public function hapusDetail($id){
		$query = "DELETE FROM detail_sekolah WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount(); 
	}

	// public function tambahDetail($data){
	// 	$tanggal = date('Y-m-d H:i:s');
	// 	$query = "INSERT INTO detail_sekolah
	// 	VALUES
	// 	('', :data, :isi, :tanggal)";

	// 	$this->db->query($query);
	// 	$this->db->bind('data', $data['data']);
	// 	$this->db->bind('isi', $data['isi']);
	// 	$this->db->bind('tanggal', $tanggal);

	// 	$this->db->execute();

	// 	return $this->db->rowCount(); 

	// }

	public function ubahDetail($data){

		return $this->db->update("detail_sekolah", $data, "id = ".$data['id']);
	}


	public function tambahDetail($data){
		return $this->db->create("detail_sekolah", $data);

	}


}