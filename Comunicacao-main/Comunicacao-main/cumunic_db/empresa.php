<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexao</title>
</head>
<body>
    <?php 
    $conexao = mysqli_connect("localhost","root","122436","Cadastro");

    if(!$conexao){
        echo "Não conectado";
    }
    else{
    echo "Conectado ao banco >>>>>>";

    $nome = isset ($_GET['nome']) ? mysqli_real_escape_string($conexao,$nome):"";
    $sql = "SELECT nome FROM pessoas WHERE nome= '$nome'";
    $retorno = mysqli_query($conexao,$sql);

    $nome = isset ($_GET['nome']) ? mysqli_real_escape_string($conexao,$nome):"";
    $id = isset ($_GET['id']) ? (int)$_GET['id']: 0;

    $sql = "INSERT INTO empresas (id,nome) VALUES('$id','$nome')";
    if(mysqli_query($conexao,$sql)){

    echo ">>>>>>> USUARIO CADASTRADO COM SUCESSO <<<<<<<<";
    }
    echo "<a href= 'comunicacao-main(3)/comunicacao-main/envio/form.php'>VOLTAR</a>";
    }
    ?>
    
</body>
</html>