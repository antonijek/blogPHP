<?php
include "./getFromBase.php";


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   

<div class="container">
  <h2 class="offset-4 mt-4 mb-4">Programski jezici</h2>
  <a href="./newPost.php" class="btn btn-success mt-4 mb-4 ">Add post</a>
  
 <div class="row ">

 <?php 
  $data=  getDataFromBase();
 
 foreach ( $data as $user) : ?>
     <div class="col-sm-4 mt-4 ">
         <div class="card-columns-fluid">
             <div class="card  bg-light" style = "width: 22rem; " >
             <img class="card-img-top" src="<?php echo $user['image']?>" alt="Card image cap">

                 <div class="card-body">
                     <h5 class="card-title"><b><?php echo $user["title"] ?></b></h5>
                     <p class="card-title"><?php echo $user["description"] ?></p>
                     <a href="#" class="btn btn-primary">More</a>
                     <a href="./language.php?id=<?php echo $user['id']?>" class="btn btn-warning">Edit</a>
                     <a href="./deletePost.php?id=<?php echo $user['id']?>" class="btn btn-danger">Delete</a>
                    
                     
                 </div>
             </div>
         </div>
     </div>
 <?php endforeach; ?>
 </div>
 
 
</div>



 
 

  
  
</body>
</html>