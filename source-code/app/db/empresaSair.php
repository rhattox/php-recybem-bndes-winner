<?php
session_start();
unset($_SESSION['usuarioId'], $_SESSION['usuarioNome'], $_SESSION['usuarioEmail']);

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: index.html");