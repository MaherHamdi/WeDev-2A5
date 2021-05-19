<?php
include "../../Controller/productC.php";

if (isset($_GET['id_product']))
{
    $productC = new productC();
    $productC->supprimerproduct($_GET['id_product']);

    header('Location: gestionProduct.php');
}
?>