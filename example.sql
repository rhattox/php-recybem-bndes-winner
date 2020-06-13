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
  `idComunidade` int(6) NOT NULL,
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
  `reciclavel_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `idEmpresa` int(6) NOT NULL,
  `cnpj` varchar(99) NOT NULL,
  `cep` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `senha` varchar(99) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reciclaveis`
--

CREATE TABLE `reciclaveis` (
  `idReciclavel` int(6) NOT NULL,
  `reciclavelNome` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(6) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `cpf` varchar(99) NOT NULL,
  `cep` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `senha` varchar(99) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`idComunidade`);

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
  ADD PRIMARY KEY (`idEmpresa`);

--
-- Indexes for table `reciclaveis`
--
ALTER TABLE `reciclaveis`
  ADD PRIMARY KEY (`idReciclavel`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `idComunidade` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idEmpresa` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reciclaveis`
--
ALTER TABLE `reciclaveis`
  MODIFY `idReciclavel` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk01` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk02` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`idEmpresa`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk03` FOREIGN KEY (`comunidade_id`) REFERENCES `comunidades` (`idComunidade`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk04` FOREIGN KEY (`reciclavel_id`) REFERENCES `reciclaveis` (`idReciclavel`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
