<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 13.03.2020
 * Time: 08:36
 */

function getPDO()
{

    require  "C:\ICT-151-RentASnow\Prepa\.constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function getModules()
{
    {
        require "C:\ICT-151-RentASnow\Prepa\.constant.php";
        try {
            getPDO();
            $query = "SELECT distinct module.moduleShortName,moduleinstance.fkmodule
FROM module
INNER JOIN moduleinstance
ON moduleinstance.fkModule = module.idModule;";
            $statment = getPDO()->prepare($query);//prepare query
            $statment->execute();//execute query
            $queryResult = $statment->fetchAll(pdo::FETCH_ASSOC);//prepare result for client
            $dbh = null;
            return $queryResult;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }
    }
}