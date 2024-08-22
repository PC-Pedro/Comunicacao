<h1>Cadastrar prazo</h1>
<div id="form">
    <form id="agendaForm">
        <label for="hora">Qual foi o horario do ultimo status da tarefa:</label>
        <input type="time" id="hora" name="hora" required>
        <label for="Status">Status da tarefa:</label>
        <input type="text" id="status" name="status" required>
        <button type="submit" class="botão">Adicionar</button>
    </form>
</div>
<div id="table">
    <table>
        <thead>
            <tr>
                <th>Hora</th>
                <th>status</th>
            </tr>
        </thead>
    </table>
</div>
<style>
    h1{
        text-align: center;
    }
    table {
        width: 50%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 10px;
    }

    th {
        background-color: #f2f2f2;
    }

    div#form {
        position: absolute;
        top: 30%;
        right: 80%;
    }

    div#table {

        position: absolute;
        top: 20%;
        left: 30%;
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;

    }

    form {
        background-color: rgb(255, 255, 255);
        padding: 15px;
        border-radius: 10px;
    }

    label {
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
        top: 110%;
        right: 50%;
        transform: translate(-10%, -10%);
    }
</style>