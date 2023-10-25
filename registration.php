<?php
require 'connectdb.php';
   
$connect1 = new connectdb();
  
require 'database.php';

  
 
  $email = $_POST['email'];
  $password = $_POST['pw'];
  $first_name =  $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $phone =  $_POST['phone'];
  
  
  $sql = "INSERT INTO tbluser (Email, Password, Firstname, Lastname, Address, Phone)
VALUES ('$email', '$password','$first_name','$last_name','$address','$phone')";

$connect1->executeQuery($con,$sql);

header("Location: index.php?signup=success");
?>