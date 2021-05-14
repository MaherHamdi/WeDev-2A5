<?php
   
    include '../../controller/userC.php';
	include "c:/wamp64/www/Projet/config.php";

    $userC = new userC() ;
    	if (isset($_GET['id'])){
			$resultat = $userC->recupererUser($_GET['id']);
			if($resultat['verifier']!=2)
			{
			$user = new user(
				$resultat['nom'], 
				$resultat['prenom'], 
				$resultat['username'], 
				$resultat['email'],
				$resultat['password'], 
				$resultat['code_verification'], 
				2,
				$resultat['phone'], 
				$resultat['adresse'],
				$resultat['image']
				);
			}
			else{
				$user = new user(
					$resultat['nom'], 
					$resultat['prenom'], 
					$resultat['username'], 
					$resultat['email'],
					$resultat['password'], 
					$resultat['code_verification'], 
					1,
					$resultat['phone'], 
					$resultat['adresse'] ,
					$resultat['image']
					);
			}
				$userC->modifierUser($user,$_GET['id']);
		header('Location:gestionuser.php');
	}
?>
