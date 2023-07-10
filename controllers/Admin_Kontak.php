<?php

class Admin_Kontak extends Controller{
	public function index(){
		$data['judul'] = 'Kontak';
		$data['kontak'] =  $this->model('Kontak_model')->getKontak();
		$this->view('admin_templates/header',$data);
		$this->view('admin_kontak/index',$data);
		$this->view('admin_templates/footer');
	}





	public function ubahKontak(){

		if ($this->model('Kontak_model')->ubahKontak($_POST) > 0){
			Flasher::setFlash('Informasi Kontak','berhasil','diubah','info');
			header('Location: '. BASEURL . '/Admin_Kontak');
			exit;
		} else {

			Flasher::setFlash('Informasi Kontak','gagal','diubah','danger');
			header('Location: '. BASEURL . '/Admin_Kontak');
			exit;
		}

	}
}