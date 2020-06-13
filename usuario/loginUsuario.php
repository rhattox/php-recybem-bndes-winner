<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/signin.css">
  <title>Login</title>
</head>
<body>
  <div class="main">
    <div class="formWrapper">
      <form method="post" action="dbUsuario/validarLoginUsuario.php">
        <h1>Login</h1>
        <div class="labelWrapper">
            <label for="usuarioCpf">Seu usuário</label>
            <input class="inputDefault" id="usuarioCpf" name="usuarioCpf" required="required" type="text" placeholder="" />
        </div>
      <div class="labelWrapper">
        <label for="usuarioSenha">Sua senha</label>
          <input class="inputDefault" id="usuarioSenha" name="usuarioSenha" required="required" type="password" placeholder="" />
      </div>
        <label class="manterlogado" for="manterlogado">
          <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
         <span>Manter-me logado</span></label>
        
        <input class="button btn_green" type="submit" name="btnLogin" value="Logar" />

        <p class="link">
          Ainda não tem conta?
          <a href="cadastroUsuario.html">Cadastre-se</a>
        </p>
      </form>
    </div>
  </div>
</body>


</html>