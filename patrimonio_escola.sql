-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Set-2024 às 17:33
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `patrimonio_escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaborador`
--

DROP TABLE IF EXISTS `colaborador`;
CREATE TABLE IF NOT EXISTS `colaborador` (
  `nif_colab` varchar(7) NOT NULL,
  `nome_colab` varchar(50) NOT NULL,
  `email_colab` varchar(50) NOT NULL,
  `senha_colab` varchar(50) NOT NULL,
  `status_colab` varchar(10) NOT NULL,
  `foto_colab` longblob,
  `permissoes_colab` varchar(3) NOT NULL DEFAULT 'f',
  `pref_tema_colab` varchar(10) NOT NULL DEFAULT 'light',
  PRIMARY KEY (`nif_colab`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `cod_patrimonio_item` varchar(7) NOT NULL,
  `id_tipo` int NOT NULL,
  `id_sala` int NOT NULL,
  PRIMARY KEY (`cod_patrimonio_item`),
  KEY `id_sala` (`id_sala`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacao`
--

DROP TABLE IF EXISTS `movimentacao`;
CREATE TABLE IF NOT EXISTS `movimentacao` (
  `id_movimentacao` int NOT NULL AUTO_INCREMENT,
  `tipo_movimentacao` varchar(10) NOT NULL,
  `horario_movimentacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_item` int NOT NULL,
  `id_sala` int NOT NULL,
  PRIMARY KEY (`id_movimentacao`),
  KEY `id_item` (`id_item`),
  KEY `id_sala` (`id_sala`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

DROP TABLE IF EXISTS `responsavel`;
CREATE TABLE IF NOT EXISTS `responsavel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nif_colab` int NOT NULL,
  `id_sala` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nif_colab` (`nif_colab`),
  KEY `id_sala` (`id_sala`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `id_sala` int NOT NULL AUTO_INCREMENT,
  `numero_sala` varchar(25) NOT NULL,
  PRIMARY KEY (`id_sala`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `id_tipo` int NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
