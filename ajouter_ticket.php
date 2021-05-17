<?php

include "c:/wamp64/www/Projet/config.php";
    include_once '../../model/Ticket.php';
    include '../../controller/ticketC.php';

    

    // create user
    $ticket = null;

    // create an instance of the controller
   $ticketC = new TicketC();
    if ( isset($_POST["save"]) ) 
  {
            $ticket = new ticket(
                $_POST['nom'], 
                $_POST['prix'], 
                $_POST['description']
                
            );
            
            $ticketC->ajouter_ticket($ticket);
            header('Location:gestionReservation.php');exit;
        
       
}
        
