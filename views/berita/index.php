
<!-- Blog Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">--- Berita ---</span>
      </p>
      <h1 class="mb-4">Informasi Terkini</h1>
    </div>

    <?php foreach($data['berita'] as $berita) {?>
      <div class="card mb-2 bg-kuning2">

        <div class="card-body">
          <div class="row pb-3">

            <div class="col-lg-3 pt-lg-4">
              <img class="rounded mx-auto d-block img-thumbnail" src="<?= BASEURL; ?>/img/<?= $berita['gambar'];?>" alt="">
            </div>

            <div class="col-lg-9">
              <h4><?= $berita['judul']; ?></h4>

              <hr>
              <p class="text-justify">
                <?= substr($berita['konten'],0,300); ?>...
              </p>
              <a href="<?= BASEURL;?>/Berita/beritalengkap/<?= $berita['berita_id'];?>" class="btn btn-primary"
                >Selengkapnya</a
                >

              </div>
            </div>

          </div>

        </div>
      <?php } ?>


      <?php if ($data['judul'] != 'Berita'): ?>
        <a href="<?=BASEURL; ?>/Berita" data-aos="fade-down" class="btn btn-outline-secondary mb-5">
          Lihat Semua Berita
        </a>
      <?php endif ?>
    </div>
  </div>
    <!-- Blog End -->