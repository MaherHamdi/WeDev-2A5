<?php
   
    include '../controller/emplacementC.php';
    $emplacementC = new emplacementC() ;
    	if (isset($_POST["idEmplacement"])){
		$emplacementC->supprimerEmplacement($_POST["idEmplacement"]);
		header('Location:showEmplacement.php');
	}
?>