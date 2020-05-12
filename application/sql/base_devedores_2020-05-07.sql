DROP TABLE IF EXISTS `devedores`;

CREATE TABLE `devedores` (
  `deve_codi` int(11) NOT NULL AUTO_INCREMENT,
  `deve_nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nome completo',
  `deve_cpf` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'CPF',
  `deve_cnpj` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'CNPJ',
  `deve_nasc` datetime DEFAULT NULL COMMENT 'Data de nascimento',
  `deve_ende` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Endereço',
  `deve_desc` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Descrição',
  `deve_valo` decimal(50,2) DEFAULT NULL COMMENT 'Valores',
  `deve_venc` datetime DEFAULT NULL COMMENT 'Data de vencimento',
  `deve_dcad` timestamp NULL DEFAULT current_timestamp() COMMENT 'Data de cadastro',
  `deve_dalt` datetime DEFAULT NULL COMMENT 'Data de alteracao',
  `deve_mail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'E-mail',
  `deve_fone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Telefone',
  PRIMARY KEY (`deve_codi`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;