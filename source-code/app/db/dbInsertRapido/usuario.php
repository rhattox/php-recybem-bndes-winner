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

$sql1 = "INSERT INTO usuario (usuarioNome, usuarioSobre, usuarioCpf,usuarioEmail, usuarioSenha) 
VALUES ('Joao','Silva','123456789','joao123@yahoo.com','123')";
if ($conn->multi_query($sql1) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql2 = "INSERT INTO usuario (usuarioNome, usuarioSobre, usuarioCpf,usuarioEmail, usuarioSenha) 
VALUES ('Caroline','Antunes' ,'234567891','carol123@yahoo.com','123')";
if ($conn->multi_query($sql2) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql3 ="INSERT INTO usuario (usuarioNome, usuarioSobre, usuarioCpf,usuarioEmail, usuarioSenha) 
VALUES ('Zina','Silvestre','345678912','zinaronaldo@yahoo.com','123')";
if ($conn->multi_query($sql3) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql4 = "INSERT INTO usuario (usuarioNome, usuarioSobre, usuarioCpf,usuarioEmail, usuarioSenha) 
VALUES ('Marina','Figueira','456789123','marina123@yahoo.com','123')";
if ($conn->multi_query($sql4) === TRUE) {
  echo "<br><br>empresa created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
