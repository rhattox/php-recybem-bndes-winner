<?php
include 'dbConfig.php';
$conn = OpenCon();
echo "Connected Successfully";
//Create connection$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$sql = "INSERT INTO user(firstName,cpf)
VALUES ('$firstName','$cpf')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>