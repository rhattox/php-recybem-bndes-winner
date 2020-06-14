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
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
    <!--Script-->
    <script src="dbUsuarioIndex/scriptTabelaUsuario.js" type="text/javascript"></script>
    <script src="dbUsuarioIndex/scriptTabelaComunidades.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body onload="javascript:carregarItensComunidade();carregarItensUsuario()">

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
            <?php
            echo "<p> $_SESSION[soma] KILOS </p>";
            ?>

            <form method="post" action="dbUsuarioIndex/validacaoPontos.php">
                <input class="button btn_green" type="submit" name="btnLogin" value="Atualizar Saldo" />

            </form>
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
        <div >
            <div class="ranking">
                <div class="grupoEsquerda">
                    <h3 class="esquerda">Ranking dos TOP usuários:</h3>
                    <table id="minhaTabelaUsuario">
                        <caption></caption>
                        <thead>
                            <th>Usuario</th>
                            <th>Kg Totais</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div onload="carregarItensComunidades()">
            <div class="ranking">
                <div class="grupoEsquerda">
                    <h3 class="esquerda">Ranking das TOP comunidades:</h3>
                    <table id="minhaTabelaComunidade">
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
        </div>
    </main>
</body>

</html>