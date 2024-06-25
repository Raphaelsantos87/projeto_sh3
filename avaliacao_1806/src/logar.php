<?php
require 'conexao.php';



if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT *FROM usuarios WHERE email = '$email' AND senha='$senha' ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} else {
    empty($_POST['email']) || empty($_POST['senha']);
    header('Location: login.php');
}

//verifica se existe cadastro no banco

if ($count = $stmt->rowCount() < 1) {

    echo "Usuário nao Cadastrado!";
} else {
    header('Location: tela-admin.php');
}
