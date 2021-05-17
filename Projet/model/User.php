<?php 
class User {
    private  $id = null;
    private  $nom= null;
    private $prenom = null;
    private  $username = null;
    private  $email = null;
    private  $password= null;
    private $image = null;
    private  $role = null;
    private  $key = null;
    private $verifier=null;
    private $phone=null;
   private $adresse=null;

	

    public function __construct(string $nom,string $prenom, string $username,string $email,string $password,string $key,string $verifier,string $phone,string $adresse)
    {
        
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->username=$username;

        $this->email=$email;
        $this->password=$password;
        $this->key=$key;
        $this->verifier=$verifier;
        $this->phone=$phone;
        $this->adresse=$adresse;
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

    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }

    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    
    public function getUsername()
    {
        return $this->username;
    }

    
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }

    
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    public function getKey()
    {
        return $this->key;
    }

    
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
    public function getVerifier()
    {
        return $this->verifier;
    }

    
    public function setVerifier($verifier)
    {
        $this->verifier = $verifier;

        return $this;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }

    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
}

?>