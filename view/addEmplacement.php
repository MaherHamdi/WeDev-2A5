<?php
    include_once '../model/Emplacement.php';
    include '../controller/emplacementC.php';
    

    $error = "";

    // create user
    $emplacement = null;

    // create an instance of the controller
    $emplacementC = new emplacementC();
    if (
        
        isset($_POST["NomE"]) &&
        isset($_POST["RaceAnimal"])&&
        isset($_POST["NombrePlace"])  
    ) {
        if (
             
            !empty($_POST["NomE"]) && 
            !empty($_POST["RaceAnimal"]) &&
            !empty($_POST["NombrePlace"])
        ) 
            {
            $emplacement = new emplacement(
               
                $_POST['NomE'], 
                $_POST['RaceAnimal'],
                $_POST['NombrePlace'],
               
              
            );
            $emplacementC->ajouterEmplacement($emplacement);
            header('Location:showEmplacement.php');
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
  <title>Ajouter Emplacement</title>
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
            <button><a href="showEmplacement.php">Retour a la liste</a></button>
            <hr>

        <div id="error">
            <?php echo $error; ?>
        </div>

         <form action="" method="POST">
        <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter Emplacement</h4>
                  <form class="forms-sample">
                    
                    <div class="form-group">
                      <label for="Nom">Nom</label>
                      <input type="text" class="form-control" name="NomE" placeholder="NomE">
                    </div>
                    <div class="form-group">
                      <label for="RaceAnimal">Race Animal</label> 
                      <input type="text" class="form-control" name="RaceAnimal" placeholder="RaceAnimal">
                    </div>
                   
                    <div class="form-group">
                      <label for="NombrePlace">Nombre de Place</label>
                      <input type="number" class="form-control" name="NombrePlace" placeholder="NombrePlace">
                    </div>
                   
                    <input type="submit" class="btn btn-primary mr-2" value="submit">
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</form>
</body>
</html>