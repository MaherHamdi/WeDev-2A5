<?php 
class Emplacement {
    private  $IDe = null;
    private  $NomE= null;
    private  $RaceAnimal = null;
    private  $NombrePlace = null;


	

    public function __construct(string $NomE,string $RaceAnimal, int $NombrePlace)
    {
        
        $this->NomE=$NomE;
        $this->RaceAnimal=$RaceAnimal;
        $this->NombrePlace=$NombrePlace;
    }


    
 
    public function getIDe()
    {
        return $this->IDe;
    }

   
    public function setIDe($IDe)
    {
        $this->IDe = $IDe;

        return $this;
    }

    
    public function getNomE()
    {
        return $this->NomE;
    }

    public function setNomE($NomE)
    {
        $this->NomE = $NomE;

        return $this;
    }


    public function getNombPlace()
    {
        return $this->NombrePlace;
    }

    
    public function setNombPlace($NombrePlace)
    {
        $this->NombrePlace = $NombrePlace;

        return $this;
    }

    
      public function getRaceAnimal()
    {
        return $this->RaceAnimal;
    }

    
    public function setRaceAnimal($RaceAnimal)
    {
        $this->RaceAnimal = $RaceAnimal;

        return $this;
    }

}

?>