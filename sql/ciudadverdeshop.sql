-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2021 a las 19:35:08
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciudadverdeshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `numRegistroCalificacion` varchar(20) NOT NULL,
  `numRegistroGlobal` varchar(20) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `pregunta1` varchar(2) NOT NULL,
  `pregunta2` varchar(2) NOT NULL,
  `pregunta3` varchar(2) NOT NULL,
  `pregunta4` varchar(2) NOT NULL,
  `porcentaje` varchar(5) NOT NULL,
  `comentario` varchar(206) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`numRegistroCalificacion`, `numRegistroGlobal`, `usuario`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `porcentaje`, `comentario`) VALUES
('6000000000', '2000000000', '80815886', '5', '5', '5', '5', '5', 'Tienen un a buena atención y un buen sentido de pertenecía '),
('6000000001', '8000000000', '80815886', '5', '5', '5', '5', '5', 'atencion ok');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celular`
--

CREATE TABLE `celular` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `celular`
--

INSERT INTO `celular` (`numRegistroGlobal`, `usuario`, `tabla`, `celular`, `telefono`) VALUES
('1000000001', '80815886', 'registrousuario', '3193163087', '0000000000'),
('1000000002', '1031648864', 'registrousuario', '3107895240', NULL),
('1000000003', '1031826090', 'registrousuario', '61386374', NULL),
('2000000000', '80815886', 'registroTienda', '3193163087', '0000000000'),
('4000000000', '80815886', 'registroEmpresa', '0000000000', '0316389000'),
('4000000002', '80815886', 'registroEmpresa', '3116289121', '0000000000'),
('4000000003', '80815886', 'registroEmpresa', '3173656026', '0000000000'),
('4000000004', '80815886', 'registroEmpresa', '3015555555', '0000000000'),
('4000000005', '80815886', 'registroEmpresa', '3202851699', '0314073033'),
('4000000006', '80815886', 'registroEmpresa', '0000000000', '0317450999'),
('4000000007', '80815886', 'registroEmpresa', '0000000000', '0316505222'),
('4000000008', '80815886', 'registroEmpresa', '0000000000', '0313649000'),
('4000000009', '1031648864', 'registroEmpresa', '3333333333', '3333333333'),
('4000000010', '80815886', 'registroEmpresa', '3009108496', '0000000000'),
('4000000011', '80815886', 'registroEmpresa', '5717945470', '5717945470'),
('4000000012', '80815886', 'registroEmpresa', '3503100919', '3503100919'),
('8000000000', '80815886', 'registroProductoIndividual', '3193163087', '0000000000'),
('8000000001', '80815886', 'registroProductoIndividual', '3214579869', '0000000000'),
('8000000002', '80815886', 'registroProductoIndividual', '3193163087', NULL),
('8000000003', '1031648864', 'registroProductoIndividual', '3659689999', NULL),
('8000000004', '1031648864', 'registroProductoIndividual', '3265859898', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`numRegistroGlobal`, `usuario`, `tabla`, `descripcion`) VALUES
('2000000000', '80815886', 'registroTienda', 'tu mejor opcion!'),
('4000000000', '80815886', 'registroEmpresa', 'Cervecería Bavaria empresa colombiana de bebidas  '),
('4000000002', '80815886', 'registroEmpresa', '! Me encanta ¡'),
('4000000003', '80815886', 'registroEmpresa', 'Peso exacto, precio justo'),
('4000000004', '80815886', 'registroEmpresa', '! Nadie lo hace como frisby lo hace ¡'),
('4000000005', '80815886', 'registroEmpresa', 'hiperahorro'),
('4000000006', '80815886', 'registroEmpresa', ' Con todo lo que te mereces'),
('4000000007', '80815886', 'registroEmpresa', 'A tu lado siempre'),
('4000000008', '80815886', 'registroEmpresa', 'vaya a la fija con panamericana!'),
('4000000009', '1031648864', 'registroEmpresa', 'dfsdfds'),
('4000000010', '80815886', 'registroEmpresa', 'por mas momentos peludos'),
('4000000011', '80815886', 'registroEmpresa', 'Tostao Café & Pan'),
('4000000012', '80815886', 'registroEmpresa', 'El LUGAR PERFECTO\r\nPARA TU ENTRENAMIENTO'),
('8000000000', '80815886', 'registroProductoIndividual', 'celular huawei y7 2018 usado con fisura totalmente funcional'),
('8000000001', '80815886', 'registroProductoIndividual', 'Entonces, ¿qué es este coche? Skoda Felicia 1997 es un auto subcompacto de un fabricante checo. Producido un coche en una generación. Por primera vez \"Felicia\" nació en la 94a. El último modelo salió de la línea de montaje en 2001. Tenga en cuenta que fue \"Felicia\" la que se convirtió en el primer modelo que lanzó \"Skoda\" después de unirse a la empresa Volkswagen. El coche se realizó en varias modificaciones de carrocería. Estos son un hatchback de cinco puertas, un vagón de cinco puertas\r\n'),
('8000000002', '80815886', 'registroProductoIndividual', 'lo cambio por un pc 5 generacion,o celular media alta gama'),
('8000000003', '1031648864', 'registroProductoIndividual', 'j@j.com'),
('8000000004', '1031648864', 'registroProductoIndividual', 'Disco Solido Ssd Adata Su635 240 Gb Laptop 2.5 Y Pc Sata 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `barrio` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `coordenadas` varchar(1000) NOT NULL,
  `mostrarubicacion` varchar(5) NOT NULL,
  `domicilios` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`numRegistroGlobal`, `usuario`, `tabla`, `ciudad`, `barrio`, `direccion`, `coordenadas`, `mostrarubicacion`, `domicilios`) VALUES
('2000000000', '80815886', 'registroTienda', 'Soacha Cundinamarca', 'Ciudad Verde', 'conjunto nardo 2', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.922433222228!2d-74.22229838529563!3d4.607907243738375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f758a5e245825%3A0xb275cf8b5d208b7!2sConjunto%20Residencial%20Nardo%20II!5e0!3m2!1ses!2sco!4v1621565056054!5m2!1ses!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000000', '80815886', 'registroEmpresa', 'Bogota', 'Niza 9', 'Carrera 53A # 127-35', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.7640535746546!2d-74.13709528529569!3d4.636132043505092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c057aa2ab87%3A0x7c72378d79eef356!2sBavaria%20Cervecer%C3%ADa%20de%20Bogot%C3%A1%2C%20Kennedy%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1621642234527!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000002', '80815886', 'registroEmpresa', 'Bogota', 'Apolo 3', 'calle 116 Nro. 7 – 15 oficina 14 – 02', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7954.1085100958435!2d-74.2149105269473!3d4.584283086678038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86f1c4aa76966cc1!2sMcDonald&#39;s!5e0!3m2!1ses-419!2sco!4v1621654199323!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000003', '80815886', 'registroEmpresa', 'Chia', 'Vivenza', 'Calle 3 #N° 11A - 56, Chía, Cundinamarca', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84931.37941499878!2d-74.09217816238207!3d4.653654932097832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a15731138bbba97!2sAndres%20Carne%20de%20Res%20%C2%B7%20Plazoleta%20de%20Comidas!5e0!3m2!1ses-419!2sco!4v1621655674894!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000004', '80815886', 'registroEmpresa', 'Bogota', 'Av. Cra. 40 # 25B-15  Segundo piso ', ' Quinta Paredes', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.0277262297896!2d-74.2067784852957!3d4.589047143893524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9fcc96cf9e03%3A0x77ecd07c10ff70b2!2sFrisby%20Mercurio!5e0!3m2!1ses-419!2sco!4v1621643944003!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000005', '80815886', 'registroEmpresa', 'Bogota', 'el ferrol', 'AV. Carrera 68 N° 72 - 43', '4.632409905891934, -74.12141303655203', 'Si', 'Si'),
('4000000006', '80815886', 'registroEmpresa', 'Bogota', 'teusaquillo', 'Ac. 26 #24-34, Bogotá, Cundinamarca', '4.623417608586727, -74.07748273347013', 'Si', 'Si'),
('4000000007', '80815886', 'registroEmpresa', 'Soacha', 'porvenir', 'Cundinamarca, Cra. 3 N° 9A - 02 C.C. Unisur, Soacha', '4.585514381946556, -74.20647807165884', 'Si', 'Si'),
('4000000008', '80815886', 'registroEmpresa', 'Bogota', 'Puente aranda', 'CALLE 12 # 34 - 30, BOGOTÁ D.C', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.0061058387087!2d-74.12674398551438!3d4.59292609666329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ed4a98ea75b%3A0xe011bae7fa374928!2sPanamericana%20C.C.%20Centro%20Mayor!5e0!3m2!1ses-419!2sco!4v1621654598598!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000009', '1031648864', 'registroEmpresa', 'gdfgfd', 'gfdgfg', 'fdgfdgfdg', 'dsfds', 'Si', 'Si'),
('4000000010', '80815886', 'registroEmpresa', 'Bogota', 'la providencia', 'Cra. 28 # 77 - 13', '4.6693483950420855, -74.0668682453646', 'Si', 'Si'),
('4000000011', '80815886', 'registroEmpresa', 'Soacha', 'Terreros', 'cc aventura', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63632.47912815022!2d-74.2162061621012!3d4.588648793828325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb23c932c9987871c!2sTostao%20Ventura%20Terreros!5e0!3m2!1ses-419!2sco!4v1621650383764!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('4000000012', '80815886', 'registroEmpresa', 'Soacha', 'Terreros', 'CC Mercurio Soacha', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5624.38888211344!2d-74.20430261285044!3d4.586211742646045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9fcd0f075a9b%3A0x391a86cbe14e8b8a!2sGimnasio%20Smart%20Fit%20-%20Mercurio%20Soacha!5e0!3m2!1ses-419!2sco!4v1621654936755!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('8000000000', '80815886', 'registroProductoIndividual', 'Soacha', 'Ciudad verde', 'nardo 2 ciudad verde', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.922433222228!2d-74.22229838529563!3d4.607907243738375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f758a5e245825%3A0xb275cf8b5d208b7!2sConjunto%20Residencial%20Nardo%20II!5e0!3m2!1ses-419!2sco!4v1621642752951!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Si', 'Si'),
('8000000001', '80815886', 'registroProductoIndividual', 'Bogota', 'Villamaria nueva tibabuyes', 'calle 130c #123-91', 'https://goo.gl/maps/TeNgXGU1AeM5sZ499', 'Si', 'Si'),
('8000000002', '80815886', 'registroProductoIndividual', 'Soacha', 'Ciudad Verde', 'Conjunto nardo 2', '4.60800967461703, -74.21993757386076', 'Si', 'No'),
('8000000003', '1031648864', 'registroProductoIndividual', 'j@j.com', 'j@j.com', 'j@j.com', 'j@j.com', 'Si', 'Si'),
('8000000004', '1031648864', 'registroProductoIndividual', 'socha', 'socha', 'socha', '4.608490034677844, -74.22568224170843', 'Si', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email`
--

