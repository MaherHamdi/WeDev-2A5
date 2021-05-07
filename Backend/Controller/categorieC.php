<?php
include "../config.php";

class CategorieC
{
    function ajouterCategorie($categorie){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'INSERT INTO categories (categorie, description, image) 
                VALUES (:categorie, :description, :image)'
            );
            $query->execute([
                'categorie' => $categorie->getCategorie(),
                'description' => $categorie->getDescription(),
                'image' => $categorie->getImage()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    function afficherCategories(){
        $sql="SElECT * From  categories ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function supprimerCategorie($idC)
    {

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=crud_db",
                "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql = "DELETE  FROM `categories` WHERE `id`=:idC";
        $req= $this->db->prepare($sql);
        $req->bindValue(':idC',$idC);
        $req->execute();

    }
    public function recupererCategorie($idC)

    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT * FROM categories WHERE id = :idC'
        );
        $query->execute([
            'idC' => $idC
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }
    public function recuperer_id_Categorie($C)

    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT id FROM categories WHERE categorie = :C'
        );
        $query->execute([
            'C' => $C
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

    public function modifier_categorie($categorie, $id) {

        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'UPDATE categories SET categorie = :categorie, description = :description, image = :image WHERE id = :id'
            );
            $query->execute([

                'description' => $categorie->getDescription(),
                'categorie' => $categorie->getCategorie(),

                'image' => $categorie->getImage(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }

        }

    function rechercherListecategories($categorie){
        $sql="SELECT * from categories
    where categorie  LIKE '%$categorie%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function affichercategoriescroissant(){
        $sql=" SELECT  id , count(*) from post group by id  ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function afficherpostcat($idC){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'SELECT * FROM post WHERE id = :idC'
            );
            $query->execute([
                'idC' => $idC
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }







}