-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Set-2022 às 04:06
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudlaravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `cep`, `id_endereco`, `updated_at`, `created_at`) VALUES
(7, 'Mariluse dos Santos', 'tiagodssiv@gmail.com', '21993178243', '26171240', 7, '2022-09-23 11:47:59', '2022-09-23 11:47:59'),
(8, 'Mariluse dos Santos', 'tiagodssiv@gmail.com', '21993178243', '26171240', 8, '2022-09-23 11:58:22', '2022-09-23 11:49:13'),
(9, 'Tiago Dos Santos Silva', 'tiagodssiv@gmail.com', '21993178243', '25268180', 9, '2022-09-23 11:59:36', '2022-09-23 11:59:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `cep`, `rua`, `bairro`, `municipio`, `uf`, `updated_at`, `created_at`) VALUES
(9, '25268180', 'Rua 4', 'Nova Campinas', 'Duque de Caxias', 'RJ', '2022-09-23 11:59:36', '2022-09-23 11:59:36'),
(7, '26171240', 'Rua Franco', 'Pauline', 'Belford Roxo', 'RJ', '2022-09-23 11:47:59', '2022-09-23 11:47:59'),
(8, '26171240', 'Rua Franco', 'Pauline', 'Belford Roxo', 'RJ', '2022-09-23 11:58:22', '2022-09-23 11:49:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
