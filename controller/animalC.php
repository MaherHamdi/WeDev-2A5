<?php


class AnimalC
{
   public function afficherAnimaux()
    {  $sql= " SELECT * FROM animal" ; 
      $db = config ::getConnexion();
      try{
        $listeanimaux = $db->query($sql);
        return $listeanimaux ;

      } catch (Exception $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouterAnimal($animal)
    {
        $sql="INSERT INTO animal (Espece,Nom,description)
        values (:Espece,:Nom,:description)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                
                'Espece'=>$animal->getEspece(),
                'Nom'=>$animal->getNom(),
                'description'=>$animal->getdescription(),
               
                
            ]);
        }
        catch(Exception $e)
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
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
	}

	 function modifierAnimal($animal, $idanimal){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE animal SET 
                    Espece = :Espece, 
                    Nom = :Nom,
                    Poids = :Poids,
                    Taille = :Taille,
                WHERE ID = :idanimal'
            );
            $query->execute([
                'Espece'=>$animal->getEspece(),
                'Nom'=>$animal->getNom(),
                'Poids'=>$animal->getPoids(),
                'Taille'=>$animal->getTaille(),
                'ID' => $idanimal
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }





}
?>