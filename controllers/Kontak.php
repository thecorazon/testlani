<?php
cekadmin();

class Kontak extends Controller{
	public function index(){
		$data['kontak'] =  $this->model('Kontak_model')->getKontak();
		$data['judul'] = 'Kontak';
		$this->view('templates/header',$data);
		$this->view('kontak/index',$data);
		$this->view('templates/footer');
	}
}