-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2015 a las 07:10:05
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(8,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`) VALUES
(1, 'uno', '2.00'),
(2, 'dos', '1.00'),
(3, 'tres', '3.00'),
(4, 'cuatro', '4.00'),
(5, 'cinco', '2.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosxventa`
--

CREATE TABLE IF NOT EXISTS `productosxventa` (
  `id_detalle` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `iva` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fecha`, `subtotal`, `iva`, `total`) VALUES
(1, '0000-00-00', '0.00', '8.64', '0.00'),
(2, '0000-00-00', '0.00', '4.92', '0.00'),
(3, '0000-00-00', '12.00', '1.44', '13.44'),
(4, '2015-08-11', '0.00', '0.00', '0.00'),
(5, '2015-08-11', '0.00', '0.00', '0.00'),
(6, '2015-08-11', '39.00', '4.68', '43.68'),
(7, '2015-08-11', '119.00', '14.28', '133.28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productosxventa`
--
ALTER TABLE `productosxventa`
  ADD PRIMARY KEY (`id_detalle`), ADD KEY `id` (`id`), ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `productosxventa`
--
ALTER TABLE `productosxventa`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productosxventa`
--
ALTER TABLE `productosxventa`
ADD CONSTRAINT `productosxventa_ibfk_1` FOREIGN KEY (`id`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `productosxventa_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
