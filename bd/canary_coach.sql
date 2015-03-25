-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2015 a las 19:47:18
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `canary_coach`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL DEFAULT '0',
  `usuario` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `isla` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechapublicacion` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auxcategorias` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxcategorias`
--

CREATE TABLE IF NOT EXISTS `auxcategorias` (
  `id` int(11) NOT NULL DEFAULT '0',
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxislas`
--

CREATE TABLE IF NOT EXISTS `auxislas` (
  `id` int(11) NOT NULL DEFAULT '0',
  `isla` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxmunicipios`
--

CREATE TABLE IF NOT EXISTS `auxmunicipios` (
  `id` int(11) NOT NULL DEFAULT '0',
  `municipio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isla` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auxislas` (`isla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxroles`
--

CREATE TABLE IF NOT EXISTS `auxroles` (
  `id` int(11) NOT NULL DEFAULT '0',
  `rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxtiporecurso`
--

CREATE TABLE IF NOT EXISTS `auxtiporecurso` (
  `id` int(11) NOT NULL DEFAULT '0',
  `tiporecurso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL DEFAULT '0',
  `actividad` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `texto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fechapublicacion` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios` (`usuario`),
  KEY `actividades` (`actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE IF NOT EXISTS `recursos` (
  `id` int(11) NOT NULL DEFAULT '0',
  `actividad` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `ruta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auxtiporecurso` (`tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL DEFAULT '0',
  `nick` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rol` int(11) NOT NULL,
  `avatar` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auxroles` (`rol`),
  KEY `auxmunicipios` (`municipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE IF NOT EXISTS `votos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `actividad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `auxcategorias` FOREIGN KEY (`categoria`) REFERENCES `auxcategorias` (`id`),
  ADD CONSTRAINT `comentarios` FOREIGN KEY (`id`) REFERENCES `comentarios` (`actividad`);

--
-- Filtros para la tabla `auxislas`
--
ALTER TABLE `auxislas`
  ADD CONSTRAINT `auxislas_ibfk_1` FOREIGN KEY (`id`) REFERENCES `actividades` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `auxmunicipios`
--
ALTER TABLE `auxmunicipios`
  ADD CONSTRAINT `auxislas` FOREIGN KEY (`isla`) REFERENCES `auxislas` (`id`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `usuarios` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `auxtiporecurso` FOREIGN KEY (`tipo`) REFERENCES `auxtiporecurso` (`id`),
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `actividades` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `actividades` FOREIGN KEY (`id`) REFERENCES `actividades` (`id`),
  ADD CONSTRAINT `auxmunicipios` FOREIGN KEY (`municipio`) REFERENCES `auxmunicipios` (`id`),
  ADD CONSTRAINT `auxroles` FOREIGN KEY (`rol`) REFERENCES `auxroles` (`id`);

--
-- Filtros para la tabla `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `votos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `actividades` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
