<div class="row" class="mt-5">
  <h1 class="text-center">Cadastrar tarefa</h1>
  <div class="col-6" id="form">
    <form action="#" method="post" id="form-cad-tarefa">
      <div class="mb-3">
        <label for="Tipo_tarefa" class="form-label">Qual será a sua tarefa?</label>
        <input type="text" class="form-control" id="tipo_de_tarefa">
      </div>
      <div class="mb-3">
        <label for="Data_inicio" class="form-label">Data de inicio</label>
        <input type="date" class="form-control" id="data_inicio">
      </div>
      <div class="mb-3">
        <label for="Data_conclusao" class="form-label"> Data de Conclusão</label>
        <input type="date" class="form-control" id="data_conclusao">
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
          <th scope="col">Tarefa</th>
          <th scope="col">data de inicio</th>
          <th scope="col">data de conclusão</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td></td>
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
    background-color: #f2f2f2;
  }

  form {
    color: #f2f2f2;
  }
</style>

<script>
  let tarefa = {
    tipo_de_tarefa: null,
    data_inicio: null,
    data_conclusao: null
  };

  $('#form-cad-tarefa').submit((evento) => {
    evento.preventDefault();
    tarefa.tipo_de_tarefa = $('#tipo_de_tarefa').val();
    tarefa.data_inicio = $('#data_inicio').val();
    tarefa.data_conclusao = $('#data_conclusao').val();

  if(validar_dados()){
  $.ajax({
    type: "post",
    url:"#",
    data: tarefa,
    contentType:"application/json",
    beforeSend: function() {
      alert('Insira dados ao formulário');
    },
    success: function() {
      alert("Sua tarefa foi adicionada com sucesso");
    },
    error: function() {
      alert("Erro ao adicionar tarefa");
    },
  });

  console.log();
}
});

function validar_dados() {
if(tarefa.tipo_de_tarefa.trim().length < 1){
  alert("dados incorretos")
}
else if (tarefa.data_inicio.trim().length < 1){
  alert("dados incorretos")
} 
else if (tarefa.data_conclusao.trim().length < 1){
  alert("dados incorretos")
}
}
</script>