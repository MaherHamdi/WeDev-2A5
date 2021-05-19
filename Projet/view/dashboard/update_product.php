<?PHP
include "../../Controller/productC.php";
include "c:/xampp/htdocs/projet/config.php";

if (isset($_POST['id_product'])){
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

    $productC=new productC();

    $product=new product($category, $_POST['name'], $_POST['description'], $_POST['price'],$_FILES['photo']['name']);

    $productC->modifier_product($product,$_POST['id_product']);
    move_uploaded_file($_FILES['photo']['tmp_name'],"../../assets/img/posts/".$_FILES['photo']['name']);
    header('Location: gestionProduct.php');

}
?>

