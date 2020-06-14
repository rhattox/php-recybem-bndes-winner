-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 13-Jun-2020 às 19:16
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunidades`
--

CREATE TABLE `comunidades` (
  `comunidadeId` int(6) NOT NULL,
  `comunidadeNome` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `usuario_id` int(6) DEFAULT NULL,
  `empresa_id` int(6) DEFAULT NULL,
  `comunidade_id` int(6) DEFAULT NULL,
  `reciclavel_id` int(6) DEFAULT NULL,
  `valorDoacao` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `empresaID` int(6) NOT NULL,
  `empresaCnpj` varchar(99) NOT NULL,
  `empresaNome` varchar(99) NOT NULL,
  `empresaCEP` varchar(99) NOT NULL,
  `empresaEmail` varchar(99) NOT NULL,
  `empresaSenha` varchar(99) NOT NULL,
  `empresa_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reciclaveis`
--

CREATE TABLE `reciclaveis` (
  `reciclavelId` int(6) NOT NULL,
  `reciclavelNome` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuarioId` int(6) NOT NULL,
  `usuarioNome` varchar(30) NOT NULL,
  `usuarioSobre` varchar(30) NOT NULL,
  `usuarioCpf` varchar(99) NOT NULL,
  `usuarioCep` varchar(99) NOT NULL,
  `usuarioEmail` varchar(99) NOT NULL,
  `usuarioSenha` varchar(99) NOT NULL,
  `usuario_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`comunidadeId`);

--
-- Indexes for table `doacao`
--
ALTER TABLE `doacao`
  ADD KEY `fk01` (`usuario_id`),
  ADD KEY `fk02` (`empresa_id`),
  ADD KEY `fk03` (`comunidade_id`),
  ADD KEY `fk04` (`reciclavel_id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresaId`);

--
-- Indexes for table `reciclaveis`
--
ALTER TABLE `reciclaveis`
  ADD PRIMARY KEY (`reciclavelId`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `comunidadeId` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresaId` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reciclaveis`
--
ALTER TABLE `reciclaveis`
  MODIFY `reciclavelId` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioId` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk01` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuarioId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk02` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`empresaId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk03` FOREIGN KEY (`comunidade_id`) REFERENCES `comunidades` (`comunidadeId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk04` FOREIGN KEY (`reciclavel_id`) REFERENCES `reciclaveis` (`reciclavelId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
