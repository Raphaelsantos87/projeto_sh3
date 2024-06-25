<?php
require 'conexao.php';
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<head>
    <title>Cadastramento</title>
    <meta charset="utf-8">

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img src="img/sh3.png" alt="SH3">
                </li>
                </li>
                <li><a class="btn-login" href="login.php" class="nav-link active">Login</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <h3 class="titulo-pagina"> Sistema de Cadastro de Atendimento</h3>
    </div>
    <div class="tela-login_2">
        <div class="texto-adm">
            <h1 class="titulo-adm">Acesso Administrativo</h1>
        </div>
        <form action="logar_2.php" method="POST">
            <input class="adm-login" type="text" name="nome2" placeholder="login" required>
            <br><br>
            <input class="adm-pass" type="password" name="senha2" placeholder="password" required>
            <br><br>
            <input onclick="myFunction()" class="inputSubmit-login" type="submit" name="submit2" value="Enviar">
    </div>
    </div>
    </form>
    </div>
    </form>
</body>


</html>