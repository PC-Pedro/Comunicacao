<?php
namespace Comunicacao\Model;

class Tarefa
{

    private $id;
    private $tipo_de_tarefa;
    private $data_inicio;
    private $data_conclusao;
    private $pessoa_id;

    function __construct()
    {
        $this->id = null;
        $this->tipo_de_tarefa = null;
        $this->data_inicio = null;
        $this->data_conclusao = null;
        $this->pessoa_id = null;
    }

    function set_id($id)
    {$this->id = $id;}
    function get_id()
    {return $this->id;}
    function set_tipo_de_tarefa($tipo_de_tarefa)
    {$this->tipo_de_tarefa = $tipo_de_tarefa;}
    function get_tipo_de_tarefa()
    {return $this->tipo_de_tarefa;}
    function set_data_inicio($data_inicio)
    {$this->data_inicio = $data_inicio;}
    function get_data_inicio()
    {return $this->data_inicio;}
    function set_data_conclusao($data_conclusao)
    {$this->data_conclusao = $data_conclusao;}
    function get_data_conclusao()
    {return $this->data_conclusao;}
    function set_pessoa_id($pessoa_id)
    {$this->pessoa_id = $pessoa_id;}
    function get_pessoa_id()
    {return $this->pessoa_id;}
}
