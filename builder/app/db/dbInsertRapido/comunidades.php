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



$sql1 = "INSERT INTO comunidades (comunidadeNome)
 VALUES ('Acari'), ('Cidade de Deus'),
  ('Complexo do Alemao'), ('Jacarezinho'), 
  ('Manguinhos'), ('Mangueira'), ('Mare'), 
  ('Parada de Lucas'), ('Rocinha'), ('Santa Marta')";

if ($conn->multi_query($sql1) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
