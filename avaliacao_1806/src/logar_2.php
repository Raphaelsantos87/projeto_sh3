<?php

require 'conexao.php';
require  'index.php';

if (isset($_POST['submit2']) && !empty($_POST['nome2']) && !empty($_POST['senha2'])) {

    $login = $_POST['nome2'];
    $password = $_POST['senha2'];

    $sql = "SELECT *FROM administracao WHERE login = '$login' AND password ='$password' ";
    $stmt2 = $pdo->prepare($sql);
    $stmt2->execute();
} else {
    empty($_POST['nome2']) || empty($_POST['senha2']);
    header('Location: index.php');
}


if ($count = $stmt2->rowCount() < 1) {

    header('Location: erro-login.php');
} else {

    header('Location: cadastro-cliente.php');
}
