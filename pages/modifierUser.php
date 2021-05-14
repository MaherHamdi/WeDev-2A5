<?php
include "../controller/userC.php";

if (isset($_POST['submit'])){
    $id=$_POST['id'];
$userC= new userC();
    $user = new user(
        $_POST['nom'], 
        $_POST['prenom'], 
        $_POST['username'], 
        $_POST['email'],
        $_POST['password'], 
        md5($_POST['password']), 
        );
    $userC->modifierUser($user,$id);
    header('location:tables.php');
}
?>