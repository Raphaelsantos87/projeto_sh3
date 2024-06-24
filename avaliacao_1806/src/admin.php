<?php

require 'conexao.php';
require 'src/Repositorio/repositorio_registros.php';
require 'src/Classe/Cliente.php';

$repositorio = new Repository($pdo);
$dados = $repositorio->ExibirRegistros();
var_dump($dados);
