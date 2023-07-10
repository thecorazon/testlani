<!-- Detail Start -->
<div class="container py-5">
  <div class="row pt-5">
    <div class="col-lg-8">
      <div class="d-flex flex-column text-left mb-3">
        <p class="section-title pr-5">
          <span class="pr-2">--- Detail Berita ---</span>
        </p>
        <h1 class="mb-3"><?= $data['berita']['judul'];?> </h1>
        <div class="d-flex">
          <p class="mr-3"><i class="fa fa-user text-primary"></i> Admin</p>
          <p class="mr-3">
            <i class="fa fa-clock text-primary"></i> <?= $data['berita']['tanggal_publikasi'];?>
          </p>
          <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p>
        </div>
      </div>
      <div class="mb-5">
        <img
        class="img-fluid rounded w-100 mb-4"
        src="<?= BASEURL;?>/img/<?= $data['berita']['gambar'];?>"
        alt="Image"
        />
        <p class="text-justify">
          <?= nl2br($data['berita']['konten']);?>
        </p>
        
      </div>

      <!-- Comment Form -->
      <div class="bg-light p-5">
        <h2 class="mb-4">Tulis Komentar</h2>
        <form>
          <div class="form-group">
            <label for="name">Nama *</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email" />
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website" />
          </div>

          <div class="form-group">
            <label for="message">Pesan *</label>
            <textarea
            id="message"
            cols="30"
            rows="5"
            class="form-control"
            ></textarea>
          </div>
          <button class="form-group mb-0 btn btn-primary px-3 off" type="button">
            Kirim
          </button>
        </form>
      </div>
    </div>

    <div class="col-lg-4 mt-5 mt-lg-0">
      <!-- Author Bio -->
      <div
      class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4"
      >
      <img
      src="<?= BASEURL;?>/img/logo.png"
      class="img-fluid rounded-circle mx-auto mb-3"
      style="width: 100px"
      />
      <h3 class="text-secondary mb-3">SMKN 8 Buton</h3>
      <p class="text-white m-0">
        Sambutlah masa depan yang cerah dengan pendidikan unggulan di SMKN 8 Buton. Menyediakan kurikulum yang terintegrasi, menggabungkan teori dan praktik, untuk mempersiapkan siswa menjadi tenaga kerja yang kompeten dan siap menghadapi dunia industri.
      </p>
    </div>

    <!-- Category List -->
    <div class="mb-5">
      <h2 class="mb-4">Kategori</h2>
      <ul class="list-group list-group-flush">
        <li
        class="list-group-item d-flex justify-content-between align-items-center px-0"
        >
        <a href="">Prestasi Siswa</a>
        <span class="badge badge-primary badge-pill">2</span>
      </li>
      <li
      class="list-group-item d-flex justify-content-between align-items-center px-0"
      >
      <a href="">Kegiatan Ekstrakurikuler</a>
      <span class="badge badge-primary badge-pill">3</span>
    </li>
    <li
    class="list-group-item d-flex justify-content-between align-items-center px-0"
    >
    <a href="">Acara Sekolah</a>
    <span class="badge badge-primary badge-pill">2</span>
  </li>
  <li
  class="list-group-item d-flex justify-content-between align-items-center px-0"
  >
  <a href="">Pengumuman dan Informasi</a>
  <span class="badge badge-primary badge-pill">0</span>
</li>
<li
class="list-group-item d-flex justify-content-between align-items-center px-0"
>
<a href="">Kolaborasi dan Komunitas</a>
<span class="badge badge-primary badge-pill">1</span>
</li>
</ul>
</div>

<!-- Recent Post -->
<div class="mb-5">
  <h2 class="mb-4">Berita Lainnya</h2>

  <?php foreach($data['beritalain'] as $beritalain) {?>

    <div
    class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
    >
    <img
    class="img-fluid"
    src="<?= BASEURL;?>/img/<?= $beritalain['gambar'];?>"
    style="width: 80px; height: 80px"
    />
    <div class="pl-3">
      <h5 class=""><?= $beritalain['judul'];?></h5>
      <div class="d-flex">
        <small class="mr-3"
        ><i class="fa fa-clock text-primary"></i> <?= $beritalain['tanggal_publikasi'];?></small>
          <small class="mr-3"><i class="fa fa-comments text-primary"></i> 0</small>
      </div>
    </div>
  </div>
<?php }?>

</div>

</div>
</div>
</div>
    <!-- Detail End -->