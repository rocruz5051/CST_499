<?php
    session_start();
    require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<nav class="navbar navbar-default">
        <div class= "container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Student Portal</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class= "glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="register.php"><span class= "glyphicon glyphicon-ok"</span> Register</a></li>
                    <li><a href="contact.php"><span class= "glyphicon glyphicon-question-sign"</span> Contact</a></li>
                    
                    <?php
      
                        if (isset($_SESSION['id'])){
                    echo'<li><a href="courseselection.php"><span class= "glyphicon glyphicon-list-alt"</span> Enroll</a></li>';
                        }
                    
                    ?>
                    
                    <?php
                    if (isset($_SESSION['id'])){
                        $currentUser = $_SESSION['id'];
                        $sqlUser = "SELECT `Admin` FROM `tbluser` WHERE `id`=$currentUser";
                        $results = mysqli_query ($con,$sqlUser);
                        
                        
                        while ($row = mysqli_fetch_assoc($results))
                            {
                        
                                if ($row['Admin'] == 1){
                                            
                                    echo' <li><a href="admin.php"><span class= "glyphicon glyphicon-star"</span> Admin</a></li>';
                                }   
                                
                            } }   
                        ?>
                    
                        
                    
                </ul>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <?php
      
                        if (isset($_SESSION['id'])){
                            echo'<li><a href="profile.php"><span class= "glyphicon glyphicon-user"</span> Profile</a></li>';
                          
                          
                        }
                        else{
                          echo'<li><a href="login.php"><span class= "glyphicon glyphicon-user"</span> Login</a></li>';
                        }
                        ?>
                </ul>
            </div>
        </div>
    </nav>

</html>