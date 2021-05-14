<?php 
class Role {
    private  $id_role = null;
    private  $nom_role= null;
  


	

    public function __construct(string $nom_role)
    {
        
        $this->nom_role=$nom_role;
      
    }


    
 
    public function getId()
    {
        return $this->id_role;
    }

   
    public function setId($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }

    
    public function getNom()
    {
        return $this->nom_role;
    }

    public function setNom($nom_role)
    {
        $this->nom_role = $nom_role;

        return $this;
    }

}

?>