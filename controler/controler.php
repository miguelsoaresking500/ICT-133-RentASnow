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
//faire avec sql
// Fonction qui va vérifier si il y un login avec un password qui correspond dans le fichier Json en utilisant la focntion getLogs qui est dans le model
function tryLogin($email,$password)
{


    var_dump($email,$password,);
    $user = getUserByEmail($email);
    if(password_verify($password,$user['password']))
    {
        unset($user['password']);
        $_SESSION['user'] = $user;
        $_SESSION['flashmessage'] = 'Bienvenue'.$user[' firstname'];
        require_once 'view/home.php';
    }
    else{
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = "Pas d'accord";
        require_once 'view/Login.php';
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
//Fonction qui nous permets de voir les infos du compte qui est dans le fichier Json
function Settings(){
    require_once 'view/Settings.php';
}
//Fonction qui nous permets d'afficher les comptes de tout les utilisateurs (Que l'admin)
function showUsers(){
    $liste = getLogs();
    require_once 'view/showUsers.php';
}
//Fonction qui nous permets modifier les comptes de tout les utilisateurs (Que l'admin)
function modifUser(){
    $liste = getLogs();
    require_once 'view/modifUser.php';
}
//Fonction qui nous permets Supprimer les comptes de tout les utilisateurs (Que l'admin)
function DelUser(){

    $liste = getLogs();
$i=0;
    foreach ($liste as $user){
        if(isset($_POST[$user["id"]])){
            unset($liste[$i]);
            Delacc($liste);
        }
        $i++;
    }
    modifUser();
}



function displaysnowdetails($id){
    $snowtype = getSnowtype($id);
    $snows = getSnowsOfType($id);

    require_once 'view/displaySnowDetails.php';
}

function displayRealsnowdetails($snowid){
    $snow = getRealSnow($snowid);
    require_once 'view/displayRealSnowDetails.php';
}

function editRealsnowdetails($snowid){
    $snow = getRealSnow($snowid); //Get snow details
    require_once 'view/editRealSnowDetails.php';
}

function putInCart($snowid){
    $snow= getRealSnow($snowid);
    withdraw($snowid);
    $_SESSION['cart'][] = $snow;
    return;

}


?>


