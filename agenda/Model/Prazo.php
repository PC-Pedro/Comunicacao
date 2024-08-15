<?php

namespace Comunicacao\Model;

use agenda\DAO\Conexao;

class Prazo extends Conexao
{

   

    function __construct()

    {

        $this->chave_primaria = "id";
        $this->tabela = "prazos";

    }

    /**
    * Busca todas as tarefas, dentro do banco de dados
    *
    * @return array
    */
    public function buscar_todos_os_prazos(){

      $prazos = $this->buscar();
      return $prazos;
    }

}