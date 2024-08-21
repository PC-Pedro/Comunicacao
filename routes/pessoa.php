<?php

if(isset($_GET['acao'])){


} else if($_POST['acao']){

}else{

    die;
}

class PessoaRota{

    public static function cadastro($dados)  { }
    public static function editar($dados)  { }
    public static function excluir($dados)  { }
    public static function listar($dados)  { }
    public static function buscar_por_id($dados)  { }

}