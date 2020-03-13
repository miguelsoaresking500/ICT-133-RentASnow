<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 13.03.2020
 * Time: 08:36
 */

function getPDO()
{

    require "C:\ICT-151-RentASnow\.constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function getLogs()
{
    {
        require "C:\ICT-151-RentASnow\.constant.php";
        try {
            getPDO();
            $query = "SELECT * FROM users";
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

$users = getLogs();

foreach ($users as $user) {
    $hash = password_hash($user['firstname'], PASSWORD_DEFAULT);
    echo $user['firstname'] . " => $hash \n";


    require "C:\ICT-151-RentASnow\.constant.php";
    try {
        getPDO();
        $query = "UPDATE users SET password=:password WHERE id=:id";
        $statement = getPDO()->prepare($query);//prepare query
        $statement->execute([':id' => $users['id'],':password' => $hash]);//execute query
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
    }


}




