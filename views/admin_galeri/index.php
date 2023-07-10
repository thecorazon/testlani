<div class="container-fluid bg-kuning2 pt-5">
    

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <?php Flasher::Flash(); ?>
      </div>
    </div>

    <!-- buttonmodal -->
    <button type="button" class="tombolTambahData btn btn-primary" data-toggle="modal" data-target="#tambahGaleri">
      Tambah Galeri
    </button>





    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Galeri</span>
      </p>
      <h1 class="mb-4">Galeri SMKN 8 Buton</h1>
    </div>
    <div class="row portfolio-container">


      <?php foreach($data['galeri'] as $galeri) {?>

        <div class="col-md-6 mb-4 portfolio-item first">
          <div class="card shadow px-2 py-2">
            <img class="img-fluid w-100" src="<?= BASEURL; ?>/img/<?=$galeri['foto']; ?>" alt="" />
            <strong class="pl-1"><?= $galeri['deskripsi']; ?></strong>
            <div
            class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
            >
          </div>
          <div>
          </div>
        </div>
        <a href="<?= BASEURL;?>/Admin_Galeri/hapusGaleri/<?= $galeri['foto'];?>" class="btn btn-danger mt-2" onclick="return confirm('Yakin Ingin Menghapus Galeri Ini?')">Hapus</a>
        <a href="<?= BASEURL;?>/img/galeri/<?= $galeri['foto'];?>" class="btn btn-info mt-2"  data-lightbox="portfolio">Lihat</a>
      </div>

    <?php } ?>

  </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="tambahGaleri" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal">Tambah Galeri</h1>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL;?>/Admin_Galeri/tambahGaleri" method="post" enctype="multipart/form-data">
            <div class="mb-3 text-left">
              <label for="formFile" class="form-label">Pilih Gambar</label>
              <input class="form-row ml-1" type="file" name="gambar" accept="image/*">
            </div>
            <div class="mb-3 text-left">
              <div class="form-label">Keterangan</div>
              <input type="text" class="form-control" name="deskripsi">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- modalend -->