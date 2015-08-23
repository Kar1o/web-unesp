-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2013 at 01:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_projeto`
--
CREATE DATABASE IF NOT EXISTS `bd_projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_projeto`;

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `DDDtel` int(2) NOT NULL,
  `telefone` int(10) NOT NULL,
  `DDDcel` int(2) NOT NULL,
  `celular` int(10) NOT NULL,
  `msg` blob NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`cod`, `nome`, `empresa`, `email`, `DDDtel`, `telefone`, `DDDcel`, `celular`, `msg`) VALUES
(12, 'qwe', 'qwe', 'asd@asd', 22, 2222222, 22, 222222, 0x736373656463736576),
(13, 'zxcv', 'zxcv', 'asd@asd', 11, 11111, 11, 1111, 0x736466617363726576),
(14, 'zxcv', 'zxcv', 'asd@asd', 11, 11111, 11, 1111, 0x736466617363726576);

-- --------------------------------------------------------

--
-- Table structure for table `orcamento`
--

CREATE TABLE IF NOT EXISTS `orcamento` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `DDDTel` int(2) NOT NULL,
  `telefone` int(10) NOT NULL,
  `DDDcel` int(2) NOT NULL,
  `celular` int(10) NOT NULL,
  `motivo` varchar(15) NOT NULL,
  `veiculo` varchar(20) NOT NULL,
  `datas` varchar(12) NOT NULL,
  `horas` int(2) NOT NULL,
  `datar` varchar(12) NOT NULL,
  `horar` int(2) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orcamento`
--

INSERT INTO `orcamento` (`cod`, `nome`, `empresa`, `email`, `DDDTel`, `telefone`, `DDDcel`, `celular`, `motivo`, `veiculo`, `datas`, `horas`, `datar`, `horar`) VALUES
(4, 'asd', 'asd', 'asd@asd', 11, 111, 11, 1111, 'Trabalho', 'carro', '10/03/2013', 10, '10/04/2013', 13),
(5, 'asd', 'asd', 'asd@asd', 11, 111, 11, 1111, 'Trabalho', 'carro', '10/03/2013', 10, '10/04/2013', 13);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
