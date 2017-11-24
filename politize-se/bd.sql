-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2017 às 21:03
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `politizese`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd`
--

CREATE TABLE `bd` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `Idade` varchar(50) NOT NULL,
  `Licao1` varchar(50) NOT NULL,
  `Licao2` varchar(50) NOT NULL,
  `Licao3` varchar(50) NOT NULL,
  `Licao4` varchar(50) NOT NULL,
  `Licao5` varchar(80) NOT NULL,
  `Licao6` varchar(50) NOT NULL,
  `Partido` varchar(50) NOT NULL,
  `Candidato` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bd`
--

INSERT INTO `bd` (`ID`, `Nome`, `Sexo`, `Idade`, `Licao1`, `Licao2`, `Licao3`, `Licao4`, `Licao5`, `Licao6`, `Partido`, `Candidato`) VALUES
(1, 'Rafaela', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(2, 'Clara', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(3, 'Fernando', 'Masculino', '25 a 29 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(4, 'Silvia', 'Feminino', '18 a 24 anos', 'Direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(5, 'Bruno', 'Masculino', 'Menor de 17 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Ciro Gomes'),
(6, 'Ana Paula', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(7, 'Camila', 'Feminino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(8, 'Sheila', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(9, 'Paulo', 'Masculino', '25 a 29 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'DEM', 'AÃ©cio Neves'),
(10, 'Gabriel', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(11, 'Aline', 'Feminino', '25 a 29 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(12, 'Ãlvaro', 'Masculino', 'Menor de 17 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(13, 'PatrÃ­cia', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(14, 'Heloisa', 'Feminino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(15, 'Ana Luisa', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PT', 'Lula'),
(16, 'Geovana', 'Feminino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(17, 'Isabela', 'Feminino', 'Menor de 17 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Marina Silva'),
(18, 'Gilmar', 'Masculino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(19, 'Luiz', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(20, 'JoÃ£o Victor', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(21, 'Fabiana', 'Feminino', '25 a 29 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(22, 'RogÃ©rio', 'Masculino', '30 a 34 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PMDB', 'JoÃ£o Doria'),
(23, 'Juliana', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'NÃ£o hÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(24, 'Eliana', 'Feminino', '30 a 34 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(25, 'Eduarda', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Marina Silva'),
(26, 'Alessandra', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(27, 'Miguel', 'Masculino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(28, 'Lucas', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(29, 'Laura', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(30, 'Sophia', 'Feminino', '18 a 24 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(31, 'VictÃ³ria', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(32, 'JÃºlia', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(33, 'Davi', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(34, 'Larissa', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PMDB', 'JoÃ£o Doria'),
(35, 'Matheus', 'Masculino', '25 a 29 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(36, 'ClÃ¡udio', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(37, 'Amanda', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(38, 'Diego', 'Masculino', 'Menor de 17 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(39, 'LetÃ­cia', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(40, 'Mariana', 'Feminino', '25 a 29 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(41, 'Leonardo', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(42, 'Gustavo', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(43, 'Henrique', 'Masculino', '25 a 29 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(44, 'Lara', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Marina Silva'),
(45, 'VinÃ­cios', 'Masculino', '18 a 24 anos', 'Direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(46, 'Carolina', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(47, 'Elisa', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(48, 'JoÃ£o', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(49, 'Marcos', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(50, 'Manuela', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PR', 'Marina Silva'),
(51, 'Arthur', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(52, 'Beatriz', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(53, 'Isadora', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(54, 'MaurÃ­cio', 'Masculino', '18 a 24 anos', 'Direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(55, 'Felipe', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(56, 'Gabriela', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(57, 'Helena', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(58, 'Alice', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(59, 'Rafael', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(60, 'Emily', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(61, 'AntÃ´nio', 'Masculino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(63, 'Sara', 'Feminino', 'Menor de 17 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(64, 'Luiza', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Marina Silva'),
(65, 'Isabela', 'Feminino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(66, 'Camila', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(67, 'Yan', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(68, 'Laura', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Fernando Haddad'),
(69, 'Silene', 'Feminino', 'Maior de 40 anos', 'Centro-esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Geraldo Alckmin'),
(70, 'Joaquim', 'Masculino', 'Maior de 40 anos', 'Direita', 'Direita', 'Monarquia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(71, 'Eilane', 'Feminino', 'Maior de 40 anos', 'Centro-esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(72, 'Claudia', 'Feminino', '35 a 39 anos', 'Centro', 'Centro-direita', 'Monarquia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(73, 'Argerlio', 'Masculino', '35 a 39 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(74, 'Angela', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(75, 'Maria', 'Feminino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(76, 'Simone', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Fernando Haddad'),
(77, 'Alzira', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(78, 'Carmem', 'Feminino', '35 a 39 anos', 'Direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NOVO', 'Joaquim Barbosa'),
(79, 'Yoona', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NOVO', 'Joaquim Barbosa'),
(80, 'Mateus', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(81, 'Gean', 'Masculino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Ciro Gomes'),
(82, 'Milena', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(83, 'Oswaldo', 'Masculino', 'Maior de 40 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PT', 'Lula'),
(84, 'Ana', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Alvaro Dias'),
(85, 'Joana', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(86, 'Madalena', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(87, 'Wantuir', 'Masculino', 'Maior de 40 anos', 'Centro-esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;\n', 'Marina Silva'),
(88, 'Mirian', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Geraldo Alckmin'),
(89, 'Cintia', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(90, 'Yasmin', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PR', 'Marina Silva'),
(91, 'Mirtes', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(92, 'Livia', 'Feminino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PT', 'Lula'),
(93, 'Jorge', 'Masculino', '30 a 34 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Fernando Haddad'),
(94, 'Fausto', 'Masculino', 'Maior de 40 anos', 'Esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Alvaro Dias'),
(95, 'Arthur', 'Masculino', '30 a 34 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(96, 'JoÃ£o', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NOVO', 'Joaquim Barbosa'),
(97, 'Daiane', 'Feminino', '30 a 34 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(98, 'Bruna', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(99, 'Cassandra', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(100, 'JosÃ©', 'Masculino', 'Maior de 40 anos', 'Esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Alvaro Dias'),
(101, 'Diorgines', 'Masculino', 'Maior de 40 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PT', 'Lula'),
(102, 'Geralda', 'Feminino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(103, 'Hugo', 'Masculino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(104, 'Karina', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(105, 'Isadora', 'Feminino', '18 a 24 anos', 'Direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PR', 'Marina Silva'),
(106, 'Carla', 'Feminino', '30 a 34 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(62, 'Cristian', 'Masculino', 'Menor de 17 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(107, 'Vanessa', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(108, 'Rodrigo', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(109, 'Roberto', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(110, 'Pamela', 'Feminino', '25 a 29 anos', 'Centro-direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(150, 'Raissa', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(149, 'Olivia', 'Feminino', '18 a 24 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(148, 'Joice', 'Feminino', '25 a 29 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(147, 'Wanessa', 'Feminino', '18 a 24 anos', 'Centro-direita', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(146, 'Jordana', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(145, 'Tamires', 'Feminino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(144, 'Ludimila', 'Feminino', '18 a 24 anos', 'Centro', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(143, 'Luisa', 'Feminino', 'Menor de 17 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(142, 'Jessi', 'Feminino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(141, 'Geisse', 'Feminino', '30 a 34 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(140, 'Carmem', 'Feminino', '18 a 24 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Socialismo', 'NÃ£o hÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(139, 'Junior', 'Masculino', '18 a 24 anos', 'Direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(138, 'LÃºcio', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(137, 'Talita', 'Feminino', '18 a 24 anos', 'Esquerda', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(136, 'Leandro', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(135, 'Luciana', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(134, 'LÃºcia', 'Feminino', '25 a 29 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(133, 'Luciano', 'Masculino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(132, 'RaflÃ©sia', 'Feminino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(131, 'JÃºlio', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(130, 'Poliana', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(129, 'Claudiane', 'Feminino', '35 a 39 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Marina Silva'),
(128, 'Joyce', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PT', 'Lula'),
(127, 'Fernanda', 'Feminino', '25 a 29 anos', 'Centro', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(125, 'FÃ¡bio', 'Masculino', '18 a 24 anos', 'Centro-esquerda', 'Esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(126, 'Carlos', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(124, 'SÃ¡vio', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(123, 'Alison', 'Masculino', '25 a 29 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(122, 'Priscila', 'Feminino', '25 a 29 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(121, 'Raphaela', 'Feminino', '18 a 24 anos', 'Centro', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(120, 'Juliano', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PSDB', 'AÃ©cio Neves'),
(119, 'Jorge', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(118, 'Breno', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(117, 'Ana Caroline', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(115, 'Alessandro', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(116, 'Alana', 'Feminino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(114, 'Roberta', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(113, 'Paula', 'Feminino', '25 a 29 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(112, 'Eduardo', 'Masculino', '18 a 24 anos', 'Esquerda', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(111, 'Guilherme', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(151, 'Fernanda', 'Feminino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(152, 'Linda', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'ObrigatÃ³rio', 'PT', 'Lula'),
(153, 'Tiffany', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(154, 'Joseph', 'Masculino', '30 a 34 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PR', 'Marina Silva'),
(155, 'Aline', 'Feminino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(156, 'Diana', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(157, 'Sysley', 'Feminino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(158, 'Mark', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(159, 'Jackson', 'Masculino', '25 a 29 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(160, 'Luzia', 'Feminino', 'Maior de 40 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'PSC', 'Jair Bolsonaro'),
(161, 'Maura', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Centro-direita', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(162, 'Jair', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(163, 'Zenaide', 'Feminino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Monarquia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(164, 'Lana', 'Feminino', '30 a 34 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(165, 'MaÃ­ra', 'Feminino', 'Menor de 17 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(166, 'Alencar', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(167, 'Higor', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(168, 'Luciana', 'Feminino', '30 a 34 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PR', 'Marina Silva'),
(169, 'Marvin', 'Masculino', '18 a 24 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(170, 'Natanael', 'Masculino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'AÃ©cio Neves'),
(171, 'Mariane', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(172, 'Ariel', 'Feminino', 'Maior de 40 anos', 'Direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(173, 'Arnaldo', 'Masculino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(174, 'Arminda', 'Feminino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(175, 'Simoni', 'Feminino', '30 a 34 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(176, 'Marley', 'Masculino', '25 a 29 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PR', 'Marina Silva'),
(177, 'Yago', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(178, 'Fagner', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(179, 'Alice ', 'Feminino', '18 a 24 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(180, 'Viviane', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(181, 'Yanca', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(182, 'Esmeralda', 'Feminino', 'Maior de 40 anos', 'Centro', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(183, 'Bianca', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(184, 'Regina', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(185, 'Zilda', 'Feminino', 'Maior de 40 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'REDE', 'Marina Silva'),
(186, 'Geraldo', 'Masculino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'AÃ©cio Neves'),
(187, 'Ricardo', 'Masculino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(188, 'Matheus', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(189, 'Claudio', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(190, 'Bryan', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(191, 'Judas', 'Masculino', 'Maior de 40 anos', 'Centro-direita', 'Direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro'),
(192, 'Carlos', 'Masculino', '25 a 29 anos', 'Esquerda', 'Esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PT', 'Lula'),
(193, 'Vinicius', 'Masculino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(194, 'Jonatas', 'Masculino', '18 a 24 anos', 'Centro-esquerda', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Lula'),
(195, 'James', 'Masculino', '25 a 29 anos', 'Centro-direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSC', 'Jair Bolsonaro'),
(196, 'Dagmar', 'Feminino', '25 a 29 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(197, 'Jessica', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Democracia', 'Socialismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'PSDB', 'JoÃ£o Doria'),
(198, 'Nanda', 'Feminino', '18 a 24 anos', 'Centro', 'Centro-esquerda', 'Monarquia', 'Socialismo', 'NÃ£o hÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'JoÃ£o Doria'),
(199, 'Diogo', 'Masculino', '18 a 24 anos', 'Centro-direita', 'Centro-esquerda', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, discordo que tenha que haver;', 'Facultativo', 'NÃ£o me identifico com nenhum partido;', 'Joaquim Barbosa'),
(200, 'Yago', 'Masculino', '18 a 24 anos', 'Direita', 'Centro-direita', 'Democracia', 'Capitalismo', 'HÃ¡ interferÃªncia, concordo que tenha que haver;', 'ObrigatÃ³rio', 'NÃ£o me identifico com nenhum partido;', 'Jair Bolsonaro');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd`
--
ALTER TABLE `bd`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bd`
--
ALTER TABLE `bd`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
