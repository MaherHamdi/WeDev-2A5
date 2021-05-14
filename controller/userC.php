<?php

require_once 'c:/wamp64/www/Projet/model/User.php';
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
    
        $sql="INSERT INTO user (username,email,password,nom,prenom,code_verification,image)
        values (:username,:email,:password,:nom,:prenom,:code_verification,:image)";
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
                'image'=>$user->getImage()
  
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
    email = :email ,
    verifier = :verifier,
    phone = :phone,
    adresse = :adresse,
    image = :image
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
'verifier'=> $user->getVerifier(),
'phone'=> $user->getPhone(),
'adresse'=> $user->getAdresse(),
'image'=> $user->getImage(),
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



function connexionUser($email,$password){
    $sql="SELECT * FROM user WHERE email='" . $email . "'";
    $db = config::getConnexion();
    $message = "";
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
           $query->fetch();
           }
         
        }
    }
    catch (Exception $e){
            $message= " ".$e->getMessage();
    }
  return $message;
}


function emailExist($email){
    $sql="SELECT * FROM user WHERE email='" . $email . "'";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
  return $count;
}
function usernameExist($username){
    $sql="SELECT * FROM user WHERE username='" . $username . "'";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
  return $count;
}
}


?>