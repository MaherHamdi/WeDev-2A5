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
                
                    <div class="card mb-4">
                        <div class="card-header pb-0 px-4 d-flex">
                            <h6 style="margin-left: 5px;" class="mb-1">Gestion des Animaux</h6>
                            <br>

                            <div class=" ">
                                
                                <a style="margin-left: 500px;" class="btn bg-gradient-dark" href="addAnimal.php"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Ajouter un animal</a>
                  
                            </div>
                            
			
                            
                        </div>
                        <div class="card-body pt-1 p-3">
				
                      
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex p-4 mb-3 bg-gray-100 border-radius-lg">
                                    <div class="d-flex">
                                        <img style="margin-right: 20px;" src="../../assets/img/aa (2).jpg" class="w-20 border-radius-lg shadow-sm">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 text-sm">aaaaa</h6>
                                            <span class="mb-2 text-xs">Espece:<span class="text-dark ms-2 font-weight-bold">aaaaaaa</span></span>
                                            <span class="mb-2 text-xs">Emplacement:<span class="text-dark ms-2 font-weight-bold">aaaaaaa</span></span>
                                            <span class="text-xs">Description:<span class="text-dark ms-2 font-weight-bold" >aaaaaaa ...</span></span>
                                        </div>
                                       
                                    </div>
                                    <div class="ms-auto d-flex ">
                                        <div style="padding-right: 30px;">
                                            <form method="POST" action="">
                                                <td class="align-middle ">
                                                <input type="hidden" value="" name="id_post">

                                                    <a href="modifierAnimal.php?id" class="text-dark font-weight-bold text-xs d-flex" data-toggle="tooltip" data-original-title="Edit user"><i class="fas fa-pencil-alt text-dark me-2"></i>
                                                        Editer
                                                    </a>

                                                </td>
                                            </form>
                                        </div>
                                        <div>
                                            <form method="POST" action="">

                                                <td class="align-middle">
                                                    <a href="" class="text-danger font-weight-bold text-xs d-flex"> <i class="far fa-trash-alt me-2"></i>
                                                        Supprimer
                                                    </a>

                                                </td>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                     
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class=" ">
                
                    <div class="card mb-4">
                        <div class="card-header pb-0 px-4 d-flex">
                            <h6 style="margin-left: 5px;" class="mb-1">Gestion des Emplacements</h6>
                            <br>

                            <div class=" ">
                                
                                <a style="margin-left: 400px;" class="btn bg-gradient-dark" href="addEmplacement.php"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Ajouter un Emplacement</a>
                  
                            </div>
                            
			
                            
                        </div>
                        <div class="card-body pt-1 p-3">
				
                      
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex p-4 mb-3 bg-gray-100 border-radius-lg">
                                    <div class="d-flex">
                                        <img style="margin-right: 20px;" src="../../assets/img/aa (2).jpg" class="w-20 border-radius-lg shadow-sm">
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-3 text-sm">aaaaa</h6>
                                            <span class="mb-2 text-xs">Race:<span class="text-dark ms-2 font-weight-bold">aaaaaaa</span></span>
                                            <span class="mb-2 text-xs">Nombre du place:<span class="text-dark ms-2 font-weight-bold">aaaaaaa</span></span>
                                        </div>
                                       
                                    </div>
                                    <div class="ms-auto d-flex ">
                                        <div style="padding-right: 30px;">
                                            <form method="POST" action="">
                                                <td class="align-middle ">
                                                <input type="hidden" value="" name="id_post">

                                                    <a href="modifierEmplacement.php?id" class="text-dark font-weight-bold text-xs d-flex" data-toggle="tooltip" data-original-title="Edit user"><i class="fas fa-pencil-alt text-dark me-2"></i>
                                                        Editer
                                                    </a>

                                                </td>
                                            </form>
                                        </div>
                                        <div>
                                            <form method="POST" action="">

                                                <td class="align-middle">
                                                    <a href="" class="text-danger font-weight-bold text-xs d-flex"> <i class="far fa-trash-alt me-2"></i>
                                                        Supprimer
                                                    </a>

                                                </td>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                     
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