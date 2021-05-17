<?php

include "c:/wamp64/www/Projet/config.php";
    include_once '../../model/Reservation.php';
    include '../../controller/reservationC.php';
    require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';
    

    // create user
    $resrevation = null;
    $type=$_POST['type_ticket'];

    try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT id_ticket FROM ticket WHERE prix_ticket = :prix_ticket'

        );
        $query->execute([
            'prix_ticket' => $type
        ]);
        $result= $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $idd=$result['id_ticket'];

    try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT prix_ticket FROM ticket WHERE prix_ticket = :prix_ticket'

        );
        $query->execute([
            'prix_ticket' => $type
        ]);
        $result= $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $prix_ticket=$result['prix_ticket'];
    // create an instance of the controller
   $reservationC = new ReservationC();
   $userC = new userC();
 $u = $userC->recupererUser($_POST['id_user']);
    if ( isset($_POST["reserver"]) ) 
  {
            $reservation = new reservation(
                $_POST['id_user'],
                $idd,
                date('y-m-d',strtotime($_POST['date'])),
                $_POST['people'],
                $_POST['message'], 
                $_POST['people']*$prix_ticket,
                
            );
            $to       = $u['email'];
            $subject  = 'Reservation !!';
            $message  = '<html>  
            <body>
            <div align="center">
            votre reservation a été accepté!!
            <br />
            <img src ="http://www.primfix.com/mailing/separation.png" />;
            </div>
            </body>
            </html>';
            $headers  = 'From: [projetbelevedere]@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            $reservationC->sendMail($to, $subject, $message, $headers);
            $reservationC->ajouterReservation($reservation);
            
            
            header('Location:welcome.php');exit;
     
            
}


?>