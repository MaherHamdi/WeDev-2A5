<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <!--logo end-->
        
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../../Frontend/Views/1st.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <h5 class="centered">belvedere</h5>

                  <li class="mt">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>home</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="#">
                          <span>-empty-</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="#">
                          <span>-empty-</span>
                      </a>

                  </li>
 <li class="sub-menu">
                    <a href="javascript:;" >
                    <i class="fab fa-blogger-b"></i>  
                      <span>gestion blog </span>
                    </a>
                    <ul class="sub">
                        
                    <li ><a class="fa fa-angle-right"  href="ajouterpost.php">Ajouter post</a></li>
                        <li><a  class="fa fa-angle-right"  href="showpost.php">Liste des posts</a></li>
                        <li><a  class="fa fa-angle-right" href="ajouter_categorie.php">Ajouter une catégorie</a></li>
                        <li><a  class="fa fa-angle-right" href="afficher_categorie.php">Liste des catégories</a></li>
                    </ul>
                </li>
                
              <!-- sidebar menu end-->
          </div>
      </aside>
