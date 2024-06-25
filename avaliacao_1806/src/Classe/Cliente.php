<?php


class Clientes
{
    private ?int $id;
    private string $nome;
    private string $prefeitura;
    private string $setor;
    private string $analista;



    public function __construct(?int $id, string $nome, string $prefeitura, string $setor, string $analista)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->prefeitura = $prefeitura;
        $this->setor = $setor;
        $this->analista = $analista;
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
    public function get_analista()
    {
        return $this->analista;
    }
}
