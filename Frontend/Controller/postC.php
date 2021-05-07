<?php
include "../config.php";

class postC
{
    function ajouterpost($post){
        try {
            $pdo = config::getConnexion();

            $query = $pdo->prepare(
                'INSERT INTO post (description,titre,image,id) 
                VALUES (:description,:titre,:image,:id)'

            );


            $query->execute([

                
                'description' => $post->getDescription(),
                'titre' => $post->gettitre(),
                'image' => $post->getImage(),
                'id' => $post->getid()
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    function afficherpost(){
        $sql='SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id ';

        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    public function supprimerpost($idV)
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
        $sql = "DELETE  FROM `post` WHERE `id_post`=:idV";
        $req= $this->db->prepare($sql);
        $req->bindValue(':idV',$idV);
        $req->execute();

    }
    public function recupererpost($idC)
    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            "SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
            where post.id_post like '%$idC%'"
        );
        $query->execute([
            'idC' => $idC
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

            
      
    

    public function modifier_post($post, $idV) {

        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'UPDATE post SET description = :description, titre = :titre, image = :image, id = :id WHERE id_post = :idV'
            );
            $query->execute([


                
                'description' => $post->getDescription(),
                'titre' => $post->gettitre(),
                
                'image' => $post->getImage(),
                'id' => $post->getId(),
                'idV' => $idV
            ]);
            echo $query->rowCount() . " records UPDATED successfully";
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

  
    function trialphebitiquedecroissant(){
        $sql="SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
        ORDER BY post.titre DESC";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trialphebitiquecroissant(){
        $sql="SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
        ORDER BY post.titre ASC";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherListepost($titre){
        $sql="SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
        where post.titre  LIKE '%$titre%'";
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
                'SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id 
                WHERE id = :idC' 
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

    public function recupererost1($idV)

    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
        'SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id 
            WHERE id_post = :idV'

        );
        $query->execute([
            'idV' => $idV
        ]);
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
    }
   


}
