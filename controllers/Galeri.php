<?php
cekadmin();

class Galeri extends Controller{
	public function index(){
		$data['judul'] = 'Galeri';
		$data['galeri'] =  $this->model('Galeri_model')->getGaleri();
		$this->view('templates/header',$data);
		$this->view('galeri/index',$data);
		$this->view('templates/footer');
	}
}