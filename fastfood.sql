-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2012 a las 22:26:46
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `t_articulo`
--

INSERT INTO `t_articulo` (`Nombre`, `Descripcion`, `Fecha_Vigencia`, `T_Articulo_ID`) VALUES
('Quesillo', 'El quesillo es un postre típico venezolano a base de leche condensada', '2012-09-22', 1),
('Torta', 'Postre frio', '2012-09-22', 2),
('Refresco350ml', 'bebida saborizada, efervescente y sin alcohol', '2012-09-22', 3),
('Refresco Lata', 'bebida saborizada, efervescente y sin alcohol', '2013-09-22', 4),
('Refresco 1.5 Lts', 'bebida saborizada, efervescente y sin alcohol', '2013-09-22', 5),
('Refresco 2 Lts', 'bebida saborizada, efervescente y sin alcohol', '2013-09-22', 6),
('Agua 350ml', 'El agua mineral es agua que contiene minerales u otras sustancias disueltas que alteran su sabor o le dan un valor terapéutico', '2013-09-22', 7),
('Agua 600 ml', 'El agua mineral es agua que contiene minerales u otras sustancias disueltas que alteran su sabor o le dan un valor terapéutico', '2013-09-22', 8),
('Agua 1.5 L', 'El agua mineral es agua que contiene minerales u otras sustancias disueltas que alteran su sabor o le dan un valor terapéutico', '2013-09-22', 9),
('Malta', 'bebida saborizada sin alcohol', '2013-09-22', 10),
('Nestea', 'Té helado', '2013-09-17', 11),
('Gatorade', 'Gatorade es una bebida isotónica, usada para rehidratar y recuperar carbohidratos ', '2013-09-27', 12),
('Agua Saborizada', 'Aguas con gas, sabores, olores y hasta colores', '2013-09-18', 13),
('Servilletas', '', '0000-00-00', 14),
('Pitillo', '', '0000-00-00', 15);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `t_articulo_plato`
--

INSERT INTO `t_articulo_plato` (`T_Articulo_T_Articulo_ID`, `T_Menu_T_Menu_ID`, `T_ArtPlato_ID`, `Descripcion`, `Cant_Articulo`) VALUES
(14, 1, 1, 'servilleta para limpiar', '3');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcar la base de datos para la tabla `t_ingrediente`
--

