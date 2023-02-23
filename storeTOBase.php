<?php
include "./getFromBase.php";

function makeNewId($arr){
    $id = 0;
    if (!$arr){$id = 1;}
        foreach($arr as $currentItem){
    if ($currentItem['id'] > $id)
        $id = $currentItem['id'];
    }
    return $id + 1;
}



function addNewPost(){
   $data = getDataFromBase(); 
 $newArr = [ "id"=> makeNewId($data)  , "email"=> $_POST["email"], "password"=> $_POST["password"], "title"=> $_POST["title"], "description"=>$_POST["description"],"image"=> $_POST["image"]];

   $data? $data=$data:$data=[];
  array_push($data,$newArr);
  $newItem=  json_encode($data);
    file_put_contents("./dataBase.json",$newItem);
}

addNewPost();
header("location: ./posts.php");
?>