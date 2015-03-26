-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-03-2015 a las 20:09:59
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectocli`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxmunicipios`
--

CREATE TABLE IF NOT EXISTS `auxmunicipios` (
  `isla` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`isla`,`municipio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auxmunicipios`
--

INSERT INTO `auxmunicipios` (`isla`, `municipio`, `descripcion`) VALUES
(1, 35003, 'Antigua'),
(1, 35007, 'Betancuria'),
(1, 35014, 'Oliva, La'),
(1, 35015, 'Pájara'),
(1, 35017, 'Puerto del Rosario'),
(1, 35030, 'Tuineje'),
(2, 35001, 'Agaete'),
(2, 35002, 'Agüimes'),
(2, 35005, 'Artenara'),
(2, 35006, 'Arucas'),
(2, 35008, 'Firgas'),
(2, 35009, 'Gáldar'),
(2, 35011, 'Ingenio'),
(2, 35012, 'Mogán'),
(2, 35013, 'Moya'),
(2, 35016, 'Palmas de Gran Canaria, Las'),
(2, 35019, 'San Bartolomé de Tirajana'),
(2, 35020, 'Aldea de San Nicolás, La'),
(2, 35021, 'Santa Brígida'),
(2, 35022, 'Santa Lucía de Tirajana'),
(2, 35023, 'Santa María de Guía de Gran Canaria'),
(2, 35025, 'Tejeda'),
(2, 35026, 'Telde'),
(2, 35027, 'Teror'),
(2, 35031, 'Valsequillo de Gran Canaria'),
(2, 35032, 'Valleseco'),
(2, 35033, 'Vega de San Mateo'),
(3, 35004, 'Arrecife'),
(3, 35010, 'Haría'),
(3, 35018, 'San Bartolomé'),
(3, 35024, 'Teguise'),
(3, 35028, 'Tías'),
(3, 35029, 'Tinajo'),
(3, 35034, 'Yaiza'),
(4, 38002, 'Agulo'),
(4, 38003, 'Alajeró'),
(4, 38021, 'Hermigua'),
(4, 38036, 'San Sebastián de la Gomera'),
(4, 38049, 'Valle Gran Rey'),
(4, 38050, 'Vallehermoso'),
(5, 38013, 'Frontera'),
(5, 38048, 'Valverde'),
(5, 38901, 'Pinar de El Hierro, El'),
(6, 38007, 'Barlovento'),
(6, 38008, 'Breña Alta'),
(6, 38009, 'Breña Baja'),
(6, 38014, 'Fuencaliente de la Palma'),
(6, 38016, 'Garafía'),
(6, 38024, 'Llanos de Aridane, Los'),
(6, 38027, 'Paso, El'),
(6, 38029, 'Puntagorda'),
(6, 38030, 'Puntallana'),
(6, 38033, 'San Andrés y Sauces'),
(6, 38037, 'Santa Cruz de la Palma'),
(6, 38045, 'Tazacorte'),
(6, 38047, 'Tijarafe'),
(6, 38053, 'Villa de Mazo'),
(7, 38001, 'Adeje'),
(7, 38004, 'Arafo'),
(7, 38005, 'Arico'),
(7, 38006, 'Arona'),
(7, 38010, 'Buenavista del Norte'),
(7, 38011, 'Candelaria'),
(7, 38012, 'Fasnia'),
(7, 38015, 'Garachico'),
(7, 38017, 'Granadilla de Abona'),
(7, 38018, 'Guancha, La'),
(7, 38019, 'Guía de Isora'),
(7, 38020, 'Güímar'),
(7, 38022, 'Icod de los Vinos'),
(7, 38023, 'San Cristóbal de La Laguna'),
(7, 38025, 'Matanza de Acentejo, La'),
(7, 38026, 'Orotava, La'),
(7, 38028, 'Puerto de la Cruz'),
(7, 38031, 'Realejos, Los'),
(7, 38032, 'Rosario, El'),
(7, 38034, 'San Juan de la Rambla'),
(7, 38035, 'San Miguel de Abona'),
(7, 38038, 'Santa Cruz de Tenerife'),
(7, 38039, 'Santa Úrsula'),
(7, 38040, 'Santiago del Teide'),
(7, 38041, 'Sauzal, El'),
(7, 38042, 'Silos, Los'),
(7, 38043, 'Tacoronte'),
(7, 38044, 'Tanque, El'),
(7, 38046, 'Tegueste'),
(7, 38051, 'Victoria de Acentejo, La'),
(7, 38052, 'Vilaflor');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auxmunicipios`
--
ALTER TABLE `auxmunicipios`
  ADD CONSTRAINT `auxmunicipios_ibfk_1` FOREIGN KEY (`isla`) REFERENCES `auxislas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
