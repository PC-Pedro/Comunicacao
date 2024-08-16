<?php
namespace Comunicacao\Model;

use Comunicacao\DAO\Conexao;

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
    public function buscar_tarefas_por_id($id){
        $tarefas = $this->buscar([$this->chave_primaria => $id]);
        return $tarefas;
    } 
    
    public function salvar_tarefa($dados)  {
        return $this->inserir($dados);
    }
    public function deletar_por_id($id){
        return $this->deletar([$this->chave_primaria => $id]);
    }

}
