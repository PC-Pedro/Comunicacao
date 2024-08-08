<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php 

    echo "Método: <br>";
    echo $_SERVER['REQUEST_METHOD'];

    echo "<br>Headers: <br>";
    $headers = getallheaders();
    print_r($headers);

    echo "<br>Post<br>";
    $input = file_get_contents('php://input');
    $array = json_decode($input);
    $_POST = !empty($array) ? $array : $_POST;
    print_r($_POST);

    /*
<main>
        <form action="/Comunicacao/recebimento/recebe.php" method="get">
            <label for="nome">Nome</label>
            <input type="text"name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <label for="idade">Idade</label>
            <input type="number" name="Idade" id="ididade">
            <input type="submit" value="Enviar">
        </form>
</main>
    */

    ?>

</body>
</html>