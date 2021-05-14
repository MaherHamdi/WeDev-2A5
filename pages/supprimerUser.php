<?php
   
    include '../controller/userC.php';
    $userC = new userC() ;
    	if (isset($_POST["id"])){
		$userC->supprimerUser($_POST["id"]);
		header('Location:tables.php');
	}
?>