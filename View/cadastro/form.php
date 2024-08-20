<?php include_once '../templates/cabecalho.php'; ?>

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

<?php include_once '../templates/rodape.php'; ?>
