<?php
session_start();

$servername = "db";
$username = "root";
$password = "example";
$dbname = "bndes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!empty($_SESSION['empresaId'])) {
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/mainEmpresa.css">
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <script src="dbEmpresaIndex/scriptTabelas.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/dea90e7a9c.js" crossorigin="anonymous"></script>
    <title>Painel</title>
    <style>
    
    
    </style>
</head>
<body onload="carregarTodos()">
    <header class="info">
        <a href="../../index.html"><span class="back"><i class="fas fa-arrow-circle-left"></i></span></a>
        
        <img src="../../Imagens/agua_home.jpg">
        <h1 class="welcome">Bem Vindo!</h1>
        <p><?php echo "$_SESSION[empresaNome] ";?></p>
        
        <h2>CNPJ da Empresa:</h2>
        <div class="box">
        <p><?php echo "$_SESSION[empresaCnpj] ";?></p>

        </div>
        <div class="formWrapper">
            <form method="post" action="dbEmpresaIndex/validarCadastroItem.php">
                <h1>Adicionar Peso</h1>
                <div class="labelWrapper">

                    <label for="usuarioCpf">CPF</label>
                    <input class="inputDefault" id="usuarioCpf" name="usuarioCpf" required="required" type="text" placeholder="Cpf do Colaborador" />
                </div>
                <div class="labelWrapper">
                    <label for="comunidadeNome">Comunidade: </label>
                    <input class="inputDefault" id="comunidadeNome" name="comunidadeNome" required="required" type="text" placeholder="Comunidade Alvo" />
                </div>
                <div class="labelWrapper">
                    <label for="reciclavelNome">Nome do Item: </label>
                    <input class="inputDefault" id="reciclavelNome" name="reciclavelNome" required="required" type="text" placeholder="Item a ser adicionado" />
                </div>
                <div class="labelWrapper">
                    <label for="valorDoacao">Peso: </label>
                    <input class="inputDefault" id="valorDoacao" name="valorDoacao" required="required" type="text" placeholder="Quantidade(Kg)" />
                </div>

                <input class="button btn_orange" type="submit" name="btnLogin" value="Adicionar" />
            </form>
        </div>
        
        
    </header>
    <main class="asideMain">
    <h3>Ranking de Comunidade:</h3>
        <div class="tabelas tabelas_orange">
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
        <div class="tabelas tabelas_orange">
            <table class="rankingColaboradores" id="minhaTabelaUsuario">
                <thead>
                    <th>Nome</th>
                    <th>Total</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>