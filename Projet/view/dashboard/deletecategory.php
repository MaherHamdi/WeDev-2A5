
<?php

include "../../Controller/CategoryC.php";

if (isset($_GET['id']))
{
    $categoryC = new CategoryC();
    $categoryC->supprimerCategory($_GET['id']);

    header('Location: gestionProduct.php');
}
?>