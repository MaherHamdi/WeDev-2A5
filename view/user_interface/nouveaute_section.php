<?php 
include "../../controller/postC.php" ;
$postC = new postC;
$posts = $postC->afficherpost1();


?>

<section id="events" class="events">
  <div class="container">

    <div class="section-title">
      <h2>Organize Your <span>Events</span> in our Restaurant</h2>
    </div>

    <div class="events-slider swiper-container">
      <div class="swiper-wrapper">
        <?php
        foreach ($posts as $post){
?>
        
        <div class="swiper-slide">
          <div class="row event-item">
            <div class="col-lg-6">
              <img  src= "../../assets/img/posts/<?php echo $post['image']; ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3><?php echo $post['titre']; ?></h3>
              <div class="price">
                <p><span><?php echo $post ['categorie']; ?></span></p>
              </div>
              <p>
              <?php echo $post ['description']; ?>
              </p>
              
            </div>

          </div>


        </div>
        <?php } ?><!-- End testimonial item -->
      </div>

      <div class="swiper-pagination"></div>
    </div>
    <a href="news.php">
      <div class="VoirtoutButton">

        <p> Voir plus</p>
        <div style="transform: rotate(90deg);"> > </div>
      </div>
    </a>
  </div>
</section>