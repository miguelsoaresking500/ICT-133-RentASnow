<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 08.06.2020
 * Time: 10:37
 */

// Start the sessionModules
session_start();

require "controler/controler.php";


//switch qui nous permets de chosir le case pour que la bonne page soit affichée et la bonne funtion utilisée7

$action = $_GET['action'];

switch ($action) {
    //case 'displaynoteinsert':
      //  Modules();
        //break;



    default:
        Modules();
        break;

}


?>

