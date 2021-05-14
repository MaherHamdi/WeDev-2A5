<?php

include "c:/wamp64/www/belevedere/config.php";
require_once 'c:/wamp64/www/belevedere/model/User.php';
class UserC
{
   public function afficherUser()
    {  $sql= " SELECT * FROM user" ; 
      $db = config ::getConnexion();
      try{
        $listeuser = $db->query($sql);
        return $listeuser ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouterUser($user)
    {
    
        $sql="INSERT INTO user (username,email,password,nom,prenom,code_verification)
        values (:username,:email,:password,:nom,:prenom,:code_verification)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                'username'=>$user->getUsername(),
                'nom'=>$user->getNom(),
                'prenom'=>$user->getPrenom(),
                'email'=>$user->getEmail(),
                'password'=>$user->getPassword(),
                'code_verification'=>$user->getKey(),
  
            ]);
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    public function recupererUser($id)

{
    try{
        $db=config::getConnexion();
        $stmt = $db->prepare(
            'SELECT * FROM user WHERE id = :idb'
        ) ;
        $stmt->execute(

            [
                ':idb'=>$id
            ]
            );
            return $stmt->fetch();


    }catch (PDOException $e){
        $e->getMessage();
    }
}
public function recupererEmail($email)

{
    try{
        $db=config::getConnexion();
        $stmt = $db->prepare(
            'SELECT * FROM user WHERE email = :email'
        ) ;
        $stmt->execute(

            [
                ':email'=>$email
            ]
            );
            return $stmt->fetch();


    }catch (PDOException $e){
        $e->getMessage();
    }
}
    public function modifierUser($user,$id)

{
    $sql = "UPDATE user SET nom = :nom, 
    prenom = :prenom, 
    username = :username,  
    password = :password,  
    email = :email 
    WHERE id = :id";
        $db=config::getConnexion();
$stmt = $db->prepare($sql);      
$stmt->execute(
    [              
'username'=> $user->getUsername(),        
'nom'=> $user->getNom(), 
'prenom'=> $user->getPrenom(),   
'email'=> $user->getEmail(),  
'password'=> $user->getPassword(),
'id'=> $id
    ]);
echo $stmt->rowCount();

}


function sendMail($to, $subject, $message, $headers)
{
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
}
function supprimerUser($iduser)
{
        $sql="DELETE FROM user WHERE id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$iduser);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function connexionUser($email,$password){
    $sql="SELECT * FROM user WHERE email='" . $email . "'";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
        if($count==0) {
            $message = "email est incorrect";
        } else {
            $userC = new UserC();
            $res=$userC->recupererEmail($email);
           if($res['password']!= $password)
           {
            $message = "password est incorrect";
           }
           else
           {
            $x=$query->fetch();
            $message = $x['role'];
           }
        }
    }
    catch (Exception $e){
            $message= " ".$e->getMessage();
    }
  return $message;
}

}
?>