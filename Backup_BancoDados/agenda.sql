-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2021 às 15:46
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: desafio
--

-- --------------------------------------------------------

--
-- Estrutura da tabela agenda
--

CREATE TABLE agenda (
  codigo int(11) NOT NULL,
  data date DEFAULT NULL,
  hora time DEFAULT NULL,
  local varchar(30) DEFAULT NULL,
  eventos varchar(30) DEFAULT NULL,
  atividades varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela agenda
--

INSERT INTO agenda (codigo, data, hora, local, eventos, atividades) VALUES
(1, '0000-00-00', '00:00:13', 'Bauru', 'IA', 'IA'),
(2, '0000-00-00', '15:14:00', 'Lins', 'Palestra', 'Arte'),
(3, '0000-00-00', '21:02:20', 'Duartina', 'Palestra', 'Meteoros'),
(4, '0000-00-00', '21:02:20', 'Macatuba', 'Palestra', 'Fisica Quantica'),
(5, '0000-00-00', '16:10:15', 'Bauru', 'Show', 'Musica'),
(6, '0000-00-00', '25:30:00', 'Lupercio', 'Show', 'Sertanejo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela agenda
--
ALTER TABLE agenda
  ADD PRIMARY KEY (codigo);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela agenda
--
ALTER TABLE agenda
  MODIFY codigo int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
