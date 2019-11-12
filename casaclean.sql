-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Nov-2019 às 14:54
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casaclean`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

DROP TABLE IF EXISTS `bairro`;
CREATE TABLE IF NOT EXISTS `bairro` (
  `CodigoBairro` smallint(6) NOT NULL AUTO_INCREMENT,
  `NomeBairro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoCidade` smallint(6) NOT NULL,
  PRIMARY KEY (`CodigoBairro`),
  KEY `cidade_bairro_fk` (`CodigoCidade`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadespecialdiade`
--

DROP TABLE IF EXISTS `cadespecialdiade`;
CREATE TABLE IF NOT EXISTS `cadespecialdiade` (
  `CodigoEspecialidade` tinyint(4) NOT NULL,
  `CodigoTipoServico` tinyint(4) NOT NULL,
  `NomeEspecialidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Descricao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Especificacao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CodigoEspecialidade`,`CodigoTipoServico`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

DROP TABLE IF EXISTS `cidade`;
CREATE TABLE IF NOT EXISTS `cidade` (
  `CodigoCidade` smallint(6) NOT NULL AUTO_INCREMENT,
  `NomeCidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoUF` smallint(6) NOT NULL,
  PRIMARY KEY (`CodigoCidade`),
  KEY `uf_cidade_fk` (`CodigoUF`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `CodigoCliente` int(11) NOT NULL,
  `CodigoPessoa` smallint(6) NOT NULL,
  PRIMARY KEY (`CodigoCliente`,`CodigoPessoa`),
  KEY `pessoa_cliente_fk` (`CodigoPessoa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `CodigoContato` tinyint(4) NOT NULL,
  `CodigoCliente` int(11) NOT NULL,
  `Nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Telefone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `CampoTexto` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CodigoContato`,`CodigoCliente`),
  KEY `cliente_contato_fk` (`CodigoCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `CodigoEndereco` smallint(6) NOT NULL AUTO_INCREMENT,
  `CEP` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `Complemento` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Numero` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Logradouro` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CodigoEndereco`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`CodigoEndereco`, `CEP`, `Complemento`, `Numero`, `Bairro`, `Logradouro`, `estado`) VALUES
(1, '38474028', '23', '12', 'tal', 'blablabla', ''),
(2, '38474028', '23', '12', 'tal', 'blablabla', ''),
(3, '123456', '22', '12', 'tal', 'Rua 123', 'MG'),
(4, '123456', '22', '12', 'tal', 'Rua 123', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
CREATE TABLE IF NOT EXISTS `especialidade` (
  `CodigoEspecialidade` tinyint(4) NOT NULL,
  `CodigoTipoServico` tinyint(4) NOT NULL,
  `Descricao` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `HoraCobrada` decimal(10,0) NOT NULL,
  PRIMARY KEY (`CodigoEspecialidade`,`CodigoTipoServico`),
  KEY `tiposervico_especialidade_fk` (`CodigoTipoServico`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `CodigoFeedback` int(11) NOT NULL AUTO_INCREMENT,
  `Comentario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Nota` tinyint(4) NOT NULL,
  `CodigoParceiro` tinyint(4) NOT NULL,
  `CodigoCliente` int(11) NOT NULL,
  `IdServico` tinyint(4) NOT NULL,
  `IdSolicitacao` smallint(6) NOT NULL,
  PRIMARY KEY (`CodigoFeedback`),
  KEY `solicitaservico_feedback_fk` (`IdServico`,`IdSolicitacao`,`CodigoParceiro`,`CodigoCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiro`
--

DROP TABLE IF EXISTS `parceiro`;
CREATE TABLE IF NOT EXISTS `parceiro` (
  `CodigoParceiro` tinyint(4) NOT NULL,
  `CodigoPessoa` smallint(6) NOT NULL,
  `Telefone` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Salario` decimal(10,0) NOT NULL,
  `Documentacao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoEspecialidade` tinyint(4) NOT NULL,
  PRIMARY KEY (`CodigoParceiro`,`CodigoPessoa`),
  KEY `pessoa_parceiro_fk` (`CodigoPessoa`),
  KEY `especialidade_medico_fk` (`CodigoEspecialidade`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `CodigoPessoa` smallint(6) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CPF` int(11) NOT NULL,
  `RG` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `CodigoEndereco` smallint(6) NOT NULL,
  PRIMARY KEY (`CodigoPessoa`),
  KEY `endereco_pessoa_fk` (`CodigoEndereco`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servio`
--

DROP TABLE IF EXISTS `servio`;
CREATE TABLE IF NOT EXISTS `servio` (
  `CodigoParceiro` tinyint(4) NOT NULL,
  `CodigoCliente` int(11) NOT NULL,
  `IdServico` tinyint(4) NOT NULL AUTO_INCREMENT,
  `DataServio` date NOT NULL,
  `HoraInicio` time NOT NULL,
  `Valor` double NOT NULL,
  `HoraFim` time DEFAULT NULL,
  `CodigoTipoServico` tinyint(4) NOT NULL,
  PRIMARY KEY (`CodigoParceiro`,`CodigoCliente`,`IdServico`),
  KEY `tiposervico_servi?o_fk` (`CodigoTipoServico`),
  KEY `paciente_consulta_fk` (`CodigoCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitaservico`
--

DROP TABLE IF EXISTS `solicitaservico`;
CREATE TABLE IF NOT EXISTS `solicitaservico` (
  `CodigoParceiro` tinyint(4) NOT NULL,
  `CodigoCliente` int(11) NOT NULL,
  `IdServico` tinyint(4) NOT NULL,
  `IdSolicitacao` smallint(6) NOT NULL AUTO_INCREMENT,
  `SequenciaServicos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Observacao` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CodigoParceiro`,`CodigoCliente`,`IdServico`,`IdSolicitacao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoendereco`
--

DROP TABLE IF EXISTS `tipoendereco`;
CREATE TABLE IF NOT EXISTS `tipoendereco` (
  `IdTipoEndereco` tinyint(4) NOT NULL,
  `Descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdTipoEndereco`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposervico`
--

DROP TABLE IF EXISTS `tiposervico`;
CREATE TABLE IF NOT EXISTS `tiposervico` (
  `CodigoTipoServico` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CodigoTipoServico`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `uf`
--

DROP TABLE IF EXISTS `uf`;
CREATE TABLE IF NOT EXISTS `uf` (
  `CodigoUF` smallint(6) NOT NULL AUTO_INCREMENT,
  `Sigla` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CodigoUF`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
