<div class="modal fade" id="cadastroDevedores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preencha todos os campos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" name="nome" class="form-control" id="nome" aria-describedby="nomeHelp">
                        <small id="nomeHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control" id="cpf" aria-describedby="cpfHelp">
                        <small id="cpfHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" name="cnpj" class="form-control" id="cnpj" aria-describedby="cnpjHelp">
                        <small id="cnpjHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="datanascimento">Data de nascimento</label>
                        <input type="date" name="datanascimento" class="form-control" id="datanascimento" aria-describedby="datanascimentoHelp">
                        <small id="datanascimentoHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" class="form-control" id="endereco" aria-describedby="enderecoHelp">
                        <small id="enderecoHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações</label>
                        <textarea class="form-control" name="observacoes" id="observacoes" rows="3" aria-describedby="observacoesHelp"></textarea>
                        <small id="observacoesHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor R$</label>
                        <input type="text" name="valor" class="form-control" id="valor" aria-describedby="valorHelp">
                        <small id="valorHelp" class="form-text text-muted"></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewDevedor" tabindex="-1" role="dialog" aria-labelledby="modalDevedor" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDevedor">Devedor: Carlos Santos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <p><strong>ID:</strong> 1</p>
            <p><strong>Nome:</strong> Carlos Santos</p>
            <p><strong>E-mail:</strong> Carlos Santos</p>
            <p><strong>Telefone:</strong> Carlos Santos</p>
            <p><strong>CPF/CNPJ:</strong> Carlos Santos</p>
            <p><strong>Data de nascimento:</strong> Carlos Santos</p>
            <p><strong>Endereço:</strong> Carlos Santos</p>
            <p><strong>Observações:</strong> Carlos Santos</p>
            <p><strong>Data de vencimento:</strong> Carlos Santos</p>
            <p><strong>Valor R$:</strong> Carlos Santos</p>
            </div>
        </div>
    </div>
</div>