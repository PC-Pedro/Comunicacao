<?php

namespace Comunicacao\Model;

class Prazo
{

    private $id;
    private $hora;
    private $conclusao;
    private $tarefa_id;

    function __construct()

    {

        $this->id = null;
        $this->hora = null;
        $this->conclusao = null;
        $this->tarefa_id = null;
    }
}
