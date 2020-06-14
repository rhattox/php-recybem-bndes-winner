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
if (!empty($_SESSION['usuarioId'])) {
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="dbUsuarioIndex/scriptTabelas.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/dea90e7a9c.js" crossorigin="anonymous"></script>
    <title>Painel</title>
    <style>
        .back:hover{
                color:hsl(98, 64%, 65%);
        }
    </style>
</head>
<body onload="carregarTodos()">
<!--PARTE DA ESQUERDA DA PÁGINA-->
    <header class="info">
        <a href="../../index.html"><span class="back"><i class="fas fa-arrow-circle-left"></i></span></a>
        <img src="../../Imagens/agua_home.jpg">
        <h1 class="welcome">Bem Vindo!</h1>
        <p><?php echo "$_SESSION[usuarioNome] ";?></p>
        
        <h2>CPF do usuário:</h2>
        <div class="box">
        <p><?php echo "$_SESSION[usuarioCpf] ";?></p>
        </div>
        
        <h2>Email:</h2>
        <div class="box">
        <p><?php echo "$_SESSION[usuarioEmail] ";?></p>
        </div>
        
         <h2>Coloaborador desde:</h2>
        <div class="box">
        <p><?php echo "$_SESSION[usuario_date] ";?></p>
        </div>
        
        <p class="endP">
         *O BNDES está com você nessa iniciativa! O valor correspondete de cada coleta será replicado 3x pelo Banco. 
        </p>
    </header>    
    <!--FIM DA PARTE DA ESQUERDA DA PÁGINA-->
    
    <!--PARTE DA DIREITA DA PÁGINA-->
    <main class="asideMain">      
        
        <h3>Ranking de Comunidade:</h3>
        <div class="tabelas">
            <table class="rankingColaboradores" id="minhaTabelaComunidade">
                <caption></caption>
                <thead>
                    <th>Nome</th>
                    <th>Total</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
            <h3>Ranking de Usuario:</h3>
        <div class="tabelas">
            
            <table class="rankingColaboradores" id="minhaTabelaUsuario">
                <thead>
                    <th>Nome</th>
                    <th>Total</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!--<div class="rankingComunidades">
            <div class="grupoEsquerda">
                <h3 class="esquerda">Nome da comunidade:</h3>
                
            </div>
            <div class="grupoDireita">
                <h3 class="direita">Quantidade(peso) de material coletado:</h3>
            </div>
        </div>-->
    </main>
    <!--FIM DA PARTE DA DIREITA DA PÁGINA-->
</body>
</html>