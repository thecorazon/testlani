<?php

class Admin extends Controller{
	public function index(){
		if (!isset($_SESSION['admin'])) {
			header('Location: '. BASEURL . '/login');
		}
		$data['judul'] = 'Beranda';
		// $data['guru'] =  $this->model('Guru_model')->carousel();
		$data['visimisi'] =  $this->model('Visimisi_model')->getVisimisi();
		// $data['jurusan'] =  $this->model('Jurusan_model')->getJurusan();
		// $data['detail'] =  $this->model('DetailSekolah_model')->getDetail();
		// $data['galeri'] =  $this->model('Galeri_model')->getGaleriLimit();
		// $data['berita'] =  $this->model('Berita_model')->getBeritaLimit();
		// $data['kontak'] =  $this->model('Kontak_model')->getKontak();
		
		$this->view('admin_templates/header',$data);
		// $this->view('home/index');
		$this->view('admin/visimisi',$data);
		// $this->view('galeri/index',$data);
		// $this->view('berita/index',$data);
		// $this->view('akademik/index',$data);
		// $this->view('akademik/guru',$data);
		// $this->view('kontak/index', $data);
		$this->view('admin_templates/footer');
	}
	public function login(){
		$data['judul'] = 'Login';
		$this->view('admin/login');
	}


	public function ubahVisiMisi(){
		$data['judul'] = 'Beranda';
		$data['visimisi'] =  $this->model('Visimisi_model')->getVisimisi();

		$this->view('admin_templates/header',$data);
		$this->view('admin/visimisi', $data);
		$this->view('admin_templates/footer');
	}


	public function ubahVisi(){

		if ($this->model('Visimisi_model')->ubahVisi($_POST) > 0){
			Flasher::setFlash('Visi','berhasil','diubah','success');
			header('Location: '. BASEURL . '/admin/ubahvisimisi');
			exit;
		} else {

			Flasher::setFlash('Visi','gagal','diubah','danger');
			header('Location: '. BASEURL . '/admin/ubahvisimisi');
			exit;
		}

	}

	public function ubahMisi(){

		if ($this->model('Visimisi_model')->ubahMisi($_POST) > 0){
			Flasher::setFlash('Misi','berhasil','diubah','success');
			header('Location: '. BASEURL . '/admin/ubahvisimisi');
			exit;
		} else {

			Flasher::setFlash('Misi','gagal','diubah','danger');
			header('Location: '. BASEURL . '/admin/ubahvisimisi');
			exit;
		}

	}
}