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

//switch qui nous permets de chosir le case pour que la bonne page soit affichée et la bonne funtion utilisée7

$action = $_GET['action'];
updatePasswords();
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
        break;

    case 'displaySignin':
        $title = "RentASnow - Signin";
        signin();
        break;

    case 'displaySnowDetails':
        $title = 'RentASnow - Snows';
        $id = $_GET['id'];
        displaysnowdetails($id);
        break;

    case 'displayRealSnowDetails':
        $title = 'RentASnow - Snows';
        $snowid = $_GET['id'];
        displayRealsnowdetails($snowid);
        break;

    case"trySignin":
        trySignin();
        break;

    case"editRealSnowDetails":
        $snow = $_GET['snowid'];
        putInCart($snowid);
        displaysnowdetails();
        break;

    case"putInCart":
        $snowid = $_GET['snowid'];
        putInCart($snowid);
        displaysnowdetails();
        break;

    case "saveSnowDetails":
        updateSnow($_POST);
        $_SESSION['flashmessage']='OK';
        $snowid=$_POST['snowid'];
        displayRealsnowdetails($snowid);
    case"tryLogin":
        $email = $_POST['email'];
        $password = $_POST['password'];
        tryLogin($email, $password);
        break;

    case"Parametres":
        Settings();
        break;

    case"Logout":
        logout();
        break;

    case "viewCart":
        $cartContent=$_SESSION['cart'];
    require_once "view/cart.php";
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
