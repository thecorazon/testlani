<?php

class Admin_Berita extends Controller{
	public function index(){
		$data['judul'] = 'Berita';
		$data['berita'] =  $this->model('Berita_model')->getBerita();
		$this->view('admin_templates/header',$data);
		$this->view('admin_berita/index',$data);
		$this->view('admin_templates/footer');
	}


	public function tambahBerita(){
		if ($this->model('Berita_model')->tambahBerita($_POST) > 0){
			Flasher::setFlash('Berita','berhasil','ditambahkan','info');
			header('Location: '. BASEURL . '/Admin_Berita');
			exit;
		} else {

			Flasher::setFlash('Berita','gagal','ditambahkan','danger');
			header('Location: '. BASEURL . '/Admin_Berita');
			exit;
		}
	}



	public function hapusBerita($id){
		if ($this->model('Berita_model')->hapusBerita($id) > 0){
			Flasher::setFlash('Berita','berhasil','dihapus','success');
			header('Location: '. BASEURL . '/Admin_Berita');
			exit;
		} else {

			Flasher::setFlash('Berita','gagal','dihapus','danger');
			header('Location: '. BASEURL . '/Admin_Berita');
			exit;
		}
	}


	public function ubahBerita(){

		if ($this->model('Berita_model')->ubahBerita($_POST) > 0){
			Flasher::setFlash('Berita','berhasil','diubah','info');
			header('Location: '. BASEURL . '/Admin_Berita');
			exit;
		} else {

			Flasher::setFlash('Berita','gagal','diubah','danger');
			header('Location: '. BASEURL . '/Admin_Berita');
			exit;
		}

	}

}