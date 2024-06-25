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
        <li><a class="btn-login_2" href="login.php" class="nav-link active">Login</a></li>
        </li>
        <li><a class="btn-home_2" href="index.php" class="nav-link active">Início</a></li>
      </ul>
    </div>
  </nav>
  <div>
    <h3 class="titulo-pagina"> Cadastro de Atendimentos</h3>
  </div>
  <form class="form-style" action="envio_dados.php" method="POST">
    <div class="box-at">
      <div class="text-titulo">
        <h4 class="nome-index">Cliente
          <input class="caixa-text" type="text" name="nome" placeholder="cliente">
        </h4>
      </div>
      <div>
        <h4 class="nome-index">Prefeitura
          <input class="caixa-text" type="text" name="prefeitura" placeholder="prefeitura">
        </h4>
      </div>
      <div>
        <h4 class="nome-index">Setor
          <input class="caixa-text" type="text" name="setor" placeholder="setor">
        </h4>
      </div>
      <div>
        <h4 class="nome-index">Analista
          <input class="caixa-text" type="text" name="analista" placeholder="analista">
        </h4>
      </div>
      <input class="botao_1" type="submit" name="enviar" value="Enviar">
  </form>
</body>


</html>