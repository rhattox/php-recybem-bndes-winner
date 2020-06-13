<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully<br>";

// sql to create table
$sql = "CREATE TABLE teste (
    
    email VARCHAR(30) NOT NULL
   
    )";
    if ($conn->query($sql) === TRUE) {
      echo "Table Usuario created successfully";
    } else {
      echo "<br>Error creating table: " . $conn->error;
    }
CloseCon($conn);
?>