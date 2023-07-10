
<div class="card shadow mx-5 my-5 py-5 px-5 w-75 mx-auto">
	<h1>Ubah Urutan Tampilan Profil</h1>
	<small >Pilihlah urutan dari atas ke bawah!</small>
	<small class="mb-2">Urutan Header dan Footer tidak dapat diubah!</small>
	<form  method="post" action="<?= BASEURL; ?>/Admin_Urutan/ubahUrutan">
		<div class="form-control mb-2"> Header</div>
		<select class="form-control mb-2" id="select1" name="select1"  required>
			<option value="" disabled selected>Pilih</option>
			<?php
			// $options = array("Visi Misi", "Berita", "Galeri", "Akademik", "Kontak");
			$options = $data['halaman'];

			foreach ($options as $option) {
				echo "<option value=\"$option\">$option</option>";
			}
			?>
		</select>
			<?php 
		$jumlahulang = count($options) - 1;
		for ($i = 0; $i < $jumlahulang; $i++){

			 ?>
				
		<select class="form-control mb-2" id="select2" name="select2"  required>
			<option value="" disabled selected>Pilih</option>
		</select>

			<?php } ?>

		<div class="form-control mb-2"> Footer</div>
		<button class="btn btn-primary">Simpan urutan</button>

	</form>
</div>

<div class="card shadow mx-5 my-5 py-5 px-5  w-75 mx-auto">
	<h3>Urutan Tersimpan</h3>
	<ul>
		<li>Header</li>
		<li>kdfkjsg</li>
		<li>kdfkjsg</li>
		<li>Footer</li>
	</ul>
</div>





	<script>
  var options = <?php echo json_encode($options); ?>; // Mengambil array PHP dan membuatnya menjadi variabel JavaScript

  var selectElements = document.querySelectorAll('select');
  selectElements.forEach(function(selectElement, index) {
  	selectElement.addEventListener('change', function() {
  		updateOptions(index + 1);
  	});
  });

  function updateOptions(startIndex) {
  	var selectedOptions = [];

  	for (var i = 0; i < startIndex; i++) {
  		selectedOptions.push(selectElements[i].value);
  	}

  	for (var i = startIndex; i < selectElements.length; i++) {
  		selectElements[i].innerHTML = '';

      // Menambahkan opsi 'Pilih' yang dinonaktifkan
  		var defaultOption = new Option('Pilih', '');
  		defaultOption.disabled = true;
  		defaultOption.selected = true;
  		selectElements[i].add(defaultOption);

  		options.forEach(function(option) {
  			if (!selectedOptions.includes(option)) {
  				var newOption = new Option(option, option);
  				selectElements[i].add(newOption);
  			}
  		});
  	}
  }
</script>