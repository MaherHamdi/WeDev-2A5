<?php
ob_start(); 
    include_once '../model/Role.php';
    include '../controller/roleC.php';

    $error = "";

    // create user
    $role = null;

    // create an instance of the controller
    $roleC = new RoleC();
    if ( isset($_POST["addrole"]) ) 
  {
            $role = new role(
                $_POST['nom']
              
            );
            $roleC->ajouterRole($role);
            header('Location:tables.php');
        }
     
        ob_end_flush(); 
    ?>