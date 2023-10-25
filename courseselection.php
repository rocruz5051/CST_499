
<?php
require 'database.php';

$selectSemesters = "SELECT * FROM `tblsemester`";
$semesterResult = mysqli_query ($con,$selectSemesters);

$selectCourse = "SELECT * FROM `tblcourse` WHERE `semesterID`=14";
$courseResult = mysqli_query ($con,$selectCourse);
;


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
<?php
if (isset($_SESSION['id'])){
  $currentUser = $_SESSION['id'];
  
  $selectCourse2 = "SELECT * FROM `tblschedule` WHERE `userID` =$currentUser";
  $courseResult2 = mysqli_query ($con,$selectCourse2);
  
  $selectCourse3 = "SELECT * FROM `tblschedule` WHERE `userID` =$currentUser";
  $courseResult3 = mysqli_query ($con,$selectCourse3);
  }
?>

<div class="container">
    <form  action="courseenroll.php" method="post">
     <div class="form-group">
      <input type="hidden" name="userid" class="form-control" id="userid" value= "<?php echo $currentUser;?>" placeholder = "<?php echo $currentUser;?>" readonly>
     <h3>Select Semester</h3>
     </div>
     <div class="form-group">
      <select name ="activesemester">
        <?php while($row1 = mysqli_fetch_array($semesterResult)):; ?>
        <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
        
        <?php
        
        endwhile;?>
      </select>
    
    </div>
     <h3>Register for Course</h3>
    <div class="form-group">
      
      <select name ="course">
       
        <?php
        
        while($row1 = mysqli_fetch_array($courseResult)):; ?>
        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
        
        
        <?php endwhile;?>
        
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Enroll</button>
    
    
    </form>
    
    </div>

<div class="container">
      <h3>Drop Course</h3>
    <form class="form-inline" action="courseremove.php" method="post">
    
    <div class="form-group">
      <select name ="removecourse">
        <?php while($row1 = mysqli_fetch_array($courseResult2)):; ?>
        <option value="<?php echo $row1[2];?>"><?php echo $row1[2];?></option>
        <?php endwhile;?>
      </select><br><br>
       <button type="submit" class="btn btn-primary">Drop Class</button>
    </div>
    
     
 </form>
    
    </div>
<br>
<div class="container">
 
 <h3>Student Schedule</h3>

<div class="form-group">
      
      
       
        <?php
        
        while($row1 = mysqli_fetch_array($courseResult3)):; ?>
        <input type="schedule" name="schedule" class="form-control" id="userid" value= "<?php echo $row1[2];?>" placeholder = "<?php echo $row1[2];?>" readonly>
        
        
        <?php endwhile;?>
        
      
    </div>
</div>

  </body>
</html>