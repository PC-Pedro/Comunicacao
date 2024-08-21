
  <selection>
  <h1>Cadastre-se</h1>

    <form action="agenda.php" method="get">
        <label for="nome">Nome</label>
        <input type="text" name = "nome" id = "idnome">
        <label for="cpf">CPF</label>
        <input type="text" name = "cpf" id = "idcpf">
        <label for="idade">Idade</label>
        <input type="number" name="idade" id="ididade">
        <label for = "apelido">Apelido</label>
        <input type="text" name="apelido" id="idapelido">
        <input type="submit" value="Enviar">
    </form>
  </selection> 

  <style>

    body{

margin: 0;
padding: 0;
height: 100vh;

}

@font-face {
    font-family: 'Signika';
    src: url('../fontes/Signika/Signika-VariableFont_GRAD\,wght.ttf');
}

h1{
    font-family: 'Signika', sans-serif;
}

.button-container {
    display: flex;
    gap: 10px;
}

div{

background-color: black;
color: lightgray;
width: 100%;
height: 100px;
display: flex;
text-align: left;
padding: 20px;
font-size: 30px;
}

form {
    margin-top: 50px;
    background-color: black;
    padding: 15px;
    border-radius: 10px;
    display: grid;
    place-items: right;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

form label {
    display: block;
    width: fit-content;
    font-size: 0.8em;
    font-weight: 100;
    color: black;
    background-color: lightgray;
    padding: 3px 7px;
    margin-top: 10px;
    margin-bottom: 0px;
    border-radius: 5px;
}
  </style>