<?php


class product
{
    private $id;
    private $name ;
    private $description;
    private $photo;
    private $category;
    private $price;

    function __construct($category,$name,$description,$price,$photo){

        $this->name=$name;
        $this->description=$description;
        $this->photo=$photo;
        $this->category=$category;
        $this->price=$price;

    }

    function getid(){
        return $this->id;
    }
    function getname(){
        return $this->name;
    }

    function getphoto(){
        return $this->photo;
    }

    function getdescription(){
        return $this->description;
    }
    function getcategory(){
        return $this->category;
    }
    function getprice(){
        return $this->price;
    }


    function setname($name){
        $this->name=$name;
    }
    function setphoto($photo){
        $this->photo=$photo;
    }
    function setdescription($description){
        $this->description=$description;
    }
    function setcategory($category){
        $this->category=$category;
    }
    function setprice($price){
        $this->price=$price;
    }


}