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
if (!empty($_SESSION['usuarioId'])) { 
 echo "sucesso!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <title>Document</title>
</head>
<body>

    <?php
    if (isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
        ?>
    <header class="info">
        
        <img src="../../Imagens/agua_home.jpg">
        <h1 class="welcome">Bem Vindo!</h1>
       
           <!--AQUI NOME-->
           <?php
            echo "<p> $_SESSION[usuarioNome] </p>";
            ?>
    
        <h2>CPF do usuário:</h2>
        <div class="box">
            <!--AQUI CPF-->
            <?php
            echo "<p> $_SESSION[usuarioCpf] </p>";
            ?>
        </div>
        
        <h2>Peso total acumulados:</h2>
        <div class="box">
            <!--AQUI PESO-->
        </div>
        <h2>Você contribuiu com as comunidades: </h2>
        <div class="listaComunidades">
        <table class="table">
            <tbody>
                <tr>
                    <td>Vidigal</td>
                </tr>
                <tr>
                    <td>Jacarézinho</td>
                </tr>
                <tr>
                    <td>Cidade de Deus</td>
                </tr>
                <tr>
                    <td>Centenário</td>
                </tr>
                
            </tbody>
        </table>
        </div>
        
    </header>
    <main class="asideMain">        
        <h2>Ranking de Usuários:</h2>
            <table id="rankingColaboradores" class="rankingColaboradores">
            <thead>
                <tr>
                    <th>Nome Usuário</th>
                    <th>Quantidade de pontos acumulados: </th>
                </tr>
            </thead>
                <tbody>
                 <tr>
                    <td>William Lima Tavares</td>   
                    <td>10.000</td>   
                 </tr>
                </tbody>
            </table>
        <!--<div class="rankingComunidades">
            <div class="grupoEsquerda">
                <h3 class="esquerda">Nome da comunidade:</h3>
                
            </div>
            <div class="grupoDireita">
                <h3 class="direita">Quantidade(peso) de material coletado:</h3>
            </div>
        </div>-->
    </main>
</body>
</html>