<?php
require_once 'C:/xampp/htdocs/Projet/model/product.php';

class productC
{
    public function ajouterproduct($product)
    {

        $sql = "INSERT INTO products (category_id,name,description,price,photo)
        values (:category,:name,:description,:price,:photo)";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);
            $query->execute([
                'name' => $product->getname(),
                'description' => $product->getdescription(),
                'price' => $product->getprice(),
                'photo' => $product->getphoto(),
                'category' => $product->getcategory(),


            ]);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function afficherproduct($start, $limit)
    {

        $sql = "SELECT products.id, products.name, products.description, products.price, products.photo, category.name AS catname from products LEFT join category on products.category_id=category.id LIMIT $start, $limit";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    public function supprimerproduct($idV)
    {

        $conn = NULL;
        try {
            $conn = new PDO(
                "mysql:host=localhost;dbname=belevedere",
                "root",
                ""
            );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql = "DELETE  FROM `products` WHERE `id`=:idV";
        $req = $this->db->prepare($sql);
        $req->bindValue(':idV', $idV);
        $req->execute();
    }
    public function recupererproduct($idV)

    {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'SELECT products.id, products.name AS prodname,  products.description, products.price, products.photo, category.name from products inner join category on products.category_id=category.id
            where products.id= :idV'


            );
            $query->execute([
                'idV' => $idV
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function getData()

    {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'SELECT products.id, products.name AS prodname,  products.description, products.price, products.photo, category.name from products inner join category on products.category_id=category.id'


            );
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }/*
    public function afficher_les_categories(){

    $sql="SELECT * FROM categories ";

        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/


    public function modifier_product($product, $idV)
    {

        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'UPDATE products SET category_id=:category, name=:name, description=:description, price=:price, photo=:photo WHERE id = :idV'
            );
            $query->execute([
                'description' => $product->getdescription(),
                'name' => $product->getname(),
                'price' => $product->getprice(),
                'photo' => $product->getphoto(),
                'category' => $product->getcategory(),
                'idV' => $idV
            ]);
            echo $query->rowCount() . " records UPpriceD successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    /* function rechercherprixmin(){
        $sql="SELECT min(prix) as min from voyage   ";


        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherprixmax(){
        $sql="SELECT max(prix) as max from voyage  ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherVoyagesdecroissant(){
        $sql="SElECT * From voyage ORDER BY prix DESC ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherVoyagescroissant(){
        $sql="SElECT * From voyage ORDER BY prix ASC ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }*/
    function rechercherListeproduct($name)
    {
        $sql = "SELECT products.id, products.name, products.photo, products.description, category.name from products inner join category on products.category_id=category.id
        where name  LIKE '%$name%'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function recupererproduct1()
    {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                "SELECT products.id, products.name, products.photo, products.description, category.name from products inner join category on products.category_id=category.id
            "
            );


            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }




    public function findcategory()
    {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                "SELECT * from category"
            );


            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function countAll()
    {
        $pdo = config::getConnexion();
        $sql = "select * from products";

        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $stmt->rowCount();
    }
}
