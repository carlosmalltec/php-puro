<div class="modal fade" id="cadastroDevedores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCadastro">Preencha todos os campos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="_app/controlers/c_cliente.php" method="POST" id="cadastroCliente" enctype="multipart/form-data">
                <div class="form-group">
                            <label for="nome">Nome completo <span class="text-danger">*</span></label>
                            <input type="text" name="deve_nome" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome completo">
                            <small id="nomeHelp" class="form-text text-muted"></small>
                        </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" name="deve_ende" class="form-control" id="endereco" aria-describedby="enderecoHelp" placeholder="Rua morais lima 00, casa A&9">
                                <small id="enderecoHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="datanascimento">Data de nascimento <span class="text-danger">*</span></label>
                                <input type="date" name="deve_nasc" class="form-control" id="datanascimento" aria-describedby="datanascimentoHelp" placeholder="dd/mm/yyyy">
                                <small id="datanascimentoHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Telefone <span class="text-danger">*</span></label>
                                <input type="text" name="deve_fone" class="form-control" id="telefone" aria-describedby="telefoneHelp" placeholder="(11) 90000-0000">
                                <small id="telefoneHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="deve_mail" class="form-control" id="email" aria-describedby="emailHelp" placeholder="usuario@email.com">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="deve_cpf" class="form-control" id="cpf" aria-describedby="cpfHelp" placeholder="CPF">
                                <small id="cpfHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" name="deve_cnpj" class="form-control" id="cnpj" aria-describedby="cnpjHelp" placeholder="CNPJ">
                                <small id="cnpjHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="valor">Valor R$ <span class="text-danger">*</span></label>
                                <input type="text" name="deve_valo" class="form-control" id="valor" aria-describedby="valorHelp" placeholder="1,99">
                                <small id="valorHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vencimento">Data de vencimento <span class="text-danger">*</span></label>
                                <input type="date" name="deve_venc" class="form-control" id="vencimento" aria-describedby="vencimentoHelp" placeholder="dd/mm/yyyy">
                                <small id="vencimentoHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações</label>
                        <textarea class="form-control" name="deve_desc" id="observacoes" rows="3" aria-describedby="deve_desc" placeholder="Observações"></textarea>
                        <small id="observacoesHelp" class="form-text text-muted"></small>
                    </div>
                    <input type="hidden" name="deve_codi" value="">
                    <input type="hidden" name="acao" value="cadastrar">
                    <div id="response"></div>
                    <button type="submit" class="btn btn-primary btnSalve">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewDevedor" tabindex="-1" role="dialog" aria-labelledby="modalDevedor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDevedor"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body toogle-view">
                
            </div>
        </div>
    </div>
</div>