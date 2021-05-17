<?php
   
    include '../../controller/ticketC.php';
    include "c:/wamp64/www/Projet/config.php";

    $ticketC = new ticketC() ;
    	if (isset($_GET['idticket'])){
$ticketC->supprimer_ticket($_GET['idticket']);
header('location:gestionReservation.php');
        }


            ?>