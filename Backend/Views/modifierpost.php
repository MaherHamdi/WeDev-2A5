<?php
include "../Controller/postC.php";
include "../Model/post.php";
$hostname ="localhost";
$username = "root";
$password="";
$databaseName="crud_db";
$connect=mysqli_connect($hostname,$username,$password,$databaseName);
$query="SELECT * from categories" ;
$result1=mysqli_query($connect,$query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>BELVEDERE - modifier posts</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />

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
        <a href="index.html" class="logo"><b>belvedere-- modifier posts</b></a>
        <!--logo end-->
        
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="login.html">Logout</a></li>
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

                <p class="centered"><a href="profile.html"><img src="assets/img/logo.png" class="img-circle" width="60"></a></p>
                <h5 class="centered">Belvedere</h5>



                <li class="sub-menu">
                    <a href="javascript:;" >
                        <span>Gestion des posts </span>
                    </a>
                    <ul class="sub">
                        <li ><a class="fa fa-angle-right"  href="ajouterpost.php">Ajouter post</a></li>
                        <li><a  class="fa fa-angle-right"  href="showpost.php">Liste des posts</a></li>
                        <li><a  class="fa fa-angle-right" href="ajouter_categorie.php">Ajouter une catégorie</a></li>
                        <li><a  class="fa fa-angle-right" href="afficher_categorie.php">Liste des catégories</a></li>
                    </ul>
                </li>







            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gestion des  posts </h3>
            <div id="message" >  <h5><i class="fa fa-angle-right"></i> tous les champs sont obligatoires </h5> </div>


            <!-- BASIC FORM ELELEMNTS -->
            <?php



            if (isset($_GET['id_post'])) {
            $postC = new  postC();
            $result = $postC->recupererpost($_GET['id_post']);
            if ($result !== false) {
            ?>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Modifier un post </h4>
                        <form id="ajout" class="form-horizontal style-form" method="POST" action="update_post.php" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id_post" value = "<?= $result['id_post'] ?>">

                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">titre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="titre" value = "<?= $result['titre'] ?>" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="description" value = "<?= $result['description'] ?>" required ><?= $result['description'] ?></textarea>

                                </div>
                            </div>
                            

                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Catégorie</label>
                                <div class="col-sm-10">
                                    <select name="categorie" class="form-control" value = "<?= $result['categorie'] ?>" >

                                        <?php
                                        while($row1 = mysqli_fetch_array($result1)):;

                                            ?>
                                            <option ><?php echo $row1 [1]; if ( $row1 [1] === $result['categorie'] ) {
                                                   $v="selected"  ;
                                                }   ?> </option>
                                        <?php endwhile ;  ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">image</label>
                                <div class="col-sm-10">
                                    <span class="photo"><img alt="avatar" src="assets/img/<?= $result['image'] ?> ?>" height="128px" width="128px"></span>
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-theme" name="modifer" >Modifier</button>

                        </form>
                    </div>
                </div><!-- col-lg-12-->

            </div><!-- /row -->

            <!-- INLINE FORM ELELEMNTS -->


            <!-- INPUT MESSAGES -->


            <!-- INPUT MESSAGES -->


        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
   
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom switch-->
<script src="assets/js/bootstrap-switch.js"></script>

<!--custom tagsinput-->
<script src="assets/js/jquery.tagsinput.js"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


<script src="assets/js/form-component.js"></script>


<script>
    /* var categorie=false ;
     var description=false;
     var image=false ;
     function envoyer()
     {
         if (categorie==true && description==true && image==true )
         {
             document.getElementById("message").innerText = "Envoi Serveur";
             //  document.getElementById("ajout").submit();
         }
         else
         {
             document.getElementById("message").innerText="le formulaire n'est pas complet"
         }
         // document.getElementById("message").innerText=" "+ categorie + " " + description + " " ;
         // document.getElementById("message").innerText="le formulaire n'est pas complet"
     }
     //custom select box

     $(function(){
         $('select.styled').customSelect();
     });

</script>

</body>
</html>
                <?PHP

            }
            }


?>