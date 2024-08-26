<?php
require '../../vendor/autoload.php';
require_once '../../config_serve.php';
?>

<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <title><?= TITULO_DO_PROJETO ?></title>
  <link href="<?= ASSETS ?>css/bootstrap.min.css" rel='stylesheet'>
  <style>
    p {
      font-size: 12pt;
    }

    h1 {
      margin-top: 40px;
      color: #f2f2f2;
      text-align: center;
    }

    div#descricao {
      position: absolute;
      top: 10%;
      left: 50%;
    }

    form {
      height: 400px;
      padding: 10px;
      background-color: #ccc;
      position: absolute;
      top: 20%;
      left: 42%;
    }

    label {
      display: block;
      width: fit-content;
      font-size: 1em;
      font-weight: 100;
      padding: 7px 3px;
      margin-top: 10px;
      margin-bottom: 0px;
      border-radius: 10px;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: rgb(5, 238, 5);
      color: #000000;
      border: none;
      float: center;
      border-radius: 30px;
      cursor: pointer;
      text-decoration: none;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
      transition: backgroud 0.3s, box-shadow 0.3s, transform 0.3s;
      position: absolute;
      top: 88%;
      left: 73%;
      transform: translate(-10%, -10%);
    }
    input#cad {
      padding: 10px 20px;
      font-size: 16px;
      color: #000000;
      border: none;
      float: center;
      cursor: pointer;
      text-decoration: none;
      transition: backgroud 0.3s, box-shadow 0.3s, transform 0.3s;
      position: absolute;
      top: 90%;
      right: 65%;
      transform: translate(-10%, -10%);
    }

    body{
      background-color: rgb(50,50,50);
    }
  </style>

</head>

<body>
  <div class="container">
    <h1>Faça o seu Login</h1>
    <form>
      <div id="form" class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">
      </div>
      <div id="form" class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha">
      </div>
      <div id="form" class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
      </div>
      <button id="form" type="submit" class="btn btn-success" href="<?= URL."index.php?pg=home"?>">Entrar</button>
      <input id="cad" type="submit" href="<?= URL."index.php?pg=home"?>" class="btn" value="Cadastrar">
    </form>

    <!-- Fecha o container, que está iniciado no cabeçalho -->
  </div>
  <!-- Tudo que for relacionado ao rodapé de uma página -->
  <script src="<?= ASSETS ?>js/jquery.js"></script>
  <script src="<?= ASSETS ?>js/popper.min.js"></script>
  <script src="<?= ASSETS ?>js/bootstrap.min.js"></script>
</body>

</html>