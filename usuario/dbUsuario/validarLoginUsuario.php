<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if ($btnLogin) {
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING); 
	if ((!empty($cpf)) AND (!empty($senha))) {
		$result_usuario = "SELECT cpf,email,reg_date FROM usuario WHERE cpf = '$cpf' LIMIT 1";       
        $resultado_usuario = mysqli_query($conn, $result_usuario);
		if ($resultado_usuario) {
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			
                $_SESSION['reg_date'] = $row_usuario['reg_date'];
                $email_teste = $row_usuario['reg_date'];

                echo "Hora de registro no sistema: $email_teste ";
			
		}
	} else {
		$_SESSION['msg'] = "Login e senha incorreto!";
	}
} else {
	$_SESSION['msg'] = "Página não encontrada";
}