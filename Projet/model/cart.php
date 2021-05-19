<?php


class cart
{
    private $id;
    private $user_id ;
    private $product_id;
    private $quantity;

    function __construct($user_id,$product_id,$quantity){

        $this->user_id=$user_id;
        $this->product_id=$product_id;
        $this->quantity=$quantity;
    }

    function getid(){
        return $this->id;
    }
    function getuser_id(){
        return $this->user_id;
    }

    function getproduct_id(){
        return $this->product_id;
    }

    function getquantity(){
        return $this->quantity;
    }


    function setuser_id($user_id){
        $this->user_id=$user_id;
    }
    function setproduct_id($product_id){
        $this->product_id=$product_id;
    }
    function setquantity($quantity){
        $this->quantity=$quantity;
    }

}