<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>

<body>

    <?php
    include "C:/xampp/htdocs/Projet/config.php";
    require_once 'C:/xampp/htdocs/Projet/model/product.php';
    require_once 'C:/xampp/htdocs/Projet/controller/productC.php';
    require_once 'C:/xampp/htdocs/Projet/model/Category.php';
    require_once 'C:/xampp/htdocs/Projet/controller/CategoryC.php';

    session_start();

    if (isset($_POST['add'])) {
        /// print_r($_POST['product_id']);
        if (isset($_SESSION['cart'])) {

            $item_array_id = array_column($_SESSION['cart'], "product_id");

            if (in_array($_POST['product_id'], $item_array_id)) {
            } else {

                $count = count($_SESSION['cart']);
                $item_array = array(
                    'product_id' => $_POST['product_id']
                );

                $_SESSION['cart'][$count] = $item_array;
            }
        } else {

            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            // Create new session variable
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }

    $productC =  new productC();

    $limit = 100;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($page - 1) * $limit;
    $product = $productC->afficherproduct($start, $limit);
    $productcount = 0;
    $productcount = $productC->countAll();
    $total = $productcount;
    $pages = ceil($total / $limit);
    if ($page = 1) {
        $Previous = $page;
    } else
        $Previous = $page - 1;
    $y = $Previous;

    $next = $page + 1;
    $y = $next;



    if (isset($_POST['search2'])) {
        if ($_POST['search1'] == "") {
            $product = $productC->afficherproduct($start, $limit);
        } else {
            $product = $productC->rechercherListeproduct($_POST['search1']);
        }
    } else {
        $product = $productC->afficherproduct($start, $limit);
    }
    $categoryC =  new categoryC();
    $limitC = 100;
    $pageC = isset($_GET['pageC']) ? $_GET['pageC'] : 1;
    $startC = ($pageC - 1) * $limitC;
    $category = $categoryC->afficherCategory($startC, $limitC);
    $categorycount = 0;
    $categorycount = $categoryC->countAllC();
    $totalC = $categorycount;
    $pagesC = ceil($totalC / $limitC);
    $NextC = $pageC + 1;
    $y = $NextC;

    if ($pageC = 1) {
        $PreviousC = $pageC;
    } else
        $PreviousC = $pageC - 1;
    $x = $PreviousC;






    if (isset($_POST['search2'])) {
        if ($_POST['search1'] == "") {
            $category = $categoryC->afficherCategory($startC, $limitC);
        } else {
            $category = $categoryC->rechercherListecategory($_POST['search1']);
        }
    } else
        $category = $categoryC->afficherCategory($startC, $limitC);


    ?>

    <?php require_once("header1.php"); ?>
    <div class="container">
        <div class="row text-center py-4">

            <?php
            try {
                foreach ($product as $products) {
                    $image = (!empty($products['photo'])) ? '../../assets/img/posts/' . $products['photo'] : 'images/noimage.jpg';
                    $name = $products['name'];
                    $description = $products['description'];
                    $price = $products['price'];
                    $id = $products['id'];

                    echo "
                <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$image\" alt=\"Image1\" class=\"card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$name</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                $description
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">$519</s></small>
                                <span class=\"price\">$$price</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
                }
            } catch (PDOException $e) {
                echo "There is some problem in connection: " . $e->getMessage();
            }


            ?>
        </div>
    </div>
</body>

</html>