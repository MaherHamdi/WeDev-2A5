<?PHP
include "../../Model/Categorie.php";
include "../../Controller/CategorieC.php";
include "../../config.php";

if (isset($_POST['categorie']) and isset($_POST['description']) ){

    $categorie1=new Categorie($_POST['categorie'],$_POST['description']);

    $categorie1C=new categorieC();
    $categorie1C->ajouterCategorie($categorie1);

    header('Location: gestionblog.php');

}else{
    echo "vérifier les champs";
}


?>