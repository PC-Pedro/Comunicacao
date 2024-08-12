<?php

namespace Comunicacao\Model;

class Pessoas
{

    private $id;
    private $nome;
    private $cpf;
    private $idade;
    private $apelido;

    function __construct()
    {
        $this->id = null;
        $this->nome = null;
        $this->cpf = null;
        $this->idade = null;
        $this->apelido = null;
    }

    function set_id($id)
    {
        $this->$id = $id;
    }
    function get_id()
    {
        return $this->id;
    }
    function set_nome($nome)
    {
        $this->$nome = $nome;
    }
    function get_nome()
    {
        return $this->id;
    }
    function set_cpf($cpf)
    {
        $this->$cpf = $cpf;
    }
    function get_cpf()
    {
        return $this->id;
    }
    function set_idade($idade)
    {
        $this->$idade = $idade;
    }
    function get_idade()
    {
        return $this->id;
    }
    function set_apelido($apelido)
    {
        $this->$apelido = $apelido;
    }
    function get_apelido()
    {
        return $this->id;
    }
}
