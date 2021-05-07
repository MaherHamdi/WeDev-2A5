<?php

include "./utils/head.php";


include "../Controller/CategorieC.php";
include "../Model/Categorie.php";
$categorieC =  new CategorieC();

$posts = $categorieC->afficherpostcat($_GET['id']);
if (isset($_POST['pdf'])) {

    require('../fpdf/fpdf.php');
    if (isset($_GET['id'])) {


        $categorieC = new  CategorieC();
        $result = $categorieC->recupererCategorie($_GET['id']);

        if ($result !== false) {

            $categorie  = $result['categorie'];
            $description  = $result['description'];
            $image = $result['image'];


            $title = ' Les informations des categories ';

            $pdf = new FPDF();
            $pdf->AddPage();
            $pdf->SetTitle($title);
            // Logo
            $pdf->Image('assets/img/belv.png',10,6,30);
            // Arial bold 15
            $pdf->SetFont('Arial', 'B', 15);
            $w= $pdf -> GetStringWidth($title)+6 ;
            $pdf ->SetX((210-$w)/2);
            //color of frame , background and text
            $pdf->SetDrawColor(221,221,221,1);
            $pdf->SetFillColor(56,182,255,1);
            $pdf->SetTextColor(255,255,255,1);
            //thikness of frame (1 mm)
            $pdf-> SetLineWidth(1);

            //  $pdf->Cell(0, 10, $title, 1, 1, 'c');
            $pdf->Cell($w,9,$title,1,1,'C',true);
            //Line Break
            $pdf -> Ln(10);
            $pdf -> SetTextColor(0,0,0,1);
            $w= $pdf -> GetStringWidth($description)+50;

            $pdf -> SetX((170-$w)/2);
            $pdf -> Cell(40,10,'Categorie',1,0,'C');
            $pdf->Cell($w,10,$categorie,1,1,'C');


            $pdf -> SetX((170-$w)/2);
            $pdf -> Cell(40,10,'Description',1,0,'C');
            $pdf->Cell($w,10,$description,1,1,'C');





            $pdf->Image('assets/img/'.$image,55,90,100);


            $pdf->Output();
        }
    }
}

?>
    <!DOCTYPE html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>belvedere &mdash; categorie details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
        <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
        <meta name="author" content="FREEHTML5.CO" />



       

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




        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl Theme Default Min CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Nice Select Min CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!-- Meanmenu Min CSS -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

   
    <!-- end:header-top -->




    <div id="fh5co-tours" class="fh5co-section-gray">









<?php



if (isset($_GET['id'])) {


    $categorieC = new  CategorieC();
    $result = $categorieC->recupererCategorie($_GET['id']);
    $result2 = $categorieC->rechercherListepost1($_GET['id']);


    if ($result !== false) {
        ?>
        <div class="container">

            <div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
                <div href="#"><img name="image" src="assets/img/<?php echo $result['image']; ?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                    <div class="desc">
                        <span></span>



                    </div>
                </div>



                <form name="" method="post">

                    <button  name="pdf" type="submit"> Print </button>
                    

                </form>






            </div>





            <div class="row">
                <div class="col-md-4 col-sm-6 fh5co-tours animate-box">
                    <h3 name="destination"><?php echo $result['categorie']; ?></h3>
                    <p name="description"><?php echo $result['description']; ?></p>
                </div>
            </div>








             </div>







             </div>

            </div>
           

						

						<?php
                    foreach ($result2 as $results) {

                    ?>
					
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box <?php $results['id_post']?>" data-animate-effect="fadeIn">
                    <div href="#"><img name="image" src="assets/img/<?php echo $results['image']; ?>" alt="avatar" class="img-responsive" >
							<div class="desc">
								<span></span>
								<h3 name="titre"><?php echo $results['titre']; ?></h3>
                                <a class="btn btn-primary btn-outline" href="postsdetails.php?id_post=<?PHP echo $results['id_post']; ?>">Découvrir <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					
					</div>
				


					<?php
                    }
                    ?>





            </div>
            <!-- END fh5co-page -->

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
        <?PHP




    }
}