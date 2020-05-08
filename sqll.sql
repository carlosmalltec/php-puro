CREATE TABLE `devedores` (
	`deve_codi` INT(11) NOT NULL AUTO_INCREMENT,
	`deve_nome` VARCHAR(100) NULL DEFAULT NULL COMMENT 'Nome completo' COLLATE 'utf8_unicode_ci',
	`deve_cpf` VARCHAR(50) NULL DEFAULT NULL COMMENT 'CPF' COLLATE 'utf8_unicode_ci',
	`deve_cnpj` VARCHAR(50) NULL DEFAULT NULL COMMENT 'CNPJ' COLLATE 'utf8_unicode_ci',
	`deve_nasc` DATETIME NULL DEFAULT NULL COMMENT 'Data de nascimento',
	`deve_ende` VARCHAR(150) NULL DEFAULT NULL COMMENT 'Endereço' COLLATE 'utf8_unicode_ci',
	`deve_desc` TEXT(65535) NULL DEFAULT NULL COMMENT 'Descrição' COLLATE 'utf8_unicode_ci',
	`deve_valo` DECIMAL(10,2) NULL DEFAULT NULL COMMENT 'Valores',
	`deve_venc` DATETIME NULL DEFAULT NULL COMMENT 'Data de vencimento',
	`deve_dcad` TIMESTAMP NULL DEFAULT current_timestamp() COMMENT 'Data de cadastro',
	`deve_dalt` DATETIME NULL DEFAULT NULL COMMENT 'Data de alteracao',
	`deve_mail` VARCHAR(100) NULL DEFAULT NULL COMMENT 'E-mail' COLLATE 'utf8_unicode_ci',
	`deve_fone` VARCHAR(30) NULL DEFAULT NULL COMMENT 'Telefone' COLLATE 'utf8_unicode_ci',
	PRIMARY KEY (`deve_codi`) USING BTREE
)
COLLATE='utf8_unicode_ci'
ENGINE=MyISAM
AUTO_INCREMENT=12
;
