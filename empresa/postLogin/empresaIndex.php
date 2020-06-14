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
if (!empty($_SESSION['empresaId'])) {
    echo "sucesso!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/mainEmpresa.css">
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <!--Script-->
    <script src="dbEmpresaIndex/scriptTabelaComunidades.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body onload="carregarTudo()">
    <header class="info">
        <img src="../../Imagens/agua_home.jpg">
        <h1 class="welcome">Bem-vindo!</h1>
        <!--AQUI NOME-->
        <?php
        echo "<p> $_SESSION[empresaNome] </p>";
        ?>
        <h2>CNPJ da Empresa:</h2>
        <div class="box">
            <!--AQUI CNPJ-->
            <?php
            echo "<p> $_SESSION[empresaCnpj] </p>";
            ?>
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

                <input class="button btn_Orange" type="submit" name="btnAdicionar" value="Adicionar" />
            </form>
        </div>


    </header>
    <main class="asideMain">

        <section>
            <h1>PortilloDesign Tutorial JSON + PHP</h1>
            <!--Área que mostrará carregando-->
            <h2></h2>
            <!--Tabela-->
            <table id="minhaTabelaComunidade">
                <caption>Cadastro de Jogos</caption>
                <thead>
                    <th>ID</th>
                    <th>Jogo</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </section>

        <section>
            <h1>PortilloDesign Tutorial JSON + PHP</h1>
            <!--Área que mostrará carregando-->
            <h2></h2>
            <!--Tabela-->
            <table id="minhaTabelaUsuario">
                <caption>Cadastro de Jogos</caption>
                <thead>
                    <th>ID</th>
                    <th>Jogo</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </section>


    </main>
</body>

</html>