<?php
$dbhost = "localhost";
$dbusername= "root";
$dbpassword = "122436";
$dbname = "Cadastro";
$DB_PORT=3306;

$conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname,$DB_PORT);
if ($conexao->connect_errno){
    echo"Falha ao conectar";
}
else{
    echo "Conexão efetuada com sucesso";
}


?>