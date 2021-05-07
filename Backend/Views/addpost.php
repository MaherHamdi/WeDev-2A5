<?PHP
include "../Model/post.php";
include "../Controller/postC.php";

if (isset($_POST['categorie']) and isset($_POST['description']) and isset($_POST['titre'])  and isset($_FILES['image']['name']) ){
 echo "add";
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





    $post1=new post($_POST['description'],$_POST['titre'],$_FILES['image']['name'],$id);
   $test= $post1->getid();
    $description= $post1->getdescription();
    $image= $post1->getImage();
   //echo $test ;
  // echo $date_aller;
   // echo $image;
    $post1C=new postC();
    $post1C->ajouterpost($post1);

    move_uploaded_file($_FILES['image']['tmp_name'],"assets/img/".$_FILES['image']['name']);

     header('Location: showpost.php');

}else{
    echo "vérifier les champs";
}


?>