<?php
include "../../controller/userC.php";
if (isset($_POST['submit'])){
    $id=$_POST['id'];
$userC= new userC();
$resss = $userC->recupererUser($_POST["id"]);
if($resss['password']==$_POST['password'])
{
    $user = new user(
        $_POST['nom'], 
        $_POST['prenom'], 
        $resss['username'], 
        $resss['email'],
        $resss['password'],  
        $resss['code_verification'], 
        $resss['verifier'],
        $_POST['phone'],
        $_POST['adresse']

        );
    }
    else{
        $user = new user(
            $_POST['nom'], 
            $_POST['prenom'], 
            $resss['username'], 
            $resss['email'],
           md5($_POST['password']),
            $resss['code_verification'], 
            $resss['verifier'],
            $_POST['phone'],
            $_POST['adresse']
            );  
           
    }
   
    
    $userC->modifierUser($user,$id);
    header('location:profileuser.php');
}
?>