<?php
include "../config.php";
require_once '../model/Animal.php';

class AnimalC
{
   public function afficherAnimaux()
    {  $sql="SELECT * from animal 
        inner join emplacement
        ON animal.emplacement =emplacement.IDe"; 
      $db = config ::getConnexion();
      try{
        $listeanimaux = $db->query($sql);
        return $listeanimaux ;

      } catch (PDOException $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouterAnimal($animal)
    {
        $sql="INSERT INTO animal (Espece,Nom,description,emplacement)
        values (:Espece,:Nom,:description,:emplacement)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                
                'Espece'=>$animal->getEspece(),
                'Nom'=>$animal->getNom(),
                'description'=>$animal->getdescription(),
                'emplacement'=>$animal->getEmplacement(),


               
                
            ]);
        }
        catch(PDOException $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerAnimal($idanimal)
    {
			$sql="DELETE FROM animal WHERE ID= :idanimal";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idanimal',$idanimal);
			try{
				$req->execute();
			}
			catch (PDOException $e){
				die('Erreur: '.$e->getMessage());
			}
	}

 function modifierAnimal($animal, $ID){
            $sql="UPDATE animal SET 
                    Espece = :Espece, 
                    Nom = :Nom,
                    description =:description,
                    emplacement =:emplacement,
                WHERE ID = :ID" ;
            $db = config::getConnexion();
            try {

            $query = $db->prepare($sql);
            $query->execute([
                'Espece'=>$animal->getEspece(),
                'Nom'=>$animal->getNom(),
                'description'=>$animal->getdescription(),
                'emplacement' =>$animal->getEmplacement(),
                'ID' => $ID
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


function recupererAnimal($idanimal){
        $sql="SELECT * from animal 
        inner join emplacement
        ON animal.emplacement =emplacement.IDe where ID=:idanimal";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
            'idanimal' =>$idanimal
            ]);

            return $query->fetch();
            
        }
        catch (PDOException $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     
function recherche($nom)
{
 $sql="SELECT animal.ID, animal.Espece, animal.Nom, animal.description, animal.emplacement from animal inner join emplacement
        ON animal.emplacement =emplacement.IDe where ID like '%$nom%' or Espece like '%$nom%' or Nom like '%$nom%' or description like '%$nom%' or emplacement like '%$nom$' ";
 $db = config::getConnexion();
      $db = config::getConnexion();
        try{
            $listeanimaux=$db->query($sql);
            return $listeanimaux;
        }
        catch (PDOException $e){
            die('Erreur: '.$e->getMessage());
        }
      
}
function triAlphebitiqueDecroissant(){
        $sql="SELECT * from animal inner join emplacement
        ON animal.emplacement =emplacement.IDe
        ORDER BY IDe DESC";
        $db = config::getConnexion();
        try{
            $listeemplacement=$db->query($sql);
            return $listeemplacement;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>