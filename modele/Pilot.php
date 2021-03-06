<?php

class Pilot {

    private $id_conducteur;
    private $prenom;
    private $nom;

    public function __construct($id_conducteur,$prenom,$nom){
        $this->id = $id_conducteur;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of id_conducteur
     */ 
    public function getIdConducteur()
    {
        return $this->id_conducteur;
    }

    /**
     * Set the value of id_conducteur
     *
     * @return  self
     */ 
    public function setIdConducteur($id_conducteur)
    {
        $this->id_conducteur = $id_conducteur;

        return $this;
    }
}