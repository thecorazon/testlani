<?php

class Guru_model{
	private $table = 'guru';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}


	public function getAllGuru(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getGuruById($id){
		$this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	// public function tambahGuru($data){
	// 	$query = "INSERT INTO guru
	// 			VALUES
	// 			('', :nama, :nip, :jabatan)";

	// 	$this->db->query($query);
	// 	$this->db->bind('nama', $data['nama']);
	// 	$this->db->bind('nip', $data['nim']);
	// 	$this->db->bind('jabatan', $data['jabatan']);

	// 	$this->db->execute();

	// 	return $this->db->rowCount(); 

	// }

	public function hapusGuru($id){
		$query = "DELETE FROM guru WHERE guru_id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount(); 
	}


	// public function ubahGuru($data){
	// 	$query = "UPDATE guru SET
	// 		nama = :nama,
	// 		nip = :nip,
	// 		jabatan = :jabatan
	// 		WHERE guru_id = :id";

	// 	$this->db->query($query);
	// 	$this->db->bind('nama', $data['nama']);
	// 	$this->db->bind('nip', $data['nip']);
	// 	$this->db->bind('jabatan', $data['jabatan']);
	// 	$this->db->bind('id', $data['id']);

	// 	$this->db->execute();

	// 	return $this->db->rowCount(); 

	// }

	
	public function carousel(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->chunk5();
	}



	public function ubahGuru($data){
		return $this->db->update("guru", $data, "guru_id = ".$data['guru_id']);
	}


	public function tambahGuru($data){
		return $this->db->create("guru", $data);

	}

}