<?php
require_once 'C:/xampp/htdocs/Projet/model/Category.php';

class CategoryC
{
    function ajouterCategory($name){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'INSERT INTO category (name) 
                VALUES (:name)'
            );
            $query->execute([
                'name' => $name->getname(),
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        };
    }

    function affichercategory($startC,$limitC){
        $sql="SElECT * From  category LIMIT $startC, $limitC ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function supprimerCategory($idC)
    {

        $conn = NULL;
        try{
            $conn = new PDO("mysql:host=localhost;dbname=belevedere",
                "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e){
            echo 'ERROR: ' . $e->getMessage();
        }
        $this->db = $conn;
        $sql = "DELETE  FROM `category` WHERE `id`=:idC";
        $req= $this->db->prepare($sql);
        $req->bindValue(':idC',$idC);
        $req->execute();

    }
    public function recupererCategory($idC)

    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT * FROM category WHERE id = :idC'
        );
        $query->execute([
            'idC' => $idC
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }
    public function recuperer_id_Category($C)

    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT id FROM category WHERE name = :C'
        );
        $query->execute([
            'C' => $C
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }

    public function modifier_category($name, $id) {

        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'UPDATE category SET name = :name WHERE id = :id'
            );
            $query->execute([

                'name' => $name->getname(),

                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }

        }

    function rechercherListecategory($name){
        $sql="SELECT * from category
    where name  LIKE '%$name%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function affichercategorycroissant(){
        $sql=" SELECT  id , count(*) from products group by id  ";
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
                'SELECT * FROM products WHERE id = :idC'
            );
            $query->execute([
                'idC' => $idC
            ]);
            return $query->fetch();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    

    function countAllC(){
        $pdo = config::getConnexion();
           $sql = "select * from category";
    
       $stmt = $pdo->prepare($sql);
        try { $stmt->execute();}
        catch(PDOException $e){echo $e->getMessage();}
    
    return $stmt->rowCount();
    }

    

}