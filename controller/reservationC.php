<?php
class ReservationC
{
   public function afficherReservationById($id)
 
    {        
      $sql= " SELECT * FROM reservation inner join ticket on reservation.id_ticket=ticket.id_ticket WHERE id_user='" . $id . "'" ; 
      $db = config ::getConnexion();
      try{
        $listeres = $db->query($sql);
        return $listeres ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }
    }
     ?>

