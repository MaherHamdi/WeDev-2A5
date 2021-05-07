
<?PHP
include "../Controller/postC.php";
include "../Model/post.php";

if (isset($_POST['id_post'])){
    $categorie=$_POST['categorie'];

    try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT id FROM categories WHERE categorie = :categorie'

        );
        $query->execute([
            'categorie' => $categorie
        ]);
        $result= $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    $id=$result ['id'];

    $postC=new postC();

    $post=new post($_POST['description'],$_POST['titre'],$_FILES['image']['name'],$id);

    $postC->modifier_post($post,$_POST['id_post']);
    move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$_FILES['image']['name']);
    header('Location: showpost.php');

}
?>

