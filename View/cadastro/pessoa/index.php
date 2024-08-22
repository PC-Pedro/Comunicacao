
  <selection>
    <div id="descricao">
  <h1>Cadastre-se</h1>

  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, pariatur! Nemo quibusdam, dolore ipsum vel modi distinctio quo, doloremque eveniet voluptatum minima libero accusantium unde. Obcaecati vel cumque amet doloribus.
    </div>
<div id="form">
  <form>
    <label for="Nome" class="col-sm-2 col-form-label"></label>
      <input type="text" class="form-control" id="nome" placeholder="Nome">
    <label for="CPF" class="col-sm-2 col-form-label"></label>
      <input type="text" class="form-control" id="CPF" placeholder="CPF">
      <label for="Idade" class="col-sm-2 col-form-label"></label>
      <input type="number" class="form-control" id="idade" placeholder="Idade">
      <label for="Apelido" class="col-sm-2 col-form-label"></label>
      <input type="text" class="form-control" id="Apelido" size="50" maxlength="30" placeholder="Apelido">
  <button type="submit" class="botão">Cadastrar</button>
</form>
</div>
  <style>
    div#descricao{
      padding: 10px;
  position: absolute;
  top: 10%;
  right:50%;
}

div#form{
  position: absolute;
  top: 10%;
  left:60%;
}
    form class{ 
      background-color: rgb(255, 255, 255);
    padding: 15px;
    border-radius: 10px;
}

form label{
    display: block;
    width: fit-content;
    font-size: 1em;
    font-weight: 100;
    background-color: rgb(255, 255, 255);
    padding: 20px px;
    margin-top: 10px;
    margin-bottom: 0px;
    border-radius: 5px;
}
    
button {
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
    top:100%;
    right:85%;
    transform: translate(-10%, -10%);
    }

    input[type=text], [type=number], select, input[type=date], input[type=date], input[type=datetime], input[type=email], input[type=month], input[type=password], input[type=range], input[type=tel], input[type=time], input[type=week] {
    width: 100%;
    padding: 12px 20px;
    font-size: 1em;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
  </style>

  <script>

        