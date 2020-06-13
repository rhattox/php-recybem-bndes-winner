<?php
session_start();





$ = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
$ = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
$ = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);
$ = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);


echo "E-mail: $email <br>";


$result_pesquisa =  "INSERT INTO usuarios (nome,email,usuario,senha) VALUES ('$nome','$email','$usuario','$senhaHash')";
$resultado_usuario = mysqli_query($conn, $result_pesquisa);
if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style= 'color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location: ../index.php#paralogin");
} else {
    $_SESSION['msg'] = "<p style= 'color:red;'>Usuário não foi cadastrado com sucesso!</p>";
    header("Location: ../index.php#paracadastro");
}