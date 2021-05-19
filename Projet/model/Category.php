<?php


class Category
{
    private $id  ;
    private $name ;

    function __construct($name){

        $this->name=$name;

    }

    function getId_name(){
        return $this->id;
    }
    function getname(){
        return $this->name;
    }




    function setname($name){
        $this->name=$name;
    }

}