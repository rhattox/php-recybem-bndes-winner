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
		$result_empresa = "SELECT empresaCnpj, empresaId, empresaNome, empresaEmail, empresa_date FROM empresa WHERE empresaCnpj = '$empresaCnpj' LIMIT 1";       
        $resultado_empresa = mysqli_query($conn, $result_empresa);
		if ($resultado_empresa) {
			$row_empresa = mysqli_fetch_assoc($resultado_empresa);
			$_SESSION['empresaId'] = $row_empresa['empresaId'];
			$_SESSION['empresaNome'] = $row_empresa['empresaNome'];
			$_SESSION['empresaEmail'] = $row_empresa['empresaEmail'];
			$_SESSION['empresaCnpj'] = $row_empresa['empresaCnpj'];
				header("Location: ../postLogin/empresaIndex.php");
		}
	} else {
		$_SESSION['msg'] = "Login e senha incorreto!";
	}
} else {
	$_SESSION['msg'] = "Página não encontrada";
}