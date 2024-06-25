<?php

require 'Classe/Cliente.php';
class Repository
{
    private PDO $pdo;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    //exibir na tela de admin

    public function ExibirRegistros(): array
    {
        $sql1 = "SELECT * FROM registros";

        $statament = $this->pdo->query($sql1);

        $lista_registro = $statament->fetchAll(PDO::FETCH_ASSOC);


        $DadosAtendimento = array_map(function ($registro) {

            return new Clientes(
                $registro['id'],
                $registro['nome'],
                $registro['prefeitura'],
                $registro['setor']

            );
        }, $lista_registro);

        return $DadosAtendimento;
    }

    public function ExibirUsuarios(): array
    {
        $sql1 = "SELECT * FROM usuarios";

        $statament = $this->pdo->query($sql1);

        $lista_usuarios = $statament->fetch(PDO::FETCH_ASSOC);

        $DadosUsuarios = array_map(function ($registro) {

            return new Usuarios(
                $registro['id'],
                $registro['nome'],
                $registro['email'],
                $registro['senha']

            );
        }, $lista_usuarios);

        return $DadosUsuarios;
    }

    public function RegistarDados()
    {
        $nome = $_POST['nome'];
        $prefeitura = $_POST['prefeitura'];
        $setor = $_POST['setor'];

        $query = "INSERT INTO registros (nome, prefeitura, setor) VALUES ('$nome','$prefeitura', '$setor')";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
    }
}
