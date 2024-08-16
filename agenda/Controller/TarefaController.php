<?php 

namespace Comunicacao\Controller;

use Comunicacao\Model\Tarefa;
use Controller;

class TarefaController extends Controller{


    /**
     * Salvar uma tarefa no banco de dados.
     */
    public function salvar($data){


        return self::retornoJson($data);
    }
    /**
     * Atualizar uma tarefa no banco de dados.
     */
    public function atualizar($data){

        return self::retornoJson($data);
    }
    /**
     * Deltar uma tarefa no banco de dados.
     */
    public function deletar($id){

        $tarefa = new Tarefa();
        $tarefa_a_ser_deletada  = $tarefa->buscar_tarefas_por_id($id);
        if(isset($tarefa_a_ser_deletada['id'])){

            if($tarefa->deletar_por_id($tarefa_a_ser_deletada['id'])){
                return self::retornoJson("success", "Tarefa deletada com sucesso.", $tarefa_a_ser_deletada);
            }else{
                return self::retornoJson("error", "Erro ao deletar tarefa.", $tarefa_a_ser_deletada);
            }

        }
        return self::retornoJson("error", "Erro não encontrada tarefa.");
        

    }


}
