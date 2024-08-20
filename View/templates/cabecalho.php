<?php
require_once '../../config_serve.php';
$asset = ASSETS;
$titulo = TITULO_DO_PROJETO;
echo "

<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>$titulo</title>
    <link href='{$asset}css/bootstrap.min.css' rel='stylesheet'>

</head>
<body>

";