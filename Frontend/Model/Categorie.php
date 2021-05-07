<?php


class Categorie
{
    private $id   ;
    private $categorie ;
    private $image;
    private $description;

    function __construct($categorie,$desription,$image){

        $this->categorie=$categorie;
        $this->description=$desription;
        $this->image=$image;

    }

    function getId_categorie(){
        return $this->id;
    }
    function getCategorie(){
        return $this->categorie;
    }

    function getImage(){
        return $this->image;
    }

    function getDescription(){
        return $this->description;
    }



    function setCategorie($categorie){
        $this->categorie=$categorie;
    }
    function setImage($image){
        $this->image=$image;
    }
    function setDescription($description){
        $this->description=$description;
    }


}