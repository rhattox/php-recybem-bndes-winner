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
    <script src="dbEmpresaIndex/scriptTabelaUsuario.js" type="text/javascript"></script>
    <script src="dbEmpresaIndex/scriptTabelaComunidades.js" type="text/javascript"></script>
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
        echo "<p> $_SESSION[empresaNome] </p>";
        echo "<p> $_SESSION[empresaId] </p>";
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

        <body onload="carregarItensUsuario()">
            <div class="ranking">
                <div class="grupoEsquerda">
                    <h3 class="esquerda">Ranking dos TOP usuários:</h3>
                    <table id="minhaTabela">
                        <caption></caption>
                        <thead>
                            <th>Id do usuario</th>
                            <th>montante reciclado</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>

        <body onload="carregarItensComunidades()">
            <div class="ranking">
                <div class="grupoEsquerda">
                    <h3 class="esquerda">Ranking das TOP comunidades:</h3>
                    <table id="minhaTabela">
                        <caption></caption>
                        <thead>
                            <th>id da comunidade</th>
                            <th>montante reciclado</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </main>
</body>

</html>