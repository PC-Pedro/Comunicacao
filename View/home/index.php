
<!-- código php aqui -->
 <?php
  //adicionar navbar
 ?>
<!-- ./código php aqui -->


<!-- código html aqui -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div  id="navbar" class="container-fluid">
    <a class="navbar-brand" href="#">Agenda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="row text-center justyfi-aling-center">
        <div class="col-1"></div>
        <div class="col-2">

            <div class="button-container">
                <a href="<?= URL?>/index.php?pg=cadastro-pessoa">
                    <input type="submit" class="btn btn-primary" value="Ir para Cadastro">
                </a>
            </div>
        </div>
    </div>
<!-- ./código html aqui -->


<!-- codigo css customizado aqui -->
 <style>

    div#navbar{

        background-color: rgba(10, 10, 10, 0.1);
    }

    div#navbarNavDropdown{

        position: absolute;
        left: 70%;
    }
/*
    body{

        background-color: rgb(50, 50, 50);
    }
*/

 </style>
<!-- ./codigo css aqui -->

<!-- codigo js aqui -->
 <script>

 </script>
<!-- ./codigo js aqui -->

