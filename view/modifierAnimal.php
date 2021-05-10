<?php
  include "../controller/animalC.php";
  include_once '../model/Animal.php';
             
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
        
        <button><a href="showAnimal.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        <?php 
                $sql = "SELECT * from emplacement
      ";
          $db = config::getConnexion();
               $query=$db->prepare($sql);
               $query->execute();
                $result1=$query->fetchAll();
             ?>  
        
                   <?php
			             
    if (isset($_GET['ID'])) {
        $animalC = new  animalC();
        $result = $animalC->recupererAnimal($_GET['ID']);
        if ($result !== false) {
            ?>
       
        <form action="editAnimal.php" method="POST">
   
               
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier animal</h4>
                  <p class="card-description">
                    Modifier animal
                  </p>
                  <form class="forms-sample">

                    <div class="form-group">
                        <label for="ID">ID</label>
                     <input type="hidden" name="ID" value="<?php echo $result['ID'];?>">
                    </div>
                    <div>
                      <label for="Espece">Espece</label>
                      <input type="text" class="form-control" name="Espece"  value = "<?php echo $result['Espece']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" name="Nom" value = "<?php echo $result['Nom']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="Poids">Description</label>
                      <input type="text" class="form-control" name="description"  value = "<?php echo $result['description']; ?>">
                    </div>
                    <div class="form-group">
              
                      <label for="emplacement">Emplacement</label>
                       
                      <select class="form-control" name="emplacement" value= "<?php echo $result['emplacement']; ?>">
                        <?php foreach ($result1 as $row) {
				echo '<option value="'.$row['IDe'].'">'.$row['IDe'].'</option>';
			}
            ?>
               
           
                      </select>
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