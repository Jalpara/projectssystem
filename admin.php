<?php
require_once 'config.php';
// define variables and set to empty values
 $name = $description = $image = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $description = test_input($_POST["description"]);
  $image = $_POST["image"];

  $sql = "INSERT INTO project (pname,pdesc,pimg) VALUES ('$name', 
            '$description','$image')";
          
        if(mysqli_query($conn, $sql)){
          echo "<script> alert(\"Data Stored in database successfully\")</script>";
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>