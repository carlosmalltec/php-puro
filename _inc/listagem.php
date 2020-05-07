<p class="lead">Cadastro de devedores na base</p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroDevedores"> <i class="fas fa-user-plus"></i> Novo</button>

<div class="table-responsive">
    <table class="table table-bordered table-hover table-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Primeiro</th>
                <th scope="col">Último</th>
                <th scope="col">Nickname</th>
                <th scope="col">Gerenciar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <!-- <td align="right" class="btn-group">
                    <a href="" class="btn btn-outline-info" target="_blank">
                        <span title="Visualizar"><i class="fas fa-eye"></i></span>
                    </a>
                    <a href="" class="btn btn-outline-warning" data-modal="">
                        <span title="Editar"><i class="fas fa-user-edit"></i></span>
                    </a>
                    <a href="" class="btn btn-outline-danger">
                        <span title="Excluir"><i class="fas fa-trash"></i></span>
                    </a>

                </td> -->
                <td>
                    <div class="btn-group" role="group" aria-label="controle">
                        <button type="button" class="btn btn-outline-info"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-outline-warning"><i class="fas fa-user-edit"></i></button>
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>