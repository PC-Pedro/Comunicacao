<?php
namespace Comunicacao\Model;

use agenda\DAO\Conexao;

class Tarefa extends Conexao
{

    function __construct()
    {
        $this->chave_primaria = 'id';
        $this->tabela = "tarefas";
    }

    /**
     * Busca todas as tarefas, dentro do banco de dados
     *
     * @return array
     */
    public function buscar_todas_as_tarefas(){
        $tarefas = $this->buscar();
        return $tarefas;
    }    
}
