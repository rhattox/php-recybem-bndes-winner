<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully";
// sql to create table
$sql_create = "CREATE TABLE empresaInsumos (
    insumosId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    insumosNome VARCHAR(255) NOT NULL
    )";
    if ($conn->query($sql_create) === TRUE) {
      echo "Table emrpesas created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    $sql_insert_plastico = "INSERT INTO empresaInsumos (insumosNome) 
    VALUES ('plastico')";

     if ($conn->query($sql_insert_plastico) === TRUE) {
        echo "Plastico successfully added";
      } else {
        echo "Error creating table: " . $conn->error;
      }

    $sql_insert_papel = "INSERT INTO empresaInsumos (insumosNome) 
    VALUES ('papel')";

    if ($conn->query($sql_insert_papel) === TRUE) {
        echo "Papel successfully added";
      } else {
        echo "Error creating table: " . $conn->error;
      }

    $sql_insert_metais = "INSERT INTO empresaInsumos (insumosNome) 
    VALUES ('metais')";

    if ($conn->query($sql_insert_metais) === TRUE) {
        echo "Metais successfully added";
      } else {
        echo "Error creating table: " . $conn->error;
      }

    $sql_insert_vidro = "INSERT INTO empresaInsumos (insumosNome) 
    VALUES ('vidro')";

    if ($conn->query($sql_insert_vidro) === TRUE) {
        echo "vidro successfully added";
      } else {
        echo "Error creating table: " . $conn->error;
      }
    
       

CloseCon($conn);
?>