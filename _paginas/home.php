<p class="lead">Cadastro de devedores na base</p>
<p>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroDevedores"> <i class="fas fa-user-plus"></i> Novo</button></p>

<?php
$time = new Time;
$read = new Read;
$read->FullRead("select deve_codi,deve_nome, deve_fone, deve_mail, deve_cpf, deve_cnpj,deve_nasc, deve_venc, deve_ende,deve_valo, deve_desc from devedores order by deve_dcad desc");
if ($read->getRowCount() >= 1) {
?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm" id="listaCliente">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">CPF</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Data de vencimento</th>
                    <th scope="col">Valor R$</th>
                    <th scope="col" style="width: 90px;">Gerenciar</th>
                </tr>
            </thead>
            <tbody class="toogle-append">
                <?php
                foreach ($read->getResult() as $result) {
                    extract($result);
                ?>
                    <tr>
                        <th scope="row"><?= $deve_codi; ?></th>
                        <td><?= $deve_nome; ?></td>
                        <td><?= $deve_fone; ?></td>
                        <td><?= $deve_mail; ?></td>
                        <td><?= $deve_cpf; ?></td>
                        <td><?= $deve_cnpj; ?></td>
                        <td><?= $time->diaMesAno($deve_venc); ?></td>
                        <td>R$: <?= number_format($deve_valo, 2, ',', '.'); ?></td>
                        <td style="width: 90px;">
                            <div class="btn-group" role="group" aria-label="controle">
                                <button type="button" class="btn btn-outline-info  btnView" data-array='<?=json_encode($result)?>' data-dnasc=<?=$time->diaMesAno($deve_nasc)?> data-dvenc=<?=$time->diaMesAno($deve_venc)?> ><i class="fas fa-eye"></i></button>
                                <button type="button" class="btn btn-outline-warning btnUpdate" data-array='<?=json_encode($result)?>'  data-dnasc=<?=$time->diaMesAno($deve_nasc)?> data-dvenc=<?=$time->diaMesAno($deve_venc)?>  ><i class="fas fa-user-edit"></i></button>
                                <button type="button" class="btn btn-outline-danger btnDelete" data-id=<?=$deve_codi?> data-action="_app/controlers/c_cliente.php"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } else { ?>
    <p>
        <div class="alert alert-warning" role="alert">Não encontramos clientes cadastrados</div>
    </p>
<?php } ?>
