<?php


class post
{
    private $id_post  ;
    private $titre ;
    private $description;
    private $image;
    private $id;
    private $date;

    function __construct($description,$titre,$image,$id){

        $this->titre=$titre;
        $this->description=$description;
        $this->image=$image;
        $this->id=$id;

    }

    function getId_post(){
        return $this->id_post;
    }
    function gettitre(){
        return $this->titre;
    }

    function getImage(){
        return $this->image;
    }

    function getdescription(){
        return $this->description;
    }
    function getid(){
        return $this->id;
    }
    function getdate(){
        return $this->date;
    }


    function settitre($titre){
        $this->titre=$titre;
    }
    function setImage($image){
        $this->image=$image;
    }
    function setdescription($description){
        $this->description=$description;
    }
    function id($id){
        $this->id=$id;
    }
    function setdate($date){
        $this->date=$date;
    }


}