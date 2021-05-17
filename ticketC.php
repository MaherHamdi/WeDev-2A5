<?php

require_once 'c:/wamp64/www/Projet/model/Ticket.php';
class TicketC
{
   public function afficher_Ticket()
    {   
        $sql= " SELECT * FROM ticket" ; 
        $db = config ::getConnexion();
        try{
          $listticket = $db->query($sql);
          return $listticket ;
  
        } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouter_ticket($ticket)
    {
    
        $sql="INSERT INTO ticket (nomticket,prix_ticket,description)
        values (:nomticket,:prix_ticket,:description)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'nomticket'=>$ticket->get_nomticket(),
                'prix_ticket'=>$ticket->get_prix(),
                'description'=>$ticket->get_description(),
  
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    public function modifier_ticket($ticket,$id)

    {
        $sql = "UPDATE ticket SET nomticket = :nomticket, 
        prix_ticket = :prix_ticket, 
        description = :description
        WHERE id_ticket = :id_ticket";
            $db=config::getConnexion();
    $stmt = $db->prepare($sql);      
    $stmt->execute(
        [              
    'nomticket'=> $ticket->get_nomticket(),        
    'prix_ticket'=> $ticket->get_prix(), 
    'description'=> $ticket->get_description(),   
    'id_ticket'=> $id
    
        ]);
    echo $stmt->rowCount();
    
    }
    

    public function supprimer_ticket($id)
    {
        $sql ="DELETE FROM ticket WHERE id_ticket = :id_ticket";
        $db=config::getConnexion();
        $stmt =$db->prepare($sql);
        $stmt->execute(
            [
                'id_ticket'=>$id
            
            ]
        );
    }
    public function recupererTicket($id)

{
    try{
        $db=config::getConnexion();
        $stmt = $db->prepare(
            'SELECT * FROM ticket WHERE id_ticket = :id_ticket'
        ) ;
        $stmt->execute(

            [
                'id_ticket'=>$id
            ]
            );
            return $stmt->fetch();


    }catch (PDOException $e){
        $e->getMessage();
    }
}
}

?>