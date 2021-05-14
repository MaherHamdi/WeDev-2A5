<?php

include "c:/wamp64/www/belevedere/config.php";
require_once 'c:/wamp64/www/belevedere/model/Role.php';
class RoleC
{
   public function afficherRole()
    {  $sql= " SELECT * FROM role" ; 
      $db = config ::getConnexion();
      try{
        $listerole = $db->query($sql);
        return $listerole ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouterRole($role)
    {
        $sql="INSERT INTO role (id_role,nom_role)
        values (:id_role,:nom_role)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'id_role'=>$role->getId(),
                'nom_role'=>$role->getNom(),
                
               
                
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    public function recupererUser($id_role)

{
    try{
        $db=config::getConnexion();
        $stmt = $db->prepare(
            'SELECT * FROM role WHERE id_role = :idb'
        ) ;
        $stmt->execute(

            [
                ':idb'=>$id_role
            ]
            );
            return $stmt->fetch();


    }catch (PDOException $e){
        $e->getMessage();
    }
}
    public function modifierRole($role,$id_role)

{
    $sql = "UPDATE role SET  nom_role= :nom_role
   
    WHERE id_role = :id_role";
        $db=config::getConnexion();
$stmt = $db->prepare($sql);      
$stmt->execute(
    [              
'nom_role'=> $role->getNom(), 

'id'=> $id_role
    ]);
echo $stmt->rowCount();

}


function supprimerRole($id_role)
{
        $sql="DELETE FROM role WHERE role_id= :role_id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':role_id',$id_role);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}


}
?>