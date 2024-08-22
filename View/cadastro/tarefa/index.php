<div class="row" class="mt-5">
<h1 class="text-center">Cadastrar tarefa</h1>
<div class="col-6" id="form">
<form action="" method="post">
          <div class="mb-3">
            <label for="Tipo_tarefa" class="form-label">Qual será a sua tarefa?</label>
            <input type="text" class="form-control" id="Tipo_tarefa">
          </div>
          <div class="mb-3">
            <label for="Data_inicio" class="form-label">Data de inicio</label>
            <input type="date" class="form-control" id="data">
          </div>
          <div class="mb-3">
            <label for="Data_conclusao" class="form-label"> Data de Conclusão</label>
            <input type="date" class="form-control" id="datacon">
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
    h1{
        color: white;
    }
    th{
        color: #f2f2f2;
        background-color: #f2f2f2;
    }

    form {
        color: #f2f2f2;
    }

    
</style>