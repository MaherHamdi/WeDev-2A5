<?php
  include "../controller/emplacementC.php";
  include_once '../model/Emplacement.php';

              
              $error = "";
            
              
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Modifier animal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
    </head>

    <body>
        
        <button><a href="showEmplacement.php">Retour a la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <?php
			 
             /* $idEmplacement = $_GET['IDe'];
              $sql = "SELECT * from emplacement where IDe='$idEmplacement' ";
          $db = config::getConnexion();
               $query=$db->prepare($sql);
               $query->execute();
                $result=$query->fetch(); 
               
$con = mysqli_connect("localhost","root","","wedev");
$result=mysqli_query($con , "SELECT * from emplacement where IDe='$idEmplacement' ");
$retrive=mysqli_fetch_array($result);

$IDe=$retrive['IDe'];
$NomE=$retrive['NomE'];
$RaceAnimal=$retrive['RaceAnimal'];
$NombrePlace=$retrive['NombrePlace']; */




    if (isset($_GET['IDe'])) {
        $emplacementC = new  emplacementC();
        $result = $emplacementC->recupererEmplacement($_GET['IDe']);
        if ($result !== false) {
            ?>
               
   
       
        <form action="editEm.php" method="POST">
        <div class="col-12 grid-margin stretch-card">
        
				 
		
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier Emplacement</h4>
                 
                  <form class="forms-sample">
                    
                  <p class="card-description">
                    Modifier Emplacement
                  </p>
                  
			     <div class="form-group">
                        <label for="IDe">IDe</label>
                     <input type="hidden" name="IDe" value="<?php echo $result['IDe'];?>">
                    </div>
                    <div>
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" name="NomE"  value = "<?php echo $result['NomE'];?>">
                    </div>
                    <div class="form-group">
                      <label for="RaceAnimal">Race Animal</label>
                      <input type="text" class="form-control" name="RaceAnimal" value = " <?php echo $result['RaceAnimal'];?>">
                    </div>
                    <div class="form-group">
                      <label for="NombrePlace">Nombre Place</label>
                      <input type="text" class="form-control" name="NombrePlace"  value = "<?php echo $result['NombrePlace'];?>">
                    </div>
                    
                    <input type="submit" class="btn btn-primary mr-2" value= "modifier" name="modifier">
                    <button class="btn btn-light">Cancel</button>
                  </form>
                   
            
               
                </div>
              </div>

            </div>
           
        </form>
        <?PHP

    }
}


?>
    </body>
</html>