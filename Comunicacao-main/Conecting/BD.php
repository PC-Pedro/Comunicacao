<?php

$hostname = "localhost";
$bancodedados = "Cadastro";
$DB_PORT=3306;
$usuario = "root";
$senha = "122436";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno){
    echo"Falha ao conectar : (".$mysqli -> connect_errno . ")" .$mysqli -> connect_error;
}
?>