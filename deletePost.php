<?php
include "./getFromBase.php";
$data = getDataFromBase();

echo  $_GET['id'];
 
function deleteDataFromBase(){
$data = getDataFromBase();
 $id =$data[$_GET["id"]-1]["id"];
 $data = array_filter($data, function ($current) use($id) {
return $current['id'] != $id;
});

 $newItem=  json_encode($data);

    file_put_contents("./dataBase.json",$newItem); 
}

deleteDataFromBase();
header("location: ./posts.php");
?>
