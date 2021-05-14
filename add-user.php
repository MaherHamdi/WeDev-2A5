<?php
ob_start(); 
session_start();
    include_once 'model/User.php';
    include 'controller/userC.php';

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
            $user = new user(
                $_POST['nom'], 
                $_POST['prenom'], 
                $_POST['username'], 
                $_POST['email'],
                md5($_POST['password']), 
                $key

            );
            $to       = $_POST['email'];
            $subject  = 'Code de verification';
            $message  = 'Votre code de validation est :'.$key;
            $headers  = 'From: [projetbelevedere]@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';
            $userC->sendMail($to, $subject, $message, $headers);
            $userC->ajouterUser($user);
            $_SESSION['e'] = $_POST["email"];

         

            header('Location:verification_code.php');exit;
        }
     
        ob_end_flush(); 
    ?>