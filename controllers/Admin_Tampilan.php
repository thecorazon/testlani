<?php
class Admin_Tampilan extends Controller{
	public function index(){
		$data['judul'] = 'Tampilan';
		$data['tampilan'] =  $this->model('Tampilan_model')->getTampilan();
		$data['urutan'] =  $this->model('Tampilan_model')->getUrutan();
		$this->view('admin_templates/header',$data);
		$this->view('admin_tampilan/index',$data);
		$this->view('admin_templates/footer');
	}

	public function urutan(){
		$data['judul'] = 'Tampilan';
		$data['halaman'] =  $this->model('Tampilan_model')->ubahArray();
		$this->view('admin_templates/header',$data);
		$this->view('admin_tampilan/urutan',$data);
		$this->view('admin_templates/footer');
	}


	public function ubahTampilan(){

		if ($this->model('Tampilan_model')->ubahTampilan($_POST) > 0){
			Flasher::setFlash('Tampilan Halaman','berhasil','perbarui','info');
			header('Location: '. BASEURL . '/Admin_Tampilan');
			exit;
		} else {

			Flasher::setFlash('Tampilan Halaman','gagal','diubah','danger');
			header('Location: '. BASEURL . '/Admin_Tampilan');
			exit;
		}

	}

}