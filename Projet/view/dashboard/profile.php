<!--
=========================================================
* Soft UI Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/black-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
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


<body class="g-sidenav-show bg-gray-100">


  <?php include('menu.php'); ?>
  <?php
require_once 'c:/wamp64/www/Projet/controller/userC.php';
if (isset($_GET['id'])) {
  $userC = new userC();
  $ress = $userC->recupererUser($_GET['id']);
}
$sql = "UPDATE user SET 
role = :role
WHERE id = :id";
$db = config::getConnexion();
$stmt = $db->prepare($sql);
if (isset($_POST['admin'])) {
  $stmt->execute(
    [
      'role' => 'admin',
      'id' => $ress['id']
    ]
  );
}
if (isset($_POST['user'])) {
  $stmt->execute(
    [
      'role' => 'user',
      'id' => $ress['id']
    ]
  );
}




?>
  <div class="main-content position-relative bg-gray-100">
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- End Navbar -->
    <div class="container-fluid">

      <div class="card card-body shadow-blur xl mt-4">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="../../assets/img/bruce-mars.jpg" alt="..." class="w-100 border-radius-lg shadow-sm">
              <label>
                <input type="file" style="display: none;">
                <a class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                  <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
                </a>
              </label>
              </div>



            


          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo strtoupper($ress['nom']) . " " . $ress['prenom'] ?></h5>
              <p class="mb-0 font-weight-bold text-sm">
                <?php echo $ress['email'] ?> </p>
            </div>
          </div>
          <div class="col-sm-4 col-8 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
            
            <?php
              if ($ress['role'] == "user") {
              ?>
                <form action="" method="POST">
                  <button class="btn bg-gradient" name="admin">admin</button>
                </form>
              <?php } ?>
              <?php
              if ($ress['role'] == "admin") {
              ?>
                <form action="" method="POST">
                  <div>
                    <button class="btn bg-gradient" name="user">user</button>

                  </div>
                </form>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid  xl mt-3 ">

      <div class=" pt-3 p-3">

        <form action="modifierUser.php" method="POST">
          <div class="row gx-4">
            <div class="col form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control" name="nom" value="<?php echo $ress['nom']; ?>">
            </div>
            <div class="col form-group">
              <label for="">Prenom</label>
              <input type="text" class="form-control" name="prenom" value="<?php echo $ress['prenom']; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control" name="username" value="<?php echo $ress['username']; ?>">
            </div>
            <div class="col form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo $ress['password']; ?>">
            </div>
          </div>
          <div class="row">
            <div class="col form-group">
              <label for="">Adresse email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $ress['email']; ?>">
            </div>
            <div class="col form-group">
              <label for="">Telephone</label>
              <input type="text" class="form-control" name="phone" value="<?php echo $ress['phone']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="">Adresse postale</label>
            <input type="text" class="form-control" name="adresse" value="<?php echo $ress['adresse']; ?>">
          </div>
          <br>
          <input class="input" type="hidden" name="id" value="<?php echo $ress['id'] ?>">
          <div class="d-flex justify-content-center">
            <button name="submit" type="submit" class="btn btn-primary col-md-3">Modifier utilisateur</button>
          </div>
      </div>

      </form>
    </div>

    <br><br><br><br>
    <div class="d-flex justify-content-center">
      <div class="col-xl-6 blur">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Profile Information</h6>
              </div>
              <div class="col-md-4 text-right">
                <a href="javascript:;">
                  <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <p class="text-sm">
              Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
            </p>
            <hr class="horizontal gray-light my-4">

            <form action="modifierUser.php" method="POST">

              <table>
                <div class="d-flex align-items-center flex-column justify-content-center">

                  <div class="input_modification">username <br><input class="input" type="text" name="username" value="<?php echo $ress['username']; ?>"></div>

                  <div class="input_modification">nom <br><input class="input" type="text" name="nom" value="<?php echo $ress['nom'] ?>"></div>

                  <div class="input_modification">prenom <br><input class="input" type="text" name="prenom" value="<?php echo $ress['prenom'] ?>"></div>

                  <div class="input_modification">adresse email <br><input class="input" type="email" name="email" value="<?php echo $ress['email'] ?>"></div>

                  <div class="input_modification">password <br><input class="input" type="password" name="password" value="<?php echo $ress['password'] ?>"></div>

                  <div class="input_modification"> <input class="input" type="hidden" name="id" value="<?php echo $ress['id'] ?>">

                    <button name="submit" type="submit" class="btn bg-gradient-dark ms-auto">Modifier utilisateur</button>


                  </div>
              </table>

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
  </div>
  <?php include('configuration.php'); ?>
  <!--   Core JS Files   -->
  <script src=".../../assets/js/core/popper.min.js"></script>
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