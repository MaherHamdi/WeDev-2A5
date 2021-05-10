 <?php
    include_once '../model/Animal.php';
    include '../controller/animalC.php';

   

    $error = "";

    // create user
    $animal = null;
  

    // create an instance of the controller
    $animalC = new animalC();

    if (
        
        isset($_POST["Espece"]) &&
        isset($_POST["Nom"])&&
        isset($_POST["description"])&&  
        isset($_POST["emplacement"])  
    ) {
        if (
             
            !empty($_POST["Espece"]) && 
            !empty($_POST["Nom"]) &&
            !empty($_POST["description"])&&
            !empty($_POST["emplacement"])
        ) 
            {
            $animal = new animal(
               
                $_POST['Espece'], 
                $_POST['Nom'],
                $_POST['description'],
                $_POST['emplacement'],
               
              
            );
    
            $animalC->ajouterAnimal($animal);
            
            header('Location:showAnimal.php');
        }
        else
            $error = "Missing information";
    } 
    ?>
       <!DOCTYPE html>
<html lang="en">
<head>
    <<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ajouter Animal</title>
  <!-- plugins:css -->
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

         <form action="" method="POST">
        <div class="col-12 grid-margin stretch-card">
          <?php
          
                $sql = "SELECT * from emplacement
      ";
          $db = config::getConnexion();
               $query=$db->prepare($sql);
               $query->execute();
                $result=$query->fetchAll();
               
                          
               

               
?>          
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter Animal</h4>
                  <form class="forms-sample">
                    
                    <div class="form-group">
                      <label for="Espece">Espece</label>
                      <input type="text" class="form-control" name="Espece" placeholder="Espece">
                    </div>
                    <div class="form-group">
                      <label for="Nom">Nom</label> 
                      <input type="text" class="form-control" name="Nom" placeholder="Nom">
                    </div>
                   
                    <div class="form-group">
                      <label for="description">description</label>
                      <input type="text" class="form-control" name="description" placeholder="description">
                    </div>
                   <div class="form-group">
              
                      <label for="emplacement">Emplacement</label>
                       
                      <select class="form-control" name="emplacement" >
                        <?php foreach ($result as $emplacement) {
				echo '<option value="'.$emplacement['IDe'].'">'.$emplacement['IDe'].'</option>';
			}
            ?>
               
           
                      </select>
                    </div>
                    
                    <input type="submit" class="btn btn-primary mr-2" value="submit">
                    <button class="btn btn-light" value="cancel" ><a href="showAnimal.php">Cancel</a></button>
                  </form>
                </div>
              </div>
           
            </div>
</form>
</body>
</html>