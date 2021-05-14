<?php
include "c:/wamp64/www/Projet/config.php";
require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';
require_once 'c:/wamp64/www/Projet/controller/reservationC.php';
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
$reservationC = new reservationC();
$listeres = $reservationC->afficherReservationById($res['id'])->fetchALL();
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

<div style="overflow-x: hidden;">

    <header id="header" class="d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <div class="logo me-auto">
                <h1><a href="index.php">Belevedere</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="index.php#hero">Acceuil</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">Notre zoo</a></li>
                    <li><a class="nav-link scrollto" href="index.php#why-us">Produit</a></li>
                    <li><a class="nav-link scrollto" href="index.php#specials">Specials</a></li>
                    <li><a class="nav-link scrollto" href="index.php#events">nouveauté</a></li>
                    <li><a class="nav-link scrollto" href="index.php#gallery">Gallerie</a></li>
                    <li><a class="nav-link scrollto" href="index.php#testimonials">Animaux</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li class="dropdown"><a href="#"><span><?php echo $res['username']; ?></span> <i class="bi bi-chevron-down"></i></a>

                        <ul class="listLogRight">
                            <li><a href="profileuser.php">Profile</a></li>
                            <?php
                            if ($res['role'] == "admin") { ?>
                                <li><a href="../dashboard/gestionuser.php">Dashboard</a></li>
                            <?php } ?>
                            <li><a href="deconnection.php">se deconnecter</a></li>
                        </ul>
                    </li>
                    <li class="" ><a href="panierPage.php"><i class="fas fa-shopping-cart" style="color:white"></i></a></li>

                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->


        </div>
    </header>

    <!-- End Header -->

    <?php include('profileinput.php'); ?>
    <div class="section-title">
            <h2 style="margin-top: 40px;"><span>Votre reservation</h2>
        </div>
    <?php include('reservationTable.php'); ?>


    <?php include("footer_section.php") ?>

</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
</script>