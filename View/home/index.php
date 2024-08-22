
<!-- código php aqui -->
 <?php

 ?>
<!-- ./código php aqui -->


<!-- código html aqui -->

<img src="./public/assets/imagem/escritorio.jpg" class="full-screen-img">

    <div class="row text-center justyfi-aling-center">
        <div class="col-1"></div>
        <div class="col-2">

            <div class="button-container">
              <h1>Agenda</h1>
                <a href="<?= URL?>/index.php?pg=cadastro-pessoa">
                    <input type="submit" class="btn btn-primary" value="Ir para Cadastro">
                </a>
            </div>
        </div>
    </div>

<!-- ./código html aqui -->


<!-- codigo css customizado aqui -->
 <style>

h1{

  color: rgb(50, 245, 50);
  font-size: 100px;
  position: absolute;
  top: 40%;
  left: 40%;
}
input[type=submit]{

  position: absolute;
  top: 60%;
  left: 45%;

}

.full-screen-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Faz a imagem cobrir a tela, mantendo a proporção */
    display: block;
  }

    body{

        background-color: rgb(50, 50, 50);
    }


 </style>
<!-- ./codigo css aqui -->

<!-- codigo js aqui -->
 <script>

 </script>
<!-- ./codigo js aqui -->

