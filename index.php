<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */

// Start the session
session_start();
require "controler/controler.php";

//switch qui nous permets de chosir le case pour que la bonne page soit affichée et la bonne funtion utilisée
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

    case 'displaySignin':
        $title = "RentASnow - Signin";
        signin();
        break  ;

    case"trySignin":
        trySignin();
        break;


    case"tryLogin":
        $email = $_POST['email'];
        $password = $_POST['password'];
        tryLogin($email,$password);
        break;

    case"Parametres":
        Settings();
        break;

    case"Logout":
        logout();
        break;

    case"showUsers":
        $title = "RentASnow - showUsers";
        showUsers();
        break;

    case"modifUser":
        $title = "RentASnow - modifUser";
        modifUser();
        break;

    case "DelUser":
        DelUser();
        break;

        default:
        $title = 'RentASnow - Accueil';
        home();
        break;

}


?>
