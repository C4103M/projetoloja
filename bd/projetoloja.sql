-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/01/2024 às 01:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoloja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_produto` int(99) NOT NULL,
  `id_usuario` int(99) NOT NULL,
  `nome_produto` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id_produto`, `id_usuario`, `nome_produto`) VALUES
(79, 8, 'botao1'),
(80, 8, 'botao1'),
(81, 5, 'botao1'),
(82, 5, 'botao2'),
(83, 5, 'botao2'),
(84, 5, 'botao1'),
(120, 1, 'botao2'),
(121, 1, 'botao1'),
(122, 1, 'botao3'),
(123, 1, 'botao4'),
(124, 1, 'botao5'),
(125, 1, 'botao6'),
(138, 17, 'botao4'),
(139, 17, 'botao3'),
(140, 17, 'botao6'),
(141, 17, 'botao7'),
(142, 17, 'botao7'),
(147, 19, 'botao11'),
(148, 19, 'botao11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reclamacoes`
--

CREATE TABLE `reclamacoes` (
  `id_usuario` int(99) NOT NULL,
  `nome_usuario` varchar(99) NOT NULL,
  `email_usuario` varchar(99) NOT NULL,
  `texto_reclamacao` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `reclamacoes`
--

INSERT INTO `reclamacoes` (`id_usuario`, `nome_usuario`, `email_usuario`, `texto_reclamacao`) VALUES
(1, 'Caio Emanoel', 'c@a', 'Esse é um teste'),
(1, 'Caio Emanoel', 'c@a', 'Esse é um teste'),
(18, 'caio', 's@a', 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(99) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'Caio', 'ca@2', '202cb962ac59075b964b07152d234b70'),
(6, 'Caio', 'caio@i', '202cb962ac59075b964b07152d234b70'),
(7, 'Caio', 'p@a', '202cb962ac59075b964b07152d234b70'),
(8, 'Caio', 'r@e', '202cb962ac59075b964b07152d234b70'),
(9, 'Caio', 'c@2', '202cb962ac59075b964b07152d234b70'),
(10, 'Caio', 'c@a', '202cb962ac59075b964b07152d234b70'),
(11, 'Caio2', 'ca@21', '202cb962ac59075b964b07152d234b70'),
(12, 'joao batata', 'f@b', '202cb962ac59075b964b07152d234b70'),
(13, 'joao batata', 'f@b', '202cb962ac59075b964b07152d234b70'),
(14, 'Caio Emanoel', 'c@a', '202cb962ac59075b964b07152d234b70'),
(15, 'Caio', 'r@e', '202cb962ac59075b964b07152d234b70'),
(16, 'Caio', 'c@a', '202cb962ac59075b964b07152d234b70'),
(17, 'João ', 'j@b', '202cb962ac59075b964b07152d234b70'),
(18, 'caio', 's@a', '202cb962ac59075b964b07152d234b70'),
(19, 'caio', 'c@e', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_produto` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
