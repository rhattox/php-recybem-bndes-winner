<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully<br>";

// sql to create table
$sql = "CREATE TABLE usuario (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    cpf VARCHAR(99) NOT NULL,
    cep VARCHAR(99) NOT NULL,
    email VARCHAR(99) NOT NULL,
    senha VARCHAR(99) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
      echo "Table Usuario created successfully";
    } else {
      echo "<br>Error creating table: " . $conn->error;
    }
CloseCon($conn);
?>