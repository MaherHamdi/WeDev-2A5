<?php
include_once 'c:/wamp64/www/Projet/controller/userC.php';
include "c:/wamp64/www/Projet/config.php";

session_start();
$userC=new userC();


if(!empty($_SESSION['e']))
 {
  $res=$userC->recupererEmail($_SESSION['e']);
  if($res['verifier']==1)
 {
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:welcome.php');
 } 
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zoo Belevedere</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/log.css" rel="stylesheet">

  <!--<link href="assets/css/log.css" rel="stylesheet">-->



  <!-- =======================================================
  * Template Name: Delicious - v4.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+216 90 766 664</span></i>
    <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lun-Dim: 10:00 AM - 20:00 PM</span></i>
  </div>

</section>

<!-- ======= Header ======= -->

<?php include('signup.php');?>

<?php include('login.php');?>

<?php include('header.php');?>

<?php if (($error != "") && ($message == "")){ ?>
                        <script type="text/javascript">
               $('#registerModal').modal('show');
                        </script>            </div>
                        <?php } ?>
                        
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<?php include('hero_section1.php');?>
<!-- End Hero -->


  <!-- ======= notre zoo Section ======= -->
  <?php include('zoo_section.php');?>
  <!-- notre zoo Section -->

  <!-- ======= Whu Us Section ======= -->
  <?php include('shop_section.php');?>
  
  <!-- End Whu Us Section -->



  <!-- ======= Specials Section ======= -->
  

  <!-- ======= nouveauté Section ======= -->
  <?php include('nouveaute_section.php');?>
 <!-- End nouveauté Section -->

 

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container-fluid">

      <div class="section-title">
        <h2>Some photos from <span>Our Restaurant</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
          autem.</p>
      </div>

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="../../assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
              <img src="../../assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Gallery Section -->


  <!-- ======= Testimonials Section ======= -->
  <!-- End testimonial item -->
  <?php include("animal_section.php") ?>

<!-- End Testimonials Section -->

  <!-- ======= Contact Section ======= -->
  <?php include('contact.php');?>
<!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('footer_section.php');?>
<!-- End Footer -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>


<!-- Template Main JS File -->
</body>
<script src="../../assets/js/main.js"></script>
