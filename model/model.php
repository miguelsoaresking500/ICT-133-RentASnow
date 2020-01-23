<?php
/**
 * Created by PhpStorm.
 * User: Miguel.SOARES
 * Date: 10.01.2020
 * Time: 14:48
 */
//fonction qui va chercher les news dans le ficher Json
function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
//fonction qui va chercher les snows dans le ficher Json
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
}
//fonction qui va chercher les sessions dans le ficher Json
function getLogs(){
    return json_decode(file_get_contents("model/dataStorage/Logs.json"),true);
}

function createLogs($data){
    file_put_contents("model/dataStorage/Logs.json",json_encode($data));
}
?>
