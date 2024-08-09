<?php
namespace Comunicacao\Model;

class Tarefa {

    private $id;
    private $tipo_de_tarefa;
    private $data_inicio;
    private $data_conclusao;
    private $pessoa_id;


    function __construct()
    {
        $this->id = null;
        $this->tipo_de_tarefa  = null;
        $this->data_inicio = null;
        $this->data_conclusao = null ;
        $this->pessoa_id = null;
    }
}


