<?PHP
include "../../Model/product.php";
include "../../Controller/productC.php";
include "../../config.php";

if (isset($_POST['categoryselect']) and isset($_POST['description']) and isset($_POST['name'])  and isset($_FILES['photo']['name']) and isset($_POST['price'])){
 echo "add";
 $name=$_POST['categoryselect'];

    try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT id FROM category WHERE name = :name'

        );
        $query->execute([
            'name' => $name
        ]);
        $result= $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $category=$result ['id'];





    $product1=new product($category,$_POST['name'],$_POST['description'], $_POST['price'],$_FILES['photo']['name']);
    $product1C=new productC();
    $product1C->ajouterproduct($product1);

    move_uploaded_file($_FILES['photo']['tmp_name'],"c:/xampp/htdocs/Projet/assets/img/posts".$_FILES['photo']['name']);

     header('Location: gestionProduct.php');

}else{
    echo "vérifier les champs";
}


?>