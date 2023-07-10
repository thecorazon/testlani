<?php
function cekadmin(){
	if (isset($_SESSION['admin'])) {
			header('Location: '. BASEURL . '/admin');
		}
}
define ('BASEURL', 'http://localhost:8080/smk/public');
define ('LOKAL', 'C:/xampp/htdocs/smk/public/');

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'smkn8buton');



date_default_timezone_set('Asia/Makassar');