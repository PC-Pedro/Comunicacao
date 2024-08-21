<?php
// Preciso desse arquivo para funcionar.
require './vendor/autoload.php';
require_once './config_serve.php';
# variavel, que recebe uma página, se não encontrar ou não receber, apresenta a home.
$pagina = isset($_GET['pg']) ? $_GET['pg'] : 'login';




include_once './View/templates/cabecalho.php';

switch ($pagina) {
    case 'login': include_once './View/login/index.php'; break;
    case 'home': include_once './View/home/index.php'; break;
    case 'cadastro-pessoa': include_once './View/cadastro/pessoa/index.php'; break;
    case 'cadastro-prazo': include_once './View/cadastro/prazo/index.php'; break;
    case 'cadastro-tarefa': include_once './View/cadastro/tarefa/index.php'; break;
    
    default:
    include_once './View/error/404.php'; break;
        break;
}

include_once './View/templates/rodape.php'; 