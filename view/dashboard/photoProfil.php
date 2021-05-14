<?php 
session_start();
include "../../controller/userC.php";
include "c:/wamp64/www/Projet/config.php";
$userC = new userC();
$res = $userC->recupererEmail($_SESSION['e']);
$extensionUpload=strtolower(substr(strrchr($_FILES['avatar']['name'],'.'), 1));
$chemin="C:/wamp64/www/Projet/assets/img/posts/".$res['id'].".".$extensionUpload;
$resultat=move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
$user = new user(
    $res['nom'], 
    $res['prenom'], 
    $res['username'], 
    $res['email'],
    $res['password'],  
    $res['code_verification'], 
    $res['verifier'],
    $res['phone'],
    $res['adresse'],
    $res['id'].".".$extensionUpload
    );
    $userC->modifierUser($user,$res['id']);
    header('location:profile.php?id='.$res['id']);

?>