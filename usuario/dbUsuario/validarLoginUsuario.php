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
echo "$btnLogin";
if ($btnLogin) {
	$usuarioCpf = filter_input(INPUT_POST, 'usuarioCpf', FILTER_SANITIZE_STRING);
	$usuarioSenha = filter_input(INPUT_POST, 'usuarioSenha', FILTER_SANITIZE_STRING); 

	if ((!empty($usuarioCpf)) AND (!empty($usuarioSenha))) {
		$result_usuario = "SELECT usuarioCpf, usuarioEmail, usuario_date FROM usuario WHERE usuarioCpf = '$usuarioCpf' LIMIT 1";       
        $resultado_usuario = mysqli_query($conn, $result_usuario);
		if ($resultado_usuario) {
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
                $_SESSION['usuario_date'] = $row_usuario['usuario_date'];
                $email_teste = $row_usuario['usuario_date'];
				header("Location: ../postLogin/usuarioIndex.html");
		}
	} else {
		$_SESSION['msg'] = "Login e senha incorreto!";
	}
} else {
	$_SESSION['msg'] = "Página não encontrada";
}