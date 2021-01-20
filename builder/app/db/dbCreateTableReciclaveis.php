<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully";
// sql to create table

    $sql = "INSERT INTO reciclaveis (reciclavelNome)
    VALUES ('papel');";

    if ($conn->multi_query($sql) === TRUE) {
    echo "Table comunidade created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

CloseCon($conn);
?>