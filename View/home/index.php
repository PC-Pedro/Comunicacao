
<!-- código php aqui -->
 <?php
  
 ?>
<!-- ./código php aqui -->


<!-- código html aqui -->

    <div class="row text-center bg-danger">
        <h1>Agenda</h1>
    </div>
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

    body{
        background-color: rgb(20, 20, 20);
    }

    h1{
        color: rgb(5, 238, 5);
    }

    .bg-danger {

    
        background-color: blueviolet !important;
    }
    
    input[type=submit] {
    padding: 10px 20px;
    font-size: 16px;
    background-color: rgb(5, 238, 5);
    color: #000000;
    border: none;
    float: center;
    border-radius: 30px;
    cursor: pointer;
    text-decoration: none;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transition: backgroud 0.3s, box-shadow 0.3s, transform 0.3s;
    position: absolute;
    top: 10%;
    left: 47%;
    transform: translate(-10%, -10%);
}
  
input[type=submit]:hover {
    background-color: rgb(102, 204, 102);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
}
 </style>
<!-- ./codigo css aqui -->

<!-- codigo js aqui -->
 <script>

 </script>
<!-- ./codigo js aqui -->

