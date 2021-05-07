<?PHP
include "../config.php";
class UserC {



	function afficherClietns(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From user";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function supprimerClient($mail){
		$sql="DELETE FROM user where adresse_mail= :mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$mail);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function desactiverClient($mail)

	{
		$sql="UPDATE user SET status=:status WHERE mail='$mail'";
			$db = config::getConnexion();

			try{
        $req=$db->prepare($sql);

				$satus=0;

				$req->bindValue(':status',$satus);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}



	function rechercherClient($login)
	{
		$req="SELECT * from user where mail='$login'";
		$conn = config::getConnexion();
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	function confirmerClient($login)
	{

			$sql="UPDATE user SET status=:status WHERE adresse_mail='$login'";
			$db = config::getConnexion();

			try{
        $req=$db->prepare($sql);


				$password =1;
		$req->bindValue(':status',$password);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}



function recupererClient($mail){
		$sql="SELECT nom,adresse,code,cin,tel,mail,password,statu,id,etat from clients where mail='$mail'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function modifierClient($user,$mail){
		$sql="UPDATE user SET  nom=:nom,adresse=:adresse,adresse_mail=:adresse_mail,prenom=:prenom,sexe=:sexe,date_naiss=:date_naiss,password=:password,user_nom=:user_nom WHERE id='$mail'";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
			$mail = $user->get_adresseMail();
 	 		$password = $user->get_Password();
 	 		$date = $user->get_Date();
 	 		$adresse = $user->get_Adresse();
 	 		$nom = $user->get_Nom();
 	 		$prenom = $user->get_Prenom();
 	 		$userName = $user->get_UserName();
 	 		$sexe = $user->get_Sexe();


			$req->bindValue(':nom',$nom);
			$req->bindValue(':adresse',$adresse);
			$req->bindValue(':adresse_mail',$mail);
			$req->bindValue(':date_naiss',$date);
			$req->bindValue(':user_nom',$userName);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':password',$password);
			$req->bindValue(':sexe',$sexe);

            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}

	 function rechercherCarte($mail)
	{
		$req="SELECT client,num,codec,points,dateexp from cartes where client='$mail'";
		$conn = config::getConnexion();
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}



	function trie_nom (){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.idProduit= a.idProduit";
		$sql="SELECT * FROM user order by nom ASC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function pdf_client ()
	{
		$sql="SElECT * From user";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	}

}





?>
