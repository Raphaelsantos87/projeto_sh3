<?php

require "conexao.php";
require "Repositorio/repositorio_registros.php";

if (isset($_POST)) {

    $repositorio = new Repository($pdo);

    $dados = $repositorio->RegistarDados();
    echo "Cadastro de Atendimento Realizado";
}

header('Location: cadastro-cliente.php');
