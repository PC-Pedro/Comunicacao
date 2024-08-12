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

    function set_id($id)
    {
        $this->id = $id;
    }
    function get_id()
    {
        return $this->id;
    }
    function set_hora($hora)
    {
        $this->hora = $hora;
    }
    function get_hora()
    {
        return $this->id;
    }
    function set_coclusao($conclusao)
    {
        $this->conclusao = $conclusao;
    }
    function get_conclusao()
    {
        return $this->id;
    }
    function set_tarefa_id($tarefa_id)
    {
        $this->tarefa_id = $tarefa_id;
    }
    function get_tarefa_id()
    {
        return $this->id;
    }
    
}
