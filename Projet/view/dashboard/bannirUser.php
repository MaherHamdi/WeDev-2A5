<?php
   
    include '../../controller/userC.php';
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
				$resultat['adresse']

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
					$resultat['adresse'] 

					);
			}
				$userC->modifierUser($user,$_GET['id']);
		header('Location:gestionuser.php');
	}
?>
