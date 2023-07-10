<?php
cekadmin();

class Home extends Controller{
	public function index(){
		// $data['nama'] = $this->model('User_model')->getUser();
		$data['judul'] = 'Beranda';
		$data['guru'] =  $this->model('Guru_model')->carousel();
		$data['visimisi'] =  $this->model('Visimisi_model')->getVisimisi();
		$data['jurusan'] =  $this->model('Jurusan_model')->getJurusan();
		$data['detail'] =  $this->model('DetailSekolah_model')->getDetail();
		$data['galeri'] =  $this->model('Galeri_model')->getGaleriLimit();
		$data['berita'] =  $this->model('Berita_model')->getBeritaLimit();
		$data['kontak'] =  $this->model('Kontak_model')->getKontak();
		$data['urutan'] =  $this->model('Tampilan_model')->getUrutan();




		$this->view('templates/header',$data);
		$this->view('home/index');
		// $this->view('home/visimisi',$data);
		// $this->view('galeri/index',$data);
		// $this->view('berita/index',$data);
		// $this->view('akademik/index',$data);
		// $this->view('akademik/guru',$data);
		// $this->view('kontak/index', $data);

		foreach($data['urutan'] as $urutan){
		$this->view($urutan['kode'],$data);

		}



		$this->view('templates/footer');
	}
}