<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      
  </head>
  <body>
    
<?php require 'navbar.php';?>
    
        
    <div class="container">
      <h3>Please Login</h3>
    <form action ="session.php" method="post">
    <div  class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name= "userid" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name= "pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" name="login-submit" class="btn btn-primary">Login</button>
  </form>
    <br>
    <p>Not Registered? Cick here to <a href= "register.php">sign up</a></p>
    
    </div>
    
  </body>
</html>