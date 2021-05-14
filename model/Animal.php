<?php 
class Animal {
    private  $ID = null;
    private  $Espece= null;
    private $Nom = null;
    private  $description = null;


	

    public function __construct(string $Espece,string $Nom, string $description)
    {
        
        $this->Espece=$Espece;
        $this->Nom=$Nom;
        
        $this->description=$description;
    }


    
 
    public function getID()
    {
        return $this->ID;
    }

   
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    
    public function getEspece()
    {
        return $this->Espece;
    }

    public function setEspece($Espece)
    {
        $this->Espece = $Espece;

        return $this;
    }


    public function getdescription()
    {
        return $this->description;
    }

    
    public function setdescription($description)
    {
        $this->description = $description;

        return $this;
    }

    


    
    public function getNom()
    {
        return $this->Nom;
    }

    
    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }
}

?>