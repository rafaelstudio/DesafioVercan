-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jul-2019 às 16:15
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafiovercan`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedores` int(11) NOT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `razaosocial` varchar(100) DEFAULT NULL,
  `nomefantasia` varchar(100) DEFAULT NULL,
  `indicador` varchar(20) DEFAULT NULL,
  `inscricaoestadual` varchar(20) DEFAULT NULL,
  `inscricaomunicipal` varchar(20) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `recolhimento` varchar(20) DEFAULT NULL,
  `ativo` varchar(3) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `tipot` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `tipoe` varchar(10) DEFAULT NULL,
  `nomea` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `telefonea` varchar(15) DEFAULT NULL,
  `tipota` varchar(3) DEFAULT NULL,
  `emaila` varchar(20) DEFAULT NULL,
  `tipoea` int(3) DEFAULT NULL,
  `cep` varchar(14) DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `pontoreferencia` varchar(50) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `condominio` varchar(3) DEFAULT NULL,
  `observacao` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_fornecedores`, `cnpj`, `razaosocial`, `nomefantasia`, `indicador`, `inscricaoestadual`, `inscricaomunicipal`, `situacao`, `recolhimento`, `ativo`, `telefone`, `tipot`, `email`, `tipoe`, `nomea`, `empresa`, `cargo`, `telefonea`, `tipota`, `emaila`, `tipoea`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `pontoreferencia`, `uf`, `cidade`, `condominio`, `observacao`) VALUES
(1, '18515795000136', 'rafael nunes dos santos ME', 'bar do rafa', NULL, '562114', '588974545', 'ativo', NULL, NULL, '19998660798', NULL, 'rafaelnunes@homtail.', NULL, 'rafael', 'vila bar', NULL, NULL, NULL, NULL, NULL, '13084615', 'av santa isabel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '18515795000136', 'rafael nunes dos santos ME', 'bar do rafa', NULL, '562114', '588974545', 'ativo', NULL, NULL, '19998660798', NULL, 'rafaeunes@homtail.co', NULL, 'rafael', 'vila bar', NULL, NULL, NULL, NULL, NULL, '13084615', 'av santa isabel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`) VALUES
(1, 'desafio@vercan.com.br', 'desafio@vercan', 'Candidato Rafael Nunes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedores`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
