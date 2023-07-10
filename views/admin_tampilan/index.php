    <div class="row justify-content-center">
      <div class="col-lg-6">
        <?php Flasher::Flash(); ?>
      </div>
    </div>


<div class="card shadow mx-auto my-5 mx-5 py-5 px-5 w-75">

	<h2>Pilih Tampilan</h2>
	<div class="row">
		<div class="col-6">
			<form action="<?= BASEURL; ?>/Admin_Tampilan/ubahTampilan" method="post">
				
			<ul class="list-group">
				<span>PIlih Bagian-bagian yang ingin ditampilkan</span>
				<hr>	


				<li class="list-group-item">
					
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
						<label class="form-check-label" for="flexCheckCheckedDisabled">
							Header
						</label>
					</div>
				</li>

				<?php foreach ($data['tampilan'] as $tampilan): ?>
					<?php 	if ($tampilan['status'] == 'on'){
						$checked = 'checked';
					} else{
						$checked = '';

					}


					?>
					<li class="list-group-item">

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="<?= $tampilan['kode']; ?>" id="<?= $tampilan['kode']; ?>" <?= $checked; ?> value='on'>
							<label class="form-check-label" for="flexCheckChecked">
								<?= $tampilan['halaman']; ?>
							</label>
						</div>
					</li>
				<?php endforeach ?>
				<li class="list-group-item">

					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
						<label class="form-check-label" for="flexCheckCheckedDisabled">
							Footer
						</label>
					</div>
				</li>
			</ul>
			<button class="mt-2 btn btn-primary" onclick="return confirm('Yakin ingin Mengubah Tampilan?')">
				Simpan
			</button>
			</form>

		</div>




		<div class="col-6">
			Tampilan Tersimpan
			<hr>
			<ul class="list-group">
				<li class="list-group-item">Header</li>
				<?php foreach ($data['urutan'] as $urutan): ?>
				<li class="list-group-item"><?= $urutan['halaman']; ?></li>
				<?php endforeach ?>
				<li class="list-group-item">Footer</li>
			</ul>
				<small class="mt-2">*Untuk Mengecek perubahan Silahkan logout dan kunjungi halaman profil</small>
		</div>
	</div>
</div>