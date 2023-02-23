<?php
include "./getFromBase.php";






$Err="";
$data = getDataFromBase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach($data as $obj){
if ($_POST["password"]===$obj["password"] && $_POST["email"]===$obj["email"]) {
    header("location: ./posts.php");
  } else {
    $Err = "Email or password is not correct!";
   }
}
  }

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
        <h2 class="col-sm-6 offset-2 mb-4">Log in</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"> 
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
      <span style="color:red">* <?php echo $Err;?></span>
    </div>
   
  </div>
  <button type="submit" class="btn btn-primary col-sm-2 offset-6">Submit</button>
</form>
</div>





  
  
</body>
</html>