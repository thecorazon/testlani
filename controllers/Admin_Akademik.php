<?php

class Admin_Akademik extends Controller{
	public function index(){
		$data['judul'] = 'Akademik';
		$data['guru'] =  $this->model('Guru_model')->carousel();
		$data['jurusan'] =  $this->model('Jurusan_model')->getJurusan();
		$data['detail'] =  $this->model('DetailSekolah_model')->getDetail();
		$this->view('admin_templates/header',$data);
		$this->view('akademik/index',$data);
		$this->view('akademik/guru',$data);
		$this->view('admin_templates/footer');
	}
	public function jurusan(){
		$data['judul'] = 'Akademik';
		$data['jurusan'] =  $this->model('Jurusan_model')->getJurusan();
		$this->view('admin_templates/header',$data);
		$this->view('admin_akademik/jurusan',$data);
		$this->view('admin_templates/footer');
	}
	public function guru(){
		$data['judul'] = 'Akademik';
		$data['guru'] =  $this->model('Guru_model')->getAllGuru();
		$this->view('admin_templates/header',$data);
		$this->view('admin_akademik/guru',$data);
		$this->view('admin_templates/footer');
	}
	public function detail(){
		$data['judul'] = 'Akademik';
		$data['detail'] =  $this->model('DetailSekolah_model')->getDetail();
		$this->view('admin_templates/header',$data);
		$this->view('admin_akademik/detail',$data);
		$this->view('admin_templates/footer');
	}



	public function ubahJurusan(){

		if ($this->model('Jurusan_model')->ubahJurusan($_POST) > 0){
			Flasher::setFlash('Jurusan','berhasil','diubah','info');
			header('Location: '. BASEURL . '/Admin_Akademik/jurusan');
			exit;
		} else {

			Flasher::setFlash('Jurusan','gagal','diubah','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/jurusan');
			exit;
		}

	}

	public function tambahGuru(){
		if ($this->model('Guru_model')->tambahGuru($_POST) > 0){
			Flasher::setFlash('Guru','berhasil','ditambahkan','info');
			header('Location: '. BASEURL . '/Admin_Akademik/guru');
			exit;
		} else {

			Flasher::setFlash('Guru','gagal','ditambahkan','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/guru');
			exit;
		}
	}

	public function hapusGuru($id){
		if ($this->model('Guru_model')->hapusGuru($id) > 0){
			Flasher::setFlash('Guru','berhasil','dihapus','success');
			header('Location: '. BASEURL . '/Admin_Akademik/guru');
			exit;
		} else {

			Flasher::setFlash('Guru','gagal','dihapus','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/guru');
			exit;
		}
	}

	public function ubahGuru(){

		if ($this->model('Guru_model')->ubahGuru($_POST) > 0){
			Flasher::setFlash('Data Guru','berhasil','diubah','info');
			header('Location: '. BASEURL . '/Admin_Akademik/guru');
			exit;
		} else {

			Flasher::setFlash('Data Guru','gagal','diubah','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/guru');
			exit;
		}

	}

	public function ubahDetail(){

		if ($this->model('DetailSekolah_model')->ubahDetail($_POST) > 0){
			Flasher::setFlash('Data','berhasil','diubah','info');
			header('Location: '. BASEURL . '/Admin_Akademik/detail');
			exit;
		} else {

			Flasher::setFlash('Data','gagal','diubah','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/detail');
			exit;
		}

	}


	public function hapusDetail($id){
		if ($this->model('DetailSekolah_model')->hapusDetail($id) > 0){
			Flasher::setFlash('Data','berhasil','dihapus','success');
			header('Location: '. BASEURL . '/Admin_Akademik/detail');
			exit;
		} else {

			Flasher::setFlash('Data','gagal','dihapus','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/detail');
			exit;
		}
	}



	public function tambahDetail(){
		if ($this->model('DetailSekolah_model')->tambahDetail($_POST) > 0){
			Flasher::setFlash('Data','berhasil','ditambahkan','info');
			header('Location: '. BASEURL . '/Admin_Akademik/detail');
			exit;
		} else {

			Flasher::setFlash('Data','gagal','ditambahkan','danger');
			header('Location: '. BASEURL . '/Admin_Akademik/detail');
			exit;
		}
	}

}