
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title><?= TITULO_DO_PROJETO ?></title>
  <link href="<?= ASSETS?>css/bootstrap.min.css" rel='stylesheet'>
  <link href="<?= ASSETS?>css/navbar.css" rel='stylesheet'>
    
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div  id="navbar" class="container-fluid">
    <a class="navbar-brand" href="<?= URL."index.php?pg=home"?>">Agenda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid-button" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="" aria-current="page" href="<?= URL."index.php?pg=home"?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="" href="<?= URL."index.php?pg=cadastro-pessoa"?>">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="" href="<?= URL."index.php?pg=login"?>">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="" href="<?= URL."index.php?pg=home"?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= URL."index.php?pg=cadastro-tarefa"?>">Tarefa</a></li>
            <li><a class="dropdown-item" href="<?= URL."index.php?pg=cadastro-prazo"?>">Prazo</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>


</style>
<!-- Inicia o container, e é fechado dentro do rodapé -->
<div class="container">

