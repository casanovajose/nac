-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2013 a las 06:04:00
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `videoartedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curadores_x_evento`
--

CREATE TABLE IF NOT EXISTS `curadores_x_evento` (
  `evento_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`evento_id`,`persona_id`),
  KEY `IDX_E0B6D35887A5F842` (`evento_id`),
  KEY `IDX_E0B6D358F5F88DB9` (`persona_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` longtext COLLATE utf8_unicode_ci NOT NULL,
  `lugar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6B23BD8FC604D5C6` (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `pais_id`, `nombre`, `anho`, `web`, `info`, `lugar`) VALUES
(1, NULL, 'san pablo', '2010', 'www', 'videos', 'sampa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos`
--

CREATE TABLE IF NOT EXISTS `formatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `formatos`
--

INSERT INTO `formatos` (`id`, `formato`) VALUES
(1, 'hd'),
(2, 'super8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos_x_obra`
--

CREATE TABLE IF NOT EXISTS `formatos_x_obra` (
  `obra_id` int(11) NOT NULL,
  `formato_id` int(11) NOT NULL,
  PRIMARY KEY (`obra_id`,`formato_id`),
  KEY `IDX_49F345553C2672C8` (`obra_id`),
  KEY `IDX_49F345558D02887B` (`formato_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `formatos_x_obra`
--

INSERT INTO `formatos_x_obra` (`obra_id`, `formato_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `genero`) VALUES
(1, 'experimental'),
(2, 'documental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos_x_obra`
--

CREATE TABLE IF NOT EXISTS `generos_x_obra` (
  `obra_id` int(11) NOT NULL,
  `genero_id` int(11) NOT NULL,
  PRIMARY KEY (`obra_id`,`genero_id`),
  KEY `IDX_1F2BC1E53C2672C8` (`obra_id`),
  KEY `IDX_1F2BC1E5BCE7B795` (`genero_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `generos_x_obra`
--

INSERT INTO `generos_x_obra` (`obra_id`, `genero_id`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios`
--

CREATE TABLE IF NOT EXISTS `medios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `medios`
--

INSERT INTO `medios` (`id`, `archivo`, `tipo`, `descripcion`) VALUES
(1, 'carlos.jpg', 1, ' '),
(2, 'sampa.jpg', 1, ' '),
(3, 'time.jpg', 1, 'general ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_x_evento`
--

CREATE TABLE IF NOT EXISTS `medios_x_evento` (
  `evento_id` int(11) NOT NULL,
  `medio_id` int(11) NOT NULL,
  PRIMARY KEY (`evento_id`,`medio_id`),
  KEY `IDX_35F9580287A5F842` (`evento_id`),
  KEY `IDX_35F95802A40AA46` (`medio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medios_x_evento`
--

INSERT INTO `medios_x_evento` (`evento_id`, `medio_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_x_obra`
--

CREATE TABLE IF NOT EXISTS `medios_x_obra` (
  `obra_id` int(11) NOT NULL,
  `medio_id` int(11) NOT NULL,
  PRIMARY KEY (`obra_id`,`medio_id`),
  KEY `IDX_1DA509F53C2672C8` (`obra_id`),
  KEY `IDX_1DA509F5A40AA46` (`medio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medios_x_obra`
--

INSERT INTO `medios_x_obra` (`obra_id`, `medio_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_x_persona`
--

CREATE TABLE IF NOT EXISTS `medios_x_persona` (
  `persona_id` int(11) NOT NULL,
  `medio_id` int(11) NOT NULL,
  PRIMARY KEY (`persona_id`,`medio_id`),
  KEY `IDX_CFF35C6BF5F88DB9` (`persona_id`),
  KEY `IDX_CFF35C6BA40AA46` (`medio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `medios_x_persona`
--

INSERT INTO `medios_x_persona` (`persona_id`, `medio_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadato`
--

CREATE TABLE IF NOT EXISTS `metadato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  `obra_id` int(11) DEFAULT NULL,
  `evento_id` int(11) DEFAULT NULL,
  `metadato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51DA7B45F5F88DB9` (`persona_id`),
  KEY `IDX_51DA7B453C2672C8` (`obra_id`),
  KEY `IDX_51DA7B4587A5F842` (`evento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `metadato`
--

INSERT INTO `metadato` (`id`, `persona_id`, `obra_id`, `evento_id`, `metadato`, `tipo`, `discr`) VALUES
(1, NULL, NULL, 1, 'en ingles', 1, 'ev'),
(2, NULL, 2, NULL, 'sertao', 1, 'obr'),
(3, 1, NULL, NULL, 'derian', 1, 'per');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE IF NOT EXISTS `obras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sinopsis` longtext COLLATE utf8_unicode_ci NOT NULL,
  `anho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duracion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `titulo`, `sinopsis`, `anho`, `duracion`) VALUES
(1, 'eden', 'dewjb j ', ' 2010', '1.20'),
(2, 'time', 'fds  fvd  fdjb j ', ' 2000', '1.20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_x_artista`
--

CREATE TABLE IF NOT EXISTS `obras_x_artista` (
  `persona_id` int(11) NOT NULL,
  `obra_id` int(11) NOT NULL,
  PRIMARY KEY (`persona_id`,`obra_id`),
  KEY `IDX_2B2D600DF5F88DB9` (`persona_id`),
  KEY `IDX_2B2D600D3C2672C8` (`obra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `obras_x_artista`
--

INSERT INTO `obras_x_artista` (`persona_id`, `obra_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras_x_evento`
--

CREATE TABLE IF NOT EXISTS `obras_x_evento` (
  `evento_id` int(11) NOT NULL,
  `obra_id` int(11) NOT NULL,
  PRIMARY KEY (`evento_id`,`obra_id`),
  KEY `IDX_D08F727F87A5F842` (`evento_id`),
  KEY `IDX_D08F727F3C2672C8` (`obra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `obras_x_evento`
--

INSERT INTO `obras_x_evento` (`evento_id`, `obra_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras_clave`
--

CREATE TABLE IF NOT EXISTS `palabras_clave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palabra` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras_x_obra`
--

CREATE TABLE IF NOT EXISTS `palabras_x_obra` (
  `obra_id` int(11) NOT NULL,
  `palabraclave_id` int(11) NOT NULL,
  PRIMARY KEY (`obra_id`,`palabraclave_id`),
  KEY `IDX_F32571573C2672C8` (`obra_id`),
  KEY `IDX_F3257157644F4827` (`palabraclave_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_id` int(11) DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `inicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7C826071A9276E6C` (`tipo_id`),
  KEY `IDX_7C826071C604D5C6` (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `tipo_id`, `pais_id`, `nombre`, `apellido`, `data`, `inicio`, `web`, `sexo`, `mostrar`) VALUES
(1, NULL, NULL, 'carlos', 'mennon', 'asdgd', '2003', 'www', 'm', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_persona`
--

CREATE TABLE IF NOT EXISTS `tipo_de_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `curadores_x_evento`
--
ALTER TABLE `curadores_x_evento`
  ADD CONSTRAINT `FK_E0B6D358F5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E0B6D35887A5F842` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `FK_6B23BD8FC604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`);

--
-- Filtros para la tabla `formatos_x_obra`
--
ALTER TABLE `formatos_x_obra`
  ADD CONSTRAINT `FK_49F345558D02887B` FOREIGN KEY (`formato_id`) REFERENCES `formatos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_49F345553C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `generos_x_obra`
--
ALTER TABLE `generos_x_obra`
  ADD CONSTRAINT `FK_1F2BC1E5BCE7B795` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1F2BC1E53C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `medios_x_evento`
--
ALTER TABLE `medios_x_evento`
  ADD CONSTRAINT `FK_35F95802A40AA46` FOREIGN KEY (`medio_id`) REFERENCES `medios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_35F9580287A5F842` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `medios_x_obra`
--
ALTER TABLE `medios_x_obra`
  ADD CONSTRAINT `FK_1DA509F5A40AA46` FOREIGN KEY (`medio_id`) REFERENCES `medios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1DA509F53C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `medios_x_persona`
--
ALTER TABLE `medios_x_persona`
  ADD CONSTRAINT `FK_CFF35C6BA40AA46` FOREIGN KEY (`medio_id`) REFERENCES `medios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CFF35C6BF5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `metadato`
--
ALTER TABLE `metadato`
  ADD CONSTRAINT `FK_51DA7B4587A5F842` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`),
  ADD CONSTRAINT `FK_51DA7B453C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`),
  ADD CONSTRAINT `FK_51DA7B45F5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `obras_x_artista`
--
ALTER TABLE `obras_x_artista`
  ADD CONSTRAINT `FK_2B2D600D3C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2B2D600DF5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `obras_x_evento`
--
ALTER TABLE `obras_x_evento`
  ADD CONSTRAINT `FK_D08F727F3C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D08F727F87A5F842` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `palabras_x_obra`
--
ALTER TABLE `palabras_x_obra`
  ADD CONSTRAINT `FK_F3257157644F4827` FOREIGN KEY (`palabraclave_id`) REFERENCES `palabras_clave` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F32571573C2672C8` FOREIGN KEY (`obra_id`) REFERENCES `obras` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `FK_7C826071C604D5C6` FOREIGN KEY (`pais_id`) REFERENCES `paises` (`id`),
  ADD CONSTRAINT `FK_7C826071A9276E6C` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_de_persona` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
