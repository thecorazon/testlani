<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?= $data['judul'];?> | SMKN 8 BUTON</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Google Web Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com" /> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" /> -->

  <!-- Font Awesome -->
  <!-- <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  rel="stylesheet"
  /> -->
  <link href="<?= BASEURL;?>/css/all.min.css" rel="stylesheet" />

  <!-- Flaticon Font -->
  <!-- <link href="<?= BASEURL;?>/lib/flaticon/font/flaticon.css" rel="stylesheet" /> -->

  <!-- Libraries Stylesheet -->
  <link href="<?= BASEURL;?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?= BASEURL;?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />


  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= BASEURL;?>/css/style.css" rel="stylesheet" />
  <link href="<?= BASEURL;?>/css/baru.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Start -->
  <div class="container-fluid bg-light shadow">
    <nav
    class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
    <a     href=""
    class="navbar-brand font-weight-bold text-secondary"
    style="font-size: 30px"
    >
    <!-- <i class="flaticon-043-teddy-bear"></i> -->
    <img src="<?= BASEURL;?>/img/logo.png" alt="" width="80">
    <span class="text-primary">SMKN 8 BUTON</span>
  </a>
  <button
  type="button"
  class="navbar-toggler"
  data-toggle="collapse"
  data-target="#navbarCollapse"
  >
  <span class="navbar-toggler-icon"></span>
</button>
<div
class="collapse navbar-collapse justify-content-between"
id="navbarCollapse"
>
<div class="navbar-nav font-weight-bold mx-auto py-0">
  <a href="<?= BASEURL;?>/" class="nav-item nav-link <?= ($data['judul'] == 'Beranda') ? 'active' : '';?>">Beranda</a>
  <a href="<?= BASEURL;?>/Akademik" class="nav-item nav-link <?= ($data['judul'] == 'Akademik') ? 'active' : '';?>">Akademik</a>
  <a href="<?= BASEURL;?>/Galeri" class="nav-item nav-link <?= ($data['judul'] == 'Galeri') ? 'active' : '';?>">Galeri</a>
  <a href="<?= BASEURL;?>/Berita" class="nav-item nav-link <?= ($data['judul'] == 'Berita') ? 'active' : '';?>">Berita</a>
  <a href="<?= BASEURL;?>/Kontak" class="nav-item nav-link <?= ($data['judul'] == 'Kontak') ? 'active' : '';?>">Kontak</a>
  <!-- <a href="" class="btn btn-primary px-4">Join Class</a> -->
</div>
</div>
</nav>
</div>
<!-- Navbar End -->
