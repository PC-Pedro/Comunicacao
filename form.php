<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="agenda.css">
</head>
<body>
<div>
<header>
    <h1>Agenda</h1>
</header>
</div>
<main>
  <selection>

    <form action="agenda.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name = "nome" id = "idnome">
        <label for="cpf">CPF</label>
        <input type="text" name = "cpf" id = "idcpf">
        <label for="idade">Idade</label>
        <input type="number" name="idade" id="ididade">
        <label for = "apelido">Apelido</label>
        <input type="text" name="apelido" id="idapelido">
        <input type="submit" value="Enviar">
    </form>
  </selection> 
  <button onclick="javascript:window.location.href='index.php'">&#x1F504; Voltar</button>
  </main>
</body>
</html>