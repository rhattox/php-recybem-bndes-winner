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

$sql0 = "INSERT INTO reciclaveis (reciclavelNome)
VALUES ('papel');";

if ($conn->multi_query($sql0) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql1 = "INSERT INTO reciclaveis (reciclavelNome)
VALUES ('vidro');";

if ($conn->multi_query($sql1) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql2 = "INSERT INTO reciclaveis (reciclavelNome)
VALUES ('plastico');";

if ($conn->multi_query($sql2) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql3 = "INSERT INTO reciclaveis (reciclavelNome)
VALUES ('metais');";

if ($conn->multi_query($sql3) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
