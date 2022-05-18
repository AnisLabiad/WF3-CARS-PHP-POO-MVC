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

        case 'games': 
            if(empty($url[1])){
                $gameController->displayGames();
            }elseif($url[1] == "add"){
                $gameController->newGameForm();
            }elseif($url[1] == "gvalid"){
                $gameController->newGameValidation();
            }elseif($url[1] == "edit"){
                $gameController->editGameForm($url[2]); 
            }elseif($url[1] == "delete"){
                echo "Supprimer un jeu";
            }
        break;

        
        case 'users': require_once "view/drivers.view.php";
        break;
    }
}

