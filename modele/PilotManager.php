<?php
 require_once "Manager.php";
 require_once "Pilot.php";

class PilotManager extends Manager {

    private $pilots;

    public function addPilot($pilot){
        $this->pilots[] = $pilot;
    }

    public function getPilots(){
        return $this->pilots;
    }

    public function loadPilots(){
        $req = $this->getBdd()->prepare("SELECT * FROM conducteur");
        $req->execute();
        $myPilots = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myPilots as $pilot){
            $u = new Pilot($pilot['id_conducteur'],$pilot['nom'],$pilot['prenom']);
            $this->addPilot($u);
        }

    }


}