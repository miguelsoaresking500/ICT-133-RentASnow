<?php
// Start the session
session_start();
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


    case 'displayLogin':
        $title = "RentASnow - Login";
        login();
        break  ;

    case"tryLogin":
        TryLogin();
        break;

    case"Logout":
        Logout();
        break;

    default:
        $title = 'RentASnow - Accueil';
        home();
        break;

}


?>