INSERT INTO `t_ingrediente` (`Nombre`, `Unidad`, `Precio_Unitario`, `Estado`, `T_Ingrediente_ID`) VALUES
('Papas', 'Kilogramo', 0, 0, 1),
('Aceite', 'Litro', 0, 0, 2),
('Queso fundido', 'Kilogramo', 0, 0, 3),
('Tocineta', 'Gramos', 0, 0, 4),
('Salchicha alemana', 'Unidades', 0, 0, 5),
('Harina de trigo', 'Kilogramo', 0, 0, 6),
('Lechosa', 'Kilogramo', 0, 0, 7),
('Melon', 'Kilogramo', 0, 0, 8),
('Mango', 'Kilogramo', 0, 0, 9),
('Fresa', 'Kilogramo', 0, 0, 10),
('Guanabana ', 'Kilogramo', 0, 0, 11),
('Melocotón ', 'Kilogramo', 0, 0, 12),
('Queso mozzarella', 'Gramos', 0, 0, 13),
('Tomate', 'Kilogramo', 0, 0, 14),
('Aceite de oliva', 'Litros', 0, 0, 15),
('Albahaca', 'Gramos', 0, 0, 16),
('Orégano', 'Gramos', 0, 0, 17),
('Sal', 'Kilogramo', 0, 0, 18),
('Pimienta', 'Gramos', 0, 0, 19),
('Lechuga', 'Kilogramo', 0, 0, 20),
('Queso parmesano', 'Gramos', 0, 0, 21),
('Pan tostado', 'Gramos', 0, 0, 22),
('Aderezo', 'Gramos', 0, 0, 23),
('Pollo', 'Kilogramo', 0, 0, 24),
('Jamón', 'Kilogramo', 0, 0, 25),
('Queso amarillo', 'Kilogramo', 0, 0, 26),
('Chorizo', 'Unidades', 0, 0, 27),
('Solomo', 'Kilogramo', 0, 0, 28),
('Jamón ahumado', 'Kilogramo', 0, 0, 29),
('Piña', 'Kilogramo', 0, 0, 30),
('Cereza', 'Gramos', 0, 0, 31),
('Salsa de pizza', 'Gramos', 0, 0, 32),
('Champiñones', 'Gramos', 0, 0, 33),
('Maiz', 'Gramos', 0, 0, 34),
('Cebolla', 'Kilogramo', 0, 0, 35),
('Pimentón', 'Kilogramo', 0, 0, 36),
('Chorizo especial', 'Unidades', 0, 0, 37),
('Pepperoni', 'Gramos', 0, 0, 38),
('Petit pois', 'Gramos', 0, 0, 39),
('Aceitunas negras', 'Gramos', 0, 0, 40),
('Chorizo español', 'Unidades', 0, 0, 41),
('Lomito', 'Kilogramo', 0, 0, 42),
('Chorizo de ajo', 'Unidades', 0, 0, 43),
('Salami', 'Gramos', 0, 0, 44),
('Anchoas', 'Gramos', 0, 0, 45),
('Pepinillo', 'Kilogramo', 0, 0, 46),
('Pechuga Empanizada', 'Kilogramo', 0, 0, 47),
('Chuleta ahumada', 'Kilogramo', 0, 0, 48),
('Salchicha', 'Unidades', 0, 0, 49),
('Papas de perro', 'Gramos', 0, 0, 50),
('Salchicha deli de pavo', 'Unidades', 0, 0, 51),
('Salchicha ahumada con queso', 'Unidades', 0, 0, 52),
('Salchicha alemana picante', 'Unidades ', 0, 0, 53),
('Pan con ajonjolí ', 'Unidades', 0, 0, 54),
('Chorizo uruguayo', 'Unidades', 0, 0, 55),
('Salchicha polaca con jamón ahumado', 'Unidades', 0, 0, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_menu`
--

CREATE TABLE IF NOT EXISTS `t_menu` (
  `Nombre` varchar(255) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `Precio` int(11) NOT NULL,
  `T_Menu_ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`T_Menu_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `t_menu`
--

INSERT INTO `t_menu` (`Nombre`, `Fecha_Inicio`, `Fecha_fin`, `Precio`, `T_Menu_ID`) VALUES
('Papas', '0000-00-00', '0000-00-00', 0, 1),
('Tequeños', '0000-00-00', '0000-00-00', 0, 2),
('Ensaladas', '0000-00-00', '0000-00-00', 0, 3),
('Parrillas', '0000-00-00', '0000-00-00', 0, 4),
('Pizzas', '0000-00-00', '0000-00-00', 0, 5),
('Hamburguesas', '0000-00-00', '0000-00-00', 0, 6),
('Perros', '0000-00-00', '0000-00-00', 0, 7),
('Pepitos', '0000-00-00', '0000-00-00', 0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_plato`
--

CREATE TABLE IF NOT EXISTS `t_plato` (
  `Descripcion` varchar(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `T_Plato_ID` int(11) NOT NULL AUTO_INCREMENT,
  `T_Menu_ID` int(11) NOT NULL,
  `Precio` float NOT NULL,
  `Precio2` float NOT NULL,
  PRIMARY KEY (`T_Plato_ID`),
  KEY `TC_T_Plato19` (`T_Menu_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcar la base de datos para la tabla `t_plato`
--

INSERT INTO `t_plato` (`Descripcion`, `Nombre`, `T_Plato_ID`, `T_Menu_ID`, `Precio`, `Precio2`) VALUES
('Salsa, queso mozzarella', 'Margarita', 13, 5, 45, 80),
('Salsa, queso, jamon ahumado, piña, cereza', 'Tropical', 14, 5, 50, 90),
('Salsa, jamón, queso, champiñones, pollo, maiz, cebolla, pimentón', 'Paris', 15, 5, 55, 100),
('Salsa, cuatro tipos de quesos', 'Cuatro quesos', 16, 5, 55, 90),
('Salsa, jamón, queso, chorizo español, pepperoni, cebolla y pimentón', 'Marsella', 17, 5, 55, 110),
('Salsa, queso, pimentón, champiñones, maiz, petit pois, cebolla, aceitunas negras', 'Vegetariana', 18, 5, 55, 90),
('Salsa, queso, tomate en rodaja, albahaca fresca', 'Capresa', 19, 5, 55, 90),
('Salsa, queso, pollo, champiñones, pimentón', 'Suprema', 20, 5, 55, 90),
('Salsa, jamón, queso, tocineta, pollo, chorizo español, petit pois, aceituna, cebolla, pimentón', 'Premium', 21, 5, 60, 110),
('Salsa, queso, lomito, chorizo de ajo, pimentón ', 'Especial', 22, 5, 60, 110),
('Salsa, jamón, queso, salami, cebolla, chorizo español, pimentón, champiñones, maiz, petit pois, anchoas, pollo', 'Le Maximun', 23, 5, 60, 130),
('Jamón, queso mozzarella, tomate maduro, champiñones, queso parmesano', 'Calzone', 24, 5, 50, 0),
('100gr de pura carne, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Infantil', 25, 6, 32, 0),
('100gr de pechuga empanizada, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Crispy Kids', 26, 6, 36, 0),
('200gr de pura carne, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Croqueta', 27, 6, 40, 0),
('170gr de pechuga, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Pechuga', 28, 6, 44, 0),
('170gr de pechuga empanizada, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Crispy', 29, 6, 48, 0),
('170gr de puro lomito, jamón ahumado, queso amarillo, tocineta, lechuga, tomate cebolla, pepinillo', 'Lomito', 30, 6, 48, 0),
('170gr de chuleta ahumada, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Chuleta', 31, 6, 50, 0),
('2 croquetas de 200gr de carne c/u, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pipinillo', 'Doble', 32, 6, 55, 0),
('200gr de croqueta de carne, 170gr de pechuga, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla', 'Doble Mixta', 33, 6, 60, 0),
('2 croquetas de 200gr de carne, 170gr de pechuga, jamón ahumado, queso amarillo, tocineta, lechuga, tomate, cebolla, pepinillo', 'Le Maximum', 34, 6, 69, 0),
('Salchicha pequeña, cebolla, papa, queso amarillo', 'Infantil', 35, 7, 25, 0),
('Salchicha alemana, maiz, cebolla, papa, queso amarillo', 'wieners', 36, 7, 30, 0),
('Salchicha alemana, maiz, cebolla, papa, queso amarillo', 'Frankfurt', 37, 7, 32, 0),
('Salchicha deli de pavo, maiz, cebolla, queso amarillo', 'Pavo', 38, 7, 36, 0),
('Salchicha ahumada con queso, maiz, cebolla, papa, queso amarillo', 'Cuatro quesos', 39, 7, 36, 0),
('Salchicha alemana picante, maiz, cebolla, papa, queso amarillo', 'Cosaca', 40, 7, 38, 0),
('Pan suave grande con ajonjolí, chorizo uruguayo, maiz, cebolla, papa, queso amarillo', 'Uruguayo', 41, 7, 40, 0),
('Pan suave grande con ajonjoli, salchicha extra grande polaca con jamón ahumado, tocineta, cebolla, papas, queso amarillo, maiz', 'Le Maximum', 42, 7, 45, 0),
('170gr de pechuga, queso amarillo, lechuga, pepinillo, tomate, cebolla salteada', 'Pechuga', 43, 8, 44, 0),
('170gr de lomito, queso amarillo, lechuga, pepinillo, tomate, cebolla salteada', 'Lomito', 44, 8, 48, 0),
('200gr entre pechuga y lomito, queso amarillo, lechuga, pepinillo, tomate, cebolla salteada', 'Mixto', 45, 8, 55, 0),
('200gr entre pechuga y lomito, queso amarillo, lechuga, pepinillo, tomate, cebolla salteada, jamón ahumado, queso amarillo, tocineta', 'Le Maximum', 46, 8, 60, 0),
('servicio de papas fritas', 'Papas fritas', 47, 1, 25, 0),
('Servicio de papas fritas con queso fundido y trozos de tocineta', 'Papas fritas bacon', 48, 1, 30, 0),
('servicio de papas fritas con salchicha alemana en trozos', 'Salchipapa', 49, 1, 38, 0),
('6 tequeños de queso pequeños', 'Tequeños', 50, 2, 42, 0),
('Salchicha alemana extra grande envuelta en masa de harina de trigo horneada', 'Tequeño Le Maximum', 51, 2, 42, 0),
('Queso mozzarella, rodajas de tomate maduro, aceite de oliva, albahaca, orégano, sal, pimienta', 'Capresa', 52, 3, 40, 0),
('Lechuga, queso parmesano, tocineta, trozos de pan tostado, aderezo especial', 'Cesar', 53, 3, 45, 0),
('Lechuga, tocineta, trozos de pan tostado, trocitos de pollo a la plancha, jamón, queso amarillo, aderezo especial', 'Suprema', 54, 3, 50, 0),
('Pollo, chorizo, papas fritas, ensalada cruda', 'Pollo', 55, 4, 50, 0),
('solomo, chorizo, papas fritas, ensalada cruda', 'Solomo', 56, 4, 55, 0),
('Solomo, pollo, chorizo, trozos de queso mozzarella, papas fritas, ensalada cruda', 'Le Maximun', 57, 4, 65, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `t_receta`
--

INSERT INTO `t_receta` (`T_Receta_id`, `Descripcion`, `Cant_Ingrediente`, `T_Ingrediente_ID`, `T_Plato_ID`) VALUES
(2, 'se frien en el aceite', 200, 1, 47),
(3, 'aceite para freir papas', 500, 2, 47);

--
-- Filtros para las tablas descargadas (dump)
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
