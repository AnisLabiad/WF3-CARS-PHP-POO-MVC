<?php

require_once "modele/PilotManager.php";
class PilotController {
    private $pilotManager;


    public function __construct(){
        $this->pilotManager = new PilotManager();
        $this->pilotManager->loadPilots();        
    }

    public function displayCars(){
        $pilots = $this->pilotManager->getPilots();
        require_once "view/drivers.view.php";
    }

    public function newPilotForm(){
        require_once "view/new.driver.view.php";
    }
        
}


  


