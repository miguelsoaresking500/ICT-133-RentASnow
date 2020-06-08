<?php
/**
 * Created by PhpStorm.
 * User: miguel.soares
 * Date: 13.03.2020
 * Time: 08:36
 */

function getPDO()
{

    require ".constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

function getModules()
{
    {
        require ".constant.php";
        try {
            $dbh = getPDO();
            $query = "SELECT distinct module.moduleShortName,moduleinstance.fkmodule
FROM module
INNER JOIN moduleinstance
ON moduleinstance.fkModule = module.idModule";
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


function getStudent()
{
    {
        require ".constant.php";
        try {
            $dbh = getPDO();
            $query = "SELECT person.idPerson,person.personFirstName,person.personLastName, CONCAT(personFirstName, ' ', personLastName) AS Fullname
FROM person
where role = 0
ORDER BY personLastName ASC ";
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

function getEvals()
{
    {
        require ".constant.php";
        try {
            $dbh = getPDO();
            $query = "SELECT testDescription,idEvaluation
FROM evaluation";
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




