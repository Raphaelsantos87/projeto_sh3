<?php

if (isset($_SESSION)) {

    session_start();
    header('Location: tela-admin.php');
}

if (isset($_SESSION['id'])) {
    die("Acesso Negado!");
}
