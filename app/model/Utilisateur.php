<?php
require '../../config/DataBase.php';

class Utilisateur{

    private $idUtilisateur;
    private $pseudo;
    private $email;
    private $mdp;
    private $ipInscrpition;
    private $tracker;
    private $dateInscription;


    function __construct(){

    }





    /**
     * Get the value of idUtilisateur
     */ 
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    
    // /**
    //  * Set the value of idUtilisateur
    //  *
    //  * @return  self
    //  */ 
    // public function setIdUtilisateur($idUtilisateur)
    // {
    //     $this->idUtilisateur = $idUtilisateur;

    //     return $this;
    // }


    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of ipInscrpition
     */ 
    public function getIpInscrpition()
    {
        return $this->ipInscrpition;
    }

    /**
     * Set the value of ipInscrpition
     *
     * @return  self
     */ 
    public function setIpInscrpition($ipInscrpition)
    {
        $this->ipInscrpition = $ipInscrpition;

        return $this;
    }

    /**
     * Get the value of tracker
     */ 
    public function getTracker()
    {
        return $this->tracker;
    }

    /**
     * Set the value of tracker
     *
     * @return  self
     */ 
    public function setTracker($tracker)
    {
        $this->tracker = $tracker;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */ 
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     *
     * @return  self
     */ 
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}