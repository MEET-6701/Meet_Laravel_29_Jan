<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.7.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index"><span>Rent </span> My Car</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="index">Home</a></li>
          <?php
          if(isset($_SESSION['cus_id'])){
            ?>
          <li><a class="nav-link " href="more_car">More Car</a></li>
                  <?php
                  }
            ?>
          <li><a class="nav-link " href="service">Services</a></li>
      
          <li><a class="nav-link " href="team">Team</a></li>
         
          <li class="dropdown"><a href="#"><span> More option </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about"> About Us</a></li>
              <li><a href="contact_us"> Contact Us</a></li>
              <li><a class="nav-link scrollto" href="../client/index">Join us</a></li>
            </ul>
          </li>
          <?php
          if(isset($_SESSION['cus_id'])){
            ?>
            <li><a class="nav-link scrollto" href="../customer/customer_profile">profile</a>  </li>
            <li><a class="nav-link scrollto" href="../customer/log out">log out</a>  </li>
            <?php
          }
         
          else{
            ?>
            <li><a class="nav-link scrollto" href="../client/index">Join us</a></li>
            <?php
          }
     ?>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

