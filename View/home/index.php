
<!-- código php aqui -->
 <?php

 ?>
<!-- ./código php aqui -->


<!-- código html aqui -->

<img src="<?= ASSETS?>/imagem/escritorio.jpg" class="full-screen-img">

    <div class="row text-center justyfi-aling-center">
        <div class="col-1"></div>
        <div class="col-2">

            <div class="button-container">
              <h1 class="h1-tittle">Agenda</h1>
                <a href="<?= URL?>/index.php?pg=cadastro-pessoa">
                    <input type="submit" class="cadastro-button" value="Ir para Cadastro">
                </a>
            </div>
        </div>
    </div>

<!-- ./código html aqui -->


<!-- codigo css customizado aqui -->
 <style>

.h1-tittle{

  color: rgb(50, 245, 50);
  font-size: 100px;
  position: absolute;
  top: 40%;
  left: 40%;
  z-index: 2;
}
.cadastro-button{
  position: absolute;
  top: 60%;
  left: 45%;
  background-color: greenyellow;
  z-index: 2;
}

.full-screen-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    z-index: 1;
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

