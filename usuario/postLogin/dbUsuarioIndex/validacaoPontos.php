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
    $result_soma = "SELECT usuarioId, sum(valorDoacao) as soma from usuario, doacao where usuario.usuarioId = doacao.usuario_id";
    $resultado_soma = mysqli_query($conn, $result_soma);
    if ($resultado_soma) {
        $row_soma = mysqli_fetch_assoc($resultado_soma);
        $_SESSION['soma'] = $row_soma['soma'];
        echo " $_SESSION[soma]";
        header("Location: ../usuarioIndex.php");
    }
?>
