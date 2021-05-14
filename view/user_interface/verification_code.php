<?php
session_start();
require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';
include "c:/wamp64/www/Projet/config.php";
$message = "";
   
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:index.php');
   }

   if (isset($_POST["code"])) 
   {
    
    
   $userC=new userC();
  $res=$userC->recupererEmail($_SESSION['e']);
  if  ($res['code_verification']!=$_POST['code'])
  {
$message='Le code de verification est invalide';
  }
  else{
    $sql = "UPDATE user SET 
    verifier = :verifier
    WHERE id = :id";
        $db=config::getConnexion();
$stmt = $db->prepare($sql);      
$stmt->execute(
    [              
'verifier'=> '1',      
'id'=> $res['id']
    ]);
    header('location:welcome.php');
  
}
}
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="verif_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <div class="modal-body form login-form">

                <form action="" method="POST" autocomplete="">
                    <p class="text-center">Ecrire le code de verification par email</p>
                    <?php if ($message != "") { ?>
                        <p class="alert alert-danger text-center">
                            <?php {
                                echo $message;
                            } ?>
                        </p>
                    <?php } ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="code" placeholder="Code de verification">
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<!-- Custom Script -->
<script src="../../assets/js/login.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#verif_code').modal('show');
    });
</script>
