
<!-- código php aqui -->
<?php
  
  ?>
 <!-- ./código php aqui -->
 
 
 <!-- código html aqui -->
 
<img src="<?= ASSETS?>imagem/agenda_error.png" class="error-img">


<h1 class="h1-not-found">Página não encontrada 😔</h1>
<h1 class="h1-error-identification">ERROR</h1>
<h1 class="h1-number-error">404</h1>

<a class="error-button" href="<?= URL."index.php?pg=home"?>">
    <button>Voltar para tela principal</button>
</a>
 <!-- ./código html aqui -->
 
 
 <!-- codigo css customizado aqui -->
  <style>

    .h1-not-found{

      color: red;
      position: absolute;
      top: 25%;
      left: 55%;
      font-size: 40px;


    }

    .h1-error-identification{

      color: red;
      position: absolute;
      top: 30%;
      left: 15%;
      width: 100%;
      height: 100%;
      font-size: 100px;

    }

    .h1-number-error{

      color: red;
      position: absolute;
      top: 40%;
      left: 14%;
      width: 100%;
      height: 100%;
      font-size: 180px;

    }

    .error-img{

      position: absolute;
      top: 30%;
      left: 57%;
      width: 20%;
      height: 50%;
    }

    .error-button{

      position: absolute;
      top: 75%; 
      left: 62%;  
    }

  </style>
 <!-- ./codigo css aqui -->
 
 <!-- codigo js aqui -->
  <script>
 
  </script>
 <!-- ./codigo js aqui -->
 
 