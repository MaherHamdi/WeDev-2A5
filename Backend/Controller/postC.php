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
        $sql="SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id ";

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
    public function recupererpost($idV)

    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            'SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
            where post.id_post= :idV'

            
        );
        $query->execute([
            'idV' => $idV
        ]);
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
    function rechercherListepost($titre){
        $sql="SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
        where titre  LIKE '%$titre%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public function recupererpost1()
    {     try {
        $pdo = config::getConnexion();
        $query = $pdo->prepare(
            "SELECT post.id_post, post.titre, post.image, post.description, categories.categorie from post inner join categories on post.id=categories.id
            "
        );
       
        
        return $query->fetch();
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

    






}