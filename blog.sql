-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Jan-2020 às 20:03
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `data_criado` datetime NOT NULL,
  `corpo` text NOT NULL,
  `autor` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(64, 'Maria', 'Blusa de LeÃ£o tamanho M, para dia 21/10/2020', 'b12cb6f68bdb7bd1da7c2f7514deb73a.png'),
(65, 'Rafaela 982878864', 'TÃªnis Nike Tamanho 36 colorido', '080e29b5ba1e88c0dfc5003c06b8b1c0.png'),
(67, 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI,', 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI,', '4f79ca2bce85fa91fb3e2c6f5659093a.png'),
(68, 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto', 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto', '780f553c6a3c12a0afff3a09def673da.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
