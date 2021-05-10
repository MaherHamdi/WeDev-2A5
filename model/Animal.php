<?php 
class Animal {
    private  ?int $ID = null;
    private  ?string $Espece= null;
    private ?string $Nom = null;
    private ?string $description = null;
    private ?int $emplacement = null;


	

    public function __construct(string $Espece,string $Nom, string $description,int $emplacement)
    {
        
        $this->Espece=$Espece;
        $this->Nom=$Nom;
        $this->description=$description;
        $this->emplacement=$emplacement;
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

    public function getEmplacement()
    {
        return $this->emplacement;
    }

    
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }
}

?>