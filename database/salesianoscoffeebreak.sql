-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-08-2021 a las 03:18:44
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salesianoscoffeebreak`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `administrador` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `administrador`, `password`) VALUES
(1, 'cafetin.donbosco', 'Donbosco21'),
(2, 'cafetin.domingosavio', 'Domingosavio21'),
(3, 'cafetin.mariaauxiliadora', 'Mariaauxiliadora21'),
(5, 'cafetin.mama.margarita', 'Mama-margarita21'),
(7, 'cafetin.laura.vicunia', 'Laura-Vicunia2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `password`) VALUES
(1, 'miguel.campos', 'Mach0194'),
(2, 'andres.fernandez', 'Andres0211'),
(3, 'eduardo.flores', 'Eduardo0099'),
(4, 'rigoberto.rivas', 'Rigo2021'),
(5, 'juan.cornejo', 'Juan21'),
(6, 'erick.ramos', 'erick2021'),
(7, 'rafael.najarro', 'rafa2003'),
(8, 'cesar.morales', 'morpac25'),
(9, 'daniel.salmeron', 'daniel2003'),
(10, 'luis.monge', 'lamp2021'),
(11, 'norberto.colorado', 'Infonorberto'),
(12, 'oscar.acosta', 'Coordinador21'),
(13, 'cuenta.prueba1', 'prueba01'),
(14, 'cuenta.prueba2', 'prueba02'),
(15, 'cuenta.prueba3', 'prueba03'),
(16, 'cuenta.prueba4', 'prueba04'),
(17, 'cuenta.prueba5', 'prueba05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_domingosavio`
--

DROP TABLE IF EXISTS `menu_domingosavio`;
CREATE TABLE IF NOT EXISTS `menu_domingosavio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` blob NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cafetin` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_donbosco`
--

DROP TABLE IF EXISTS `menu_donbosco`;
CREATE TABLE IF NOT EXISTS `menu_donbosco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` blob NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cafetin` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_lauravicunia`
--

DROP TABLE IF EXISTS `menu_lauravicunia`;
CREATE TABLE IF NOT EXISTS `menu_lauravicunia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` blob NOT NULL,
  `descripcion` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  `cafetin` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_mariaauxiliadora`
--

DROP TABLE IF EXISTS `menu_mariaauxiliadora`;
CREATE TABLE IF NOT EXISTS `menu_mariaauxiliadora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` blob NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cafetin` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion_db`
--

DROP TABLE IF EXISTS `reservacion_db`;
CREATE TABLE IF NOT EXISTS `reservacion_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `carnet` int(10) NOT NULL,
  `grado` varchar(30) NOT NULL,
  `seccion` varchar(2) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `plato` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion_ds`
--

DROP TABLE IF EXISTS `reservacion_ds`;
CREATE TABLE IF NOT EXISTS `reservacion_ds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `carnet` int(10) NOT NULL,
  `grado` varchar(30) NOT NULL,
  `seccion` varchar(2) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `plato` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion_lv`
--

DROP TABLE IF EXISTS `reservacion_lv`;
CREATE TABLE IF NOT EXISTS `reservacion_lv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `carnet` int(11) NOT NULL,
  `grado` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `seccion` varchar(5) COLLATE utf16_spanish_ci NOT NULL,
  `especialidad` varchar(30) COLLATE utf16_spanish_ci NOT NULL,
  `plato` varchar(100) COLLATE utf16_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion_ma`
--

DROP TABLE IF EXISTS `reservacion_ma`;
CREATE TABLE IF NOT EXISTS `reservacion_ma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `carnet` int(10) NOT NULL,
  `grado` varchar(30) NOT NULL,
  `seccion` varchar(2) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `plato` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
