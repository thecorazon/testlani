<?php
cekadmin();

class Berita extends Controller{
	public function index(){
		$data['judul'] = 'Berita';
		$data['berita'] =  $this->model('Berita_model')->getBerita();
		$this->view('templates/header',$data);
		$this->view('berita/index',$data);
		$this->view('templates/footer');
	}

	public function beritalengkap($id){
		$data['judul'] = 'Berita';
		$data['beritalain'] =  $this->model('Berita_model')->getBerita();
		$data['berita'] =  $this->model('Berita_model')->getBeritaById($id);
		$this->view('templates/header',$data);
		$this->view('berita/beritalengkap',$data);
		$this->view('templates/footer');
	}
}