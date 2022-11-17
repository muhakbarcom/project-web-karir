<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?> - Sistem Karir</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets-impact/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/assets-impact/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/assets-impact/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets-impact/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets-impact/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets-impact/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets-impact/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dataTables.bootstrap5.min.css">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/assets-impact/css/main.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Impact - v1.1.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div> -->
      <!-- <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div> -->
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?= base_url() ?>/assets-impact/img/logo.png" alt=""> -->
        <h1><?= $titleapp; ?><span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url(); ?>" class="<?php echo ($title == "Home") ? "active" : ""; ?>">Home</a></li>
          <li><a href="<?= base_url('artikel'); ?>" class="<?php echo ($title == "Artikel") ? "active" : ""; ?>">Artikel</a></li>
          <li><a href="<?= base_url('video'); ?>" class="<?php echo ($title == "Video") ? "active" : ""; ?>">Video</a></li>
          <!-- konsultasi -->
          <?php
          if ($this->akbr_auth->is_logged_in()) {
          ?>
            <?php if ($this->akbr_auth->is_admin()) : ?>
              <li><a href="<?= base_url('konsultasi/admin'); ?>" class="<?php echo ($title == "Konsultasi") ? "active" : ""; ?>">Konsultasi</a></li>
            <?php else : ?>
              <li><a href="<?= base_url('konsultasi/user'); ?>" class="<?php echo ($title == "Konsultasi") ? "active" : ""; ?>">Konsultasi</a></li>
            <?php endif ?>
          <?php } else { ?>
            <li><a href="<?= base_url('Auth/login?reff=konsultasi'); ?>" class="<?php echo ($title == "Konsultasi") ? "active" : ""; ?>">Konsultasi</a></li>
          <?php } ?>
          <!-- end konsultasi -->

          <!-- if login and is admin -->
          <?php if ($this->akbr_auth->is_logged_in() && $this->akbr_auth->is_admin()) : ?>
            <li><a href="<?= base_url('Artikel/list'); ?>" class="<?php echo ($title == "Kelola Artikel") ? "active" : ""; ?>">Kelola Artikel</a></li>
            <li><a href="<?= base_url('Video/list'); ?>" class="<?php echo ($title == "Kelola Video") ? "active" : ""; ?>">Kelola Video</a></li>
            <li><a href="<?= base_url('Users'); ?>" class="<?php echo ($title == "Kelola User") ? "active" : ""; ?>">Kelola User</a></li>

          <?php endif ?>
          <!-- end if login and is admin -->

          <?php
          if ($this->akbr_auth->is_logged_in()) {
          ?>
            <li><a style="background-color: #00796b ;" href="#" class="rounded px-3 py-1"><i class="bi bi-person-circle"></i> &nbsp; <?= $this->akbr_auth->get_user_data(); ?></a> </li>
            <li><a class="btn btn-danger  text-light px-3 py-1" href="<?= base_url('Auth/logout'); ?>">Logout</a></li>
          <?php } else { ?>
            <li><a class="btn btn-dark text-light px-3 py-1" href="<?= base_url('Auth'); ?>">Login</a></li>
          <?php } ?>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->