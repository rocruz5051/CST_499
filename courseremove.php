<?php
require 'connectdb.php';
   
$connect1 = new connectdb();
  
require 'database.php';

  
  

$courseID = $_POST['removecourse'];



$sql = "DELETE FROM `tblschedule` WHERE `course_name`= '$courseID'";

$connect1->executeQuery($con,$sql);

header("Location: courseselection.php?unregister=success");
?>