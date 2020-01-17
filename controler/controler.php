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
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['password'] = $_POST['password'];
        foreach ($Logins as $logs) {
            if ($logs['user'] == $_SESSION['user']) {

                if ($logs['Password'] == $_SESSION['Password']) {
                    home();
                }

            }
        }
    }
    session_unset();
    require_once 'view/home.php';
}

function Logout()
{
    session_unset();
    require_once 'view/home.php';
}

?>
