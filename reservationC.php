<?php

require_once 'c:/wamp64/www/Projet/model/Reservation.php';
class ReservationC
{
   public function afficherReservation()
    {   $sql= " SELECT * FROM reservation" ; 
        $db = config ::getConnexion();
        try{
            $stmt =$db->prepare($sql);
            $stmt->execute();
                return $stmt;
  
        } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouterReservation($reservation)
    {
    
        $sql="INSERT INTO reservation (id_user,id_ticket,date,nperso,message,prix_res)
        values (:id_user,:id_ticket,:date,:nperso,:message,:prix_res)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'id_user'=>$reservation->getId_user(),
                'id_ticket'=>$reservation->getId_ticket(),
                'date'=>$reservation->getDate(),
                'nperso'=>$reservation->get_nperso(),
                'message'=>$reservation->getMessage(),
                'prix_res'=>$reservation->getPrix()
     
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


    public function modifier_Reservation($reservation,$id)
    {
        try
        {
        $sql = "UPDATE reservation SET id_user = :id_user, 
        id_ticket = :id_ticket,
        date = :date, 
        nperso = :nperso,
        message = :message,
        prix_res=:prix_res
        WHERE id_res = :id_res";
            $db=config::getConnexion();
    $stmt = $db->prepare($sql);      
    $stmt->execute(
        [ 
    'id_user'=>$reservation->getId_user(),
    'id_ticket'=>$reservation->getId_ticket(),                     
    'date'=> $reservation->getDate(),
    'nperso'=>$reservation->get_nperso(),
    'message'=>$reservation->getMessage(),        
    'prix_res'=> $reservation->getPrix(),   
           'id_res'=> $id
    
        ]);
    echo $stmt->rowCount();
}
catch(Exception $e)
{
    die('Erreur: '.$e->getMessage());
}
    }

   
    public function supprimer_Reservation($id)
    {
        $sql ="DELETE FROM reservation WHERE id_res = :id_res";
        $db=config::getConnexion();
        $stmt =$db->prepare($sql);
        $stmt->execute(
            [
                'id_res'=>$id
            
            ]
        );
    }


    public function recupererReservation($id)

    {
        try{
            $db=config::getConnexion();
            $stmt = $db->prepare(
                'SELECT * FROM reservation WHERE id_res = :id_res'
            ) ;
            $stmt->execute(
    
                [
                    'id_res'=>$id
                ]
                );
                return $stmt->fetch();
    
    
        }catch (PDOException $e){
            $e->getMessage();
        }
    }

    function sendMail($to, $subject, $message, $headers)
    {
        
    if(mail($to, $subject, $message, $headers))
        echo "Email sent";
    else
        echo "Email sending failed";
    }

    public function rechercher_res()
    {
        
    }

}




?>