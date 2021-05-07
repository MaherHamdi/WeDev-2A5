<?PHP
include "../Controller/CategorieC.php";
include "../Model/Categorie.php";




    ?>
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
        <a href="#" class="logo"><b>belvedere</b></a>
        <!--logo end-->
            
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

                <p class="centered"><a href="#"><img src="assets/img/belv.png" class="img-circle" width="60"></a></p>
                <h5 class="centered">belvedere</h5>



                <li class="sub-menu">
                    <a href="javascript:;" >
                        <span>Gestion du blog </span>
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
            <h3><i class="fa fa-angle-right"></i> Gestion des  categories </h3>

            <!-- BASIC FORM ELELEMNTS -->
    <?php



    if (isset($_GET['id'])) {
        $categorieC = new  CategorieC();
        $result = $categorieC->recupererCategorie($_GET['id']);
        if ($result !== false) {
            ?>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Modifier une catégorie</h4>
                        <form class="form-horizontal style-form" method="POST" action="update_categorie.php" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id" value = "<?= $result['id'] ?>">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Catégorie</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="categorie" value = "<?= $result['categorie'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="description" value = "<?= $result['description'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">image</label>
                                <div class="col-sm-10">
                                    <span class="photo"><img alt="avatar" src="assets/img/<?= $result['image'] ?> ?>" height="128px" width="128px"></span>
                                    <input type="file" class="form-control" name="image" value = "<?= $result['image'] ?>" required  >
                                </div>
                            </div>



                            <button type="submit" class="btn btn-theme" name="modifier">Modifier</button>

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
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="form_component.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
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