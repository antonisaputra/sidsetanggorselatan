<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SID Setanggor Selatan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/user/img/logo lotim.png" rel="icon">
  <link href="<?= base_url() ?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/user/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/user/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php if($this->uri->segment(1) == 'Home' || $this->uri->segment(1) == ''): ?>
    <header id="header" class="fixed-top ">
  <?php else: ?>
    <header id="header" class="fixed-top bg-primary">
  <?php endif; ?>
    <div class="container d-flex align-items-center">

      <h4 class="logo me-auto fs-6"><a href="index.html">SID DESA SETANGGOR SELATAN</a></h4>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?= base_url() ?>assets/user/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto fw-bold text-light" href="<?= base_url(); ?>Home">BERANDA</a></li>
          <li class="dropdown"><a href="#"><span>PROFIL DESA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url(); ?>Profil_desa/profil_wilayah_desa">Profil Wilayah Desa</a></li>
              <li><a href="<?= base_url(); ?>Profil_desa">Sejarah Desa</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PEMERINTAH DESA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url(); ?>Pemerintah_desa/visi_misi">Visi Dan Misi</a></li>
              <li><a href="<?= base_url(); ?>Pemerintah_desa">Pemerintah Desa</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>DATA DESA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url(); ?>Data_desa/data_wilayah">Data Wilayah Administratif</a></li>
              <li><a href="<?= base_url(); ?>Data_desa/data_pendidikan_kk">Data Pendidikan Dalam KK</a></li>
              <li><a href="<?= base_url(); ?>Data_desa/data_pendidikan_ditempuh">Data Pendidikan Di Tempuh</a></li>
              <li><a href="<?= base_url(); ?>Data_desa/data_pekerjaan">Data Pekerjaan</a></li>
              <li><a href="<?= base_url(); ?>Data_desa/data_agama">Data Agama</a></li>
              <li><a href="<?= base_url(); ?>Data_desa/data_jenis_kelamin">Data Jenis Kelamin</a></li>
              <li><a href="<?= base_url(); ?>Data_desa/warga_negara">Data Warga Negara</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>REGULASI</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url(); ?>Regulasi">Informasi Publik</a></li>
            </ul>
          </li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  