<?PHP

include "../../Controller/CategoryC.php";
include "c:/xampp/htdocs/projet/config.php";

if (isset($_POST['id'])){
    $categoryC=new CategoryC();

    $category=new category($_POST['name']);

    $categoryC->modifier_category($category,$_POST['id']);
    header('Location:gestionProduct.php');

}


?>