<?PHP
include "../../Model/category.php";
include "../../Controller/categoryC.php";
include "../../config.php";

if (isset($_POST['name'])){

    $category=new category($_POST['name']);

    $categoryC=new categoryC();
    $categoryC->ajouterCategory($category);

    header('Location: gestionProduct.php');

}


?>