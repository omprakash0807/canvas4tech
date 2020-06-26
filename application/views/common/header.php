<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eterna Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna - v2.0.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:canvas4tech@gmail.com">canvas4tech@gmail.com</a>
        <i class="icofont-phone"></i> +91 7008843338
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo base_url(); ?>"><span>CANVAS4TECH</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>

          <!-- <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="<?php echo base_url().'about_us'//Home/about?>">About Us</a></li>
              <li><a href="<?php echo base_url().'our_team' //HomePage/team ?>">Team</a></li>
            </ul>
          </li> -->

          <li><a href="<?php echo base_url().'services' //HomePage/services?>">Technology</a></li>
          <li><a href="<?php echo base_url().'portfolio' //HomePage/portfolio?>">Review</a></li>
          <li><a href="<?php echo base_url().'pricing'//HomePage/pricing?>">Tips and Tricks</a></li>
          <li><a href="<?php echo base_url().'blogs' //HomePage/blog ?> ">Tech News</a></li>
          <li><a href="<?php echo base_url().'contact'//HomePage/contact?>">Contact</a></li>
          <li><a href="#">|</a></li>
        
          <?php if($this->session->has_userdata("logintrue")){
         ?>
          <li class="drop-down"><a href="#"><?php echo ucwords($this->session->userdata('username')); ?></a>
            <ul>
              <li><a href="<?php echo base_url().'Home'?>">Profile</a></li>
              <li><a href="<?php echo base_url().'Home/editprofile'?>">Edit profile</a></li>
              <li><a href="<?php echo base_url().'Home/uploadAvtar' ?>">Upload Avatar</a></li>
              <li><a href="<?php echo base_url().'Home/changePassword' ?>">Change Password</a></li>
              <li><a href="<?php echo base_url().'home/logout' ?>">Logout</a></li>
            </ul>
          </li>
          <?php
          }else{
            ?>
            <li><a href="<?php echo base_url().'login' //auth/login?>">Login</a></li>
            <li><a href="<?php echo base_url().'join_us' //register?>">Register</a></li>
          <?php
          }
          ?>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->