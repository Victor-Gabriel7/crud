-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07/11/2022 às 20:39
-- Versão do servidor: 8.0.31-0ubuntu0.22.04.1
-- Versão do PHP: 8.1.2-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cli`
--

CREATE TABLE `cli` (
  `id` int NOT NULL,
  `nome_cli` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cli`
--

INSERT INTO `cli` (`id`, `nome_cli`, `email`) VALUES
(16, 'Raquel da silva ', 'silva@gmail.com'),
(19, 'Pedro Miranda', 'pedro@gmail.com'),
(20, 'Ingrid Silva', 'ingrid@gmail.com'),
(22, 'Pedro Miranda Barbosa', 'pedro@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cli`
--
ALTER TABLE `cli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cli`
--
ALTER TABLE `cli`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
