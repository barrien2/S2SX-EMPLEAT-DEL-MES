-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2019 a las 16:32:14
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleats`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insignies`
--

CREATE TABLE `insignies` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `puntuacio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `insignies`
--

INSERT INTO `insignies` (`id`, `nom`, `puntuacio`) VALUES
(1, 'test', 33),
(2, 'test', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `valor` int(11) NOT NULL,
  `descripcio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treballadors`
--

CREATE TABLE `treballadors` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `nom` varchar(20) NOT NULL,
  `cognom` varchar(40) NOT NULL,
  `edat` tinyint(3) UNSIGNED NOT NULL,
  `antiguitat` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treballadors_insignies`
--

CREATE TABLE `treballadors_insignies` (
  `id` int(11) NOT NULL,
  `id_insignia` int(11) NOT NULL,
  `id_treballador` int(11) NOT NULL,
  `data_otorgat` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `insignies`
--
ALTER TABLE `insignies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `treballadors`
--
ALTER TABLE `treballadors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `treb_rol_fk` (`id_rol`);

--
-- Indices de la tabla `treballadors_insignies`
--
ALTER TABLE `treballadors_insignies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `treballador_insignia_unic` (`id_insignia`,`id_treballador`),
  ADD KEY `trebinsignia_treballador_fk` (`id_treballador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `insignies`
--
ALTER TABLE `insignies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `treballadors`
--
ALTER TABLE `treballadors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `treballadors_insignies`
--
ALTER TABLE `treballadors_insignies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `treballadors`
--
ALTER TABLE `treballadors`
  ADD CONSTRAINT `treb_rol_fk` FOREIGN KEY (`id_rol`) REFERENCES `rols` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `treballadors_insignies`
--
ALTER TABLE `treballadors_insignies`
  ADD CONSTRAINT `trebinsignia_insignia_fk` FOREIGN KEY (`id_insignia`) REFERENCES `insignies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trebinsignia_treballador_fk` FOREIGN KEY (`id_treballador`) REFERENCES `treballadors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
