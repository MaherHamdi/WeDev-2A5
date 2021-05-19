
<?php 
include "../config.php";

$recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

// la requete mysql
$db = config::getConnexion();
$sql="SELECT username, nom ,prenom FROM user
WHERE username LIKE '%$recherche%'
OR nom LIKE '%$recherche%'
OR prenom LIKE '%$recherche%'
LIMIT 10";
    $query=$db->prepare($sql);
    $query->execute();
    $listeuser = $db->query($sql);
    return $listeuser ;
 ?>