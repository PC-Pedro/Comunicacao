<?php

// INICIA O CURL
$curl = curl_init();

$headers = [
    'Authorization: Bearer 12329028980928482',
    'Content-Type: application/json'
];

$post = http_build_query([
    'nome' => 'Pedro Roque',
    'idade' => '19'
]);

$json = json_encode($post);

//DEFINE CONFIGURAÇÕES
curl_setopt_array($curl, [
    CURLOPT_URL            => "http://localhost/Comunicacao/envio/form.php",
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_RETURNTRANSFER => true, 
    CURLOPT_HTTPHEADER     => $headers,
    CURLOPT_POSTFIELDS     => $json
]);

//EXECUTA A REQUISIÇÃO
$response = curl_exec($curl);

// Verifica se ocorreu algum erro na requisição
if ($response === false) {
    echo 'cURL Error: ' . curl_error($curl);
} else {
    echo 'Resposta: ' . $response;
}

//FECHA A CONEXÃO
curl_close($curl);

?>
