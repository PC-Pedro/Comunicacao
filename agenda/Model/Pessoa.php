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

    public function buscar_pessoa_por_id($id){
        $pessoa= $this->buscar([ $this->chave_primaria => $id]);
        return $pessoa;
    }

    public function salvar_pessoas($dados){
        return $this->inserir($dados);
    }
    public function deletar_por_id($id){
        return $this->deletar([$this->chave_primaria => $id]);
    }



}