<?php
function getDataFromBase(){
$jsonData = file_get_contents("./dataBase.json");
return json_decode($jsonData,true);
}

?>


