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
        <?php
		$read = new Read;
		$read->FullRead("select * from devedores order by deve_dcad desc");
		if ($read->getRowCount() >= 1) {
            ?>
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
        <?php } ?>
        </tbody>
    </table>
</div>

DROP TABLE IF EXISTS `devedores`;

<!-- CREATE TABLE `devedores` (
  `deve_codi` int(11) NOT NULL AUTO_INCREMENT,
  `deve_nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nome completo',
  `deve_cpf` int(20) NOT NULL COMMENT 'CPF',
  `deve_cnpj` int(20) NOT NULL COMMENT 'CNPJ',
  `deve_nasc` datetime DEFAULT NULL COMMENT 'Data de nascimento',
  `deve_ende` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Endereço',
  `deve_desc` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descrição',
  `deve_valo` decimal(10,2) DEFAULT NULL COMMENT 'Valores',
  `deve_venc` datetime DEFAULT NULL COMMENT 'Data de vencimento',
  `deve_dcad` timestamp NULL DEFAULT current_timestamp() COMMENT 'Data de cadastro',
  `deve_dalt` datetime DEFAULT NULL COMMENT 'Data de alteracao',
  `deve_mail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'E-mail',
  `deve_fone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefone',
  PRIMARY KEY (`deve_codi`) USING BTREE,
  UNIQUE KEY `deve_cpf_UNIQUE` (`deve_cpf`) USING BTREE,
  UNIQUE KEY `deve_cnpj_UNIQUE` (`deve_cnpj`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; -->