-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Out-2017 às 00:55
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_politizese`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd`
--

CREATE TABLE `bd` (
  `Nome` varchar(50) NOT NULL,
  `Idade` varchar(50) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `CorRaça` varchar(50) NOT NULL,
  `Espectro econômico` varchar(50) NOT NULL,
  `Espectro social` varchar(50) NOT NULL,
  `Tipo de governo` varchar(50) NOT NULL,
  `Sistema pol. econ.` varchar(50) NOT NULL,
  `Religião e política 1` varchar(50) NOT NULL,
  `Religião e política 2` varchar(50) NOT NULL,
  `Sistema eleitoral` varchar(50) NOT NULL,
  `Voto eleitoral` varchar(50) NOT NULL,
  `Meu partido` varchar(50) NOT NULL,
  `Meu candidato` varchar(50) NOT NULL,
  `Simulação de voto` varchar(50) NOT NULL
 
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
