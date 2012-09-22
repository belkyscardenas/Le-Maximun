-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2012 a las 16:03:21
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fastfood`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_articulo`
--

CREATE TABLE IF NOT EXISTS `t_articulo` (
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Fecha_Vigencia` date NOT NULL,
  `T_Articulo_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`T_Articulo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_articulo_plato`
--

CREATE TABLE IF NOT EXISTS `t_articulo_plato` (
  `T_Articulo_T_Articulo_ID` int(11) NOT NULL,
  `T_Menu_T_Menu_ID` int(11) NOT NULL,
  `T_ArtPlato_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) NOT NULL,
  `Cant_Articulo` varchar(45) NOT NULL,
  PRIMARY KEY (`T_ArtPlato_ID`),
  KEY `fk_T_Articulo_has_T_Menu_T_Menu1` (`T_Menu_T_Menu_ID`),
  KEY `fk_T_Articulo_has_T_Menu_T_Articulo1` (`T_Articulo_T_Articulo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_ingrediente`
--

CREATE TABLE IF NOT EXISTS `t_ingrediente` (
  `Nombre` varchar(255) NOT NULL,
  `Unidad` varchar(255) NOT NULL,
  `Precio_Unitario` double NOT NULL,
  `Estado` smallint(6) NOT NULL,
  `T_Ingrediente_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`T_Ingrediente_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_menu`
--

CREATE TABLE IF NOT EXISTS `t_menu` (
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `Precio` int(11) NOT NULL,
  `T_Menu_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`T_Menu_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_plato`
--

CREATE TABLE IF NOT EXISTS `t_plato` (
  `Descripcion` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `T_Plato_ID` int(11) NOT NULL AUTO_INCREMENT,
  `T_Menu_ID` int(11) NOT NULL,
  PRIMARY KEY (`T_Plato_ID`),
  KEY `TC_T_Plato19` (`T_Menu_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_receta`
--

CREATE TABLE IF NOT EXISTS `t_receta` (
  `T_Receta_id` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(255) NOT NULL,
  `Cant_Ingrediente` int(11) NOT NULL,
  `T_Ingrediente_ID` int(11) NOT NULL,
  `T_Plato_ID` int(11) NOT NULL,
  PRIMARY KEY (`T_Receta_id`),
  KEY `TC_T_Receta7` (`T_Plato_ID`),
  KEY `TC_T_Receta6` (`T_Ingrediente_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_articulo_plato`
--
ALTER TABLE `t_articulo_plato`
  ADD CONSTRAINT `fk_T_Articulo_has_T_Menu_T_Articulo1` FOREIGN KEY (`T_Articulo_T_Articulo_ID`) REFERENCES `t_articulo` (`T_Articulo_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_T_Articulo_has_T_Menu_T_Menu1` FOREIGN KEY (`T_Menu_T_Menu_ID`) REFERENCES `t_menu` (`T_Menu_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t_plato`
--
ALTER TABLE `t_plato`
  ADD CONSTRAINT `FK_T_Plato10` FOREIGN KEY (`T_Menu_ID`) REFERENCES `t_menu` (`T_Menu_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `t_receta`
--
ALTER TABLE `t_receta`
  ADD CONSTRAINT `FK_T_Receta4` FOREIGN KEY (`T_Plato_ID`) REFERENCES `t_plato` (`T_Plato_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_T_Receta3` FOREIGN KEY (`T_Ingrediente_ID`) REFERENCES `t_ingrediente` (`T_Ingrediente_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
