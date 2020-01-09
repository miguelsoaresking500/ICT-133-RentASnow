<?php

require "controler/controler.php";
$action = $_GET['action'];
switch ($action) {
    case 'home':
        $title = 'RentASnow - Accueil';
        home();
        break;

    case 'displaySnows':
        $title = 'RentASnow - Snows';
        snows();
        break;

    default:
        $title = 'RentASnow - Accueil';
        require_once 'view/home.php';
        break;

}


?>
