
<?php
include "../Controller/CategorieC.php";
include "../Model/Categorie.php";

if (isset($_GET['id']))
{
    // echo $_GET['id_categorie'];
    //$valeur=$_GET['id_categorie'];

    $pe = new CategorieC();
    $pe->supprimerCategorie($_GET['id']);

    header('Location: afficher_categorie.php');
}
?>