CREATE TABLE `email` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `email`
--

INSERT INTO `email` (`numRegistroGlobal`, `usuario`, `tabla`, `email`) VALUES
('1000000001', '80815886', 'registrousuario', 'miguelio104master@hotmail.com'),
('1000000002', '1031648864', 'registrousuario', 'nicolaso104@hotmail.com'),
('1000000003', '1031826090', 'registrousuario', 'oalahafds@laifechiua.clpoi'),
('2000000000', '80815886', 'registroTienda', 'miguelio104master@hotmail.com'),
('4000000000', '80815886', 'registroEmpresa', 'protecciondedatos@co.ab-inbev.com'),
('4000000002', '80815886', 'registroEmpresa', 'atencionalcliente@co.mcd.com'),
('4000000003', '80815886', 'registroEmpresa', 'pendiente@pendiente.com'),
('4000000004', '80815886', 'registroEmpresa', 'pcentro@frisby.com.co'),
('4000000005', '80815886', 'registroEmpresa', 'sugerencias@alkosto.com'),
('4000000006', '80815886', 'registroEmpresa', 'servicioalcliente@colsubsidio.com'),
('4000000007', '80815886', 'registroEmpresa', 'defensoriadelafiliado@cafam.com.co'),
('4000000008', '80815886', 'registroEmpresa', 'TIENDAVIRTUAL@PANAMERICANA.COM.CO'),
('4000000009', '1031648864', 'registroEmpresa', 'dsfds@fgdf.com'),
('4000000010', '80815886', 'registroEmpresa', 'servicioclientes@laika.com.co'),
('4000000011', '80815886', 'registroEmpresa', 'info@tostaocafeypan.com'),
('4000000012', '80815886', 'registroEmpresa', 'sac@smartfit.com.co'),
('8000000000', '80815886', 'registroProductoIndividual', 'miguelio104master@gmail.com'),
('8000000001', '80815886', 'registroProductoIndividual', 'miguelangelrodriguezrozog1220@gmail.com'),
('8000000002', '80815886', 'registroProductoIndividual', 'miguelio104master@gmail.com'),
('8000000003', '1031648864', 'registroProductoIndividual', 'j@j.com'),
('8000000004', '1031648864', 'registroProductoIndividual', 'njj@lkl.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `fechaDeRegistro` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`numRegistroGlobal`, `usuario`, `tabla`, `fechaDeRegistro`, `hora`, `fecha`) VALUES
('1000000001', '80815886', 'registrousuario', '2021-04-08', '09:46:24', 'creado día 08 mes 04 año 2021 hora: 09 :46 :24'),
('1000000002', '1031648864', 'registrousuario', '2021-04-30', '05:01:43', 'creado día 30 mes 04 año 2021 hora: 05 :01 :43'),
('1000000003', '1031826090', 'registrousuario', '2021-05-14', '22:09:15', 'creado día 14 mes 05 año 2021 hora: 22 :09 :15'),
('2000000000', '80815886', 'registroTienda', '2021-04-26', '10:53:49', 'creado día 26 mes 04 año 2021 hora: 10 :53 :49'),
('2000000001', '80815886', 'registroTienda', '2021-05-01', '06:01:33', 'creado día 01 mes 05 año 2021 hora: 06 :01 :33'),
('4000000000', '80815886', 'registroEmpresa', '2021-04-14', '11:32:03', 'creado día 14 mes 04 año 2021 hora: 11 :32 :03'),
('4000000001', '80815886', 'registroEmpresa', '2021-04-14', '17:13:12', 'creado día 14 mes 04 año 2021 hora: 17 :13 :12'),
('4000000002', '80815886', 'registroEmpresa', '2021-04-14', '17:49:36', 'creado día 14 mes 04 año 2021 hora: 17 :49 :36'),
('4000000003', '80815886', 'registroEmpresa', '2021-04-14', '18:07:56', 'creado día 14 mes 04 año 2021 hora: 18 :07 :56'),
('4000000004', '80815886', 'registroEmpresa', '2021-04-14', '18:18:56', 'creado día 14 mes 04 año 2021 hora: 18 :18 :56'),
('4000000005', '80815886', 'registroEmpresa', '2021-04-15', '16:49:23', 'creado día 15 mes 04 año 2021 hora: 16 :49 :23'),
('4000000006', '80815886', 'registroEmpresa', '2021-04-16', '04:21:45', 'creado día 16 mes 04 año 2021 hora: 04 :21 :45'),
('4000000007', '80815886', 'registroEmpresa', '2021-04-16', '05:03:39', 'creado día 16 mes 04 año 2021 hora: 05 :03 :39'),
('4000000008', '80815886', 'registroEmpresa', '2021-04-29', '04:54:16', 'creado día 29 mes 04 año 2021 hora: 04 :54 :16'),
('4000000009', '1031648864', 'registroEmpresa', '2021-05-01', '05:37:34', 'creado día 01 mes 05 año 2021 hora: 05 :37 :34'),
('4000000010', '80815886', 'registroEmpresa', '2021-05-01', '05:59:41', 'creado día 01 mes 05 año 2021 hora: 05 :59 :41'),
('4000000011', '80815886', 'registroEmpresa', '2021-05-01', '08:39:13', 'creado día 01 mes 05 año 2021 hora: 08 :39 :13'),
('4000000012', '80815886', 'registroEmpresa', '2021-05-01', '08:39:29', 'creado día 01 mes 05 año 2021 hora: 08 :39 :29'),
('4000000013', '80815886', 'registroEmpresa', '2021-05-01', '08:39:44', 'creado día 01 mes 05 año 2021 hora: 08 :39 :44'),
('4000000014', '80815886', 'registroEmpresa', '2021-05-01', '14:39:53', 'creado día 01 mes 05 año 2021 hora: 14 :39 :53'),
('4000000015', '80815886', 'registroEmpresa', '2021-05-01', '14:40:06', 'creado día 01 mes 05 año 2021 hora: 14 :40 :06'),
('4000000016', '80815886', 'registroEmpresa', '2021-05-01', '14:40:33', 'creado día 01 mes 05 año 2021 hora: 14 :40 :33'),
('4000000017', '80815886', 'registroEmpresa', '2021-05-01', '14:41:15', 'creado día 01 mes 05 año 2021 hora: 14 :41 :15'),
('4000000018', '80815886', 'registroEmpresa', '2021-05-01', '14:41:27', 'creado día 01 mes 05 año 2021 hora: 14 :41 :27'),
('4000000019', '80815886', 'registroEmpresa', '2021-05-01', '14:41:39', 'creado día 01 mes 05 año 2021 hora: 14 :41 :39'),
('4000000020', '80815886', 'registroEmpresa', '2021-05-01', '14:42:11', 'creado día 01 mes 05 año 2021 hora: 14 :42 :11'),
('4000000021', '80815886', 'registroEmpresa', '2021-05-01', '14:42:34', 'creado día 01 mes 05 año 2021 hora: 14 :42 :34'),
('4000000022', '80815886', 'registroEmpresa', '2021-05-01', '14:42:47', 'creado día 01 mes 05 año 2021 hora: 14 :42 :47'),
('4000000023', '80815886', 'registroEmpresa', '2021-05-01', '14:42:59', 'creado día 01 mes 05 año 2021 hora: 14 :42 :59'),
('4000000024', '80815886', 'registroEmpresa', '2021-05-01', '14:43:32', 'creado día 01 mes 05 año 2021 hora: 14 :43 :32'),
('4000000025', '80815886', 'registroEmpresa', '2021-05-01', '14:43:49', 'creado día 01 mes 05 año 2021 hora: 14 :43 :49'),
('4000000026', '80815886', 'registroEmpresa', '2021-05-01', '14:44:00', 'creado día 01 mes 05 año 2021 hora: 14 :44 :00'),
('4000000027', '80815886', 'registroEmpresa', '2021-05-01', '14:44:26', 'creado día 01 mes 05 año 2021 hora: 14 :44 :26'),
('4000000028', '80815886', 'registroEmpresa', '2021-05-01', '14:44:42', 'creado día 01 mes 05 año 2021 hora: 14 :44 :42'),
('4000000029', '80815886', 'registroEmpresa', '2021-05-01', '14:44:54', 'creado día 01 mes 05 año 2021 hora: 14 :44 :54'),
('8000000000', '80815886', 'registroProductoIndividual', '2021-04-08', '10:47:17', 'creado día 08 mes 04 año 2021 hora: 10 :47 :17'),
('8000000001', '80815886', 'registroProductoIndividual', '2021-04-30', '03:37:23', 'creado día 30 mes 04 año 2021 hora: 03 :37 :23'),
('8000000002', '80815886', 'registroProductoIndividual', '2021-04-30', '04:13:51', 'creado día 30 mes 04 año 2021 hora: 04 :13 :51'),
('8000000003', '80815886', 'registroProductoIndividual', '2021-05-01', '15:48:21', 'creado día 01 mes 05 año 2021 hora: 15 :48 :21'),
('8000000004', '1031648864', 'registroProductoIndividual', '2021-05-14', '15:21:59', 'creado día 14 mes 05 año 2021 hora: 15 :21 :59'),
('8000000005', '1031648864', 'registroProductoIndividual', '2021-05-14', '15:34:02', 'creado día 14 mes 05 año 2021 hora: 15 :34 :02'),
('8000000006', '1031648864', 'registroProductoIndividual', '2021-05-14', '15:53:02', 'creado día 14 mes 05 año 2021 hora: 15 :53 :02'),
('8000000007', '1031648864', 'registroProductoIndividual', '2021-05-14', '16:02:02', 'creado día 14 mes 05 año 2021 hora: 16 :02 :02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insertimglogo`
--

CREATE TABLE `insertimglogo` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `nombrecomercio` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tmp` blob DEFAULT NULL,
  `size` varchar(10) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `creado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `insertimglogo`
--

INSERT INTO `insertimglogo` (`numRegistroGlobal`, `usuario`, `tabla`, `nombrecomercio`, `name`, `tmp`, `size`, `ruta`, `creado`) VALUES
('2000000000', '80815886', 'registroTienda', 'Licores Ciudad Verde', 'licores shop ciudad verde.png', 0x433a78616d7070096d70706870313631352e746d70, '285897', '../../img/archivos/LogoTienda/80815886/2000000000/licores shop ciudad verde.png', '2021-04-29'),
('4000000000', '80815886', 'registroEmpresa', 'Bavaria', 'Bavaria.png', 0x433a78616d7070096d70706870314230302e746d70, '59634', '../../img/archivos/LogoEmpresa/80815886/4000000000/Bavaria.png', '2021-04-14'),
('4000000002', '80815886', 'registroEmpresa', 'mcdonalds', 'mcdonalds.png', 0x433a78616d7070096d70706870433432342e746d70, '4948', '../../img/archivos/LogoEmpresa/80815886/4000000002/mcdonalds.png', '2021-04-14'),
('4000000003', '80815886', 'registroEmpresa', 'Andres carne de res', 'andres.png', 0x433a78616d7070096d70706870384435332e746d70, '3797', '../../img/archivos/LogoEmpresa/80815886/4000000003/andres.png', '2021-04-14'),
('4000000004', '80815886', 'registroEmpresa', 'Frisby sa', 'frisby.png', 0x433a78616d7070096d70706870413237322e746d70, '191416', '../../img/archivos/LogoEmpresa/80815886/4000000004/frisby.png', '2021-04-14'),
('4000000005', '80815886', 'registroEmpresa', 'Alkosto', 'Alkosto.png', 0x433a78616d7070096d70706870353830302e746d70, '7337', '../../img/archivos/LogoEmpresa/80815886/4000000005/Alkosto.png', '2021-04-15'),
('4000000006', '80815886', 'registroEmpresa', 'colsubsidio', 'Colsubsidio.png', 0x433a78616d7070096d70706870334130352e746d70, '5799', '../../img/archivos/LogoEmpresa/80815886/4000000006/Colsubsidio.png', '2021-04-16'),
('4000000007', '80815886', 'registroEmpresa', 'Drogueria cafam', 'cafam.jpg', 0x433a78616d7070096d70706870393243432e746d70, '107191', '../../img/archivos/LogoEmpresa/80815886/4000000007/cafam.jpg', '2021-04-16'),
('4000000008', '80815886', 'registroEmpresa', 'Panamericana', 'panamericana.png', 0x433a78616d7070096d70706870344332332e746d70, '2073', '../../img/archivos/LogoEmpresa/80815886/4000000008/panamericana.png', '2021-04-29'),
('4000000009', '1031648864', 'registroEmpresa', 'gdgfdgdf', 'comidas Rapidas.gif', 0x433a78616d7070096d70706870414639352e746d70, '461236', '../../img/archivos/LogoEmpresa/1031648864/4000000009/comidas Rapidas.gif', '2021-05-01'),
('4000000010', '80815886', 'registroEmpresa', 'laika', 'LAIKA.png', 0x433a78616d7070096d70706870423830432e746d70, '8283', '../../img/archivos/LogoEmpresa/80815886/4000000010/LAIKA.png', '2021-05-11'),
('4000000011', '80815886', 'registroEmpresa', 'Tostao', 'tostao-ventura-soacha.jpg', 0x433a78616d7070096d70706870333444332e746d70, '21620', '../../img/archivos/LogoEmpresa/80815886/4000000011/tostao-ventura-soacha.jpg', '2021-05-21'),
('4000000012', '80815886', 'registroEmpresa', 'Gimnasio Smart Fit ', 'smart fit.jpg', 0x433a78616d7070096d70706870343337362e746d70, '18136', '../../img/archivos/LogoEmpresa/80815886/4000000012/smart fit.jpg', '2021-05-21'),
('8000000000', '80815886', 'registroProductoIndividual', 'Jeisson Miguel Rodriguez Gelvez', 'huawey 2018.jpg', 0x433a78616d7070096d70706870343030462e746d70, '32099', '../../img/archivos/imagenesRegistroProductoIndividual/80815886/8000000000/huawey 2018.jpg', '2021-04-08'),
('8000000001', '80815886', 'registroProductoIndividual', 'Jeisson Miguel Rodriguez Gelvez', 'skoda.jpg', 0x433a78616d7070096d70706870343935302e746d70, '64154', '../../img/archivos/imagenesRegistroProductoIndividual/80815886/8000000001/skoda.jpg', '2021-04-30'),
('8000000002', '80815886', 'registroProductoIndividual', 'Jeisson Miguel Rodriguez Gelvez', 'xbox 360.jfif', 0x433a78616d7070096d70706870414445362e746d70, '5326', '../../img/archivos/imagenesRegistroProductoIndividual/80815886/8000000002/xbox 360.jfif', '2021-04-30'),
('8000000003', '1031648864', 'registroProductoIndividual', 'Juan  Nicolas Rodriguez Rodriguez', 'no disponible', 0x433a78616d7070096d70706870394442432e746d70, '0', 'no disponible', '2021-05-14'),
('8000000004', '1031648864', 'registroProductoIndividual', 'Juan  Nicolas Rodriguez Rodriguez', 'no disponible', '', '0', 'no disponible', '2021-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insertimgproducto`
--

CREATE TABLE `insertimgproducto` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `numRegistroProducto` varchar(12) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `nombrecomercio` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tmp` blob DEFAULT NULL,
  `size` varchar(25) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `creado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `insertimgproducto`
--

INSERT INTO `insertimgproducto` (`numRegistroGlobal`, `numRegistroProducto`, `producto`, `usuario`, `tabla`, `nombrecomercio`, `name`, `tmp`, `size`, `ruta`, `creado`) VALUES
('4000000000', '8500000000', 'cerveza poker', '80815886', 'registroEmpresa', 'Bavaria', 'Poker.png', 0x433a78616d7070096d70706870454539412e746d70, '100169', '../../img/archivos/imagenesProductosEmpresa/80815886/4000000000/Poker.png', '2021-04-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intereses`
--

CREATE TABLE `intereses` (
  `usuario` varchar(20) NOT NULL,
  `interes1` varchar(20) DEFAULT NULL,
  `interes2` varchar(20) DEFAULT NULL,
  `interes3` varchar(20) DEFAULT NULL,
  `interes4` varchar(20) DEFAULT NULL,
  `interes5` varchar(20) DEFAULT NULL,
  `interes6` varchar(20) DEFAULT NULL,
  `interes7` varchar(20) DEFAULT NULL,
  `interes8` varchar(20) DEFAULT NULL,
  `interes9` varchar(20) DEFAULT NULL,
  `interes10` varchar(20) DEFAULT NULL,
  `interes11` varchar(20) DEFAULT NULL,
  `interes12` varchar(20) DEFAULT NULL,
  `interes13` varchar(20) DEFAULT NULL,
  `interes14` varchar(20) DEFAULT NULL,
  `interes15` varchar(20) DEFAULT NULL,
  `interes16` varchar(20) DEFAULT NULL,
  `interes17` varchar(20) DEFAULT NULL,
  `interes18` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `intereses`
--

INSERT INTO `intereses` (`usuario`, `interes1`, `interes2`, `interes3`, `interes4`, `interes5`, `interes6`, `interes7`, `interes8`, `interes9`, `interes10`, `interes11`, `interes12`, `interes13`, `interes14`, `interes15`, `interes16`, `interes17`, `interes18`) VALUES
('1031648864', 'Licores', 'Panaderia', 'Comidasr', 'Restaurante', 'Asaderos', 'Tecnologia', 'Supermercados', 'Droguerias', 'Mascotas', 'Miscelaneas', 'Profesiones', 'Otros', 'Gimnasio', 'Guarderia', 'Belleza', '', 'Vivienda', 'Trueque'),
('1031826090', 'Licores', 'Panaderia', 'Comidasr', 'Restaurante', 'Asaderos', 'Tecnologia', 'Supermercados', 'Droguerias', 'Mascotas', 'Miscelaneas', 'Profesiones', 'Otros', 'Gimnasio', 'Guarderia', 'Belleza', '', 'Vivienda', 'Trueque'),
('80815886', 'Licores', 'Panaderia', 'Comidasr', 'Restaurante', 'Asaderos', 'Tecnologia', 'Supermercados', 'Droguerias', 'Mascotas', 'Miscelaneas', 'Profesiones', 'Otros', 'Gimnasio', 'Guarderia', 'Belleza', '', 'Vivienda', 'Trueque');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `link`
--

CREATE TABLE `link` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `link` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `link`
--

INSERT INTO `link` (`numRegistroGlobal`, `usuario`, `tabla`, `link`) VALUES
('8000000000', '80815886', 'registroProductoIndividual', 'https://img.clasf.co/2020/01/01/Celular-Huawei-Y7-2017-Poco-Uso-Caja-Accesorios-20200101112739.4579850015.jpg'),
('8000000001', '80815886', 'registroProductoIndividual', 'https://imganuncios.mitula.net/1997_gasolina_vendo_skoda_felicia_1_3_1997_cali_4520134580652628672.jpg'),
('8000000002', '80815886', 'registroProductoIndividual', 'https://generacionxbox.com/wp-content/uploads/2016/02/xbox-360-region-free-solo-xbox-one-1.jpg'),
('8000000003', '1031648864', 'registroProductoIndividual', 'https://http2.mlstatic.com/D_NQ_NP_820307-MCO43221611243_082020-O.webp'),
('8000000004', '1031648864', 'registroProductoIndividual', 'https://http2.mlstatic.com/D_NQ_NP_747730-MCO32153906455_092019-O.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginaweb`
--

CREATE TABLE `paginaweb` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `paginaweb` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paginaweb`
--

INSERT INTO `paginaweb` (`numRegistroGlobal`, `usuario`, `tabla`, `paginaweb`) VALUES
('4000000000', '80815886', 'registroEmpresa', 'https://www.bavaria.co/contactenos'),
('4000000002', '80815886', 'registroEmpresa', 'https://www.mcdonalds.com.co/'),
('4000000003', '80815886', 'registroEmpresa', 'https://www.andrescarnederes.com/'),
('4000000004', '80815886', 'registroEmpresa', 'https://frisby.com.co/'),
('4000000005', '80815886', 'registroEmpresa', 'https://www.alkosto.com/contactanos'),
('4000000006', '80815886', 'registroEmpresa', 'https://www.supermercadoscolsubsidio.com/'),
('4000000007', '80815886', 'registroEmpresa', 'https://www.cafam.com.co/'),
('4000000008', '80815886', 'registroEmpresa', 'https://www.panamericana.com.co/'),
('4000000009', '1031648864', 'registroEmpresa', 'fdsf'),
('4000000010', '80815886', 'registroEmpresa', 'https://laika.com.co/'),
('4000000011', '80815886', 'registroEmpresa', 'https://tostao.com/'),
('4000000012', '80815886', 'registroEmpresa', 'https://www.smartfit.com.co/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redsocial`
--

CREATE TABLE `redsocial` (
  `numRegistroGlobal` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `redsocial` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `redsocial`
--

INSERT INTO `redsocial` (`numRegistroGlobal`, `usuario`, `tabla`, `redsocial`) VALUES
('2000000000', '80815886', 'registroTienda', 'https://www.facebook.com/LicoresCiudadVerdeShop'),
('4000000000', '80815886', 'registroEmpresa', 'https://www.facebook.com/amigosBAVARIA/?fref=ts'),
('4000000002', '80815886', 'registroEmpresa', 'https://www.facebook.com/McDonaldsColombia'),
('4000000003', '80815886', 'registroEmpresa', 'https://www.facebook.com/universoandresiano/?ref=ts'),
('4000000004', '80815886', 'registroEmpresa', 'https://www.facebook.com/frisbyfans'),
('4000000005', '80815886', 'registroEmpresa', 'https://www.facebook.com/alkostohiperahorro'),
('4000000006', '80815886', 'registroEmpresa', 'https://www.facebook.com/Colsubsidio/'),
('4000000007', '80815886', 'registroEmpresa', 'https://www.facebook.com/cafamoficial'),
('4000000008', '80815886', 'registroEmpresa', 'https://www.facebook.com/Panamericana'),
('4000000009', '1031648864', 'registroEmpresa', 'fdsfds'),
('4000000010', '80815886', 'registroEmpresa', 'https://www.facebook.com/LaikaUniverso/'),
('4000000011', '80815886', 'registroEmpresa', 'https://www.facebook.com/tostaocafeypan/'),
('4000000012', '80815886', 'registroEmpresa', 'https://es-la.facebook.com/SmartFitOficialColombia/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroempresa`
--

CREATE TABLE `registroempresa` (
  `numRegistroEmpresa` varchar(12) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `nit` varchar(30) NOT NULL,
  `numContrato2` varchar(12) NOT NULL,
  `nombreEmpresa` varchar(30) NOT NULL,
  `seccion` varchar(25) NOT NULL,
  `adicional` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroempresa`
--

INSERT INTO `registroempresa` (`numRegistroEmpresa`, `usuario`, `tabla`, `nit`, `numContrato2`, `nombreEmpresa`, `seccion`, `adicional`) VALUES
('4000000000', '80815886', 'registroEmpresa', '860005224', '5000000000', 'Bavaria', 'Licores', 'ventas bebidas alcoholica'),
('4000000002', '80815886', 'registroEmpresa', '800244387', '5000000002', 'mcdonalds', 'Comida_Rapidas', 'venta comida rapida'),
('4000000003', '80815886', 'registroEmpresa', '800119855', '5000000003', 'Andres carne de res', 'Restaurantes', 'venta comida'),
('4000000004', '80815886', 'registroEmpresa', '891408584', '5000000004', 'Frisby sa', 'Asaderos', 'venta de comida'),
('4000000005', '80815886', 'registroEmpresa', '890900943-1', '5000000005', 'Alkosto', 'Tecnologia', 'venta tecnologia'),
('4000000006', '80815886', 'registroEmpresa', '8600073361', '5000000006', 'colsubsidio', 'Supermercados', 'venta de alimentos'),
('4000000007', '80815886', 'registroEmpresa', '8600135703', '5000000007', 'Drogueria cafam', 'Droguerias', 'venta medicamentos'),
('4000000008', '80815886', 'registroEmpresa', '8300379463', '5000000008', 'Panamericana', 'Miscelaneas', 'venta miscelánea útiles l'),
('4000000009', '1031648864', 'registroEmpresa', '454654654', '5000000009', 'gdgfdgdf', 'Comida_Rapidas', 'dsf'),
('4000000010', '80815886', 'registroEmpresa', '9011104074', '5000000010', 'laika', 'Mascotas', 'venta de artículos y comi'),
('4000000011', '80815886', 'registroEmpresa', '9009144032', '5000000011', 'Tostao', 'Panaderia', 'venta de panaderia'),
('4000000012', '80815886', 'registroEmpresa', '900777063-3', '5000000012', 'Gimnasio Smart Fit ', 'Gimnasio', 'sitio de entrenamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroproductoindividual`
--

CREATE TABLE `registroproductoindividual` (
  `numRegistroProductoIndividual` varchar(12) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `cedula` varchar(30) NOT NULL,
  `numContrato3` varchar(12) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `seccion` varchar(25) NOT NULL,
  `adicional` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroproductoindividual`
--

INSERT INTO `registroproductoindividual` (`numRegistroProductoIndividual`, `usuario`, `tabla`, `cedula`, `numContrato3`, `producto`, `valor`, `seccion`, `adicional`) VALUES
('8000000000', '80815886', 'registroProductoIndividual', '80815886', '9000000000', 'celular huawei y7 2018 ', '300000', 'Ventas_Individuales', 'centa celulares'),
('8000000001', '80815886', 'registroProductoIndividual', '80815886', '9000000001', 'Skoda felicia glx 1997', '5000000', 'Vehiculos', 'venta de vehiculos'),
('8000000002', '80815886', 'registroProductoIndividual', '80815886', '9000000002', 'Xbox 360 4gb', '450000', 'Trueque', 'venta video juegos'),
('8000000003', '1031648864', 'registroProductoIndividual', '1031648864', '9000000003', 'j@j.com', '9999', 'Ventas_Individuales', 'j@j.com'),
('8000000004', '1031648864', 'registroProductoIndividual', '1031648864', '9000000004', 'Disco Solido Ssd   240 Gb', '100000', 'Ventas_Individuales', 'memorias sdd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroproductos`
--

CREATE TABLE `registroproductos` (
  `idRegistro` int(11) NOT NULL,
  `numRegistroGlobal` varchar(12) NOT NULL,
  `numRegistroProducto` varchar(12) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `embalaje` varchar(10) NOT NULL,
  `cantidad` varchar(6) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `iva` varchar(12) NOT NULL,
  `tiva` varchar(20) NOT NULL,
  `descuento` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroproductos`
--

INSERT INTO `registroproductos` (`idRegistro`, `numRegistroGlobal`, `numRegistroProducto`, `usuario`, `producto`, `descripcion`, `embalaje`, `cantidad`, `valor`, `iva`, `tiva`, `descuento`, `total`) VALUES
(1, '4000000000', '8500000000', '80815886', 'cerveza poker', 'unidad 355ml six pack', '6', '1', '15000', '19', '17850', '5', '16958');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrotienda`
--

CREATE TABLE `registrotienda` (
  `numRegistroTienda` varchar(12) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `rut` varchar(30) NOT NULL,
  `numContrato1` varchar(12) NOT NULL,
  `nombreTienda` varchar(100) NOT NULL,
  `seccion` varchar(25) NOT NULL,
  `adicional` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrotienda`
--

INSERT INTO `registrotienda` (`numRegistroTienda`, `usuario`, `tabla`, `rut`, `numContrato1`, `nombreTienda`, `seccion`, `adicional`) VALUES
('2000000000', '80815886', 'registroTienda', '80815886', '3000000000', 'Licores Ciudad Verde', 'Licores', 'venta bebidos con licor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuario`
--

CREATE TABLE `registrousuario` (
  `idRegistro` int(11) NOT NULL,
  `numRegistroUsuario` varchar(12) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `documento` varchar(12) NOT NULL,
  `nombre1` varchar(25) NOT NULL,
  `nombre2` varchar(25) NOT NULL,
  `apellido1` varchar(25) NOT NULL,
  `apellido2` varchar(25) NOT NULL,
  `genero` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`idRegistro`, `numRegistroUsuario`, `tabla`, `tipo`, `documento`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `genero`) VALUES
(2, '1000000002', 'registrousuario', 'tarjeta identidad', '1031648864', 'Juan ', 'Nicolas', 'Rodriguez', 'Rodriguez', 'Masculino'),
(3, '1000000003', 'registrousuario', 'Cedula', '1031826090', 'sgsg', 'sgseg', 'segseg', 'rgdrg', 'Indefinido'),
(1, '1000000001', 'registrousuario', 'Cedula', '80815886', 'Jeisson', 'Miguel', 'Rodriguez', 'Gelvez', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopremium`
--

CREATE TABLE `usuariopremium` (
  `numRegistroGlobal` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `numRegistroPago` varchar(20) NOT NULL,
  `tipdepaquete` varchar(20) NOT NULL,
  `mediodepago` varchar(30) NOT NULL,
  `nombreEntidad` varchar(30) NOT NULL,
  `numRegistroTransaccion` varchar(20) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `fechainicio` varchar(50) NOT NULL,
  `fechafin` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariopremium`
--

INSERT INTO `usuariopremium` (`numRegistroGlobal`, `usuario`, `numRegistroPago`, `tipdepaquete`, `mediodepago`, `nombreEntidad`, `numRegistroTransaccion`, `valor`, `fechainicio`, `fechafin`, `estado`) VALUES
('1000000001', '80815886', '00000000001', 'premium', 'daviplata', 'davivienda', '05236983124555', '100000', '24042021', '24042022', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosclave`
--

CREATE TABLE `usuariosclave` (
  `numRegistroGlobal` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `tabla` varchar(30) NOT NULL,
  `contrasena` varchar(16) NOT NULL,
  `confirmar1` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariosclave`
--

INSERT INTO `usuariosclave` (`numRegistroGlobal`, `usuario`, `tabla`, `contrasena`, `confirmar1`) VALUES
('1000000001', '80815886', 'registrousuario', '80815886', '80815886'),
('1000000002', '1031648864', 'registrousuario', 'juannicolas', 'juannicolas'),
('1000000003', '1031826090', 'registrousuario', '1031826090', '1031826090'),
('2000000000', '80815886', 'registroTienda', 'licores111', 'licores111'),
('2000000001', '80815886', 'registroTienda', '1111111111', '1111111111'),
('4000000000', '80815886', 'registroEmpresa', 'Bavaria1', 'Bavaria1'),
('4000000001', '80815886', 'registroEmpresa', 'comapan1', 'comapan1'),
('4000000002', '80815886', 'registroEmpresa', 'mcdonalds1', 'mcdonalds1'),
('4000000003', '80815886', 'registroEmpresa', 'andrescarn', 'andrescarn'),
('4000000004', '80815886', 'registroEmpresa', 'frisby12', 'frisby12'),
('4000000005', '80815886', 'registroEmpresa', 'alkosto1', 'alkosto1'),
('4000000006', '80815886', 'registroEmpresa', 'colsubsidi', 'colsubsidi'),
('4000000007', '80815886', 'registroEmpresa', 'cafam11111', 'cafam11111'),
('4000000008', '80815886', 'registroEmpresa', 'panamericn', 'panamerica'),
('4000000009', '1031648864', 'registroEmpresa', 'dfsfdsfdsd', 'fdsfdsfsdf'),
('4000000010', '80815886', 'registroEmpresa', 'ewrewerwre', 'rewrewrewr'),
('4000000011', '80815886', 'registroEmpresa', 'tostao123', 'tostao123'),
('4000000012', '80815886', 'registroEmpresa', 'smartfit12', 'smartfit12'),
('4000000029', '80815886', 'registroEmpresa', '777777777', '777777777'),
('8000000000', '80815886', 'registroProductoIndividual', 'celular111', 'celular111'),
('8000000001', '80815886', 'registroProductoIndividual', 'sko0da1111', 'skoda11111'),
('8000000002', '80815886', 'registroProductoIndividual', 'xbox360111', 'xbox360111'),
('8000000003', '80815886', 'registroProductoIndividual', '1111111111', '1111111111'),
('8000000004', '1031648864', 'registroProductoIndividual', 'miguelio@5', 'miguelio@5'),
('8000000005', '1031648864', 'registroProductoIndividual', 'miguelio@5', 'miguelio@5'),
('8000000006', '1031648864', 'registroProductoIndividual', 'miguelio@5', 'miguelio@5'),
('8000000007', '1031648864', 'registroProductoIndividual', 'miguelio@5', 'miguelio@5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`numRegistroCalificacion`),
  ADD UNIQUE KEY `numRegistroCalificacion` (`numRegistroCalificacion`);

--
-- Indices de la tabla `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `insertimglogo`
--
ALTER TABLE `insertimglogo`
  ADD PRIMARY KEY (`numRegistroGlobal`);

--
-- Indices de la tabla `insertimgproducto`
--
ALTER TABLE `insertimgproducto`
  ADD PRIMARY KEY (`numRegistroProducto`);

--
-- Indices de la tabla `intereses`
--
ALTER TABLE `intereses`
  ADD PRIMARY KEY (`usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `paginaweb`
--
ALTER TABLE `paginaweb`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `redsocial`
--
ALTER TABLE `redsocial`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- Indices de la tabla `registroempresa`
--
ALTER TABLE `registroempresa`
  ADD PRIMARY KEY (`numRegistroEmpresa`),
  ADD UNIQUE KEY `numRegistroEmpresa` (`numRegistroEmpresa`);

--
-- Indices de la tabla `registroproductoindividual`
--
ALTER TABLE `registroproductoindividual`
  ADD PRIMARY KEY (`numRegistroProductoIndividual`),
  ADD UNIQUE KEY `numRegistroProductoIndividual` (`numRegistroProductoIndividual`);

--
-- Indices de la tabla `registroproductos`
--
ALTER TABLE `registroproductos`
  ADD PRIMARY KEY (`numRegistroProducto`),
  ADD UNIQUE KEY `idRegistro` (`idRegistro`),
  ADD UNIQUE KEY `numRegistroProducto` (`numRegistroProducto`);

--
-- Indices de la tabla `registrotienda`
--
ALTER TABLE `registrotienda`
  ADD PRIMARY KEY (`numRegistroTienda`),
  ADD UNIQUE KEY `numRegistroTienda` (`numRegistroTienda`);

--
-- Indices de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD PRIMARY KEY (`documento`),
  ADD UNIQUE KEY `idRegistro` (`idRegistro`),
  ADD UNIQUE KEY `numRegistroUsuario` (`numRegistroUsuario`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- Indices de la tabla `usuariopremium`
--
ALTER TABLE `usuariopremium`
  ADD PRIMARY KEY (`numRegistroPago`),
  ADD UNIQUE KEY `numRegistroPago` (`numRegistroPago`);

--
-- Indices de la tabla `usuariosclave`
--
ALTER TABLE `usuariosclave`
  ADD PRIMARY KEY (`numRegistroGlobal`),
  ADD UNIQUE KEY `numRegistroGlobal` (`numRegistroGlobal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registroproductos`
--
ALTER TABLE `registroproductos`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
