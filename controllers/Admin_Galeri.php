<?php

class Admin_Galeri extends Controller{
	public function index(){
		$data['judul'] = 'Galeri';
		$data['galeri'] =  $this->model('Galeri_model')->getGaleri();
		$this->view('admin_templates/header',$data);
		$this->view('admin_galeri/index',$data);
		$this->view('admin_templates/footer');
	}



	public function tambahGaleri(){
		if ($this->model('Galeri_model')->tambahGaleri($_POST) > 0){
			Flasher::setFlash('Galeri','berhasil','ditambahkan','info');
			header('Location: '. BASEURL . '/Admin_Galeri');
			exit;
		} else {

			Flasher::setFlash('Galeri','gagal','ditambahkan','danger');
			header('Location: '. BASEURL . '/Admin_Galeri');
			exit;
		}
	}



	public function hapusGaleri($id){
		if ($this->model('Galeri_model')->hapusGaleri($id) > 0){
			Flasher::setFlash('Galeri','berhasil','dihapus','success');
			header('Location: '. BASEURL . '/Admin_Galeri');
			exit;
		} else {

			Flasher::setFlash('Galeri','gagal','dihapus','danger');
			header('Location: '. BASEURL . '/Admin_Galeri');
			exit;
		}
	}
}