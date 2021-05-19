<!--
=========================================================
* Soft UI Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/soft-ui-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
  include "../../controller/postC.php";
  include_once '../../model/post.php';

              
              $postC = new postC();
              $error = "";
            
               if (
		isset($_POST["titre"]) && 
        isset($_POST["description"]) 
	){
		if (
            !empty($_POST["titre"]) && 
            !empty($_POST["description"])
        ) {
            header('location:showpost.php');
        }
        else
            $error = "Missing information";
	}

              

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="g-sidenav-show  bg-gray-100">
    <?php include('menu.php'); ?>

    <main class="main-content mt-1 border-radius-lg">
        <!-- Navbar -->
        <?php include('navbar.php'); ?>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <div class="row">
                <div class=" ">
                    <div class="card">
                        <div class="card-header pb-0 px-3 d-flexjustify-content-center ">
                            <h6 class="mb-0"><label style="font-size: 20px;" for="">Modifier un blog</label></h6>

                        </div>
                        <div class="card-body pt-4 p-3">

                            <form method="POST" action="update_post.php" enctype="multipart/form-data">

                            <?php
                            if (isset($_GET['id_post'])) {
                            $postC = new  postC();
                            $result = $postC->recupererpost($_GET['id_post']);

                            if ($result !== false) {
                            ?>    

                            <div class="form-group col-md-4">
                            <input type="hidden" name="id_post" value="<?php echo $result['id_post'];?>">

                            <?php
                        $ops='';
                        $pdo = new PDO('mysql:host=localhost;dbname=belevedere', 'root', '');
                        $stmt = $pdo->query("SELECT * from categories");
                        //$stmt = $pdo->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $ops.= "<option value='" . $row['categorie'] . "'>" . $row['categorie'] . "</option>";
                        }
                        ?>

                        <select name="categorieselect" class="my-1 mr-sm-2 form-control">
                        <?php echo $ops;?>
                        </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="titre">Titre</label>
                                        <input type="text" class="form-control" name="titre"  value = "<?php echo $result['titre'];?>" placeholder="ecrire le titre du blog">
                                    </div>
                            
                                </div>
                          
                                <div class="form-group">
                                    <label for="image" class="form-label"></label>
                                    <span class="photo"><img src="../../assets/img/posts/<?= $result['image'] ?>"height="128px" width="128px" ></span>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class="form-group ms-auto">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" name="description" rows="4" type="text"><?php echo $result['description'];?></textarea><br><br>
                                </div>
                                
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary col-md-3" name="modifer" >Modifier post</button>
                                    </form>

                                </div>
                                <?PHP

}
}


?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-left">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>
    <?php include('configuration.php'); ?>
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.1"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>


</html>