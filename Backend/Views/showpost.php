<?php

require_once '../fpdf/fpdf.php';

require_once '../Controller/postC.php';

include "./utils/header.php";


$postC =  new postC();

$post = $postC->afficherpost();

if (isset($_POST['search2']))
{
    if ($_POST['search1'] == "")
    {
        $post=$postC->afficherpost();
    }
    else
    {
        $post=$postC->rechercherListepost($_POST['search1']);
    }
}
else
    $post = $postC->afficherpost();


    
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

    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
  
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gestion des posts </h3>


            <div class="row mt">
            <form name="f1" method="post">
                                <input type="text" class="form-control" name="search1" placeholder=" Recherche"  >
                                    <button type="submit" name="search2" class="btn btn-primary btn-block">
                                        <i class="fa fa-search">OK</i>
                                    </button>

                                </form>
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Liste des posts</h4>


                                                            
                          

                            <hr>
                            <thead>
                            <tr>
                                <th>titre</th>
                                <th>Description</th>
                                <th>Catégorie</th>
                                <th>Image</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($post as $post) {
                            ?>

                                <tr>
                                    <td class="hidden-phone"><?php echo $post['titre']; ?></td>
                                   <td class="hidden-phone"> <?php echo $post['description']; ?></td>
                                    <td class="hidden-phone"><?php echo $post['categorie']; ?></td>
                                    <td> <span class="photo"><img alt="avatar" src="assets/img/<?php echo $post['image']; ?>" height="128px" width="128px"></span></td>



                                    <td>
                                    <td><a href="modifierpost.php?id_post=<?PHP echo $post['id_post']; ?>">   <button class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></button></a></td>
                                    <td><a href="deletepost.php?id_post=<?= $post['id_post'] ?>">   <button class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button></a></td>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>

                            </tbody>
                        </table>
                    </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="basic_table.html#" class="go-top">
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

<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>