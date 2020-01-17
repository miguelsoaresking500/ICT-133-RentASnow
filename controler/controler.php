<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function snows()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}

function login()
{

    require_once 'view/Login.php';
}

function TryLogin()
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
    home();
}

function Logout()
{
    unset($_SESSION['user']);
    require_once 'view/home.php';
}

?>
