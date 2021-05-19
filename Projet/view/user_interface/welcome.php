<?php
include "C:/xampp/htdocs/Projet/config.php";
require_once 'C:/xampp/htdocs/Projet/model/User.php';
require_once 'C:/xampp/htdocs/Projet/controller/userC.php';
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if (empty($_SESSION['e'])) {
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location:../../index.php');
}

$userC = new userC();
$res = $userC->recupererEmail($_SESSION['e']);
if ($res['verifier'] != 1) {
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zoo Belevedere</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/favicon.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


  <!-- Vendor CSS Files -->

  <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v4.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
    <i class="bi bi-phone d-flex align-items-center"><span>+216 90 766 664</span></i>
    <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Lun-Dim: 10:00 AM - 20:00 PM</span></i>
  </div>
</section>

<!-- ======= Header ======= -->


<?php include('headeruser.php'); ?>

<!-- End Header -->

<!-- ======= Hero Section ======= -->
<?php include('hero_section.php'); ?>
<!-- End Hero -->


<!-- ======= notre zoo Section ======= -->
<?php include('zoo_section.php'); ?>
<!-- notre zoo Section -->

<!-- ======= Whu Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">

    <div class="section-title">
      <h2>Why choose <span>Our Restaurant</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
        autem.</p>
    </div>

    <div class="row">

      <div class="col-lg-4">
        <div class="box">
          <span>01</span>
          <h4>Lorem Ipsum</h4>
          <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box">
          <span>02</span>
          <h4>Repellat Nihil</h4>
          <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para
            dest</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="box">
          <span>03</span>
          <h4> Ad ad velit qui</h4>
          <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Whu Us Section -->



<!-- ======= Specials Section ======= -->
<section id="specials" class="specials">
  <div class="container">

    <div class="section-title">
      <h2>Check our <span>Specials</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
        autem.</p>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Architecto ut aperiam autem id</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer
                  a videna mareta paulona marka</p>
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa
                  odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni
                  nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="../../assets/img/specials-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Et blanditiis nemo veritatis excepturi</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer
                  a videna mareta paulona marka</p>
                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt
                  est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque
                  beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="../../assets/img/specials-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus
                  non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque
                  necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum
                  odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="../../assets/img/specials-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis
                  delectus</p>
                <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam
                  fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores
                  sed qui veritatis aperiam quia a laborum inventore</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="../../assets/img/specials-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut
                  quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae
                  molestiae voluptate vel</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="../../assets/img/specials-5.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Specials Section -->

<!-- ======= nouveauté Section ======= -->
<?php include('nouveaute_section.php'); ?>
<!-- End nouveauté Section -->

<!-- ======= reservation Section ======= -->
<?php include('reservation_section.php'); ?>
<!-- End reservation Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container-fluid">

    <div class="section-title">
      <h2>Some photos from <span>Our Restaurant</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae
        autem.</p>
    </div>

    <div class="row no-gutters">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item">
          <a href="../../assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
            <img src="../../assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Gallery Section -->

<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
  <div class="container">

    <div class="section-title">
      <h2>Nos <span>Animaux</span></h2>
      <p>chez Belevedere il y a de variantes especes quelques soit marine, wahchira, za7ifa</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="member">
          <div class="events-slider swiper-container">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-1.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          <div class="member-info">
            <h4>aquatique</h4>
            <a href="#">voir plus </a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-6">
        <div class="member">
          <div class="events-slider swiper-container">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-2.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          <div class="member-info">
            <h4>wahchia </h4>
            <a href="#">voir plus </a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="member">
          <div class="events-slider swiper-container">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="pic"><img src="../../assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
                </div>
              </div>
            </div>
          </div>
          <div class="member-info">
            <h4>ze7ifa</h4>
            <a href="#">voir plus </a>

          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Chefs Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container position-relative">

    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
              quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
              quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
              tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
              minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="../../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
              labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<?php include("contact.php") ?>
<!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <h3>Belevedere</h3>
    <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
      &copy; Copyright <strong><span>Belevedere</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
      Designed by <a href="https://esprit.tn/" target="_blank">WeDev</a>
    </div>
  </div>
</footer><!-- End Footer -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>

</body>