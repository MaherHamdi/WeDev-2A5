<?php
   
    include '../../controller/reservationC.php';
    include "c:/wamp64/www/Projet/config.php";

    $reservationC = new reservationC() ;
    	if (isset($_GET['idres'])){
$reservationC->supprimer_Reservation($_GET['idres']);
header('location:gestionReservation.php');
        }


            ?>