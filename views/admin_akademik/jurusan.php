<!-- Class Start -->
<div class="container-fluid bg-merah2 pt-5">



<div class="row justify-content-center">
  <div class="col-lg-6">
    <?php Flasher::Flash(); ?>
  </div>
</div>

<div class="text-center pb-2">
  <h1 class="mb-4">Daftar Jurusan</h1>
</div>
<div class="row">

    <?php foreach($data['jurusan'] as $jurusan) {
      $gambar = Statik::CekGambar($jurusan['gambar'], LOKAL . '/img/jurusan' );

      ?>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="card shadow mb-4">
          <img class="card-img-top mb-2" src="<?= BASEURL;?>/img/jurusan/<?= $gambar; ?>" alt="" />
          <div class="card-body text-center">
            <h4 class="card-title"><?= $jurusan['nama_jurusan'];?></h4>
            <p class="card-text">
              <div class="collapse" id="jur<?= $jurusan['jurusan_id']; ?>">
                <div class="text-justify">
                  <?= $jurusan['deskripsi']; ?>
                </div> 
              </div>
              <a  href="#jur<?= $jurusan['jurusan_id']; ?>" class="btn btn-primary mt-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                Deskripsi Jurusan
              </a>
            </p>




            <!-- buttonmodal -->
            <button type="button" class="tombolTambahData btn btn-outline-warning" data-toggle="modal" data-target="#ubah_jurusan<?= $jurusan['jurusan_id']; ?>">
              Ubah Jurusan
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ubah_jurusan<?= $jurusan['jurusan_id']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Ubah Jurusan</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= BASEURL;?>/Admin_Akademik/ubahJurusan" method="post" enctype="multipart/form-data">

                      <input type="hidden" name="id" value="<?= $jurusan['jurusan_id']; ?>">
                      <input type="hidden" name="gambar_lama" value="<?= $jurusan['gambar']; ?>">
                      <div class="mb-3 text-left">
                        <div class="form-label">Nama Jurusan</div>
                        <input type="text" class="form-control" name="nama_jurusan" value="<?= $jurusan['nama_jurusan']; ?>">
                      </div>
                      <div class="mb-3 text-left">
                        <label for="nim" class="form-label">Deskripsi</label>
                        <textarea
                        class="form-control text-justify"
                        rows="10"
                        cols="100"
                        name="deskripsi"
                        ><?= $jurusan['deskripsi']; ?></textarea>
                      </div>
                      <div class="mb-3 text-left">
                        <label for="formFile" class="form-label">Gambar : </label>
                        <img class="card-img-top mb-2" src="<?= BASEURL;?>/img/<?= $jurusan['gambar']; ?>" alt="" />
                        <input class="form-input" type="file" name="gambar">
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
        </div>
      </div>

    <?php } ?>

  </div>
    <!-- Class End -->
  </div>