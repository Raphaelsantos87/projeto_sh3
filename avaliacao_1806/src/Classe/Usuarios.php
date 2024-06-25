<?php


class Usuarios
{

    private  int $id;
    private  string $nome;
    private  string $email;
    private  string $senha;

    public function __construct(int $id, string $nome, string $email, string $senha)
    {

        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }



    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {

        return $this->nome;
    }

    public function getEmail()
    {

        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }
}
