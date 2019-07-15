-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jul-2019 às 07:16
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
  `indicador` varchar(30) DEFAULT NULL,
  `inscricaoestadual` varchar(20) DEFAULT NULL,
  `inscricaomunicipal` varchar(20) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `recolhimento` varchar(20) DEFAULT NULL,
  `ativo` varchar(3) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `tipot` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tipoe` varchar(10) DEFAULT NULL,
  `nomea` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `telefonea` varchar(15) DEFAULT NULL,
  `tipota` varchar(3) DEFAULT NULL,
  `emaila` varchar(30) DEFAULT NULL,
  `tipoea` int(3) DEFAULT NULL,
  `cep` varchar(14) DEFAULT NULL,
  `rua` varchar(200) DEFAULT NULL,
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

INSERT INTO `fornecedores` (`id_fornecedores`, `cnpj`, `razaosocial`, `nomefantasia`, `indicador`, `inscricaoestadual`, `inscricaomunicipal`, `situacao`, `recolhimento`, `ativo`, `telefone`, `tipot`, `email`, `tipoe`, `nomea`, `empresa`, `cargo`, `telefonea`, `tipota`, `emaila`, `tipoea`, `cep`, `rua`, `numero`, `complemento`, `bairro`, `pontoreferencia`, `uf`, `cidade`, `condominio`, `observacao`) VALUES
(1, '18515795000136', 'rafael nunes dos santos ME', 'bar do rafa', NULL, '562114', '588974545', 'ativo', NULL, NULL, '19998660798', NULL, 'rafaelnunes@homtail.', NULL, 'rafael', 'vila bar', NULL, NULL, NULL, NULL, NULL, '13084615', 'av santa isabel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'aterasdo', 'alterado', 'nunes dos santos', 'Contribuinte', '1656516', '', 'inscricaomunicipal', 'recolher', 'nao', '18665522', 'selecione', 'studiosafeway@gmail.', NULL, 'Studio Safeway', 'kiagua', 'fasdfasdf', '18665522', 'sel', 'studiosafeway@gmail.', 0, '13084030', 'Rua LuÃ­s Vicentim Sobrinho', 0, 'alterado', 'BarÃ£o Geraldo', 'fsdfsdafsd', '', 'selecione', 'Sim', 'observacao'),
(19, 'alterei', 'nova alteracao ', 'nome', 'Contribuinte', 'novo teste', 'teste', 'cancelado', 'recolher', 'sim', '19998660798', 'Comercial', 'rafaelnunes_93@hotma', NULL, 'rafael', 'kiagua', 'dono', '18665522', 'Com', 'studiosafeway@gmail.', 0, '13084030', 'Rua LuÃ­s Vicentim Sobrinho', 556, 'complemento', 'BarÃ£o Geraldo', 'alterado', '', 'selecione', 'sel', 'alterado'),
(20, '15222465115', '', '', 'Contribuinte', '', '', '', 'Contribuinte', 'Con', '', 'selecione', '', 'selecione', '', '', '', '', 'sel', '', 0, '', '', 0, '', '...', '', NULL, 'selecione', 'sel', '');

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
  MODIFY `id_fornecedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
