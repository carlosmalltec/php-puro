<p class="lead">Cadastro de devedores na base</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroDevedores"> <i class="fas fa-user-plus"></i> Novo</button>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">CPF/CNPJ</th>
                <th scope="col">Data de vencimento</th>
                <th scope="col">Valor R$</th>
                <th scope="col" style="width: 90px;">Gerenciar</th>
            </tr>
        </thead>
        <tbody class="toogle-append">
            <tr>
                <th scope="row">1</th>
                <td>Carlos Santos</td>
                <td>(11) 95299-0303</td>
                <td>carlosmalltec@gmail.com</td>
                <td>111.111.111.11</td>
                <td>01/06/2020</td>
                <td>R$: 150,00</td>
                <td style="width: 90px;">
                    <div class="btn-group" role="group" aria-label="controle">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#viewDevedor"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#cadastroDevedores"><i class="fas fa-user-edit"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>