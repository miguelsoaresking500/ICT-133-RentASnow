<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 08.06.2020
 * Time: 10:38
 */

require_once 'model/model.php';

function Modules()
{   
    $badEval = getBadEvals();
    $prof  = getProf();
    $module = getModules();
    $student = getStudent();
    $eval = getEvals();
    require_once 'view/noteinsert.php';
}


