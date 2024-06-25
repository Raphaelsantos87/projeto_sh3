<?php


require 'Repositorio/repositorio_registros.php';
require 'conexao.php';
session_start();


if (isset($_SESSION['email']) && $_SESSION['senha']) {

    $repositorio2 = new Repository($pdo);
    $DadosUsuarios = $repositorio2->ExibirUsuarios();


    $email = $_SESSION['email'];
    $password = $_SESSION['senha'];
    $sql = "SELECT * FROM usuarios WHERE email ='$email' AND  senha = '$password'";
    $stmt->$pdo->prepare($sql);
    $stmt->bindValue("email", $email);
    $stmt->bindValue("senha", $password);
    $stmt->execute();
}

$repositorio = new Repository($pdo);
$DadosRegistros = $repositorio->ExibirRegistros();

?>

<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" type="text/css" href="estilo.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<header>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <img src="img/sh3.png" alt="SH3">
                </li>
                <li><a class="btn-sair" href="login.php" class="nav-link active" href="#">Sair</a></li>
            </ul>
        </div>
    </nav>
    <h1 class="titulo-atendimento">Registros de Atendimentos</h1>
</header>

<body>
    <div class="container-geral">
    </div>
    <div class="container-fluid_2">
        <div class="row">
            <div class="col-sm ">Nº Registro</div>
            <div class="col-sm ">Cliente</div>
            <div class="col-sm ">Prefeitura</div>
            <div class="col-sm ">Setor</div>
        </div>
    </div>
    </div>
    <?php foreach ($DadosRegistros as $dados) : ?> <div class="container2">
            <div class="container-fluid_3">
                <div class="row">
                    <div class="col-sm "><?php echo $dados->get_id(); ?></div>
                    <div class="col-sm "><?php echo $dados->get_nome(); ?></div>
                    <div class="col-sm "><?php echo $dados->get_prefeitura(); ?></div>
                    <div class="col-sm "><?php echo $dados->get_setor(); ?></div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <?php endforeach; ?>
</body>

</html>