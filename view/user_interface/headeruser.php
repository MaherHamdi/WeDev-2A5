<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
            <h1><a href="index.php">Belevedere</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
                <li><a class="nav-link scrollto" href="#about">Notre zoo</a></li>
                <li><a class="nav-link scrollto" href="#why-us">Produit</a></li>
                <li><a class="nav-link scrollto" href="#events">nouveauté</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallerie</a></li>
                <li><a class="nav-link scrollto" href="#testimonials">Animaux</a></li>

                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="dropdown"><a style="text-decoration: none;"  href="#"><span><?php echo $res['username']; ?></span> <i class="bi bi-chevron-down"></i></a>

                    <ul class="listLogRight">
                        <li><a style="text-decoration: none;"  href="profileuser.php">Profile</a></li>
                        <?php 
                        if ($res['role']=="admin")
                        {?>
                        <li><a style="text-decoration: none;" href="../dashboard/gestionuser.php">Dashboard</a></li>
                        <?php } ?>
                        <li><a style="text-decoration: none;"  href="deconnection.php">se deconnecter</a></li>
                    </ul>
                </li>
                <li class="" ><a style="text-decoration: none;"  href="panierPage.php"><i class="fas fa-shopping-cart" style="color:white"></i></a></li>
                

            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header>