-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2025 a las 07:04:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quickpark`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) DEFAULT NULL,
  `nit_ci_cliente` varchar(255) DEFAULT NULL,
  `placa_auto` varchar(255) DEFAULT NULL,
  `telefono_cliente` varchar(11) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `nit_ci_cliente`, `placa_auto`, `telefono_cliente`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Victor Jesus', '26327337', 'ABC123', '04128226885', '2025-01-13 17:17:36', NULL, NULL, '1'),
(9, 'Kelbin Morales', '14258369', 'kbz1451', '04142583695', '2025-01-17 05:20:14', NULL, NULL, '1'),
(10, 'Victor Reiss', '14258369', 'kbz145', '04242644785', '2025-01-17 05:20:54', NULL, NULL, '1'),
(11, 'John Price', '14258369', 'kgb115', '0414258963', '2025-01-17 05:41:42', NULL, NULL, '1'),
(12, 'Ramon', '122563214', 'KNG115', '0142366541', '2025-01-17 05:52:21', NULL, NULL, '1'),
(13, 'Amir Velazco', '14259632', 'kbz14512', '0414256324', '2025-01-17 06:06:06', NULL, NULL, '1'),
(14, 'ARMI VASQUEZ', '24145632', 'kbz145122', '04123695231', '2025-01-17 06:12:38', NULL, NULL, '1'),
(15, 'VICTOR REISS', '14256324', 'ffdsdf1', '0412369852', '2025-01-17 06:13:11', NULL, NULL, '1'),
(16, 'Victor Jesus Gonzalez', '25764911', 'KBN123', '04142583698', '2025-01-17 06:13:53', NULL, NULL, '1'),
(17, 'Vic Jel', '14258369', 'kml14256', '04123659874', '2025-01-17 10:14:38', NULL, NULL, '1'),
(18, '04142586394', '2255', '14258369', '54564666', '2025-01-17 10:15:01', NULL, NULL, '1'),
(19, 'Reinaldo Reyesz', '142583692', 'kbz169223', '04142569631', '2025-01-17 10:16:08', NULL, NULL, '1'),
(20, 'Erika Jacqueline', '263273312', 'abc45623', '02126933152', '2025-01-17 10:17:31', NULL, NULL, '1'),
(21, 'angel rada', '14258369', 'abd142', '04145896321', '2025-01-17 10:19:49', NULL, NULL, '1'),
(22, 'camila alvarez', '14258369', '213bdg', '04123659871', '2025-01-17 10:21:34', NULL, NULL, '1'),
(23, 'Viictoria', '14896325', '145sdw', '041563258', '2025-01-17 10:22:39', NULL, NULL, '1'),
(24, 'camila alvarez2', '142583691', '213bdgf', '04123659871', '2025-01-17 10:35:06', NULL, NULL, '1'),
(25, 'VICTOR G', '14569328', 'knb1425', '04142589632', '2025-01-19 02:31:25', NULL, NULL, '1'),
(26, 'Victor Gonzalez G', '25635247', 'km1425', '04142589632', '2025-01-19 04:55:05', NULL, NULL, '1'),
(27, 'Windelys Sojo', '17896523', 'kms1748', '04241456328', '2025-01-19 05:03:03', NULL, NULL, '1'),
(28, 'Victoria Aponte', '24147859', 'kms1452', '04241485269', '2025-01-19 05:05:26', NULL, NULL, '1'),
(29, 'Jorelvi Reyes', '17483147', 'lga1200', '04242162798', '2025-01-19 10:40:14', NULL, NULL, '1'),
(30, 'John McTavish', '14258365', 'DMZ141', '04142566332', '2025-02-07 12:19:28', NULL, NULL, '1'),
(31, 'Luis Fernando', '26327336', 'kbz169', '04145879632', '2025-02-07 10:09:09', NULL, NULL, '1'),
(32, 'Luciana Jimenez', '14258325', 'knb005', '04142583695', '2025-02-07 11:40:40', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_facturaciones`
--

