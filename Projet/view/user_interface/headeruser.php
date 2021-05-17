<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
            <h1><a href="../../index.php">Belevedere</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
                <li><a class="nav-link scrollto" href="#about">Notre zoo</a></li>
                <li><a class="nav-link scrollto" href="">Tarifs</a></li>
                <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                <li><a class="nav-link scrollto" href="#events">nouveauté</a></li>
                <li><a class="nav-link scrollto" href="#chefs">Animaux</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallerie</a></li>

                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li class="dropdown"><a href="#"><span><?php echo $res['username']; ?></span> <i class="bi bi-chevron-down"></i></a>

                    <ul class="listLogRight">
                        <li><a href="profileuser.php">Profile</a></li>
                        <?php 
                        if ($res['role']=="admin")
                        {?>
                        <li><a href="../dashboard/gestionuser.php">Dashboard</a></li>
                        <?php } ?>
                        <li><a href="deconnection.php">se deconnecter</a></li>
                    </ul>
                </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header>