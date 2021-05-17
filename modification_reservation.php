<?php
include "c:/wamp64/www/Projet/config.php";
include "../../controller/reservationC.php";


$resrevation = null;
    $type=$_POST['type_ticketM'];
   
    

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


if (isset($_POST['updateR'])){
    $id=$_POST['idd'];   
$reservationC= new reservationC();

$reservation = new reservation(
    
    $_POST['id'],
    $idd,
    date('y-m-d',strtotime($_POST['date'])),
    $_POST['people'],
    $_POST['message'], 
    $_POST['people']*$prix_ticket,
   
);
   
   
    $reservationC->modifier_Reservation($reservation,$id);
    header('location:gestionReservation.php');
}
?>