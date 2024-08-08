<?php

$hostname = "localhost";
$bancodedados = "Cadastro";
$usuario = "root";
$senha = "122436";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli -> connect_errno){
    echo"Falha ao conectar : (".$mysqli -> connect_errno . ")" .$mysqli -> connect_error;
}
?>