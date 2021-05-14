


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="assets/css/log.css" rel="stylesheet">
<div  class=" modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content-register">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="  font-family: 'Roboto', sans-serif;" aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="add-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <?php /*
                    if(count($errors) == 1){
                      */  ?>
                    <!--<div class="alert alert-danger text-center">
                        <?php /*
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                           */ ?>
                    </div>
                    <?php /*
                    }elseif(count($errors) > 1){
                        */ ?>
                    <div class="alert alert-danger">
                        <?php /*
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                           */ ?>
                    </div>
                    <?php /*
                    }*/
                    ?>-->
                    <div class="form-group">
                        <input class="form-control" type="text" name="nom" placeholder="Nom" required value="<?php /* echo $name */ ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="prenom" placeholder="Prenom" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php /*echo $email*/ ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="" placeholder="Confirm password" required>
                    </div>
                  
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="inscrire" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a style="cursor: pointer;"  data-toggle="modal"  href="#loginModal" data-dismiss="modal">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<!-- Custom Script -->
<script src="/assets/js/login.js"></script>
