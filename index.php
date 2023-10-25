<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New School</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <?php require 'navbar.php';?>
    
    
    
    <main role="main" class="container">
      <div class="mybody">
      <div class="status">
      <?php
      if (isset($_SESSION['id'])){
        echo '<p>You are logged in, click here to <a href= "Logout.php"> sign out </p>';
        
      }
      else{
        echo'<p>You are logged out, cick here to <a href= "Login.php"> sign in</p>';
      }
      ?>
      </div>
      <div class="jumbotron">
      <h1>Welcome to the CST499 School</h1>
      <p><a class="btn btn-primary btn-lg" href="contact.php" role="button">Learn more</a></p>
      </div>
        
      </div>

    </main>
   
  </body>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>