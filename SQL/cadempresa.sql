-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2020 às 02:13
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastrobludata`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadempresa`
--

CREATE TABLE `cadempresa` (
  `CODIGO` int(11) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `UF` char(20) DEFAULT NULL,
  `CNPJ` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadempresa`
--

INSERT INTO `cadempresa` (`CODIGO`, `NOME`, `UF`, `CNPJ`) VALUES
(31, 'Bludata', 'ACRE', '11.111.111/1111-11'),
(35, 'Empresa Teste', 'MATO GROSSO', '11.111.111/1111-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadempresa`
--
ALTER TABLE `cadempresa`
  ADD PRIMARY KEY (`CODIGO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadempresa`
--
ALTER TABLE `cadempresa`
  MODIFY `CODIGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
