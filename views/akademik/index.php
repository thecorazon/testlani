<!-- Class Start -->
<div class="container-fluid pt-5 bg-hijau2">
  <div class="container">
    <div class="text-center pb-2">
      <p data-aos="zoom-in" class="section-title px-5">
        <span class="px-2">--- Jurusan ---</span>
      </p>
      <h1 data-aos="fade-up" class="mb-4">Daftar Jurusan</h1>
    </div>
    <div class="row">

      <?php foreach($data['jurusan'] as $jurusan) {?>

        <div  data-aos="fade-up" class="col-lg-4 col-md-6 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="<?= BASEURL;?>/img/<?= $jurusan['gambar']; ?>" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title"><?= $jurusan['nama_jurusan'];?></h4>
              <p class="card-text">
                <div class="collapse" id="jur<?= $jurusan['jurusan_id']; ?>">
                  <div class=" text-justify">
                    <?= $jurusan['deskripsi']; ?>
                  </div>
                </div>
                <button  data-aos="fade-down" class="btn btn-primary mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#jur<?= $jurusan['jurusan_id']; ?>" aria-expanded="false" aria-controls="jur<?= $jurusan['jurusan_id']; ?>">
                  Deskripsi Jurusan
                </button>
              </p>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>
</div>
    <!-- Class End -->