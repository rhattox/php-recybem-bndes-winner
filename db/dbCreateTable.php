<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully";
// sql to create table
$sql = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
CloseCon($conn);
?>