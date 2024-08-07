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
    echo "Conectado ao banco >>>>>>";

    $nome = $_POST['nome'];
    $nome = mysqli_real_escape_string($conexao,$nome);
    $sql = "SELECT nome FROM Cadastro.Cadastro WHERE nome= '$nome'";
    $retorno = mysqli_query($conexao,$sql);

    $nome = $_POST ['nome'];
    $sobrenome = $_POST ['sobrenome'];
    $idade = $_POST ['idade'];

    $sql = "INSERT INTO Cadatro.Cadastro(nome,sobrenome,idade) VALUES('$nome','$sobrenome','$idade')";
    $resultado = mysqli_query($conexao,$sql);

    echo ">>>>>>> USUARIO CADASTRADO COM SUCESSO <<<<<<<<"
    ?>
    
</body>
</html>