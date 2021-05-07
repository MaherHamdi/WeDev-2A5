<?php
include "../Controller/postC.php";
include "../Model/post.php";

if (isset($_GET['id_post']))
{
    // echo $_GET['id_categorie'];
    //$valeur=$_GET['id_categorie'];

    $pe = new postC();
    $pe->supprimerpost($_GET['id_post']);

    header('Location: showpost.php');
}
?>