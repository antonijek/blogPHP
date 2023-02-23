<?php
include "./getFromBase.php";





function editDataToBase(){
  $data = getDataFromBase();
 $newArr = [ "id"=>$_GET['id'], "email"=> $_POST["email"], "password"=> $_POST["password"], "title"=> $_POST["title"], "description"=>$_POST["description"],"image"=> $_POST["image"]];

 $data[$_GET['id']-1]=$newArr;
  $newItem=  json_encode($data);
    file_put_contents("./dataBase.json",$newItem);
}

editDataToBase();
header("location: ./posts.php");
?>

