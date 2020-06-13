<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully";
// sql to create table
$sql = "CREATE TABLE empresa (
    cpf VARCHAR(11) NOT NULL
    )";
    if ($conn->query($sql) === TRUE) {
      echo "Table emrpesas created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
CloseCon($conn);
?>