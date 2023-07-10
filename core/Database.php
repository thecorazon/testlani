<?php


class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh;
	private $stmt;

	public function __construct(){
			//data source name
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;
		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try{  
			$this->dbh = new PDO($dsn,$this->user,$this->pass, $option);
		} catch(PDOexception $e){
			die($e->getMessage());
		}
	}
	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null){
		if (is_null($type)){
			switch(true){
				case is_int($value) : 
				$type = PDO::PARAM_INT;
				break;
				case is_bool($value) : 
				$type = PDO::PARAM_BOOL;
				break;
				case is_null($value) : 
				$type = PDO::PARAM_NULL;
				break;
				default :
				$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute(){
		$this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount(){
		return $this->stmt->rowCount();
	}

	public function chunk5(){
		$this->execute();
		return array_chunk($this->stmt->fetchAll(PDO::FETCH_ASSOC),5);
	}

	public function create($table, $data) {
		$columns = implode(", ", array_keys($data));
		$placeholders = ":" . implode(", :", array_keys($data));
		$sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute($data);
		return $stmt->rowCount();
	}


	public function update($table, $data, $condition) {
		$columns = "";
		foreach ($data as $key => $value) {
			$columns .= "$key = :$key, ";
		}
		$columns = rtrim($columns, ", ");
		$sql = "UPDATE $table SET $columns WHERE $condition";
		$stmt = $this->dbh->prepare($sql);

		$stmt->execute($data);
		return $stmt->rowCount();
	}

	function alert($pesan){
		return '<script>alert("' . $pesan . '");</script>';
	}


	function uploadGambar($file, $targetDirectory) {
		$targetFile = $targetDirectory . basename($file['name']);
		$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah file adalah gambar
		$check = getimagesize($file['tmp_name']);
		if ($check === false) {
			return $this->alert("File yang diunggah bukan gambar.");
		}

    // Batasi jenis file gambar yang diizinkan (misalnya: JPG, PNG)
		$allowedTypes = array('jpg', 'jpeg', 'png');
		if (!in_array($imageFileType, $allowedTypes)) {
			return $this->alert("Hanya file JPG, JPEG, dan PNG yang diizinkan.");
		}

    // Periksa apakah file sudah ada di direktori target
		if (file_exists($targetFile)) {
			return $this->alert("File dengan nama yang sama sudah ada.");
		}

    // Periksa ukuran file (misalnya: batas maksimum 2MB)
    $maxFileSize = 2 * 1024 * 1024; // 2MB
    if ($file['size'] > $maxFileSize) {
    	return $this->alert("Ukuran file terlalu besar. Maksimum 2 MB diizinkan.");
    }

    // Coba unggah file ke direktori target
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
    	return $this->alert("Gambar berhasil diunggah.");
    } else {
    	return $this->alert("Terjadi kesalahan saat mengunggah gambar.");
    }
}

function hapusGambar($filePath) {
	if (file_exists($filePath)) {
		if (unlink($filePath)) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function ubahGambar($file, $targetDirectory, $existingFilePath) {
    // Hapus gambar yang sudah ada jika ada
	if ($existingFilePath && file_exists($existingFilePath)) {
		unlink($existingFilePath);
	}

	$targetFile = $targetDirectory . basename($file['name']);
	$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah file adalah gambar
	$check = getimagesize($file['tmp_name']);
	if ($check === false) {
		return "File yang diunggah bukan gambar.";
	}

    // Batasi jenis file gambar yang diizinkan (misalnya: JPG, PNG)
	$allowedTypes = array('jpg', 'jpeg', 'png');
	if (!in_array($imageFileType, $allowedTypes)) {
		return "Hanya file JPG, JPEG, dan PNG yang diizinkan.";
	}

    // Periksa apakah file sudah ada di direktori target
	if (file_exists($targetFile)) {
		return "File dengan nama yang sama sudah ada.";
	}

    // Periksa ukuran file (misalnya: batas maksimum 2MB)
    $maxFileSize = 2 * 1024 * 1024; // 2MB
    if ($file['size'] > $maxFileSize) {
    	return "Ukuran file terlalu besar. Maksimum 2MB diizinkan.";
    }

    // Coba unggah file ke direktori target
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
    	return "Gambar berhasil diubah.";
    } else {
    	return "Terjadi kesalahan saat mengubah gambar.";
    }
}


function uploadDokumen($file, $targetDirectory) {
	$targetFile = $targetDirectory . basename($file['name']);
	$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

	// Periksa apakah file sudah ada di direktori target
	if (file_exists($targetFile)) {
		return $this->alert("File dengan nama yang sama sudah ada.");
	}

	// Periksa ukuran file (misalnya: batas maksimum 5MB)
	$maxFileSize = 10 * 1024 * 1024; // 10MB
	if ($file['size'] > $maxFileSize) {
		return $this->alert("Ukuran file terlalu besar. Maksimum 10 MB diizinkan.");
	}

	// Coba unggah file ke direktori target
	if (move_uploaded_file($file['tmp_name'], $targetFile)) {
		return $this->alert("Dokumen berhasil diunggah.");
	} else {
		return $this->alert("Terjadi kesalahan saat mengunggah dokumen.");
	}
}



}