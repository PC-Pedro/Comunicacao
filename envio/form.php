<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<main>
        <form action="/recebimento/recebe.php" method="get">
            <label for="nome">Nome</label>
            <input type="text"name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <label for="idade">Idade</label>
            <input type="number" name="Idade" id="ididade">
            <input type="submit" value="Enviar">
        </form>
</main>
    
</body>
</html>