<?php

namespace Comunicacao\Model;

use Comunicacao\DAO\Conexao;

class Pessoa extends Conexao
{

    function __construct()
    {
        $this->chave_primaria = 'id';
        $this->tabela = 'pessoa';
    }

    public function
    buscar_todas_as_pessoas(){
        $pessoa = $this->buscar();
        return $pessoa;
    }    
}

   