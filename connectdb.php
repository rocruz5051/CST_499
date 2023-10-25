<?php

class connectdb {
  
  function executeSelectQuery($con,$sql){
    
    $result = mysqli_query($con, $sql); 
    echo "<br>";
    echo "<table border='1'>";
    while ($row = mysqli_fetch_assoc($result)) { 
        echo "<tr>";
        foreach ($row as $field => $value) { 
            echo "<td>" . $value . "</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
    
  }
  
  function executeQuery($con,$sql){
    
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();

    
  }
  
  
}


?>