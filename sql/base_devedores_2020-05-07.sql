# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.12-MariaDB-1:10.4.12+maria~bionic)
# Base de Dados: base_devedores
# Tempo de Geração: 2020-05-07 21:07:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela devedores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `devedores`;

CREATE TABLE `devedores` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
