<?php


class Categorie
{
    private $id  ;
    private $categorie ;
    private $description;

    function __construct($categorie,$desription){

        $this->categorie=$categorie;
        $this->description=$desription;

    }

    function getId_categorie(){
        return $this->id;
    }
    function getCategorie(){
        return $this->categorie;
    }


    function getDescription(){
        return $this->description;
    }



    function setCategorie($categorie){
        $this->categorie=$categorie;
    }
   
    function setDescription($description){
        $this->description=$description;
    }


}