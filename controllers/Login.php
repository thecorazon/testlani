<?php

class Login extends Controller{
	public function index(){
		if (isset($_SESSION['admin'])) {
			header('Location: '. BASEURL . '/Admin');
		}
		$this->view('login/index');
	}
	public function autentikasi(){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$cek =  $this->model('Login_model')->cekAdmin($user,$pass);
		if($cek == 1) {
			$_SESSION['admin'] = $user;
			header('Location: '. BASEURL . '/Admin');
			exit();
		}else {
			header('Location: '. BASEURL . '/Login');
			exit;
		}		
	}
}