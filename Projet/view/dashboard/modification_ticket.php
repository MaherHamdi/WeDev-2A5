<?php
include "c:/wamp64/www/Projet/config.php";
include "../../controller/ticketC.php";

if (isset($_POST['update'])){
    $id=$_POST['id'];
$ticketC= new ticketC();

    $ticket = new ticket(
        $_POST['nom'], 
        $_POST['prix'], 
        $_POST['description']
        );
   
   
    
    $ticketC->modifier_ticket($ticket,$id);
    header('location:gestionReservation.php');
}
?>