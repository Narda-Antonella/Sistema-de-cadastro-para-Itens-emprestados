-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2021 a las 20:52:58
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ATPfundamentos`
--
CREATE DATABASE IF NOT EXISTS `ATPfundamentos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ATPfundamentos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cadastro_usuarios`
--

DROP TABLE IF EXISTS `cadastro_usuarios`;
CREATE TABLE `cadastro_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` int(15) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `genero` varchar(3) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cadastro_usuarios`
--

INSERT INTO `cadastro_usuarios` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `genero`, `usuario`, `senha`) VALUES
(26, 'faculdade1', '9999999', 7777777, 'rua faculdade', 'F', 'faculdade', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cad_emprestimo`
--

DROP TABLE IF EXISTS `cad_emprestimo`;
CREATE TABLE `cad_emprestimo` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `item` varchar(15) NOT NULL,
  `datinicio` date NOT NULL,
  `quantidade` varchar(3) NOT NULL,
  `devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cad_emprestimo`
--

INSERT INTO `cad_emprestimo` (`id`, `nome`, `item`, `datinicio`, `quantidade`, `devolucao`) VALUES
(41, 'faculdade1', 'copo', '2021-11-29', '20', '2021-11-30'),
(42, 'faculdade1', 'copo', '2021-11-29', '10', '2021-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cad_itens`
--

DROP TABLE IF EXISTS `cad_itens`;
CREATE TABLE `cad_itens` (
  `id` int(11) NOT NULL,
  `coditem` varchar(50) NOT NULL,
  `quantidade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cad_itens`
--

INSERT INTO `cad_itens` (`id`, `coditem`, `quantidade`) VALUES
(7, 'pratos', '100'),
(8, 'talheres', '400'),
(9, 'panelas', '50'),
(10, 'copos', '540'),
(11, 'facas', '300'),
(12, 'prato fundo', '400'),
(13, 'copos de vidro', '500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cad_novoemp`
--

DROP TABLE IF EXISTS `cad_novoemp`;
CREATE TABLE `cad_novoemp` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `item` varchar(30) NOT NULL,
  `datinicio` date NOT NULL,
  `quantidade` varchar(3) NOT NULL,
  `devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cadastro_usuarios`
--
ALTER TABLE `cadastro_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cad_emprestimo`
--
ALTER TABLE `cad_emprestimo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cad_itens`
--
ALTER TABLE `cad_itens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cad_novoemp`
--
ALTER TABLE `cad_novoemp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cadastro_usuarios`
--
ALTER TABLE `cadastro_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cad_emprestimo`
--
ALTER TABLE `cad_emprestimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `cad_itens`
--
ALTER TABLE `cad_itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cad_novoemp`
--
ALTER TABLE `cad_novoemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
