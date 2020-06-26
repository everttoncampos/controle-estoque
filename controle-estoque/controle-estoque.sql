-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para controle-estoque
CREATE DATABASE IF NOT EXISTS `controle-estoque` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `controle-estoque`;

-- Copiando estrutura para tabela controle-estoque.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) CHARACTER SET utf8 NOT NULL,
  `marca` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `unMedida` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `qnt` int(10) NOT NULL,
  `media` int(10) NOT NULL,
  `qntInicial` int(10) NOT NULL,
  `datatime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

-- Copiando dados para a tabela controle-estoque.estoque: ~83 rows (aproximadamente)
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
INSERT IGNORE INTO `estoque` (`id`, `produto`, `marca`, `unMedida`, `qnt`, `media`, `qntInicial`, `datatime`) VALUES
	(1, 'ÁCIDO ACÉTICO 3%', '', '', 10, 20, 0, '2020-06-23 11:02:41'),
	(2, 'ÁCIDO ÁCETICO 5%', NULL, NULL, 15, 10, 0, '2020-06-23 11:02:41'),
	(3, 'ÁCIDO TRICOLOROACÉTIVO (ATA)', 'MÃE TERRA', '10ML', 0, 0, 0, '2020-06-23 11:02:41'),
	(4, 'ÁGUA DESTILADA (Diluante Injetavel) ', 'FARMACE', '10ML', 0, 0, 0, '2020-06-23 11:02:41'),
	(5, 'AGULHA DESCARTÁVEL (preta)', NULL, 'CX/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(6, 'AGULHA DESCARTÁVEL 13X0,30 (amarela)', 'BD', 'CX/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(7, 'AGULHA DESCARTÁVEL 13X4,5 (insulina)', NULL, 'PCT/9', 5, 0, 0, '2020-06-23 11:02:41'),
	(8, 'AGULHA DESCARTÁVEL 40X12 (rosa)', NULL, 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(9, 'ALCOOL 70%', 'CICLO FARMA', '1LT', 0, 0, 0, '2020-06-23 11:02:41'),
	(10, 'ALGODÃO', 'CREMER', 'PCT', 0, 0, 0, '2020-06-23 11:02:41'),
	(11, 'ANESTESICO POMADA  SALA DRA GABRIELA', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(12, 'AVENTAL PROCEDIMENTO TNT', NULL, 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(13, 'AVENTAL TECIDO DRA GABRIELA', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(14, 'AVENTAL TECIDO DRA GABRIELA', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(15, 'BOLSA COLETORA 2 LT SISTEMA FECHADO', 'POLYMED', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(16, 'CANETAS CIRÚRGICAS', 'SKINS', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(17, 'CARBO GEL', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(18, 'CLORETO DE SÓDIO 0,9% 10ML', 'ISOFARMA', 'CX/200', 0, 0, 0, '2020-06-23 11:02:41'),
	(19, 'Clorexidine Alcoólica 5% (100 ML)', 'RIOHEX', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(20, 'Clorexidine Degermante 2% (100 ML) Tensoativos', 'RIOHEX', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(21, 'Clorexidine Solução antisséptica aquosa 2% (100 ML', 'RIOHEX', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(22, 'CONECTOR URETRAL UMI', 'UMI', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(23, 'COTONETE', NULL, 'CX', 0, 0, 0, '2020-06-23 11:02:41'),
	(24, 'DERMAFREEEZE', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(25, 'DESINFETANTE ORTOFALDEIDO 0,55 1000ML', 'OPA', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(26, 'DETERGENTE VIC P/ INSTRUMENTAL 1LT', 'VIC PHARMA', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(27, 'ELETRODO', 'ALACER', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(28, 'EQUIPO INFUSÃO SORO', NULL, 'PCT/25', 0, 0, 0, '2020-06-23 11:02:41'),
	(29, 'ESPECULO ESTÉRIL P', 'VAGISPEC', 'PCT/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(30, 'ESPECULO M', 'VAGISPEC', 'PCT/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(31, 'ESPECULO P', 'VAGISPEC', 'PCT/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(32, 'EXTENSOR CATETER', 'ALACER', 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(33, 'FITA MICROPORE 1,25X10 BEGE', '3M', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(34, 'FITA MICROPORE 1,25X4,5 BRANCA', 'CREMER', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(35, 'FITA MICROPORE 5 x 10 BEGE', '3M', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(36, 'FITA MICROPORE 5 x 4,5 BRANCA', NULL, NULL, 0, 0, 0, '2020-06-23 11:02:41'),
	(37, 'FITAS DE CONTROLE OPA', 'RIOSCOPE', 'CX/40', 0, 0, 0, '2020-06-23 11:02:41'),
	(38, 'GASE ESTERIL', 'CREMER', 'PCT/5', 0, 0, 0, '2020-06-23 11:02:41'),
	(39, 'GASE ESTERIL', 'CREMER', 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(40, 'GASE NÃO ESTERIL', 'MEDPLUS', 'PCT/500', 0, 0, 0, '2020-06-23 11:02:41'),
	(41, 'IODO', '50ML', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(42, 'LAMINAS DE BISTURI CIRURGICA N15', 'WILTEX', 'CX/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(43, 'LAMINAS DE BISTURI CIRURGICA N22', 'SOLIDAR', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(44, 'LENÇOL C/ ELÁSTICO TNT', NULL, 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(45, 'LENÇOL PEQUENO DRA GABRIELA', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(46, 'LIDOCAÍNA 2% INJETÁVEL C/VASO', 'CRISTALIA', 'CX/50', 0, 0, 0, '2020-06-23 11:02:41'),
	(47, 'LIDOCAÍNA 2% S/ VASO- DR ELDER', 'CRISTALIA', 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(48, 'LIDOCAÍNA C/ VASO- DRA GABRIELA', 'CRISTALIA', 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(49, 'LIDOCAINA GEL 2%', 'XYLESTELIN', 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(50, 'LIDOCAÍNA SPRAY 10%', NULL, 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(51, 'LUVAS ESTÉRIL ASSISTENTE N 6,5', 'MUCAMBO C/PÓ', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(52, 'LUVAS ESTÉRIL DR ELDER N 8\r\n', 'MUCAMBO C/PÓ', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(53, 'LUVAS PROCEDIMENTO ASSISTENTES P', 'UNIGLOVES', 'CX/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(54, 'LUVAS PROCEDIMENTO DR ELDER G', 'UNIGLOVES', 'CX/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(55, 'LUVAS PROCEDIMENTO DRA GABRIELA P', 'UNIGLOVES', 'CX/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(56, 'MASCARA CIRÚRGICA DESCARTÁVEL', NULL, 'CX/50', 0, 0, 0, '2020-06-23 11:02:41'),
	(57, 'POTE PORTA LÂMINA', NULL, 'PCT/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(58, 'SERINGA 10ML', 'DESCARPACK', 'PCT/9', 0, 0, 0, '2020-06-23 11:02:41'),
	(59, 'SERINGA 20 ML', 'DESCARPACK', 'PCT/7', 0, 0, 0, '2020-06-23 11:02:41'),
	(60, 'SERINGA 3ML', 'BD', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(61, 'SERINGA BICO CATETER 60 ML', 'KDL', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(62, 'SONDA ALIVIO URETRAL N 04', NULL, 'PCT/20', 0, 0, 0, '2020-06-23 11:02:41'),
	(63, 'SONDA ALIVIO URETRAL N 06', NULL, 'PCT/20', 0, 0, 0, '2020-06-23 11:02:41'),
	(64, 'SONDA ALIVIO URETRAL N 08', NULL, 'PCT/50', 0, 0, 0, '2020-06-23 11:02:41'),
	(65, 'SONDA ALIVIO URETRAL N 10', NULL, 'PCT/5', 0, 0, 0, '2020-06-23 11:02:41'),
	(66, 'SONDA ALIVIO URETRAL N 12', NULL, 'PCT/5', 0, 0, 0, '2020-06-23 11:02:41'),
	(67, 'SONDA ALIVIO URETRAL N 14', NULL, 'PCT/15', 0, 0, 0, '2020-06-23 11:02:41'),
	(68, 'SONDA ALIVIO URETRAL N 16', NULL, 'PCT/20', 0, 0, 0, '2020-06-23 11:02:41'),
	(69, 'SONDA ALIVIO URETRAL N 18', NULL, 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(70, 'SONDA ALIVIO URETRAL N 20', NULL, 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(71, 'SONDA BALAO RETAL', 'ALACER', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(72, 'SONDA DLUPO LUMEN', 'ALACER', 'PCT/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(73, 'SONDA FOLEY N 18', 'FOLEY', 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(74, 'SONDA FOLEY N 20', 'MELL LEAD', 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(75, 'SONDA TUBO DE INFUSÀO', 'ALACER', 'CX/10', 0, 0, 0, '2020-06-23 11:02:41'),
	(76, 'SORO FISIOLÓGICO 9%', NULL, 'CX/30', 0, 0, 0, '2020-06-23 11:02:41'),
	(77, 'TESOURA ESTÉRIL (PINÇA)', NULL, 'PCT/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(78, 'TINTURA DE BENJOIM SOLUÇÃO 20% (1 LT)', NULL, 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(79, 'TORNEIRA 3 VIAS ', 'DESCARPACK', 'CX/50', 0, 0, 0, '2020-06-23 11:02:41'),
	(80, 'TOUCA DESCARTÁVEL', NULL, 'PCT/100', 0, 0, 0, '2020-06-23 11:02:41'),
	(81, 'VASELINA LÍQUIDA 100% (1LT)', 'VIC PHARMA', '1LT', 0, 0, 0, '2020-06-23 11:02:41'),
	(82, 'VASELINA SOLIDA POMADA 500GRAMA', 'RIOQUIMICA', 'UND', 0, 0, 0, '2020-06-23 11:02:41'),
	(83, 'VASELINA SOLIDA POMADA 90MG', 'RIOQUIMICA', 'UND', 0, 0, 0, '2020-06-23 11:02:41');
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;

-- Copiando estrutura para tabela controle-estoque.relatorio
CREATE TABLE IF NOT EXISTS `relatorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL DEFAULT 0,
  `operacao` varchar(50) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `qntOperacao` int(11) NOT NULL DEFAULT 0,
  `qntAtual` int(11) NOT NULL DEFAULT 0,
  `medico` varchar(50) DEFAULT NULL,
  `datatime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela controle-estoque.relatorio: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `relatorio` DISABLE KEYS */;
INSERT IGNORE INTO `relatorio` (`id`, `id_usuario`, `operacao`, `produto`, `qntOperacao`, `qntAtual`, `medico`, `datatime`) VALUES
	(1, 1, 'Entrada', 'ÁCIDO ACÉTICO 3%', 500, 0, '', '0000-00-00 00:00:00'),
	(2, 1, 'Entrada', 'ÁCIDO ACÉTICO 3%', 100, 0, '', '2020-06-23 15:42:16'),
	(3, 1, 'Entrada', 'ÁCIDO ACÉTICO 3%', 500, 520, '', '2020-06-22 15:53:43'),
	(4, 1, 'Saída', 'ÁCIDO ACÉTICO 3%', 100, 420, 'Dra. Gabriela', '2020-06-23 16:32:57'),
	(5, 7, 'Entrada', 'AGULHA DESCARTÁVEL 13X4,5 (insulina)', 10, 10, '', '2020-06-23 16:57:44'),
	(6, 7, 'Saída', 'AGULHA DESCARTÁVEL 13X4,5 (insulina)', 5, 5, 'Dr. Elder', '2020-05-23 16:58:30'),
	(7, 2, 'Entrada', 'ÁCIDO ÁCETICO 5%', 10, 15, '', '2020-06-23 17:49:53');
/*!40000 ALTER TABLE `relatorio` ENABLE KEYS */;

-- Copiando estrutura para tabela controle-estoque.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela controle-estoque.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT IGNORE INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(2, 'Suporte', 'suporte@dev.com.br', '123456789');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
