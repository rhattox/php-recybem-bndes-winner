<?php
session_start();


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "bndes";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);



$usuarioCpf = filter_input(INPUT_POST, 'usuarioCpf', FILTER_SANITIZE_STRING);
$comunidadeNome = filter_input(INPUT_POST, 'comunidadeNome', FILTER_SANITIZE_STRING);
$reciclavelNome = filter_input(INPUT_POST, 'reciclavelNome', FILTER_SANITIZE_STRING);
$valorDoacao = filter_input(INPUT_POST, 'valorDoacao', FILTER_SANITIZE_STRING);

if (!empty($usuarioCpf)) {
    $result_pesquisa_cpf = "SELECT usuarioId FROM usuario WHERE usuarioCpf = '$usuarioCpf' LIMIT 1";
    $resultado_pesquisa_cpf = mysqli_query($conn, $result_pesquisa_cpf);
    if ($resultado_pesquisa_cpf) {
        $row_pesquisa_cpf = mysqli_fetch_assoc($resultado_pesquisa_cpf);
        $_SESSION['usuarioId'] = $row_pesquisa_cpf['usuarioId'];
        echo " $_SESSION[usuarioId]";
    }
}


if (!empty($comunidadeNome)) {
    $result_pesquisa_comunidade = "SELECT comunidadeId FROM comunidades WHERE comunidadeNome = '$comunidadeNome' LIMIT 1";
    $resultado_pesquisa_comunidade = mysqli_query($conn, $result_pesquisa_comunidade);
    if ($resultado_pesquisa_comunidade) {
        $row_pesquisa_comunidade = mysqli_fetch_assoc($resultado_pesquisa_comunidade);
        $_SESSION['comunidadeId'] = $row_pesquisa_comunidade['comunidadeId'];
        echo " $_SESSION[comunidadeId]";
    }
}

if (!empty($reciclavelNome)) {
    $result_pesquisa_reciclavel = "SELECT reciclavelId FROM reciclaveis WHERE reciclavelNome = '$reciclavelNome' LIMIT 1";
    $resultado_pesquisa_reciclavel = mysqli_query($conn, $result_pesquisa_reciclavel);
    if ($resultado_pesquisa_reciclavel) {
        $row_pesquisa_reciclavel = mysqli_fetch_assoc($resultado_pesquisa_reciclavel);
        $_SESSION['reciclavelId'] = $row_pesquisa_reciclavel['reciclavelId'];
        echo "papel: $_SESSION[reciclavelId]";
    }
}

$sql = "INSERT INTO doacao(usuario_id,empresa_id,comunidade_id,reciclavel_id,valorDoacao)
              VALUES ('$_SESSION[usuarioId]','$_SESSION[empresaId]','$_SESSION[comunidadeId]','$_SESSION[reciclavelId]','$valorDoacao')";


if ($conn->query($sql) === TRUE) {
    header("Location: ../empresaIndex.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
