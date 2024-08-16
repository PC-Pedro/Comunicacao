<?php
namespace Comunicacao\Model;

use Comunicacao\DAO\Conexao;

class Prazo extends Conexao
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
    public function buscar_todos_os_prazos(){
        $tarefas = $this->buscar();
        return $tarefas;
    }    
    public function buscar_prazo_por_id($id){
        $tarefas = $this->buscar([$this->chave_primaria => $id]);
        return $tarefas;
    } 
    
    public function salvar_prazo($dados)  {
        return $this->inserir($dados);
    }
    public function deletar_por_id($id){
        return $this->deletar([$this->chave_primaria => $id]);
    }

}
