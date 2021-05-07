<?php

include "./utils/head.php";

require_once '../Controller/postC.php';

$postC =  new postC();

$posts = $postC->afficherpost();

if (isset($_POST['search2']))
{
    if ($_POST['search1'] == "")
    {
        $posts=$postC->afficherpost();
    }
    else
    {
        $posts=$postC->rechercherListepost($_POST['search1']);
    }
}

else
    
    if (isset($_POST['croissant']))
    {
        $posts=$postC->trialphebitiquecroissant();



    }

    else
        if (isset($_POST['decroissant']))
        {
            $posts=$postC->trialphebitiquedecroissant();



        }






        else
        {
            $posts=$postC->afficherpost();
        }





?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>belvedere &mdash; blog[categories]</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

       

        



        <div id="fh5co-tours" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                
                        
                        <div class="tab-content">
                        
                            
                         </div>
                         
                
                                     <h3>blog</h3>
                                    <p>selectionner une categorie de blog</p>
                              <form method="POST" action=""> 
                              <input type="text" class="form-control" placeholder="titre" name="search1">
                              <input type="SUBMIT" name="search2" value="Search!" class="btn btn-primary btn-block">
                               </form>
                                                        <form name="f1" method="post">
                                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                            <button type="submit" name="decroissant" class="btn btn-primary">tri decroissant</button>
                                                            <button type="submit" name="croissant" class="btn btn-primary"> tri croissant </button>
                                                        </div>
                                                    </form>

                             
                    
                      </div>
                    

                </div>


                                             




                <div class="row row-bottom-padded-md">
                    <?php
                    foreach ($posts as $post) {
                        ?>
                        <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                            <div href="#"><img src="assets/img/<?php echo $post['image']; ?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                                <div class="desc">
                                    <span></span>
                                    <input type="hidden" class="form-control" name="id_post" value = "<?php echo $post['id_post']; ?>">
                                    <h3><?php echo $post['titre']; ?></h3>
                                    <span><?php echo $post['categorie']; ?></span>
                                    <a class="btn btn-primary btn-outline" href="postsdetails.php?id_post=<?PHP echo $post['id_post']; ?>">Découvrir <i class="icon-arrow-right22"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>





                </div>
            </div>
            
        </div>






    </div>
    <!-- END fh5co-page -->
    <div id="bottom"></div>


    <?php include "contact.php"; ?>

</div>
                
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>