<?php
session_start();
require_once 'c:/wamp64/www/Projet/model/User.php';
require_once 'c:/wamp64/www/Projet/controller/userC.php';
require_once 'c:/wamp64/www/Projet/controller/PasswordC.php';
require_once 'c:/wamp64/www/Projet/model/Password.php';

include "c:/wamp64/www/Projet/config.php";
$message = "";
   


   if (isset($_POST["email"])) 
   {
   $userC=new userC();
   $count = $userC->emailExist($_POST['email']);
   if ($count == 0) {
$message='Le email est invalide';
  }
  else{
$token=bin2hex(random_bytes(8));
$url= "resetpassword.php?selector=&validator".bin2hex($token) ;
$expires = date("U")+1800;
$passwordC=new passwordC();

$password=new password(
    $_POST['email'],
    $token,
    $expires
);

$passwordC->ajouterPassword($password);


}
}
?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div data-backdrop="static" data-keyboard="false" class="modal fade" id="verif_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <div class="modal-body form login-form">

                <form action="" method="POST" autocomplete="">
                    <p class="text-center">Ecrire votre email</p>
                    <?php if ($message != "") { ?>
                        <p class="alert alert-danger text-center">
                            <?php {
                                echo $message;
                            } ?>
                        </p>
                    <?php } ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Votre email">
                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Recuperer votre mot de passe">
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
