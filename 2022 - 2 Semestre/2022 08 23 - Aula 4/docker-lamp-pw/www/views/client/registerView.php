<div id="divToPrint">
    <h1>Registro do Cliente</h1>

    <table class="table table-striped">
        <tr>
            <th>Nome:</th>
            <td>
                <?= $arrayClient['name'] ?>
            </td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>
                <?= $arrayClient['email'] ?>
            </td>
        </tr>
        <tr>
            <th>Password:</th>
            <td>
                <?= $arrayClient['password'] ?>
            </td>
        </tr>
        <tr>
            <th>Telefone:</th>
            <td>
                <?= $arrayClient['phone'] ?>
            </td>
        </tr>
        <tr>
            <th>Mensagem:</th>
            <td>
                <?= $arrayClient['message'] ?>
            </td>
        </tr>
        <tr>
            <th>Genero:</th>
            <td>
                <?= $arrayClient['gender'] ?>
            </td>
        </tr>
        <tr>
            <th>Termo de aceite:</th>
            <td>
                <?= $arrayClient['acceptView'] ?>
            </td>
        </tr>
    </table>
</div>
<button class="btn btn-primary" onclick="printDiv()">Imprimir cadastro</button>