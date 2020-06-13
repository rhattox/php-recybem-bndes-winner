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
	$empresaCnpj = filter_input(INPUT_POST, 'empresaCnpj', FILTER_SANITIZE_STRING);
	$empresaSenha = filter_input(INPUT_POST, 'empresaSenha', FILTER_SANITIZE_STRING); 

	if ((!empty($empresaCnpj)) AND (!empty($empresaSenha))) {
		$result_usuario = "SELECT empresaCnpj, empresaEmail, empresa_date FROM empresa WHERE empresaCnpj = '$empresaCnpj' LIMIT 1";       
        $resultado_usuario = mysqli_query($conn, $result_usuario);
		if ($resultado_usuario) {
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
                $_SESSION['empresa_date'] = $row_usuario['empresa_date'];
                $email_teste = $row_usuario['empresa_date'];
				header("Location: ../postLogin/empresaIndex.html");
		}
	} else {
		$_SESSION['msg'] = "Login e senha incorreto!";
	}
} else {
	$_SESSION['msg'] = "Página não encontrada";
}