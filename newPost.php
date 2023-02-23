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
        <h2 class="col-sm-6 offset-2 mb-4">Add new post</h2>
    <form action="./storeToBase.php" method="POST"> 
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" class="form-control" id="staticEmail" placeholder="email@example.com">
   
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password"  name="password"   class="form-control" id="inputPassword" placeholder="Password">
      
    </div>
   
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-6">
      <input type="text" name="title" class="form-control" placeholder="Title" >
   
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-6">
    <textarea type='text' class="form-control" name="description" rows="5" cols="70"  placeholder='Description'></textarea>
   
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Image adress</label>
    <div class="col-sm-6">
      <input type="text" name="image" class="form-control"  placeholder="https://...">
   
    </div>
  </div>
<button type="submit" class="btn btn-primary col-sm-2 offset-6">Submit</button>
</form>
</div>

</body>
</html>