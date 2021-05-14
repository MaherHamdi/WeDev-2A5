<?php
include "c:/wamp64/www/Projet/config.php";
require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';
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
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

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



    <!-- =======================================================
  * Template Name: Delicious - v4.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<!-- ======= Top Bar ======= -->


<!-- ======= Header ======= -->

<section style="padding: 150PX 0PX 30px 0 " id="" class="events">
<?php 
require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';
include "../../controller/postC.php" ;
session_start();
if(empty($_SESSION['e'])){
      include("header.php");  
include('signup.php');
 include('login.php');
}     else
{
  $userC = new userC();
$res = $userC->recupererEmail($_SESSION['e']);
if ($res['verifier'] != 1) {
  session_destroy();
}
     include("headeruser.php");
    
}
$postC = new postC;
$posts = $postC->afficherpost1();
 ?>

    </header>
    
    <div class="container">
    
      <div class="events-slider swiper-container">
      
        <div class="swiper-wrapper">
        <?php
        foreach ($posts as $post){
?>
       
          <div class="swiper-slide">
         
            <div class="row event-item">
         
              <div class="col-lg-4">
                <img style="height: 180PX;" src= "../../assets/img/posts/<?php echo $post['image']; ?>" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-6 content">
                <h3><?php echo $post['titre']; ?></h3>
                <p class="fst-italic">
                <?php echo $post ['description']; ?>
                </p>
              </div>
           
            </div>
            
           
          </div><!-- End testimonial item -->
      
          <?php } ?>
        </div>

       
      </div>
      </section>
     
  <?php include('cardnews.php'); ?>

    <!-- End Header -->
    <?php include("footer_section.php") ?>


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
