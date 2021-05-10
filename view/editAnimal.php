<?php
  include "../controller/animalC.php";
  include_once '../model/Animal.php';
  
   if (isset($_POST['ID']))
   {


  $animalC=new animalC();
    $animal=new animal($_POST['Espece'],$_POST['Nom'],$_POST['description'],$_POST['emplacement']);

    $animalC->modifierAnimal($animal,$_POST['ID']);
   
    header('Location:showAnimal.php');

}
              
?>