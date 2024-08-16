<?php

require_once __DIR__ . '/vendor/autoload.php';

use Comunicacao\Model\Pessoa;

$pessoa = new Pessoa();

$nova_pessoa = [
    'nome' => 'Pedro',
    'cpf' => 12345678910 ,
    'idade' => 19,
    'apelido' => 'Pedro',
];
var_dump($pessoa->inserir($nova_pessoa));

