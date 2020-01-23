<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */

require_once 'model/model.php';

// This file contains nothing but functions
// Fonction qui va chercher les News dans le fichier Json en utilisant la fonction getNews qui est dans le model
function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
// Fonction qui va chercher les Snows dans le fichier Json en utilisant la fonction getSnows qui est dans le model
function snows()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}
// Fonction qui nous renvoit vers la page de login
function login()
{

    require_once 'view/Login.php';
}
function signin()
{

    require_once 'view/Signin.php';
}
// Fonction qui va vérifier si il y un login avec un password qui correspond dans le fichier Json en utilisant la focntion getLogs qui est dans le model
function tryLogin()
{
    $Logins = getLogs();
    if (isset($_POST['user']) && isset($_POST['password'])) {
        foreach ($Logins as $login) {
            if ($login['user'] == $_POST['user']) {
                if ($login['password'] == $_POST['password']) {
                    $_SESSION['user'] = $_POST['user'];
                }

            }
        }
    }
    Home();
}
//Fontion qui nous permets de faire logout
function logout()
{
    unset($_SESSION['user']);
    require_once 'view/home.php';
}
//Fonction qui nous permets de Créer un compte et e stocker dans le fichier Jason
function trySignin()
{
    if (isset($_POST["user"]) && isset($_POST["password"])  != "" && $_POST["user"] != "" && $_POST["password"] != "") {


        $liste = getLogs();
        $Lastid = 0;
        foreach ($liste as $user) {
            $id = $user["id"];

            if ($id > $Lastid) {
                $Lastid = $id;
            }
        }
        $Lastid++;
        $liste[] = ["id" => $Lastid, "user" => $_POST["user"], "password" => $_POST["password"]];
        createLogs($liste);
    }
    require_once 'view/Signin.php';
    $_POST["user"] = null;
    unset($_POST["password"]);
}
function Settings(){
    require_once 'view/Settings.php';
}
?>
