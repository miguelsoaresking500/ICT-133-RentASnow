<?php
// Start the session
session_start();
require "controler/controler.php";
// Set session variables
$_SESSION["Username"] = "Miguel";
$_SESSION["Password"] = "Password";

if (!isset($_SESSION['username'])){
    echo "Vous êtes loggué";
}else{
    echo "You are not logged in!";
}
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

    default:
        $title = 'RentASnow - Accueil';
        require_once 'view/home.php';
        break;

}


?>
