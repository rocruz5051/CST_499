<?php
require 'navbar.php';
require 'database.php';

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
<?php
$currentUser = $_SESSION['id'];
$sqlUser = "SELECT * FROM `tbluser` WHERE `id`=$currentUser";
$results = mysqli_query ($con,$sqlUser);

if ($results){
    if(mysqli_num_rows($results)>0){
        while( $row = mysqli_fetch_array($results)){
            
            ?>
            
            <div class="container">
            <form action ="logout.php" method="post">
            <button style="float: right;" type="submit" name="logout-submit" class="btn btn-default navbar-btn"><span class= "glyphicon glyphicon-user"</span> Logout</button>
            </form>
            </div>
            <div class="container">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder = "<?php echo $row['Email'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type = "text" name="pw" class="form-control" id="exampleInputPassword1" value = "<?php echo $row['Password'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="firstname" name="first_name"class="form-control" id="firstname" value = "<?php echo $row['Firstname'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="lastname" name="last_name" class="form-control" id="lastname" value = "<?php echo $row['Lastname'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="address"  name="address" class="form-control" id="address" value = "<?php echo $row['Address'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="phone">phone</label>
              <input type="phone" name="phone" class="form-control" id="phone" value = "<?php echo $row['Phone'];?>" readonly>
            </div>
           
            <?php
            
        }
    }
}
    

?>
    
    
    
    
    
  </body>