<div class="row">
  <h1 class="text-center">Cadastrar prazo</h1>
  <div class="col-6" id="form">
    <form action="" method="post" id="form-cadastro-prazo">
      <div class="mb-3">

      </div>
      <div class="mb-3">
        <label for="conclusao" class="form-label">Data</label>
        <input type="date" class="form-control" id="conclusao">
      </div>
      <div class="mb-3">
        <label for="hora" class="form-label"> Horário</label>
        <input type="text" class="form-control" id="hora">
      </div>
      <div class="col-6">
        <button type="submit" class="btn btn-success">Adicionar</button>
      </div>
    </form>
  </div>
  <div class="col-6">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Data</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <th scope="row">2</th>
          <td></td>
          <td></td>

        </tr>
        <tr>
          <th scope="row">3</th>
          <td></td>
          <td></td>

        </tr>
      </tbody>
    </table>
  </div>
</div>
<style>
  h1 {
    color: white;
  }

  th {

    color: #f2f2f2;
  }

  th {
    background-color: #f2f2f2;
  }

  form {
    color: #f2f2f2;
  }
</style>

<script>
  let prazo = {

    hora: null,
    conclusao: null

  }

  $('#form-cadastro-prazo').submit((event) => {

    event.preventDefault()

    prazo.hora = $('#hora').val()
    prazo.conclusao = $('#conclusao').val()

  })

  function verificar_dados() {

    let str_conclusao = prazo.conclusao.toString()
    if (str_conclusao.trim() == "") {

      alert("Confirme a data de conclusão")
      return false
    }

    let str_hora = prazo.hora.toString()
    if (str_hora.trim() == "") {

      alert("Confirme a hora de conclusão")
      return false
    }
  }

  $.ajax({

    type: "post",
    url: "",
    data: prazo,
    contentType: "application/json",
    beforeSend: function() {
      alert('Insira dados ao formulário');
    },

    success: function(response) {

      alert("Formulário enviado com sucesso")

    },

    error: function() {

      alert("Erro ao adicionar prazo")
    }

  })
</script>