-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Set-2021 às 23:00
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

DROP TABLE IF EXISTS `receita`;
CREATE TABLE IF NOT EXISTS `receita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `titulo` varchar(55) NOT NULL,
  `descricao` text NOT NULL,
  `preparo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`id`, `email`, `nome`, `titulo`, `descricao`, `preparo`) VALUES
(1, 'teste@teste', 'pedro', 'bolo maluco', 'bolo maluco é a receita mais alucinada que você vai ver hoje', 'misture tudo e leve ao micro-ondas por 1 minuto e meio, deixe descansar na geladeira por alguns segundos e depois é só comer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
