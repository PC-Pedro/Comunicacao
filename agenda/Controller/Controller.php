<?php

class Controller {


    /**
     * Retorna um tipo de dados, em um padrão json
     * @param string $status - [error, success, warning]
     * @param string $msg - Mensagem de retorno
     * @param mixed $data - Dados de retorno
     *
     * @return json
     */
    public static function retornoJson($status = "error", $msg = "", $data = []) { 

        return json_encode(["status" => $status, "msg" => $msg, "data" => $data], JSON_UNESCAPED_UNICODE);
    }
}