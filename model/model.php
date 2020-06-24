<?php

function getPDO()
{

    require ".constant.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}

/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */
//fonction qui va chercher les news dans le ficher Json
function getNews()
{
    require ".constant.php";
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM news inner join users on news.user_id = users.id";
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

//fonction qui va chercher les snows dans le ficher Json
function getSnows()
{
    require ".constant.php";
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM snowtypes";
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

//fonction qui va chercher les snows dans le ficher Json
function getRealSnow($id)
{
    require ".constant.php";
    try {
        $dbh = getPDO();
        $query = "SELECT * FROM snows inner join snowtypes on snowtype_id = snowtypes.id where snows.id=:id";
        $statment = getPDO()->prepare($query);//prepare query
        $statment->execute(['id' => $id]);//execute query
        $queryResult = $statment->fetch(pdo::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

//fonction qui va chercher les snows dans le ficher Json
function getSnowtype($id)
{
    require ".constant.php";
    try {
        getPDO();
        $query = "SELECT * FROM snowtypes where id=:id";
        $statment = getPDO()->prepare($query);//prepare query
        $statment->execute(['id' => $id]);//execute query
        $queryResult = $statment->fetch(pdo::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getSnowsOfType($id)
{
    require ".constant.php";
    try {
        getPDO();
        $query = "SELECT * FROM snows where snowtype_id=:id";
        $statment = getPDO()->prepare($query);//prepare query
        $statment->execute(['id' => $id]);//execute query
        $queryResult = $statment->fetchAll(pdo::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug)var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
//fonction qui va chercher les sessions dans le ficher Json
function getLogs()
{
    {
        require ".constant.php";
        try {
            $dbh = getPDO();
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
//fonction qui va créer les sessions dans le ficher Json
    function createLogs($data)
    {
        require ".constant.php";
        try {
            $dbh =getPDO();
            $query = "INSERT INTO users (email,firstname,lastname,password)VALUES(:email,:firstname,:lastname,:password) ";
            $statement = getPDO()->prepare($query);//prepare query
            $statement->execute($users);//execute query
            // $filmMakers['id']=$dbh -> lastIsertId();
            $dbh = null;
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }
    }

//fonction qui va supprimer les sessions dans le ficher Json
    function Delacc($data)
    {
        require ".constant.php";
        try {
            $dbh =getPDO();
            $query = "DELETE FROM users  WHERE id=:id";
            $statement = getPDO()->prepare($query);//prepare query
            $statement->execute([':id'=>$users]);//execute query
            $dbh = null;
            return true;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }

    }

function getUserByEmail($email)
{
    {
        require ".constant.php";
        try {
            getPDO();
            $query = "SELECT * FROM users where email=:email";
            $statment = getPDO()->prepare($query);//prepare query
            $statment->execute(['email' => $email]);//execute query
            $queryResult = $statment->fetch(pdo::FETCH_ASSOC);//prepare result for client
            $dbh = null;
            return $queryResult;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }
    }
}

function updatePasswords()
{
    $users = getUserByEmail($email);

    foreach ($users as $u)
    {
        $hash = password_hash($u['firstname'],PASSWORD_DEFAULT);
        echo $u['firstname']."=>$hash \n";

        $id = $u['id'];
        try
        {
            $dbh =  getPDO();
            $query = "UPDATE users SET password = '$hash' WHERE id = $id";
            $statement = $dbh->prepare($query);
            $statement -> execute();
            $queryResult = $statement->fetchAll();
            $dbh = null;
        }catch (PDOException $e)
        {
            print 'Error!:'.$e->getMessage().'<br/>';
            return null;
        }
    }
}

function updateSnow($snowdata)
{
    if(isset($snowdata['available']))
    {
        $snowdata['available']=1;
    }else
    {
        $snowdata['available']=0;
    }
    require ".constant.php";
    try {
        getPDO();
        $query = "UPDATE snows SET code =:code, length =:length, state =:state,available= :available where id = :snowif;";
        $statment = getPDO()->prepare($query);//prepare query
        $statment->execute($snowdata);//execute query
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function withdraw($snowid)
{
    require ".constant.php";
    try {
        getPDO();
        $query = 'UPDATE snows SET available = false where id =:snowid';
        $statment = getPDO()->prepare($query);//prepare query
        $statment->execute(['snowid' => $snowid]);//execute query
        $queryResult = $statment->fetch(pdo::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}


?>






