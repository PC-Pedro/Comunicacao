<?php 

namespace Comunicacao\Controller;

use Comunicacao\Model\Pessoa;
use Controller;

class PessoaController extends Controller{


    /**
     * Salvar uma pessoa no banco de dados.
     */
    public function salvar($data){


        return self::retornoJson($data);
    }
    /**
     * Atualizar uma pessoa no banco de dados.
     */
    public function atualizar($data){

        return self::retornoJson($data);
    }
    /**
     * Deltar uma pessoa no banco de dados.
     */
    public function deletar($id){

        $pessoa = new Pessoa();
        $pessoa_a_ser_deletada  = $pessoa->buscar_pessoa_por_id($id);
        if(isset($pessoa_a_ser_deletada['id'])){

            if($pessoa->deletar_por_id($pessoa_a_ser_deletada['id'])){
                return self::retornoJson("success", "Pessoa deletada com sucesso.", $pessoa_a_ser_deletada);
            }else{
                return self::retornoJson("error", "Erro ao deletar pessoa.", $pessoa_a_ser_deletada);
            }

        }
        return self::retornoJson("error", "Erro não encontrada pessoa.");
        

    }


}