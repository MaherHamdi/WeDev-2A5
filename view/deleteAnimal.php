<?php
   
    include '../controller/animalC.php';
    $animalC = new animalC() ;
    	if (isset($_POST["idanimal"])){
		$animalC->supprimerAnimal($_POST["idanimal"]);
		header('Location:showAnimal.php');
	}
?>