-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2015 a las 04:15:45
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificaciones`
--

CREATE TABLE IF NOT EXISTS `clasificaciones` (
`idClasificacion` int(11) NOT NULL,
  `Clasificacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE IF NOT EXISTS `ingredientes` (
`idIngrediente` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Desripcion` varchar(45) DEFAULT NULL,
  `Url` varchar(45) DEFAULT NULL,
  `Tipo_ingredientes_idTipo_ingrediente` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE IF NOT EXISTS `recetas` (
`idReceta` int(11) NOT NULL,
  `Usuarios_Cedula` int(11) NOT NULL,
  `Titulo` varchar(45) DEFAULT NULL,
  `Porciones` int(11) DEFAULT NULL,
  `Descripcion` varchar(45) DEFAULT NULL,
  `Clasificaciones_idClasificacion` int(11) NOT NULL,
  `Fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas_has_ingredientes`
--

CREATE TABLE IF NOT EXISTS `recetas_has_ingredientes` (
  `Recetas_idReceta` int(11) NOT NULL,
  `Ingredientes_idIngrediente` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`idRol` int(11) NOT NULL,
  `Rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `Rol`) VALUES
(1, 'Usuario'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ingredientes`
--

CREATE TABLE IF NOT EXISTS `tipo_ingredientes` (
`idTipo_ingrediente` int(11) NOT NULL,
  `Tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cedula` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Usuario` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
`Roles_idRol` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombre`, `Email`, `Usuario`, `Password`, `Roles_idRol`) VALUES
(123, 'sads', 'asddas@sadsa', 'asd', 'asdasd', 1),
(1234, 'ta', 'saasddasa@sadds', 'tati', '123', 1),
(12345, 'Fabian', 'fabian@hotmail.com', 'fabian', '1234', 2),
(33432, 'Andres', 'andres@hotmail', 'andres', '1234', 1),
(94584, 'Cristiano', 'cirsd@jsajdj', 'cristi', '1', 1),
(2123213, 'sdasa', 'sadad@sasd', 'asdsda', 'saddsa', 1),
(2323211, 'luis', 'sasd@dads', 'luis', '12', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
 ADD PRIMARY KEY (`idClasificacion`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
 ADD PRIMARY KEY (`idIngrediente`), ADD KEY `fk_Ingredientes_Tipo_ingredientes1_idx` (`Tipo_ingredientes_idTipo_ingrediente`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
 ADD PRIMARY KEY (`idReceta`), ADD KEY `fk_Recetas_Usuarios1_idx` (`Usuarios_Cedula`), ADD KEY `fk_Recetas_Clasificaciones1_idx` (`Clasificaciones_idClasificacion`);

--
-- Indices de la tabla `recetas_has_ingredientes`
--
ALTER TABLE `recetas_has_ingredientes`
 ADD PRIMARY KEY (`Recetas_idReceta`,`Ingredientes_idIngrediente`), ADD KEY `fk_Recetas_has_Ingredientes_Ingredientes1_idx` (`Ingredientes_idIngrediente`), ADD KEY `fk_Recetas_has_Ingredientes_Recetas1_idx` (`Recetas_idReceta`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tipo_ingredientes`
--
ALTER TABLE `tipo_ingredientes`
 ADD PRIMARY KEY (`idTipo_ingrediente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Cedula`), ADD KEY `fk_Usuarios_Roles_idx` (`Roles_idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificaciones`
--
ALTER TABLE `clasificaciones`
MODIFY `idClasificacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
MODIFY `idIngrediente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
MODIFY `idReceta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_ingredientes`
--
ALTER TABLE `tipo_ingredientes`
MODIFY `idTipo_ingrediente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `Roles_idRol` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
ADD CONSTRAINT `fk_Ingredientes_Tipo_ingredientes1` FOREIGN KEY (`Tipo_ingredientes_idTipo_ingrediente`) REFERENCES `tipo_ingredientes` (`idTipo_ingrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recetas`
--
ALTER TABLE `recetas`
ADD CONSTRAINT `fk_Recetas_Clasificaciones1` FOREIGN KEY (`Clasificaciones_idClasificacion`) REFERENCES `clasificaciones` (`idClasificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Recetas_Usuarios1` FOREIGN KEY (`Usuarios_Cedula`) REFERENCES `usuarios` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `recetas_has_ingredientes`
--
ALTER TABLE `recetas_has_ingredientes`
ADD CONSTRAINT `fk_Recetas_has_Ingredientes_Ingredientes1` FOREIGN KEY (`Ingredientes_idIngrediente`) REFERENCES `ingredientes` (`idIngrediente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Recetas_has_Ingredientes_Recetas1` FOREIGN KEY (`Recetas_idReceta`) REFERENCES `recetas` (`idReceta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `fk_Usuarios_Roles` FOREIGN KEY (`Roles_idRol`) REFERENCES `roles` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
