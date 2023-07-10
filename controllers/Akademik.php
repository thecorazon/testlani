<?php

class Akademik extends Controller{
	public function index(){
		$data['judul'] = 'Akademik';
		$data['guru'] =  $this->model('Guru_model')->carousel();
		$data['jurusan'] =  $this->model('Jurusan_model')->getJurusan();
		$data['detail'] =  $this->model('DetailSekolah_model')->getDetail();
		$this->view('templates/header',$data);
		$this->view('akademik/index',$data);
		$this->view('akademik/guru',$data);
		$this->view('templates/footer');
	}

	
}