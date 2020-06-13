<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="formWrapper">
            <p>Página de login da empresa</p>
            <form method="post" action="../empresa/dbEmpresa/validarLoginEmpresa.php">
                <h1>Login</h1>
                <div class="labelWrapper">
                    <label for="empresaCnpj">Seu usuário</label>
                    <input class="inputDefault" id="empresaCnpj" name="empresaCnpj" required="required" type="text"
                        placeholder="" />
                </div>

                <div class="labelWrapper">
                    <label for="empresaSenha">Sua senha</label>
                    <input class="inputDefault" id="empresaSenha" name="empresaSenha" required="required"
                        type="password" placeholder="" />
                </div>

                <label for="manterlogado">
                    <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
                    <span>Manter-me logado</span></label>
                <input class="button btn_orange" type="submit" name="btnLogin" value="Logar" />
                <p class="link">
                    Ainda não tem conta?
                    <a style="color: #F29164" href="cadastroEmpresa.html">Cadastre-se</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>