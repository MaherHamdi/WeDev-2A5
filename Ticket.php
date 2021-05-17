<?php 
class Ticket {
    private  $id = null;
    private  $nomticket= null;
    private $prix = null; 
    private  $description = null;
    
   

	

    public function __construct(string $nomticket,int $prix,string $description)
    {
        
        $this->nomticket=$nomticket;
        $this->prix=$prix;
        $this->description=$description;
        
        
    }

    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    
    public function get_nomticket()
    {
        return $this->nomticket;
    }

    public function set_nomticket($nomticket)
    {
        $this->nomticket = $nomticket;

        return $this;
    }


    public function get_prix()
    {
        return $this->prix;
    }

    
    public function set_prix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    
    public function get_description()
    {
        return $this->description;
    }

    
    public function set_description($description)
    {
        $this->description = $description;

        return $this;
    }
    
}

?>