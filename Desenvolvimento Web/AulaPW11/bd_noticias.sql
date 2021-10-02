-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.20-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para bd_noticias
DROP DATABASE IF EXISTS `bd_noticias`;
CREATE DATABASE IF NOT EXISTS `bd_noticias` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_noticias`;

-- Copiando estrutura para tabela bd_noticias.noticia
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `data_expirar` datetime NOT NULL DEFAULT current_timestamp(),
  `situacao` char(1) NOT NULL DEFAULT 'I',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_noticias.noticia: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`id`, `id_usuario`, `titulo`, `descricao`, `foto`, `data_cadastro`, `data_expirar`, `situacao`) VALUES
	(1, 3, 'Lançamento do Windows 11', 'O Windows 11 será lançado em Novembro de 2021', 'windows.jpg', '2021-09-17 22:30:12', '2021-09-17 22:30:12', 'A'),
	(2, 1, 'Lançamento do Linux Mint 20.04', 'O Linux foi lançado no 2º semestre de 2021...', 'linux.png', '2021-09-17 22:30:12', '2021-09-17 22:30:12', 'A'),
	(3, 1, 'Lançamento do IOS', 'O Mac IO\'s foi lançado no 2º semestre de 2021...', 'apple.jpg', '2021-09-17 22:30:12', '2021-09-17 22:30:12', 'A');
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_noticias.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` char(1) NOT NULL DEFAULT 'U',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_noticias.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
	(1, 'Admin', 'admin@local.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'A'),
	(2, 'Moderador', 'moderador@local.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'M'),
	(3, 'Usuário', 'usuario@local.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'U');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
