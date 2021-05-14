<?PHP

include "../../Controller/CategorieC.php";
include "c:/wamp64/www/projet/config.php";

if (isset($_POST['id'])){
   // echo $_GET['id_categorie'];
    $categorieC=new CategorieC();

    $categorie=new Categorie($_POST['categorie'], $_POST['description']);

    $categorieC->modifier_categorie($categorie,$_POST['id']);
    header('Location:gestionBlog.php');

}


?>