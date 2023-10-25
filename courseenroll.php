<?php
require 'connectdb.php';
   
$connect1 = new connectdb();
  
require 'database.php';

  
  
$currentUser =  $_POST['userid'];
$courseID = $_POST['course'];
$semesterID =  $_POST['activesemester'];



$sql = "INSERT INTO `tblschedule`(`userID`,`semesterID`,`course_name`) VALUES ($currentUser,$semesterID,'$courseID')";

$connect1->executeQuery($con,$sql);

header("Location: courseselection.php?register=success");
?>