CREATE TABLE `tb_facturaciones` (
  `id_facturacion` int(11) NOT NULL,
  `id_informacion` varchar(255) DEFAULT NULL,
  `nro_factura` varchar(255) DEFAULT NULL,
  `id_cliente` varchar(255) DEFAULT NULL,
  `fecha_factura` varchar(255) DEFAULT NULL,
  `fecha_ingreso` varchar(255) DEFAULT NULL,
  `hora_ingreso` varchar(255) DEFAULT NULL,
  `fecha_salida` varchar(255) DEFAULT NULL,
  `hora_salida` varchar(255) DEFAULT NULL,
  `tiempo` varchar(255) DEFAULT NULL,
  `cuviculo` varchar(255) DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `cantidad` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `monto_total` varchar(255) DEFAULT NULL,
  `monto_literal` varchar(255) DEFAULT NULL,
  `user_sesion` varchar(255) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_facturaciones`
--

INSERT INTO `tb_facturaciones` (`id_facturacion`, `id_informacion`, `nro_factura`, `id_cliente`, `fecha_factura`, `fecha_ingreso`, `hora_ingreso`, `fecha_salida`, `hora_salida`, `tiempo`, `cuviculo`, `detalle`, `precio`, `cantidad`, `total`, `monto_total`, `monto_literal`, `user_sesion`, `qr`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', '1', '25', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '00:02', '2025-02-07', '02:49', '0 días con 2 horas con 47 minutos ', '02', 'Estacionamiento por 0 días con 2 horas con 47 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente VICTOR G con CI:\n 14569328 con el vehiculo con número de placa knb1425 y esta factura se realiza en\n  La Guaira, 07 de Febrero de 2025 a las: 02:49', '2025-02-07 02:49:37', NULL, NULL, '1'),
(2, '1', '2', '27', 'La Guaira, 07 de Febrero de 2025', '2025-01-19', '04:23', '2025-02-07', '02:51', '18 días con 22 horas con 28 minutos ', '01', 'Estacionamiento por 18 días con 22 horas con 28 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el sistema de paqueo, al cliente Windelys Sojo con CI/NIT:\r\n 17896523 con el vehiculo con número de placa kms1748 y esta factura se genero en\r\n  La Guaira, 07 de Febrero de 2025 a hr: 02:51', '2025-02-07 02:51:49', NULL, NULL, '1'),
(3, '1', '3', '30', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '00:18', '2025-02-07', '02:53', '0 días con 2 horas con 35 minutos ', '06', 'Estacionamiento por 0 días con 2 horas con 35 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el sistema de paqueo, al cliente John McTavish con CI/NIT:\r\n 14258365 con el vehiculo con número de placa DMZ141 y esta factura se genero en\r\n  La Guaira, 07 de Febrero de 2025 a hr: 02:53', '2025-02-07 02:53:01', NULL, NULL, '1'),
(4, '1', '4', '26', 'La Guaira, 07 de Febrero de 2025', '2025-01-19', '04:23', '2025-02-07', '02:54', '18 días con 22 horas con 31 minutos ', '03', 'Estacionamiento por 18 días con 22 horas con 31 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Victor Gonzalez G con CI:\n 25635247 al vehiculo con numero de placa km1425 y esta factura se realiza en\n  La Guaira, 07 de Febrero de 2025 a las: 02:54', '2025-02-07 02:54:36', NULL, NULL, '1'),
(5, '1', '5', '30', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '02:54', '2025-02-07', '03:35', '0 días con 0 horas con 41 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 41 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 03:35', '2025-02-07 03:35:48', NULL, NULL, '1'),
(6, '1', '6', '30', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '02:54', '2025-02-07', '03:50', '0 días con 0 horas con 56 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 56 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 03:50', '2025-02-07 03:50:21', NULL, NULL, '1'),
(7, '1', '7', '19', 'La Guaira, 07 de Febrero de 2025', '2025-01-17', '22:15', '2025-02-07', '21:46', '20 días con 23 horas con 31 minutos ', '04', 'Estacionamiento por 20 días con 23 horas con 31 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Reinaldo Reyesz con CI:\r\n 142583692 al vehiculo con numero de placa kbz169223 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 21:46', '2025-02-07 09:46:13', NULL, NULL, '1'),
(8, '1', '8', '20', 'La Guaira, 07 de Febrero de 2025', '2025-01-17', '22:15', '2025-02-07', '21:53', '20 días con 23 horas con 38 minutos ', '05', 'Estacionamiento por 20 días con 23 horas con 38 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Erika Jacqueline con CI:\r\n 263273312 al vehiculo con numero de placa abc45623 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 21:53', '2025-02-07 09:53:22', NULL, NULL, '1'),
(9, '1', '9', '30', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '21:45', '2025-02-07', '22:01', '0 días con 0 horas con 16 minutos ', '02', 'Estacionamiento por 0 días con 0 horas con 16 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 22:01', '2025-02-07 10:01:27', NULL, NULL, '1'),
(10, '1', '10', '31', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '22:08', '2025-02-07', '22:09', '0 días con 0 horas con 1 minutos ', '02', 'Estacionamiento por 0 días con 0 horas con 1 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Luis Fernando con CI:\r\n 26327336 al vehiculo con numero de placa kbz169 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 22:09', '2025-02-07 10:09:44', NULL, NULL, '1'),
(11, '1', '11', '30', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '22:46', '2025-02-07', '22:48', '0 días con 0 horas con 2 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 2 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 22:48', '2025-02-07 10:48:28', NULL, NULL, '1'),
(12, '1', '12', '30', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '22:46', '2025-02-07', '23:36', '0 días con 0 horas con 50 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 50 minutos ', '3', '1', '3', '3', 'TRES CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 23:36', '2025-02-07 11:36:28', NULL, NULL, '1'),
(13, '1', '13', '32', 'La Guaira, 07 de Febrero de 2025', '2025-02-07', '22:46', '2025-02-07', '23:40', '0 días con 0 horas con 54 minutos ', '02', 'Estacionamiento por 0 días con 0 horas con 54 minutos ', '4', '1', '4', '4', 'CUATRO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Luciana Jimenez con CI:\r\n 14258325 al vehiculo con numero de placa knb005 y esta factura se realiza en\r\n  La Guaira, 07 de Febrero de 2025 a las: 23:40', '2025-02-07 11:40:47', NULL, NULL, '1'),
(14, '1', '14', '1', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '00:05', '0 días con 0 horas con 1 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 1 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Victor Jesus con CI:\r\n 26327337 al vehiculo con numero de placa ABC123 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 00:05', '2025-02-08 12:05:00', NULL, NULL, '1'),
(15, '1', '15', '30', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '00:10', '0 días con 0 horas con 6 minutos ', '02', 'Estacionamiento por 0 días con 0 horas con 6 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 00:10', '2025-02-08 12:10:57', NULL, NULL, '1'),
(16, '1', '16', '1', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '00:35', '0 días con 0 horas con 31 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 31 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Victor Jesus con CI:\r\n 26327337 al vehiculo con numero de placa ABC123 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 00:35', '2025-02-08 12:35:26', NULL, NULL, '1'),
(17, '1', '17', '1', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '00:39', '0 días con 0 horas con 35 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 35 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Victor Jesus con CI:\r\n 26327337 al vehiculo con numero de placa ABC123 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 00:39', '2025-02-08 12:39:51', NULL, NULL, '1'),
(18, '1', '18', '1', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '00:43', '0 días con 0 horas con 39 minutos ', '01', 'Estacionamiento por 0 días con 0 horas con 39 minutos ', '0', '1', '0', '0', 'CERO CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Victor Jesus con CI:\r\n 26327337 al vehiculo con numero de placa ABC123 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 00:43', '2025-02-08 12:43:01', NULL, NULL, '1'),
(19, '1', '19', '30', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '01:39', '0 días con 1 horas con 35 minutos ', '02', 'Estacionamiento por 0 días con 1 horas con 35 minutos ', '3', '1', '3', '3', 'TRES CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente John McTavish con CI:\r\n 14258365 al vehiculo con numero de placa DMZ141 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 01:39', '2025-02-08 01:39:48', NULL, NULL, '1'),
(20, '1', '20', '29', 'La Guaira, 08 de Febrero de 2025', '2025-01-10', '00:04', '2025-02-08', '01:43', '29 días con 1 horas con 39 minutos ', '02', 'Estacionamiento $3 el día x 29 días con 1 horas con 39 minutos ', '87', '1', '87', '87', 'OCHENTA Y SIETE CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Jorelvi Reyes con CI:\r\n 17483147 al vehiculo con numero de placa lga1200 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 01:43', '2025-02-08 01:43:46', NULL, NULL, '1'),
(21, '1', '21', '1', 'La Guaira, 08 de Febrero de 2025', '2025-02-08', '00:04', '2025-02-08', '02:02', '0 días con 1 horas con 58 minutos ', '01', 'Estacionamiento $3 el día x 0 días con 1 horas con 58 minutos ', '3', '1', '3', '3', 'TRES CON 00/100 Bs.', 'vjgg101@gmail.com', 'Factura realizada por el Sistema de Estacionamiento, al cliente Victor Jesus con CI:\r\n 26327337 al vehiculo con numero de placa ABC123 y esta factura se realiza en\r\n  La Guaira, 08 de Febrero de 2025 a las: 02:02', '2025-02-08 02:02:39', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_informaciones`
--

CREATE TABLE `tb_informaciones` (
  `id_informacion` int(11) NOT NULL,
  `nombre_parqueo` varchar(255) DEFAULT NULL,
  `actividad_empresa` varchar(255) DEFAULT NULL,
  `sucursal` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `zona` varchar(255) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `departamento_ciudad` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_informaciones`
--

INSERT INTO `tb_informaciones` (`id_informacion`, `nombre_parqueo`, `actividad_empresa`, `sucursal`, `direccion`, `zona`, `telefono`, `departamento_ciudad`, `pais`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'QuickPark', 'C.C. Jorge Luis Garcia', '01', 'Av. Principal José Maria España', 'El Alamo, Macuto', '0212-930057', 'La Guaira', 'Venezuela', '2025-01-13 11:11:22', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapeos`
--

CREATE TABLE `tb_mapeos` (
  `id_map` int(11) NOT NULL,
  `nro_espacio` varchar(255) DEFAULT NULL,
  `estado_espacio` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mapeos`
--

INSERT INTO `tb_mapeos` (`id_map`, `nro_espacio`, `estado_espacio`, `obs`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '01', 'DISPONIBLE', NULL, '2025-01-17 17:50:32', '2025-02-08 02:02:39', NULL, '1'),
(2, '02', 'DISPONIBLE', NULL, '2025-01-17 17:51:07', '2025-02-08 01:43:46', NULL, '1'),
(3, '03', 'DISPONIBLE', '', '2025-01-17 05:51:43', '2025-02-07 02:54:36', NULL, '1'),
(4, '04', 'DISPONIBLE', '', '2025-01-17 10:13:55', '2025-02-07 09:46:13', NULL, '1'),
(5, '05', 'DISPONIBLE', '', '2025-01-17 10:14:07', '2025-02-07 09:53:22', NULL, '1'),
(6, '06', 'DISPONIBLE', '', '2025-01-12 17:57:33', '2025-02-07 02:53:01', NULL, '1'),
(7, '07', 'DISPONIBLE', '', '2025-01-13 05:05:43', '2025-01-15 07:06:23', NULL, '1'),
(8, '08', 'DISPONIBLE', '', '2025-01-13 05:05:48', '2025-02-07 10:12:14', NULL, '1'),
(9, '09', 'DISPONIBLE', '', '2025-01-13 05:05:52', NULL, NULL, '1'),
(10, '10', 'DISPONIBLE', '', '2025-01-13 05:05:56', NULL, NULL, '1'),
(11, '11', 'DISPONIBLE', '', '2025-01-13 05:06:00', NULL, NULL, '1'),
(12, '12', 'DISPONIBLE', '', '2025-01-13 05:06:04', NULL, NULL, '1'),
(13, '13', 'DISPONIBLE', '', '2025-01-13 05:06:11', '2025-01-15 05:39:15', NULL, '1'),
(14, '14', 'DISPONIBLE', '', '2025-01-13 05:06:17', NULL, NULL, '1'),
(15, '15', 'DISPONIBLE', '', '2025-01-13 05:06:22', NULL, NULL, '1'),
(16, '16', 'DISPONIBLE', '', '2025-01-13 05:06:31', NULL, NULL, '1'),
(17, '17', 'DISPONIBLE', '', '2025-01-13 05:06:34', NULL, NULL, '1'),
(18, '18', 'DISPONIBLE', '', '2025-01-13 05:06:38', NULL, NULL, '1'),
(19, '19', 'DISPONIBLE', '', '2025-01-13 05:06:43', NULL, NULL, '1'),
(20, '20', 'DISPONIBLE', '', '2025-01-13 05:06:48', NULL, NULL, '1'),
(21, '21', 'DISPONIBLE', '', '2025-01-13 05:06:52', NULL, NULL, '1'),
(22, '22', 'DISPONIBLE', '', '2025-01-13 05:07:01', NULL, NULL, '1'),
(23, '23', 'DISPONIBLE', '', '2025-01-13 05:07:06', NULL, NULL, '1'),
(24, '24', 'DISPONIBLE', '', '2025-01-13 05:07:12', NULL, NULL, '1'),
(25, '25', 'DISPONIBLE', '', '2025-01-13 05:07:15', NULL, NULL, '1'),
(26, '26', 'DISPONIBLE', '', '2025-01-13 05:07:20', NULL, NULL, '1'),
(27, '27', 'DISPONIBLE', '', '2025-01-13 05:07:23', NULL, NULL, '1'),
(28, '28', 'DISPONIBLE', '', '2025-01-13 05:07:27', NULL, NULL, '1'),
(29, '29', 'DISPONIBLE', '', '2025-01-13 05:07:31', NULL, NULL, '1'),
(30, '30', 'DISPONIBLE', '', '2025-01-13 05:07:35', NULL, NULL, '1'),
(31, '31', 'DISPONIBLE', '', '2025-01-13 05:07:42', NULL, NULL, '1'),
(32, '32', 'DISPONIBLE', '', '2025-01-13 05:07:46', NULL, NULL, '1'),
(33, '33', 'DISPONIBLE', '', '2025-01-13 05:07:50', NULL, NULL, '1'),
(34, '34', 'DISPONIBLE', '', '2025-01-13 05:07:54', NULL, NULL, '1'),
(35, '35', 'DISPONIBLE', '', '2025-01-13 05:07:57', NULL, NULL, '1'),
(36, '36', 'DISPONIBLE', '', '2025-01-13 05:08:02', NULL, NULL, '1'),
(37, '37', 'DISPONIBLE', '', '2025-01-13 05:08:06', NULL, NULL, '1'),
(38, '38', 'DISPONIBLE', '', '2025-01-13 05:08:09', NULL, NULL, '1'),
(39, '39', 'DISPONIBLE', '', '2025-01-13 05:08:13', NULL, NULL, '1'),
(40, '40', 'DISPONIBLE', '', '2025-01-13 05:08:16', NULL, NULL, '1'),
(41, '41', 'DISPONIBLE', '', '2025-01-17 10:19:17', '2025-01-17 10:19:49', NULL, '1'),
(42, '42', 'DISPONIBLE', '', '2025-01-17 10:20:05', '2025-01-17 10:22:39', NULL, '1'),
(43, '43', 'DISPONIBLE', '', '2025-01-17 10:20:28', '2025-01-17 10:35:06', NULL, '1'),
(44, '44', 'DISPONIBLE', '', '2025-01-17 10:20:05', '2025-01-17 10:22:39', NULL, '1'),
(45, '45', 'DISPONIBLE', '', '2025-01-17 10:20:28', '2025-01-17 10:35:06', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_precios`
--

CREATE TABLE `tb_precios` (
  `id_precio` int(11) NOT NULL,
  `cantidad` varchar(255) DEFAULT NULL,
  `detalle` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_precios`
--

INSERT INTO `tb_precios` (`id_precio`, `cantidad`, `detalle`, `precio`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'DIAS', '3', '2025-01-19 02:33:10', NULL, NULL, '1'),
(2, '2', 'DIAS', '6', '2025-02-06 02:21:05', '2025-02-08 01:04:33', NULL, '1'),
(3, '3', 'DIAS', '9', '2025-02-07 02:54:19', '2025-02-08 01:04:53', NULL, '1'),
(4, '4', 'DIAS', '12', '2025-02-08 01:05:04', NULL, NULL, '1'),
(5, '5', 'DIAS', '15', '2025-02-08 01:05:18', NULL, NULL, '1'),
(6, '6', 'DIAS', '18', '2025-02-08 01:05:29', NULL, NULL, '1'),
(7, '7', 'DIAS', '21', '2025-02-08 01:05:37', NULL, NULL, '1'),
(8, '8', 'DIAS', '24', '2025-02-08 01:05:45', NULL, NULL, '1'),
(9, '9', 'DIAS', '27', '2025-02-08 01:05:53', NULL, NULL, '1'),
(10, '10', 'DIAS', '30', '2025-02-08 01:06:10', NULL, NULL, '1'),
(11, '11', 'DIAS', '33', '2025-02-08 01:06:30', NULL, NULL, '1'),
(12, '12', 'DIAS', '36', '2025-02-08 01:06:39', NULL, NULL, '1'),
(13, '13', 'DIAS', '39', '2025-02-08 01:06:47', NULL, NULL, '1'),
(14, '14', 'DIAS', '42', '2025-02-08 01:07:03', NULL, NULL, '1'),
(15, '15', 'DIAS', '45', '2025-02-08 01:07:17', NULL, NULL, '1'),
(16, '16', 'DIAS', '48', '2025-02-08 01:07:33', NULL, NULL, '1'),
(17, '17', 'DIAS', '51', '2025-02-08 01:07:46', NULL, NULL, '1'),
(18, '18', 'DIAS', '54', '2025-02-08 01:08:12', NULL, NULL, '1'),
(19, '19', 'DIAS', '57', '2025-02-08 01:09:18', NULL, NULL, '1'),
(20, '20', 'DIAS', '60', '2025-02-08 01:09:28', NULL, NULL, '1'),
(21, '21', 'DIAS', '63', '2025-02-08 01:09:49', NULL, NULL, '1'),
(22, '22', 'DIAS', '66', '2025-02-08 01:10:10', NULL, NULL, '1'),
(23, '23', 'DIAS', '69', '2025-02-08 01:10:26', '2025-02-08 01:10:33', NULL, '1'),
(24, '24', 'DIAS', '72', '2025-02-08 01:10:46', NULL, NULL, '1'),
(25, '25', 'DIAS', '75', '2025-02-08 01:10:56', NULL, NULL, '1'),
(26, '26', 'DIAS', '78', '2025-02-08 01:11:45', NULL, NULL, '1'),
(27, '27', 'DIAS', '81', '2025-02-08 01:12:07', NULL, NULL, '1'),
(28, '28', 'DIAS', '84', '2025-02-08 01:12:34', NULL, NULL, '1'),
(29, '29', 'DIAS', '87', '2025-02-08 01:13:39', NULL, NULL, '1'),
(30, '30', 'DIAS', '90', '2025-02-08 01:13:47', NULL, NULL, '1'),
(31, '31', 'DIAS', '93', '2025-02-08 01:13:59', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `nombre`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Administrador', '2025-01-12 04:52:39', NULL, NULL, '1'),
(2, 'Cajero', '2025-01-12 04:52:44', NULL, NULL, '1'),
(3, 'Usuario', '2025-01-12 04:52:49', NULL, NULL, '1'),
(4, 'Root', '2025-01-12 04:52:55', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tickets`
--

CREATE TABLE `tb_tickets` (
  `id_ticket` int(11) NOT NULL,
  `nombre_cliente` varchar(255) DEFAULT NULL,
  `nit_ci` varchar(255) DEFAULT NULL,
  `placa_auto` varchar(255) DEFAULT NULL,
  `cuviculo` varchar(255) DEFAULT NULL,
  `fecha_ingreso` varchar(255) DEFAULT NULL,
  `hora_ingreso` varchar(255) DEFAULT NULL,
  `estado_ticket` varchar(255) DEFAULT NULL,
  `user_sesion` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_tickets`
--

INSERT INTO `tb_tickets` (`id_ticket`, `nombre_cliente`, `nit_ci`, `placa_auto`, `cuviculo`, `fecha_ingreso`, `hora_ingreso`, `estado_ticket`, `user_sesion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(23, 'Kelbin Morales', '14258369', 'KBZ1451', '1', '2025-01-17', '17:17', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 05:20:14', NULL, NULL, '1'),
(24, 'Victor Reiss', '14258369', 'KBZ145', '2', '2025-01-17', '17:17', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 05:20:54', NULL, NULL, '1'),
(25, 'John Price', '14258369', 'KGB115', '2', '2025-01-17', '17:41', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 05:41:42', NULL, NULL, '1'),
(26, 'Ramon', '122563214', 'KNG115', '01', '2025-01-17', '17:52', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 05:52:21', NULL, NULL, '1'),
(27, 'Amir Velazco', '14259632', 'KBZ14512', '01', '2025-01-17', '18:05', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 06:06:06', NULL, NULL, '1'),
(28, 'ARMI VASQUEZ', '24145632', 'KBZ145122', '01', '2025-01-17', '18:12', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 06:12:38', NULL, '2025-01-19 02:25:17', '0'),
(29, 'VICTOR REISS', '14256324', 'FFDSDF1', '02', '2025-01-17', '18:12', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 06:13:11', NULL, '2025-01-19 02:29:54', '0'),
(30, 'Victor Jesus Gonzalez', '25764911', 'KBN123', '03', '2025-01-17', '18:12', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 06:13:53', NULL, '2025-01-19 02:30:13', '0'),
(31, 'Vic Jel', '14258369', 'KML14256', '4', '2025-01-17', '22:14', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:14:38', NULL, NULL, '1'),
(32, '04142586394', '2255', '14258369', '05', '2025-01-17', '22:14', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:15:00', NULL, NULL, '1'),
(33, 'Reinaldo Reyesz', '142583692', 'KBZ169223', '04', '2025-01-17', '22:15', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:16:08', NULL, NULL, '1'),
(34, 'Erika Jacqueline', '263273312', 'ABC45623', '05', '2025-01-17', '22:15', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:17:31', NULL, NULL, '1'),
(35, 'angel rada', '14258369', 'ABD142', '41', '2025-01-17', '22:19', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:19:49', NULL, NULL, '1'),
(36, 'camila alvarez', '14258369', '213BDG', '45', '2025-01-17', '22:21', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:21:34', NULL, NULL, '1'),
(37, 'Viictoria', '14896325', '145SDW', '42', '2025-01-17', '22:21', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:22:39', NULL, NULL, '1'),
(38, 'camila alvarez2', '142583691', '213BDGF', '43', '2025-01-17', '22:34', 'LIBRE', 'vjgg101@gmail.com', '2025-01-17 10:35:06', NULL, NULL, '1'),
(39, 'VICTOR G', '14569328', 'KNB1425', '02', '2025-01-19', '02:30', 'LIBRE', 'vjgg101@gmail.com', '2025-01-19 02:31:25', NULL, '2025-02-07 12:02:56', '0'),
(40, 'Victor Gonzalez G', '25635247', 'KM1425', '03', '2025-01-19', '04:23', 'LIBRE', 'vjgg101@gmail.com', '2025-01-19 04:55:05', NULL, NULL, '1'),
(41, 'Windelys Sojo', '17896523', 'KMS1748', '01', '2025-01-19', '04:23', 'LIBRE', 'vjgg101@gmail.com', '2025-01-19 05:03:03', NULL, NULL, '1'),
(42, 'Victoria Aponte', '24147859', 'KMS1452', '06', '2025-01-19', '04:23', 'LIBRE', 'vjgg101@gmail.com', '2025-01-19 05:05:26', NULL, '2025-01-19 05:05:49', '0'),
(43, 'Jorelvi Reyes', '17483147', 'LGA1200', '06', '2025-01-19', '22:38', 'LIBRE', 'vjgg101@gmail.com', '2025-01-19 10:40:14', NULL, '2025-01-19 10:41:33', '0'),
(44, 'VICTOR G', '14569328', 'KNB1425', '02', '2025-02-07', '00:02', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 12:03:02', NULL, NULL, '1'),
(45, 'John McTavish', '14258365', 'DMZ141', '06', '2025-02-07', '00:18', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 12:19:28', NULL, NULL, '1'),
(46, 'John McTavish', '14258365', 'DMZ141', '01', '2025-02-07', '02:54', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 03:35:10', NULL, NULL, '1'),
(47, 'John McTavish', '14258365', 'DMZ141', '01', '2025-02-07', '02:54', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 03:50:02', NULL, NULL, '1'),
(48, 'John McTavish', '14258365', 'DMZ141', '02', '2025-02-07', '21:45', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 10:00:03', NULL, NULL, '1'),
(49, 'Luis Fernando', '26327336', 'KBZ169', '02', '2025-02-07', '22:08', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 10:09:09', NULL, NULL, '1'),
(50, 'John McTavish', '14258365', 'DMZ141', '01', '2025-02-07', '22:08', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 10:09:20', NULL, '2025-02-07 10:11:37', '0'),
(51, 'John McTavish', '14258365', 'DMZ141', '08', '2025-02-07', '22:11', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 10:11:48', NULL, '2025-02-07 10:12:14', '0'),
(52, 'John McTavish', '14258365', 'DMZ141', '01', '2025-02-07', '22:46', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 10:46:58', NULL, NULL, '1'),
(53, 'John McTavish', '14258365', 'DMZ141', '01', '2025-02-07', '22:46', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 11:36:13', NULL, NULL, '1'),
(54, 'Luciana Jimenez', '14258325', 'KNB005', '02', '2025-02-07', '22:46', 'LIBRE', 'vjgg101@gmail.com', '2025-02-07 11:40:40', NULL, NULL, '1'),
(55, 'Victor Jesus', '26327337', 'ABC123', '01', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 12:04:39', NULL, NULL, '1'),
(56, 'John McTavish', '14258365', 'DMZ141', '02', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 12:04:55', NULL, NULL, '1'),
(57, 'Victor Jesus', '26327337', 'ABC123', '01', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 12:10:54', NULL, NULL, '1'),
(58, 'Victor Jesus', '26327337', 'ABC123', '01', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 12:39:29', NULL, NULL, '1'),
(59, 'Victor Jesus', '26327337', 'ABC123', '01', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 12:42:55', NULL, NULL, '1'),
(60, 'Victor Jesus', '26327337', 'ABC123', '01', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 01:37:47', NULL, NULL, '1'),
(61, 'John McTavish', '14258365', 'DMZ141', '02', '2025-02-08', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 01:39:43', NULL, NULL, '1'),
(62, 'Jorelvi Reyes', '17483147', 'LGA1200', '02', '2025-01-10', '00:04', 'LIBRE', 'vjgg101@gmail.com', '2025-02-08 01:42:54', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `rol` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verificado` varchar(255) DEFAULT NULL,
  `password_user` varchar(255) DEFAULT NULL,
  `tokken` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nombres`, `rol`, `email`, `email_verificado`, `password_user`, `tokken`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Victor Jesus', 'Root', 'vjgg101@gmail.com', 'Si', '2557431', NULL, '2025-01-12 16:51:03', NULL, NULL, '1'),
(4, 'Victor Gonzalez', 'Cajero', 'victorjesus1010@gmail.com', NULL, '2557431', NULL, '2025-01-12 04:54:38', NULL, NULL, '1'),
(5, 'Vic Wild', 'Administrador', 'victorjesuswild@gmail.com', NULL, '2557431', NULL, '2025-01-12 04:55:02', NULL, NULL, '1'),
(6, 'John Prince', NULL, 'tf141-b06@gmail.com', NULL, 'bravo06', NULL, '2025-01-17 06:45:38', NULL, '2025-01-19 11:01:33', '0'),
(7, 'John Price', NULL, 'b06-tf141@gmail.com', NULL, 'bravo06', NULL, '2025-01-19 11:02:23', NULL, NULL, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_facturaciones`
--
ALTER TABLE `tb_facturaciones`
  ADD PRIMARY KEY (`id_facturacion`);

--
-- Indices de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  ADD PRIMARY KEY (`id_map`);

--
-- Indices de la tabla `tb_precios`
--
ALTER TABLE `tb_precios`
  ADD PRIMARY KEY (`id_precio`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tb_facturaciones`
--
ALTER TABLE `tb_facturaciones`
  MODIFY `id_facturacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tb_precios`
--
ALTER TABLE `tb_precios`
  MODIFY `id_precio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
