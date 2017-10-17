-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-09-2017 a las 11:18:08
-- Versión del servidor: 5.7.19-log
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `burguerlandia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `IdAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Admin` varchar(45) DEFAULT NULL,
  `Contrasena_Admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdAdministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `Cedula_Cl` int(11) NOT NULL,
  `Telefono_Cl` varchar(45) DEFAULT NULL,
  `Celular_Cl` varchar(45) DEFAULT NULL,
  `Nombre_Cl` varchar(45) NOT NULL,
  `Direccion_Cl` varchar(45) NOT NULL,
  `Contrasena_Cl` varchar(45) NOT NULL,
  PRIMARY KEY (`Cedula_Cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_domicilio`
--

DROP TABLE IF EXISTS `detalle_domicilio`;
CREATE TABLE IF NOT EXISTS `detalle_domicilio` (
  `IdDetalle_Dom` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(10) UNSIGNED NOT NULL,
  `IdDomicilio` int(11) NOT NULL,
  `IdProducto` int(11) NOT NULL,
  PRIMARY KEY (`IdDetalle_Dom`),
  KEY `fk_Detalle_Domicilio_Domicilio1_idx` (`IdDomicilio`),
  KEY `fk_Detalle_Domicilio_Productos1_idx` (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

DROP TABLE IF EXISTS `domicilio`;
CREATE TABLE IF NOT EXISTS `domicilio` (
  `IdDomicilio` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Dom` date NOT NULL,
  `Hora_Dom` varchar(20) DEFAULT NULL,
  `Cedula_Cl` int(11) NOT NULL,
  PRIMARY KEY (`IdDomicilio`),
  KEY `fk_Domicilio_Cliente_idx` (`Cedula_Cl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

DROP TABLE IF EXISTS `opinion`;
CREATE TABLE IF NOT EXISTS `opinion` (
  `idOpinion` int(11) NOT NULL AUTO_INCREMENT,
  `Opinion` varchar(250) NOT NULL,
  `Correo_Cl` varchar(45) DEFAULT NULL,
  `Celular_Cli` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idOpinion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Pr` varchar(45) NOT NULL,
  `Valor_Pr` varchar(45) NOT NULL,
  `Descripcion_Pr` varchar(45) NOT NULL,
  `Foto_Pr` longblob,
  PRIMARY KEY (`IdProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

DROP TABLE IF EXISTS `publicidad`;
CREATE TABLE IF NOT EXISTS `publicidad` (
  `IdPublicidad` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion_Pub` varchar(100) DEFAULT NULL,
  `Foto_Pub` longblob NOT NULL,
  `Fecha_Pub` date DEFAULT NULL,
  PRIMARY KEY (`IdPublicidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_domicilio`
--
ALTER TABLE `detalle_domicilio`
  ADD CONSTRAINT `fk_Detalle_Domicilio_Domicilio1` FOREIGN KEY (`IdDomicilio`) REFERENCES `domicilio` (`IdDomicilio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Detalle_Domicilio_Productos1` FOREIGN KEY (`IdProducto`) REFERENCES `producto` (`IdProducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `fk_Domicilio_Cliente` FOREIGN KEY (`Cedula_Cl`) REFERENCES `cliente` (`Cedula_Cl`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
