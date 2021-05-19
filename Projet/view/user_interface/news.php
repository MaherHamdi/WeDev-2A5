<?php
include "c:/wamp64/www/Projet/config.php";
require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';

// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if (empty($_SESSION['e'])) {
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:../../index.php');
}

$userC = new userC();
$res = $userC->recupererEmail($_SESSION['e']);
if ($res['verifier'] != 1) {
    session_destroy();
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


    <!-- =======================================================
  * Template Name: Delicious - v4.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<!-- ======= Top Bar ======= -->


<!-- ======= Header ======= -->

<section style="padding: 10PX 0PX 30px 0 " id="" class="events">
    <header style="margin-bottom: 30px;"  id="header" class="d-flex align-items-center  header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="navbar">
             <h1  > <a style=" text-decoration: none ; font-size:30px" href="../../index.php">Belevedere</a></h1> 
            </div>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul >
                    <li><a class="nav-link scrollto " href="../../index.php#hero">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="../../index.php#about">Notre zoo</a></li>
                    <li><a class="nav-link scrollto" href="">Tarifs</a></li>
                    <li><a class="nav-link scrollto" href="../../index.php#specials">Specials</a></li>
                    <li><a class="nav-link scrollto active" href="../../index.php#events">nouveauté</a></li>
                    <li><a class="nav-link scrollto" href="../../index.php#chefs">Animaux</a></li>
                    <li><a class="nav-link scrollto" href="../../index.php#gallery">Gallerie</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li  class="dropdown"><a style=" text-decoration: none ;" href="#"><span><?php echo $res['username']; ?></span> <i class="bi bi-chevron-down"></i></a>

                        <ul class="listLogRight">
                            <li><a style=" text-decoration: none ;" href="profileuser.php">Profile</a></li>
                            <?php
                            if ($res['role'] == "admin") { ?>
                                <li><a style=" text-decoration: none ;" href="../dashboard/gestionuser.php">Dashboard</a></li>
                            <?php } ?>
                            <li><a style=" text-decoration: none ;" href="deconnection.php">se deconnecter</a></li>
                        </ul>
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header>
    
    <div class="container">
      <div class="events-slider swiper-container">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-4">
                <img style="height: 180PX;" src="../../assets/img/event-birthday.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-6 content">
                <h3>Birthday Parties</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                  et dolore
                  magna aliqua.
            
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                  voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
           
            </div>
            

          </div><!-- End testimonial item -->
        </div>

       
      </div>
      </section>
     
  <?php include('cardnews.php'); ?>

    <!-- End Header -->
    <footer id="footer">
        <div class="container">
            <h3>Belevedere</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Belevedere</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
                Designed by <a href="https://esprit.tn/" target="_blank">WeDev</a>
            </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>

<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
