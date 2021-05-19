<?php
ob_start(); 
session_start();
    include_once '../../model/User.php';
    include '../../controller/userC.php';
    include "C:/xampp/htdocs/Projet/config.php";


    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
   $userC = new UserC();
    $longuerKey=6;
    $key="";
    for($i=1;$i<$longuerKey;$i++)
    {
        $key .=mt_rand(0,9);
    }
    
    if ( isset($_POST["inscrire"]) ) 
  {
$count=$userC->emailExist($_POST['email']) ;
if ($count==0)
{
    $count=$userC->usernameExist($_POST['username']) ;
    if($count==0)
    {
        if($_POST['password']==$_POST['repeat_password'])
        {
            $user = new user(
                $_POST['nom'], 
                $_POST['prenom'], 
                $_POST['username'], 
                $_POST['email'],
                md5($_POST['password']), 
                $key,
                0,
                "",
                ""

            );
            $to       = $_POST['email'];
            $subject  = 'Code de verification';
            $messagee  = 'Votre code de validation est :'.$key;
            $headers  = 'From: [projetbelevedere]@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            $userC->sendMail($to, $subject, $messagee, $headers);
            $userC->ajouterUser($user);
            $_SESSION['e'] = $_POST["email"];
            header('Location:verification_code.php');exit;
        }
        else 
        {
    $error = "password n'est sont pas identique";
    header('Location:../../index.php?error=password');exit;

        }

   }
   else {
    $error = "username est deja utilisé";
    header('Location:../../index.php?error=username');exit;
    
   }

}
    else 
    {
     $error = "email est deja utilisé";
     header('Location:../../index.php?error=email');exit;
    }
}
        ob_end_flush();
