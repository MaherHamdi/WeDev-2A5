<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?php
                                                                                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                                                                            $error = "";
                                                                                            if (strpos($fullUrl, "gestionuser") == true) {
                                                                                                echo "Utilisateurs";
                                                                                            }
                                                                                            if (strpos($fullUrl, "home") == true) {
                                                                                                echo "Home";
                                                                                            }
                                                                                            if (strpos($fullUrl, "profile") == true) {
                                                                                                echo "Profil";
                                                                                            }
                                                                                            if (strpos($fullUrl, "gestionAnimaux") == true) {
                                                                                                echo "Animaux";
                                                                                            }
                                                                                            if (strpos($fullUrl, "addAnimal") == true) {
                                                                                                echo "Animaux";
                                                                                            }
                                                                                            if (strpos($fullUrl, "modifierAnimal") == true) {
                                                                                                echo "Animaux";
                                                                                            }
                                                                                            if (strpos($fullUrl, "gestionReservation") == true) {
                                                                                                echo "Reservation";
                                                                                            }
                                                                                            if (strpos($fullUrl, "gestionBlog") == true) {
                                                                                                echo "Blogs";
                                                                                            }
                                                                                            
                                                                                            ?>
                </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">User</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">


                    <i class="fa fa-bell me-sm-1"></i>

                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">

                        <img src="../../assets/img/posts/<?php echo $res['image']; ?>" alt="Avatar" class="avatar">
                        <span class="font-weight-bold text-xs"><?php echo $res['nom'] . " " . $res['prenom']   ?> </span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg>
                        <style>  .avatar {
  vertical-align: middle;
  width: 18px;
  height: 18px;
  border-radius: 50%;
}
</style>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="../user_interface/welcome.php">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm text-center font-weight-normal ">
                                            <span class=" font-weight-bold">Site Web</span>
                                        </h6>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="../user_interface/deconnection.php">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">se deconnecter


                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="profile.php?id=<?php echo $res['id'] ?>">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm  me-2  my-auto">
                                        <img style="border-radius: 5px;" src="../../assets/img/posts/<?php echo $res['image']; ?>"class="">

                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <?php echo $res['nom'] . " " . $res['prenom']   ?> </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <?php echo $res['username'] ?> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>