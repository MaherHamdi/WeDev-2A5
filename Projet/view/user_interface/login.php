<?php /*require_once "controllerUserData.php";*/ ?>
<?php
require_once 'C:/xampp/htdocs/Projet/model/User.php';
require_once 'C:/xampp/htdocs/Projet/controller/userC.php';
$message = "";
$userC = new userC();
if (isset($_POST["login"])) {
    if (
        isset($_POST["email"]) &&
        isset($_POST["password"])
    ) {
        if (
            !empty($_POST["email"]) &&
            !empty($_POST["password"])
        ) {
            $message = $userC->connexionUser($_POST["email"], md5($_POST["password"]));
            if ($message != 'email est incorrect') {
                if ($message != 'password est incorrect') {
                    $userC = new UserC();
                    $res = $userC->recupererEmail($_POST["email"]);

                    if ($res['verifier'] == 1) {
                        echo "<script type='text/javascript'>window.top.location='view/user_interface/welcome.php';</script>";
                        $_SESSION['e'] = $_POST["email"];
                    } else {
                        if ($res['verifier'] == 2) {
                            $message = 'Votre compte a été banni';
                        } else {
                            $_SESSION['e'] = $_POST["email"];
                            $key = $res['code_verification'];
                            $to       = $_POST['email'];
                            $subject  = 'Code de verification';
                            $messagee  = 'Votre code de validation est :' . $key;
                            $headers  = 'From: [projetbelevedere]@gmail.com' . "\r\n" .
                                'MIME-Version: 1.0' . "\r\n" .
                                'Content-type: text/html; charset=utf-8';
                            $userC->sendMail($to, $subject, $messagee, $headers);
                            echo ("<script>location.href = 'view/user_interface/verification_code.php';</script>");
                        }
                    }
                } else {
                    $message = 'password est incorrect';
                }
            } else {
                $message = 'email est incorrect';
            }
        } else
            $message = "Missing information";
    }
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="  font-family: 'Roboto', sans-serif;" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form login-form">
                <form action="" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php if ($message != "") { ?>
                        <script type="text/javascript">
                            $('#loginModal').modal('show');
                        </script>
                        <p style="font-size: 14px;" class="alert alert-danger text-center">
                            <?php {
                                echo $message;
                            } ?>
                        </p>
                    <?php } ?>
                    <?php
                    /*
                    if(count($errors) > 0){
                       */ ?>
                    <?php
                    /*
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                           */ ?>
                    <?php
                    /*
                    }*/
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php
                                                                                                                            if ($message == "password est incorrect") {
                                                                                                                                echo $_POST['email'];
                                                                                                                            }
                                                                                                                            ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a style="cursor: pointer;" data-dismiss="modal" data-toggle="modal" href="#registerModal">Signup now</a></div>


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