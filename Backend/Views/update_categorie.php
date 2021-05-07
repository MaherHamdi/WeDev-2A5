<?PHP
include "../Controller/CategorieC.php";
include "../Model/Categorie.php";

if (isset($_POST['id'])){
   // echo $_GET['id_categorie'];
    $categorieC=new CategorieC();

    $categorie=new Categorie($_POST['categorie'], $_POST['description'],$_FILES['image']['name'] );

    $categorieC->modifier_categorie($categorie,$_POST['id']);
    move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$_FILES['image']['name']);
    header('Location:afficher_categorie.php');

}


?>