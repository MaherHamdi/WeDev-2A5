<?php
$hostname ="localhost";
$username = "root";
$password="";
$databaseName="crud_db";
$connect=mysqli_connect($hostname,$username,$password,$databaseName);
$query="SELECT id,categorie from categories" ;
$result1=mysqli_query($connect,$query);

include "./utils/header.php";

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
    
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Gestion des  posts </h3>
            <div>  <h5><i id="message" class="fa fa-angle-right"></i> tous les champs sont obligatoires  </h5> </div>


            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un post </h4>
                        <form id="ajout" class="form-horizontal style-form" method="POST" action="addpost.php" enctype="multipart/form-data">
                          
                           
                        <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">titre</label>
                                <div class="col-sm-10">
                                    <input id="titre" type="text" class="form-control" name="titre" placeholder="Saisir titre " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="description" type="text" class="form-control" name="description" placeholder="Saisir la description " required >Saisir la description </textarea>

                                </div>
                            </div>
                            
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Catégorie</label>
                                <div class="col-sm-10">
                                    <select name="categorie" class="form-control" id="categorie">
                                        <?php
                                        while($row1 = mysqli_fetch_array($result1)):;
                                        ?>
                                        <option ><?php echo $row1 [1];   ?></option>
                                        <?php endwhile ;  ?>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">image</label>
                                <div class="col-sm-10">
                                    <input id="image" type="file" class="form-control" name="image" required>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-theme" name="ajouter" onclick="envoyer()" >Ajouter</button>

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
    var description=document.getElementById('description') ;
    var titre=document.getElementById('titre');
    var image=document.getElementById('image') ;



    function envoyer()

    {
        /*document.getElementById("message").innerText= date_aller.value
      if( date1>date2)
      {
          document.getElementById("message").innerText= 'chech dates '

      }*/

        if( description.value=="" || titre.value=="" || image.value=="")
        {
            document.getElementById("message").innerText="tous les champs sont obligatoires" ;

        }
        
      /*  if (date1<date2)
        {
            document.getElementById("message").innerText="verif date" ;
        }
       //else {document.getElementById("message").innerText="good"}

       /* if (destination==true && depart==true && description==true && airline==true && date_aller==true && date_retour==true && prix==true && image==true )
        {
            document.getElementById("message").innerText = "Envoi Serveur";
            //  document.getElementById("ajout").submit();
        }*/

       /* else
        {
            document.getElementById("message").innerText="tous les champs sont obligatoires" ;
        }*/

    }
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>