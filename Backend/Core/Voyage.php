<?php


class Voyage
{
    private $id_voyage   ;
    private $destination;
    private $depart;
    private $description;
    private $airline;
    private $date_aller;
    private $date_retour;
    private $prix;
    private $image;
    private $id_categorie;

    function __construct($destination,$depart,$description,$airline,$date_aller,$date_retour,$prix,$image, $id_categorie){


        $this->destination=$destination;
        $this->depart=$depart;
        $this->description=$description;
        $this->airline=$airline;
        $this->date_aller=$date_aller;
        $this->date_retour=$date_retour;
        $this->prix=$prix;
        $this->image=$image;
        $this->id_categorie= $id_categorie;

    }

    function getId_voyage(){
        return $this->id_voyage;
    }
    function getDestination(){
        return $this->destination;
    }
    function getDepart(){
        return $this->depart;
    }
    function getDescription(){
        return $this->description;
    }
    function getAirline(){
        return $this->airline;
    }
    function getDate_aller(){
        return $this->date_aller;
    }
    function getDate_retour(){
        return $this->date_retour;
    }
    function getPrix(){
        return $this->prix;
    }
    function getImage(){
        return $this->image;
    }

    function getId_categorie(){
        return $this->id_categorie;
    }

    function setDestination($destination){
        $this->destination=$destination;
    }
    function setDepart($depart){
        $this->depart=$depart;
    }
    function setDescription($description){
        $this->description=$description;
    }
    function setAirline($airline){
        $this->airline=$airline;
    }
    function setDate_aller($date_aller){
        $this->date_aller=$date_aller;
    }
    function setDate_retour($date_retour){
        $this->date_retour=$date_retour;
    }
    function setPrix($prix){
        $this->prix=$prix;
    }
    function setImage($image){
        $this->image=$image;
    }
    function setId_categorie($id_categorie){
        $this->id_categorie=$id_categorie;
    }



}