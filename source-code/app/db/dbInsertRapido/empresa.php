<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bndes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully";

$sql1 = "INSERT INTO empresa (empresaCnpj, empresaNome, empresaCEP, empresaEmail, empresaSenha) 
VALUES ('123456789','Rio Recicla Mais','21050-030','rioreciclamais@yahoo.com','123')";
if ($conn->multi_query($sql1) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql2 = "INSERT INTO empresa (empresaCnpj, empresaNome, empresaCEP, empresaEmail, empresaSenha) 
VALUES ('234567891','COOPERMIZO','23095-000','coopermizo@ig.com.br','123')";
if ($conn->multi_query($sql2) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql3 = "INSERT INTO empresa (empresaCnpj, empresaNome, empresaCEP, empresaEmail, empresaSenha) 
VALUES ('345678912','A.R. Brandão Reciclagem','22780-070','brandaoreciclagem@email.com','123')";
if ($conn->multi_query($sql3) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql4 = "INSERT INTO empresa (empresaCnpj, empresaNome, empresaCEP, empresaEmail, empresaSenha) 
VALUES ('456789123','Centro de Reciclagem Rio','21530-220','sac@crrreciclagem.com.br','123')";
if ($conn->multi_query($sql4) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
