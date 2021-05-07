<?PHP
include "../config.php";
class ReclamationC {

	public function ajouterReclamation($reclamation){
		$sql="insert into reclamation (text,id_user) values (:text,:id_user)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

    $text = $reclamation->get_Text();
		$id_user = $reclamation->get_IdUser();



		$req->bindValue(':text',$text);
		$req->bindValue(':id_user',$id_user);



            $req->execute();
            return true;

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
           // return 0;
        }

	}

	function afficherClietns(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupererClient($mail){
			$sql="SELECT adresse_mail from user where id='$mail'";
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
		$sql="DELETE FROM reclamation where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$mail);
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
		$sql="UPDATE clients SET etat=:etat WHERE mail='$mail'";
			$db = config::getConnexion();

			try{
        $req=$db->prepare($sql);



		$req->bindValue(':etat',"Non");


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }

	}
	public function Logedin($login,$pwd){
		$sql = "select * from user where nom='$login' && password='$pwd'";
		$db = config::getConnexion();

		$logedin = $db->query($sql);
		return $logedin->fetchAll();
	}


	function rechercherClient($login)
	{
		$req="SELECT nom,adresse,code,cin,tel,mail,password,statu,id,etat,link from clients where mail='$login'";
		$conn = config::getConnexion();
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	function confirmerClient($login)
	{

			$sql="UPDATE clients SET etat=:etat WHERE mail='$login'";
			$db = config::getConnexion();

			try{
        $req=$db->prepare($sql);



		$req->bindValue(':etat',"Oui");


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

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
		$sql="SELECT nom,adresse,code,cin,tel,mail,password,statu,id,etat FROM clients order by nom ASC ";
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
