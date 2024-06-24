<?php
require 'conexao.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <title>Tela de login</title>
</head>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <img src="img/sh3.png" alt="SH3">
            </li>
            <li><a class="btn-sair" href="index.php" class="nav-link active">Sair</a></li>
            </li>
            <li><a class="btn-home" href="index.php" class="nav-link active">Início</a></li>
        </ul>
    </div>
</nav>

<body>
    <div class="tela-login">
        <div class="texto-login">
            <h1 class="titulo-login">Login</h1>
        </div>
        <form action="logar.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit-login_2" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>