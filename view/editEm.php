<?php
  include "../controller/emplacementC.php";
  include_once '../model/Emplacement.php';
  
   if (isset($_POST['IDe']))
   {
  $emplacementC=new emplacementC();
    $emplacement=new emplacement($_POST['NomE'],$_POST['RaceAnimal'],$_POST['NombrePlace']);

    $emplacementC->modifierEmplacement($emplacement,$_POST['IDe']);
   
    header('Location:showEmplacement.php');

}
              
?>