<?php
define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
"://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/CarController.php";
$carController = new CarController();

if(empty($_GET['page'])){
    require_once "view/accueil.view.php";
}else{
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL) );
    switch ($url[0]) {
        case 'accueil': require_once "view/accueil.view.php";
        break;

        case 'vehicule': 
            if(empty($url[1])){
                $carController->displayCars();
            }elseif($url[1] == "add"){
                $carController->newCarForm();
            }elseif($url[1] == "gvalid"){
                $carController->newCarValidation();
            }elseif($url[1] == "edit"){
                $carController->editCarForm($url[2]); 
            }elseif($url[1] == "delete"){
                echo "Supprimer un jeu";
            }
        break;

        
        case 'conducteur': require_once "view/drivers.view.php";
        break;
    }
}

