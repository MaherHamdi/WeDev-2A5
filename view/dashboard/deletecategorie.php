
<?php

include "../../Controller/CategorieC.php";

if (isset($_GET['id']))
{
    // echo $_GET['id_categorie'];
    //$valeur=$_GET['id_categorie'];

    $pe = new CategorieC();
    $pe->supprimerCategorie($_GET['id']);

    header('Location: gestionBlog.php');
}
?>