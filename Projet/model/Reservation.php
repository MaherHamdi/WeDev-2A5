<?php 
class Reservation {
    private  $id_res = null;
    private  $id_user= null;
    private $id_ticket = null;
    private  $nperso= null;
    private  $message = null;
    private  $prix_res= null;
    private $date = null;

	

    public function __construct(string $id_user,string $id_ticket,$date,int $nperso,string $message,string $prix_res)
    {
        
        $this->id_user=$id_user;
        $this->id_ticket=$id_ticket;
        $this->date=$date;
        $this->nperso=$nperso;
        $this->message=$message;
        $this->prix_res=$prix_res;
        
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

    
    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }


    public function getId_ticket()
    {
        return $this->id_ticket;
    }

    
    public function setId_ticket($id_ticket)
    {
        $this->id_ticket = $id_ticket;

        return $this;
    }
    
    public function get_nperso()
    {
      return  $this->nperso;
        
    }

    public function set_nperso($nperso)
    {
        $this->nperso = $nperso;

        return $this;
    }
    
    public function getPrix()
    {
        return $this->prix_res;
    }

    
    public function setPrix($prix_res)
    {
        $this->prix = $prix_res;

        return $this;
    }
    
    public function getDate()
    {
       return $this->date;
    }
    
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
    public function getMessage()
    {
        return $this->message;
    }

    
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
    
}

?>