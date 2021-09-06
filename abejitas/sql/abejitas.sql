-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 19:11:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `abejitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimenticio`
--

CREATE TABLE `alimenticio` (
  `idProd` int(10) NOT NULL,
  `fechaEnv` date NOT NULL,
  `fechaCad` date NOT NULL,
  `Peso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idCom` int(10) NOT NULL,
  `idPer` int(10) NOT NULL,
  `comentario` varchar(400) NOT NULL,
  `fechaHora` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idPer` int(10) NOT NULL,
  `idProd` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPer` int(20) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellidos` varchar(15) NOT NULL,
  `fechaNac` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `telefono` int(9) NOT NULL,
  `password` varchar(20) NOT NULL,
  `administrador` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProd` int(10) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utensilio`
--

CREATE TABLE `utensilio` (
  `idProd` int(10) NOT NULL,
  `tamanio` float NOT NULL,
  `material` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimenticio`
--
ALTER TABLE `alimenticio`
  ADD KEY `idProd` (`idProd`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `idPer` (`idPer`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD KEY `idPer` (`idPer`),
  ADD KEY `idProd` (`idProd`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPer`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProd`);

--
-- Indices de la tabla `utensilio`
--
ALTER TABLE `utensilio`
  ADD KEY `idProd` (`idProd`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idCom` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPer` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProd` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimenticio`
--
ALTER TABLE `alimenticio`
  ADD CONSTRAINT `alimenticio_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `producto` (`idProd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idPer`) REFERENCES `persona` (`idPer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idPer`) REFERENCES `persona` (`idPer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idProd`) REFERENCES `producto` (`idProd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `utensilio`
--
ALTER TABLE `utensilio`
  ADD CONSTRAINT `utensilio_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `producto` (`idProd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
