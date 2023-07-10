<div class="container-fluid bg-ungu2 pt-5">


  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?php Flasher::Flash(); ?>
    </div>
  </div>

  <!-- buttonmodal -->
  <button type="button" class="tombolTambahData btn btn-primary" data-toggle="modal" data-target="#tambahGaleri">
    Tulis Berita Baru
  </button>
  <!-- Modal -->
  <div class="modal fade" id="tambahGaleri" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal">Tulis Berita Baru</h1>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= BASEURL; ?>/Admin_Berita/tambahBerita" enctype="multipart/form-data">
            <div class="mb-3 text-left">
              <div class="form-label">Judul</div>
              <input type="text" class="form-control" name="judul" placeholder="Judul Berita">
            </div>
            <div class="mb-3 text-left">
              <label for="nim" class="form-label">Konten</label>
              <textarea name="konten" class="form-control" rows="10" cols="100" placeholder="Masukkan Konten">
              </textarea>
            </div>
            <div class="mb-3 text-left">
              <label for="formFile" class="form-label">Pilih Gambar</label>
              <input class="form-row ml-1" type="file" name="gambar" accept="image/*">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Posting Berita</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- modalend -->




  <div class="text-center pb-2">
    <p class="section-title px-5">
      <span class="px-2">--- Berita ---</span>
    </p>
    <h1 class="mb-4">Informasi Terkini</h1>
  </div>
  <div class="row pb-3">

    <?php foreach($data['berita'] as $berita) {
      $gambar = Statik::CekGambar($berita['gambar'], LOKAL . '/img/berita' );
      ?>


      <div class="card shadow mb-2">

        <div class="card-body bg-light text-center p-4">

          <div class="row">
            <h4 class="ml-3"><?= $berita['judul']; ?></h4>
            <div class="col-9">

              <hr>
              <p class="text-justify">
                <?= nl2br($berita['konten']); ?>
              </p>



              <!-- Modal -->
              <div class="modal fade w-100" id="ubah_berita<?= $berita['berita_id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="judulModal">Ubah berita</h1>
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= BASEURL;?>/Admin_Berita/ubahBerita" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="gambar_lama" value="<?= $berita['gambar']; ?>">
                        <input type="hidden" name="id" value="<?= $berita['berita_id']; ?>">
                        <div class="mb-3 text-left">
                          <div class="form-label">Judul</div>
                          <input type="text" class="form-control" name="judul" value="<?= $berita['judul']; ?>">
                        </div>
                        <div class="mb-3 text-left">
                          <label for="nim" class="form-label">Konten</label>
                          <textarea name="konten" class="form-control text-justify"
                          rows="10">
                          <?= $berita['konten']; ?>
                        </textarea>
                      </div>
                      <div class="mb-3 text-left">
                        <label for="formFile" class="form-label">Pilih Gambar</label>
                        <input class="form-row mt-2" type="file" name="gambar" accept="image/*">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- modalend -->

          </div>
          <div class="col-3 ">
            <img class="img-fluid card-img-top mb-2" src="<?= BASEURL;?>/img/berita/<?= $gambar; ?>" alt="" />
            <!-- buttonmodal -->
            <button type="button" class="tombolTambahData btn btn-warning" data-toggle="modal" data-target="#ubah_berita<?= $berita['berita_id']; ?>">
              Ubah Berita
            </button>

            <a href="<?= BASEURL; ?>/Admin_Berita/hapusBerita/<?= $berita['berita_id']; ?>"class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Berita Ini?')">Hapus Berita</a>

          </div>
        </div>
      </div>
    </div>

  <?php } ?>

</div>
</div>
  <!-- Blog End -->