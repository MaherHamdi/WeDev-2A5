<?php 
class Password {

    private  $pswEmail= null;
    private $resetToken = null;
    private  $resetExpire = null;

    

	

    public function __construct(string $pswEmail,string $resetToken, string $resetExpire)
    {
        $this->pswEmail=$pswEmail;
        $this->resetToken=$resetToken;
        $this->resetExpire=$resetExpire;
    }


    
 
    public function getEmail()
    {
        return $this->pswEmail;
    }

   
    public function setEmail($pswEmail)
    {
        $this->pswEmail = $pswEmail;

        return $this;
    }

    
    public function getToken()
    {
        return $this->resetToken;
    }

    public function setToken($resetToken)
    {
        $this->resetToken = $resetToken;

        return $this;
    }


    public function getExpire()
    {
        return $this->resetExpire;
    }

    
    public function setExpire($resetExpire)
    {
        $this->resetExpire = $resetExpire;

        return $this;
    }

    
    
}

?>