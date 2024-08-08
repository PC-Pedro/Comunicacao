<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Empresa</title>
</head>
<body>
    <h1>Cadastro de Empresa</h1>

    <form action="envio.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br><br>
        
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>
