<?PHP
include "../Model/Categorie.php";
include "../Controller/CategorieC.php";

if (isset($_POST['categorie']) and isset($_POST['description'])  and isset($_FILES['image']['name']) ){

    $categorie1=new Categorie($_POST['categorie'],$_POST['description'],$_FILES['image']['name']);

    $categorie1C=new categorieC();
    $categorie1C->ajouterCategorie($categorie1);
    move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$_FILES['image']['name']);

    header('Location: afficher_categorie.php');

}else{
    echo "vérifier les champs";
}


?>