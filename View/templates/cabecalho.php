<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title><?= TITULO_DO_PROJETO ?></title>
  <link href="<?= ASSETS?>css/bootstrap.min.css" rel='stylesheet'>
    
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div  id="navbar" class="container-fluid">
    <a class="navbar-brand" href="#">Agenda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="<?= URL."index.php?pg=home"?>" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="<?= URL."index.php?pg=cadastro-pessoa"?>" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="<?= URL."index.php?pg=home"?>" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="<?= URL."index.php?pg=home"?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>

div#navbar{

background-color: rgba(10, 10, 10, 0.1);
}

div#navbarNavDropdown{

position: absolute;
top: 30%;
left: 70%;
}

.navbar-nav .nav-item {
  margin-right: 15px; 
}

</style>
<!-- Inicia o container, e é fechado dentro do rodapé -->
<div class="container">

