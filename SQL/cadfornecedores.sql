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
-- Estrutura da tabela `cadfornecedores`
--

CREATE TABLE `cadfornecedores` (
  `CODFOr` int(11) NOT NULL,
  `NOMEFANTASIA` varchar(40) NOT NULL,
  `NOME` varchar(40) NOT NULL,
  `CPF` varchar(18) NOT NULL,
  `TIPO` varchar(8) DEFAULT NULL,
  `RG` varchar(20) DEFAULT NULL,
  `DATACAD` varchar(10) DEFAULT NULL,
  `HORACAD` varchar(8) DEFAULT NULL,
  `TELEFONE1` varchar(15) DEFAULT NULL,
  `TELEFONE2` varchar(15) DEFAULT NULL,
  `TELEFONE3` varchar(15) DEFAULT NULL,
  `DATANASCIMENTO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadfornecedores`
--

INSERT INTO `cadfornecedores` (`CODFOr`, `NOMEFANTASIA`, `NOME`, `CPF`, `TIPO`, `RG`, `DATACAD`, `HORACAD`, `TELEFONE1`, `TELEFONE2`, `TELEFONE3`, `DATANASCIMENTO`) VALUES
(36, 'BludaTa', 'Carlos Daniel', '11.111.111/1111-11', 'Jurídica', '', '17-11-2020', '19:54:18', '(47) 90000-0000', '', '', ''),
(37, 'Md Sistemas', 'José Agusto', '22.222.222/2222-22', 'Jurídica', '', '17-11-2020', '19:56:49', '(47) 90000-0001', '', '', ''),
(38, 'RZ sistemas', 'David Jesus', '333.333.333-33', 'Física', '11111111111', '17-11-2020', '20:00:22', '(47) 90000-0002', '(47) 90000-0003', '', '2000-07-08'),
(39, 'Jr Sistemas', 'Pedro Enrique', '44.444.444/4444-44', 'Jurídica', '', '17-11-2020', '20:01:45', '(47) 90000-0003', '', '', ''),
(42, 'BludaTa', 'David Jesus', '111.111.111-11', 'Jurídica', '', '17-11-2020', '21:25:26', '(47) 90000-0000', '', '', ''),
(45, 'Senai', 'David de Jesus', '11.111.111/1111-11', 'Jurídica', '', '17-11-2020', '21:36:36', '(47) 70000-0000', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadfornecedores`
--
ALTER TABLE `cadfornecedores`
  ADD PRIMARY KEY (`CODFOr`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadfornecedores`
--
ALTER TABLE `cadfornecedores`
  MODIFY `CODFOr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
