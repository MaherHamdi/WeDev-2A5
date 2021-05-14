<?php
$postC = new postC;
$posts = $postC->afficherpost1();
 ?>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="../../assets/css/newscard.css" rel="stylesheet">

<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<section class="wrapper">
    <div class="container-fostrap">

        <div class="content">
       

            <div class="container">
                <div class="row">
                <?php
        foreach ($posts as $post){
?>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                                <img src= "../../assets/img/posts/<?php echo $post['image']; ?>" />
                            </a>
                            <div class="card-content">
                                <p class="card-title">
                                    <a style="color: #35322d;" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"><?php echo $post['titre']; ?>
                                    </a>
                                </p>
                                <p class="">
                                <?php echo implode(' ', array_slice(explode(' ', $post['description']), 0, 10)) ?> ...
                                </p>
                                <p style="font-size: 12px;color:#7c7974">
                                <?php echo $post['date'] ?>
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a style="color:#ffb03b;" href="" class="btn btn-link btn-block">
                                    Voir tout
                                </a>
                            </div>
                        </div>
                    </div>
                
                    
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>