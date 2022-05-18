<?php

class Car {


    private $id_vehicule;
    private $marque;
    private $modele;
    private $couleur;
    private $immatriculation;

    public function __construct($id_vehicule,$marque,$modele,$couleur,$immatriculation){

        $this->id = $id_vehicule;
        $this->title = $marque;
        $this->nbPlayers = $modele;
        $this->nbPlayers = $couleur;
        $this->nbPlayers = $immatriculation;
        
    }

    /**
     * Get the value of id_vehicle
     */ 
    public function getIdVehicle()
    {
        return $this->id_vehicule;
    }

    /**
     * Set the value of id_vehicle
     *
     * @return  self
     */ 
    public function setIdVehicle($id_vehicule)
    {
        $this->id = $id_vehicule;

        return $this;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }


    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

     /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

     /**
     * Get the value of immatriculation
     */ 
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */ 
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }
}