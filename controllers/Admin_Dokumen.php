<?php
class Admin_Dokumen extends Controller{
	public function index(){
		$data['judul'] = 'Dokumen';
		$data['dokumen'] =  $this->model('Dokumen_model')->getDokumen();
		$this->view('admin_templates/header',$data);
		$this->view('admin_dokumen/index',$data);
		$this->view('admin_templates/footer');
	}
	


	public function tambahDokumen(){
		if ($this->model('Dokumen_model')->tambahDokumen($_POST) > 0){
			Flasher::setFlash('Dokumen','berhasil','ditambahkan','info');
			header('Location: '. BASEURL . '/Admin_Dokumen');
			exit;
		} else {

			Flasher::setFlash('Dokumen','gagal','ditambahkan','danger');
			header('Location: '. BASEURL . '/Admin_Dokumen');
			exit;
		}
	}





	public function hapusDokumen($id){
		if ($this->model('Dokumen_model')->hapusDokumen($id) > 0){
			Flasher::setFlash('Dokumen','berhasil','dihapus','success');
			header('Location: '. BASEURL . '/Admin_Dokumen');
			exit;
		} else {

			Flasher::setFlash('Dokumen','gagal','dihapus','danger');
			header('Location: '. BASEURL . '/Admin_Dokumen');
			exit;
		}
	}




}