<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3 bg-biru2">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
      <span class="px-2">--- Galeri ---</span>
    </p>
    <h1 class="mb-4">Galeri SMKN 8 Buton</h1>
  </div>
  <div class="row portfolio-container">


    <?php foreach($data['galeri'] as $galeri) {?>
      <div class="col-lg-4 col-6 mb-4 portfolio-item first">
      <div class="card my-2 px-1 py-1">
        <img class="img-fluid" src="<?= BASEURL; ?>/img/<?=$galeri['foto']; ?>" alt="" />
        <small class="px-1"><?= $galeri['deskripsi']; ?></small>
        <div
        class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
        >
        <a href="<?= BASEURL; ?>/img/<?=$galeri['foto']; ?>" data-lightbox="portfolio">
          <i class="fa fa-eye text-white" style="font-size: 80px"></i>
        </a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<?php if ($data['judul'] != 'Galeri'): ?>
  <a href="<?=BASEURL; ?>/Galeri" class="btn btn-outline-secondary mb-4">
    Cek Galeri Lengkap
  </a>
<?php endif ?>
</div>
</div>
    <!-- Gallery End -->