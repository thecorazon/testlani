<div class="container mt-3">
	<div class="row">
		<div class="row">
			<div class="col-lg-6">
				<?php Flasher::Flash(); ?>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-lg-6">
				<button type="button" class="tombolTambahData btn btn-primary" data-bs-toggle="modal" data-bs-target="#form_mahasiswa">
					Tambah Data Mahasiswa
				</button>
			</div>
		</div>


		<div class="row mb-3">
			<div class="col-lg-6">
				<form action="<?= BASEURL;?>/mahasiswa/cari" method="post">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
						<button class="btn btn-primary" type="submit" id="tombolCari">cari</button>
					</div>
				</form>	
			</div>
		</div>

		<div class="col-lg-6">

			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) { ?>
					<li class="list-group-item">
						<?= $mhs['nama'];?>
						<a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="ms-1 text-decoration-none float-end badge text-bg-danger" onclick="return confirm('Yakin?')">hapus</a>
						<a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="tampilModalUbah float-end badge text-bg-info ms-1 text-decoration-none" data-bs-toggle="modal" data-bs-target="#form_mahasiswa" data-id="<?= $mhs['id'];?>">ubah</a>
						<a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="float-end badge text-bg-primary ms-1 text-decoration-none">detail</a>
					</li>
				<?php	} ?>
			</ul>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="form_mahasiswa" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
					<input type="hidden" name="id" id="id">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="mb-3">
						<label for="nim" class="form-label">NIM</label>
						<input type="text" class="form-control" id="nim" name="nim">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<label for="jurusan">Jurusan</label>
					<select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
						<option value="Teknik Perinduan">Teknik Perinduan</option>
						<option value="Teknik Mabar">Teknik Mabar</option>
						<option value="Ilmu Percintaan">Ilmu Percintaan</option>
						<option value="Ilmu Mabar">Ilmu Mabar</option>
						<option value="Ilmu Ngoding">Ilmu Ngoding</option>
					</select>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>