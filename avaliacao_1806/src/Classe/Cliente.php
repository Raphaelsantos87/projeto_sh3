<?php


class clientes
{
    private ?int $id;
    private string $nome;
    private string $prefeitura;
    private string $setor;



    public function __construct(?int $id, string $nome, string $prefeitura, string $setor)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->prefeitura = $prefeitura;
        $this->setor = $setor;
    }


    public function get_id()
    {

        return $this->id;
    }
    public function get_nome()
    {

        return $this->nome;
    }
    public function get_prefeitura()
    {

        return $this->prefeitura;
    }
    public function get_setor()
    {

        return $this->setor;
    }
}
