<?php

session_start();

 $dbhost = "db";
 $dbuser = "root";
 $dbpass = "example";
 $db = "bndes";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


$empresaNome = filter_input(INPUT_POST, 'empresaNome', FILTER_SANITIZE_STRING);
$empresaCnpj = filter_input(INPUT_POST, 'empresaCnpj', FILTER_SANITIZE_STRING);
$empresaEmail = filter_input(INPUT_POST, 'empresaEmail', FILTER_SANITIZE_STRING);
$empresaSenha = filter_input(INPUT_POST, 'empresaSenha', FILTER_SANITIZE_STRING);
$empresaCep = filter_input(INPUT_POST, 'empresaCep', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO empresa(empresaNome,empresaCnpj,empresaEmail,empresaSenha,empresaCep)
                     VALUES ('$empresaNome','$empresaCnpj','$empresaEmail','$empresaSenha', '$empresaCep')";


if ($conn->query($sql) === TRUE) {
  header("Location: ../loginAceitoEmpresa.html");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>