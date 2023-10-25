<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      
  </head>
  <body>
    
<?php require 'navbar.php';
?>
   
    <div class="container">
      <h3>Register</h3>
    <form action="registration.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="pw" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="firstname" name="first_name"class="form-control" id="firstname" placeholder="Firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="lastname" name="last_name" class="form-control" id="lastname" placeholder="lastname">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="address"  name="address" class="form-control" id="address" placeholder="address">
    </div>
    <div class="form-group">
      <label for="phone">phone</label>
      <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone">
    </div>
  
    
    <button type="submit" value="submit" class="btn btn-primary">Register</button>
    </form>
    <br>
    </div>
  </body>
  
</html>