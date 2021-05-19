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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Modal -->

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
                            <h6 class="mb-0"><label style="font-size: 20px;" for="">Ajouter un produit</label></h6>

                        </div>
                        <div class="card-body pt-4 p-3">

                            <form name="add-form" id="ajout" class="forms-sample" method="POST" action="ajouterProductAction.php" enctype="multipart/form-data" onsubmit="return validateForm()">
                                <div class="form-group col-md-4">
                                    <label for="category">Category</label>
                                    <?php
                                    $ops = '';
                                    $pdo = new PDO('mysql:host=localhost;dbname=belevedere', 'root', '');
                                    $stmt = $pdo->query("SELECT * from category");
                                    //$stmt = $pdo->execute();
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $ops .= "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                    }
                                    ?>

                                    <select name="categoryselect" class="my-1 mr-sm-2 form-control">
                                        <?php echo $ops; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nom de produit</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="ecrire le nom du produit">
                                </div>
                                <div class="form-group ">
                                    <label for="price">prix</label>
                                    <input type="text" class="form-control" name="price" id="price" placeholder="prix">
                                </div>

                                <div class="form-group">
                                    <label for="formFileMultiple" class="form-label">Choisir une photo</label>
                                    <input id="photo" type="file" class="form-control" name="photo" id="photo" multiple />
                                </div>
                                <div class="form-group ms-auto">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary col-md-3">Ajouter produit</button>
                                </div>
                        </div>

                        </form>
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

    <script>
        function validateForm() {
            var name = document.forms["add-form"]["name"].value;
            var description = document.forms["add-form"]["description"].value;
            var price = document.forms["add-form"]["price"].value;
            var photo = document.forms["add-form"]["photo"].value;
            var name_input = document.getElementById("name");
            var description_input = document.getElementById("description");
            var price_input = document.getElementById("price");
            var photo_input = document.getElementById("photo");

            if (name.length < 1 || name ==" ") {
                name_input.classList.add("is-invalid");
            } else {
                name_input.classList.remove("is-invalid");
            }
            if (description.length < 1 || description ==" ") {
                description_input.classList.add("is-invalid");
            } else {
                description_input.classList.remove("is-invalid");
            }
            if (price.length < 1 || price ==" ") {
                price_input.classList.add("is-invalid");
            } else {
                price_input.classList.remove("is-invalid");
            }
            if (photo.length < 1 || photo ==" ") {
                photo_input.classList.add("is-invalid");
            } else {
                photo_input.classList.remove("is-invalid");
            }
            if (name.length < 1 || description.length < 1 || price.length < 1 || photo.length < 1) {
                return false;
            }
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>