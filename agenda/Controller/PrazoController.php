<?php 

namespace Comunicacao\Controller;
use Comunicacao\Model\Prazo;

use Controller;

class PrazoController extends Controller{

    /**
     * Salvar um prazo no banco de dados.
     */
    public function salvar($data){
        return self::retornoJson($data);
    }
    
    /**
     * Atualizar um prazo no banco de dados.
     */
    public function atualizar($data){
        return self::retornoJson($data);
    }
    
    /**
     * Deletar um prazo no banco de dados.
     */
    public function deletar($id){
        $prazo = new Prazo();
        $prazo_a_ser_deletado  = $prazo->buscar_prazo_por_id($id);
        
        if(isset($prazo_a_ser_deletado['id'])){
            if($prazo->deletar_por_id($prazo_a_ser_deletado['id'])){
                return self::retornoJson("success", "Prazo deletado com sucesso.", $prazo_a_ser_deletado);
            }else{
                return self::retornoJson("error", "Erro ao deletar prazo.", $prazo_a_ser_deletado);
            }
        }
        return self::retornoJson("error", "Prazo não encontrado.");
    }
}
