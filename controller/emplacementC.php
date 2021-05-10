<?php
include "../config.php";
require_once '../model/Emplacement.php';

class emplacementC
{
   public function afficherEmplacement()
    {  $sql= " SELECT * FROM emplacement" ; 
      $db = config ::getConnexion();
      try{
        $listeemplacement = $db->query($sql);
        return $listeemplacement ;

      } catch (PDOException $e) {die ('erreur : '.$e->getMessage());}
    
     }

      public function ajouterEmplacement($emplacement)
    {
        $sql="INSERT INTO emplacement (NomE,RaceAnimal,NombrePlace)
        values (:NomE,:RaceAnimal,:NombrePlace)";
        $db=config::getConnexion();

        try
        {
            $query=$db->prepare($sql);
            $query->execute([
                
                'NomE'=>$emplacement->getNomE(),
                'RaceAnimal'=>$emplacement->getRaceAnimal(),
                'NombrePlace'=>$emplacement->getNombPlace(),
               
                
            ]);
        }
        catch(PDOException $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerEmplacement($idEmplacement)
    {
			$sql="DELETE FROM emplacement WHERE IDe= :idEmplacement";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idEmplacement',$idEmplacement);
			try{
				$req->execute();
			}
        
			catch (PDOException $e){
				die('Erreur: '.$e->getMessage());
			}
	}

  function modifierEmplacement($emplacement,$IDe){
        
		$sql="UPDATE emplacement SET NomE =:NomE,RaceAnimal =:RaceAnimal,NombrePlace =:NombrePlace WHERE IDe = :IDe" ;
            $db = config::getConnexion();
            try {

            $query=$db->prepare($sql);
            $query->execute([
                'NomE'=>$emplacement->getNomE(),
                'RaceAnimal'=>$emplacement->getRaceAnimal(),
                'NombrePlace'=>$emplacement->getNombPlace(),
                
                'IDe' =>$IDe
            ]);
              echo $query->rowCount() . " records UPDATED successfully"; 
        } catch (PDOException $e) {
            $e->getMessage();
        }
  
}

function recupererEmplacement($idEmplacement){
        $sql="SELECT * from emplacement where IDe=:idEmplacement";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
            'idEmplacement' =>$idEmplacement
            ]);

            return $query->fetch();
            
        }
        catch (PDOException $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function recherche($nom)
{
 $sql="SELECT * from emplacement where IDe like '%$nom%' or NomE like '%$nom%' or RaceAnimal like '%$nom%' or NombrePlace like '%$nom%' ";
 $db = config::getConnexion();
      $db = config::getConnexion();
        try{
            $listeemplacement=$db->query($sql);
            return $listeemplacement;
        }
        catch (PDOException $e){
            die('Erreur: '.$e->getMessage());
        }

}
function triAlphebitiqueDecroissant(){
        $sql="SELECT * from emplacement
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