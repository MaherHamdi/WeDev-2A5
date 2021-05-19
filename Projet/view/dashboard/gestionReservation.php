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
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Nucleo Icons -->

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>


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
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Gestion des reservations</h6>
            </div>
            <div class="card-body px-2 pt-2 pb-1">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th style="width: 10%; " class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                        ID
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type de ticket</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date de reservation</th>

                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>
                        <div class=" px-3">
                          <p class="text-xs font-weight-bold mb-0">333</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Premium ticket</p>

                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Ghoul yassine</p>

                      </td>

                      <td>
                        <span class="text-xs font-weight-bold mb-0">13/02/2020</span>
                      </td>

                      <td>
                        <span class="text-xs font-weight-bold mb-0">120 dt</span>

                      </td>
                      <td class="align-middle">
                        <a href="modifierReservation.php" class="text-dark font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"><i class="fas fa-pencil-alt text-dark me-2"></i>
                          Editer
                        </a>
                      </td>
                      <td class="align-middle">

                        <a href="" class="text-danger font-weight-bold text-xs "> <i class="far fa-trash-alt me-2"></i>
                          Supprimer
                        </a>

                      </td>

                    </tr>



                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex">
            <h6 style="margin-left: 5px;" class="mb-1">Gestion des tickets</h6>
              <br>

              <div class=" ">

                <a style="margin-left:540px;" class="btn bg-gradient-dark" href="addTicket.php"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Ajouter une ticket</a>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom du ticket</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
                      <th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class=" px-3">
                          <p class="text-xs font-weight-bold mb-0">333</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Primuim ticket</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">$2,500</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Quis quorum aliqua sint quem legam <br> fore sunt eram irure aliqua ...</p>
                      </td>


                      <td class="align-middle">
                        <a href="modifierTicket.php" class="text-dark font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"><i class="fas fa-pencil-alt text-dark me-2"></i>
                          Editer
                        </a>
                      </td>
                      <td class="align-middle">

                        <a href="" class="text-danger font-weight-bold text-xs "> <i class="far fa-trash-alt me-2"></i>
                          Supprimer
                        </a>

                      </td>
                    </tr>





                  </tbody>
                </table>
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
<script>
  $(function() {
    $('#usertable').DataTable();
  });
</script>