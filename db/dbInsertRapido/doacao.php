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




$sql1 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('1','4','1','2','10')";

if ($conn->multi_query($sql1) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql2 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('2','3','2','4','20')";

if ($conn->multi_query($sql2) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql3 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('3','2','3','3','15')";

if ($conn->multi_query($sql3) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql4 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('4','1','4','1','30')";

if ($conn->multi_query($sql4) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql5 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('3','1','5','2','35')";

if ($conn->multi_query($sql5) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql6 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('2','3','6','4','20')";

if ($conn->multi_query($sql6) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql7 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('1','4','7','2','5')";

if ($conn->multi_query($sql7) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql8 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('4','2','8','4','40')";

if ($conn->multi_query($sql8) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql9 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('1','1','9','2','50')";

if ($conn->multi_query($sql9) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql10 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('3','4','10','3','20')";

if ($conn->multi_query($sql10) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql11 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('2','3','8','2','25')";

if ($conn->multi_query($sql11) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql12 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('1','1','7','2','35')";

if ($conn->multi_query($sql12) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql13 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('4','2','6','4','2')";

if ($conn->multi_query($sql13) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql14 = "INSERT INTO doacao (usuario_id, empresa_id, comunidade_id, reciclavel_id, valorDoacao)
 VALUES ('2','1','5','1','15')";

if ($conn->multi_query($sql14) === TRUE) {
  echo "<br><br>created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

