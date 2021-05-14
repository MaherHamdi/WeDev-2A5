<?php
require_once 'c:/wamp64/www/Projet/model/Password.php';

class passwordC
{
    public function supprimerUser($email)
    {      
        $db=config::getConnexion();
        $stmt = $db->prepare ( "DELETE * FROM passwordreset WHERE pswEmail = :pswEmail");
         $stmt->execute(
            [
                ":pswEmail"=>$email
            ]
        );
      

    }

    
    public function ajouterPassword($password)
    {
    
        $sql="INSERT INTO passwordreset (pswEmail,resetToken,resetExpire)
        values (:pswEmail,:resetToken,:resetExpire)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'pswEmail'=>$password->getEmail(),
                'resetToken'=>$password->getToken(),
                'resetExpire'=>$password->getExpire(),
  
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
}


?>