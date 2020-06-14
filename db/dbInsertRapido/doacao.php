<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully";




$sql1 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('7','11','2','2','1')";

if ($conn->multi_query($sql1) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql2 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('8','11','2','4','2')";

if ($conn->multi_query($sql2) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql3 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('9','11','3','5','2')";

if ($conn->multi_query($sql3) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql4 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('10','11','4','5','3')";

if ($conn->multi_query($sql4) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql5 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('7','11','2','2','4')";

if ($conn->multi_query($sql5) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql6 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('8','11','3','4','2')";

if ($conn->multi_query($sql6) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql7 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('9','11','4','2','3')";

if ($conn->multi_query($sql7) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql8 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('10','12','5','4','4')";

if ($conn->multi_query($sql8) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql9 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('10','12','7','2','5')";

if ($conn->multi_query($sql9) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql10 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('9','13','5','5','2')";

if ($conn->multi_query($sql10) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql11 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('8','14','8','6','2')";

if ($conn->multi_query($sql11) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql12 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('7','11','2','2','3')";

if ($conn->multi_query($sql12) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql13 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('10','13','8','4','2')";

if ($conn->multi_query($sql13) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql14 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('10','14','5','5','1')";

if ($conn->multi_query($sql14) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

