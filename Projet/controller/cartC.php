<?php
require_once 'C:/xampp/htdocs/Projet/model/cart.php';

class cartC
{
    function ajouterCategory($cart){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)'
            );
            $query->execute([
                'user_id' => $cart->getuser_id(),
                'product_id' => $cart->getproduct_id(),
                'quantity' => $cart->getquantity(),
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }


}