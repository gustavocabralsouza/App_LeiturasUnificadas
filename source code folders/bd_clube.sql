-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2019 às 01:06
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_clube`
--
CREATE DATABASE IF NOT EXISTS `bd_clube` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_clube`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE `amigos` (
  `cod_amigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_mae` varchar(50) NOT NULL,
  `fone` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`cod_amigo`, `nome`, `nome_mae`, `fone`, `tipo`) VALUES
(1, 'João Vitor', 'Roselia', '11932651524', 'predio'),
(2, 'Pedro Hugo', 'Ana', '11912356482', 'predio'),
(3, 'Lucas', 'Maria', '11946415324', 'predio'),
(4, 'Gustavo', 'Rose', '11979462486', 'rua'),
(5, 'Matheus', 'Amanda', '11996595475', 'rua'),
(6, 'Joana', 'Lais', '11996832145', 'escola'),
(7, 'Maria', 'Karina', '11954624563', 'escola'),
(8, 'Fernanda', 'Giuliana', '11946235154', 'igreja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `num_cai` int(11) NOT NULL,
  `cor` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`num_cai`, `cor`) VALUES
(1, 'Vermelha'),
(2, 'Rosa'),
(3, 'Azul'),
(4, 'Verde'),
(5, 'Amarela');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `cod_amigo` int(11) NOT NULL,
  `cod_revista` int(11) NOT NULL,
  `dta_emp` date NOT NULL,
  `dta_dev` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`cod_amigo`, `cod_revista`, `dta_emp`, `dta_dev`) VALUES
(1, 1, '2019-11-09', '2019-12-01'),
(2, 2, '2019-11-09', '2019-12-01'),
(3, 4, '2019-11-09', '2019-12-01'),
(4, 5, '2019-11-09', '2019-12-01'),
(5, 6, '2019-11-09', '2019-12-01'),
(6, 7, '2019-11-09', '2019-12-01'),
(7, 8, '2019-11-09', '2019-12-01'),
(8, 10, '2019-11-09', '2019-12-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `revista`
--

CREATE TABLE `revista` (
  `cod_revista` int(11) NOT NULL,
  `colecao` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `edicao` varchar(15) NOT NULL,
  `localizacao` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `revista`
--

INSERT INTO `revista` (`cod_revista`, `colecao`, `nome`, `ano`, `edicao`, `localizacao`) VALUES
(1, 'Homem-Aranha', 'Homem-Aranha vs Venom', '2005', 'Primeira', 1),
(2, 'Homem-Aranha', 'A morte do Aranha', '1975', 'Setima', 1),
(3, 'Vingadores', 'Guerra Infinita', '2018', 'Terceira', 2),
(4, 'Vingadores', 'Guerra Civil', '2003', 'Segunda', 3),
(5, 'X-Men', 'Fenix Negra', '1964', 'Quarta', 3),
(6, 'Superman', 'A morte do Superman', '1990', 'Sexta', 4),
(7, 'Batman', 'A piada Mortal', '2000', 'Nona', 4),
(8, 'Mulher Maravilha', 'Caçadora de Deuses', '2019', 'Terceira', 5),
(9, 'Batman', 'O Batman que Ri', '2019', 'Primeira', 5),
(10, 'Flash', 'Flashpoint', '2007', 'Segunda', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`cod_amigo`);

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`num_cai`);
  
--
-- Indexes for table `revista`
--
ALTER TABLE `revista`
  ADD PRIMARY KEY (`cod_revista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
