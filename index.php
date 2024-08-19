<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📒 Agenta</title>
    <style>

        body, html{

            margin: 0;
            padding: 0;
            height: 100%;
        }

        div#area{

        background-color: rgb(50, 50, 50);
        color: rgb(152, 255, 152);
        width: 100%;
        height: 50px;
        display: flex;
        text-align: left;
        padding: 20px;
        font-size: 30px;
        /*precisa trocar a fonte*/
        font-family: 'Courier New', Courier, monospace;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: rgb(152, 255, 152);
            color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        button:hover {
            background-color: rgb(102, 204, 102);
        }

    </style>
</head>
<body>

<div id="area">Agenda</div>

<div class="container">
    <a href="form.php">
        <button>Ir para tela de Cadastro</button>
    </a>
</div>
    
</body>
</html>