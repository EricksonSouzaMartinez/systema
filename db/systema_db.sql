-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/10/2018 às 00:13
-- Versão do servidor: 10.1.36-MariaDB
-- Versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `systema`
--
CREATE DATABASE IF NOT EXISTS `systema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `systema`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Clientes`
--

CREATE TABLE `Clientes` (
  `IDPessoa` int(10) UNSIGNED NOT NULL,
  `Senha` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Pessoas`
--

CREATE TABLE `Pessoas` (
  `IDPessoa` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Telefone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuarios`
--

CREATE TABLE `Usuarios` (
  `IDPessoa` int(10) UNSIGNED NOT NULL,
  `Senha` varchar(20) DEFAULT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`IDPessoa`);

--
-- Índices de tabela `Pessoas`
--
ALTER TABLE `Pessoas`
  ADD PRIMARY KEY (`IDPessoa`),
  ADD UNIQUE KEY `IDPessoa` (`IDPessoa`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`IDPessoa`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Pessoas`
--
ALTER TABLE `Pessoas`
  MODIFY `IDPessoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `Clientes`
--
ALTER TABLE `Clientes`
  ADD CONSTRAINT `Pessoa_Cliente_FK` FOREIGN KEY (`IDPessoa`) REFERENCES `Pessoas` (`IDPessoa`);

--
-- Restrições para tabelas `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `Pessoa_Funcionario_FK` FOREIGN KEY (`IDPessoa`) REFERENCES `Pessoas` (`IDPessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
