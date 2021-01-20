<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully";
// sql to create table

    $sql = "INSERT INTO comunidades (comunidadeNome)
    VALUES ('Rocinha');";

    if ($conn->multi_query($sql) === TRUE) {
    echo "Table comunidade created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

CloseCon($conn);
?>