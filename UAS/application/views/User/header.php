<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Interbahasa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>UserTemplate/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url() ?>UserTemplate/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>UserTemplate/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>UserTemplate/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.8.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo base_url('user/index') ?>">INTERBAHASA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="UserTemplate/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?php echo base_url('user/index') ?>">Home</a></li>
          <li><a href="<?php echo base_url('user/kursus') ?>">Kursus</a></li>
          <li><a href="<?php echo base_url('user/pendaftaran') ?>">Pendaftaran</a></li>
          <li><a href="<?php echo base_url('user/tentang') ?>">Tentang</a></li>
          <?php if ($this->session->userdata('user_email')) { ?>
            <li><a href="" class="active"><?php echo $this->session->userdata('user_nama') ?></a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php if (!$this->session->userdata('user_email')) { ?>
        <a href="<?php echo base_url('user/login') ?>" class="get-started-btn">Log in</a>
      <?php } else { ?>
        <a href="<?php echo base_url('user/logout') ?>" class="get-started-btn">Log out</a>
        <?php } ?>
    </div>
  </header><!-- End Header -->