<?php
include "./getFromBase.php";
$data=  getDataFromBase();
$num= $_GET['id'];
  
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
        <h2 class="col-sm-6 offset-2 mb-4">Edit post</h2>






  <form action ="editPost.php?id=<?php echo $num?>" method="POST">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" class="form-control" id="staticEmail" value='<?php echo   $data[$_GET['id']-1]["email"] ?>'>
   
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password"  name="password"   class="form-control" id="inputPassword" value='<?php echo   $data[$_GET['id']-1]["password"] ?>'>
      
    </div>
   
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-6">
      <input type="text" name="title" class="form-control" value='<?php echo   $data[$_GET['id']-1]["title"] ?>' >
   
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">
    <textarea type='text' class="form-control" name="description" rows="5" cols="70"  ><?php echo   $data[$_GET['id']-1]["description"] ?></textarea>
   
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Image adress</label>
    <div class="col-sm-6">
      <input type="text" name="image" class="form-control"  value='https://dcylhead09urw.cloudfront.net/course-image%2F1586049083.jpg'>
   
    </div>
  </div>
  <div class="row mt-3">
                <button class="offset-6 col-2 btn btn-primary">Dodaj</button>
            </div>
 

   
    
    </form>

    </div>

</body>
</html>
  
   

   




  
   
  






  
   
  



