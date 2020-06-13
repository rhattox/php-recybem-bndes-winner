<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Index</title>
</head>
<body>
<form method="post" action="dbUsuario/validarLoginUsuario.php">
        
      <h1>Login</h1>

        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br>

        <label for="senha">Senha:</label><br>
        <input type="text" id="senha" name="senha" require="required"><br>

        <p>
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
          <label for="manterlogado">Manter-me logado</label>
        </p>

        <p>
          <input type="submit" name="btnLogin" value="Logar" />
        </p>

        <p class="link">
          Ainda não tem conta?
          <a href="#paracadastro">Cadastre-se</a>
        </p>
      </form>
</body>
</html>