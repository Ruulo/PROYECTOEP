-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2021 a las 19:08:58
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bagcorp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calentadores`
--

CREATE TABLE `calentadores` (
  `id_cal` char(6) NOT NULL,
  `calentador` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calentadores`
--

INSERT INTO `calentadores` (`id_cal`, `calentador`, `status`) VALUES
('CAL19', 'Calentador 19', 1),
('CAL20', 'Calentador 20', 1),
('CAL21', 'Calentador 21', 1),
('CAL5', 'Calentador 5', 1),
('CAL6', 'Calentador 6', 1),
('CAL7', 'Calentador 7', 1),
('CAL8', 'Calentador 8', 1),
('CAL9', 'Calentador 9', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idestado` char(5) NOT NULL,
  `estado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idestado`, `estado`) VALUES
('P', 'Pendiente'),
('PPR', 'Parado x Falta d Refacción'),
('T', 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `id_estilo` char(4) NOT NULL,
  `estilo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`id_estilo`, `estilo`) VALUES
('3zC', '3 Oz. Conductivo'),
('6zC', '6 Oz. Conductivo'),
('B5z', 'Base  5 Oz'),
('B6z', 'Base 6 Oz'),
('B8z', 'Base 8 Oz'),
('C3z', 'Carbón 3 Oz'),
('C6z', 'Carbón 6 Oz'),
('Ctn', 'Coton'),
('GC', 'Ground Cover'),
('P6z', 'Poliolez 6 Oz'),
('Pb', 'Polyback'),
('PRI', 'Primario'),
('SEC', 'Secundario'),
('T', 'Top');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas_cal`
--

CREATE TABLE `fallas_cal` (
  `idfalla_cal` int(11) NOT NULL,
  `falla_cal` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fallas_cal`
--

INSERT INTO `fallas_cal` (`idfalla_cal`, `falla_cal`) VALUES
(1, 'Ventilador lado válvula dañado'),
(2, 'Ventilador lado contrario válvula dañado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas_ple`
--

CREATE TABLE `fallas_ple` (
  `idfalla_ple` int(11) NOT NULL,
  `falla_ple` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fallas_ple`
--

INSERT INTO `fallas_ple` (`idfalla_ple`, `falla_ple`) VALUES
(1, 'Motor'),
(2, 'Potenciómetro'),
(3, 'Conexiones'),
(4, 'Bomba Hidráulica'),
(5, 'Mot Hidr llanta lado llave'),
(6, 'Mot Hidr llanta lado contrario llave'),
(7, 'Mangueras Hidráulicas a Motor'),
(8, 'Cadenas de Movimiento'),
(9, 'PLC'),
(10, 'Relevadores'),
(11, 'Cableado '),
(12, 'Botoneras '),
(13, 'Solenoides'),
(14, 'Reponer Aceite'),
(15, 'Lubricación General'),
(16, 'MP9'),
(17, 'Llanta loca dañada'),
(18, 'Balero dañado'),
(19, 'Llanta Motriz'),
(20, 'Mot hidr lado llave'),
(21, 'Mot Hidr lado contrario llave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas_telpro`
--

CREATE TABLE `fallas_telpro` (
  `idfalla_tpro` char(3) NOT NULL,
  `falla_tpro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fallas_telpro`
--

INSERT INTO `fallas_telpro` (`idfalla_tpro`, `falla_tpro`) VALUES
('CE', 'Cambio de estilo'),
('EP', 'Espera de plegador'),
('FP', 'Fuera de programa'),
('FT', 'Falta de trama'),
('PA', 'Por atar'),
('PT', 'Por terminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas_tj`
--

CREATE TABLE `fallas_tj` (
  `idfalla_tj` int(11) NOT NULL,
  `falla_tj` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fallas_tj`
--

INSERT INTO `fallas_tj` (`idfalla_tj`, `falla_tj`) VALUES
(1, 'Bujes'),
(2, 'Arañas/Circulos'),
(3, 'Completos'),
(4, 'Catarina'),
(5, 'Cadena'),
(6, 'Motor'),
(7, 'Cambio Parámetros'),
(8, 'Lanzadera'),
(9, 'Rodillos Empuje'),
(10, 'Agujas'),
(11, 'Cambio Estilo'),
(12, 'Ajuste Tijera'),
(13, 'Expansores'),
(14, 'Limpieza'),
(15, 'Jinetes'),
(16, 'Botoneras'),
(17, 'Motor Principal'),
(18, 'Sprocket'),
(19, 'Sensor Velocidad'),
(20, 'Recubrimiento'),
(21, 'Rutinas MP9'),
(22, 'Reposición de Aceite Deposito'),
(23, 'Ajuste de Cuenta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas_tp`
--

CREATE TABLE `fallas_tp` (
  `idfalla_tp` int(11) NOT NULL,
  `falla_tp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fallas_tp`
--

INSERT INTO `fallas_tp` (`idfalla_tp`, `falla_tp`) VALUES
(1, 'Motor Principal'),
(2, 'Embrague'),
(3, 'Panel de control'),
(4, 'Cinta de freno'),
(5, 'Barra Telescópica'),
(6, 'Paro en Falso'),
(7, 'Coplees de barra telescópica'),
(8, 'Bandas'),
(9, 'Interruptor Final'),
(10, 'Eje de accionamiento'),
(11, 'Disco de Angulo'),
(12, 'PFR'),
(13, 'BRA'),
(14, 'MEC'),
(15, 'WISS'),
(16, 'PRP'),
(17, 'EGS'),
(18, 'PSD'),
(19, 'PBR'),
(20, 'PNB'),
(21, 'Instalación de Control'),
(22, 'Para urdimbre'),
(23, 'Palpador de trama'),
(24, 'Control trama Loepfe'),
(25, 'Para trama Mecánico'),
(26, 'Transmisión'),
(27, 'Ajuste del plegador'),
(28, 'Drive / Inversor'),
(29, 'Engrane del plegador'),
(30, 'Regulador de urdimbre'),
(31, 'Tiralizos'),
(32, 'Maquina de excéntricas'),
(33, 'Marcos'),
(34, 'Maquinilla de papel picado'),
(35, 'Papel picado'),
(36, 'Rotura hilo pie'),
(37, 'Hilos Flotantes'),
(38, 'Busca pasadas'),
(39, 'Cilindro de mando'),
(40, 'Cabeza de caballo'),
(41, 'Recubrimiento de rodillos'),
(42, 'Rodillo de presión'),
(43, 'Tela enredada'),
(44, 'Cambio de cuenta'),
(45, 'Regulador de tejido'),
(46, 'Porta bobinas'),
(47, 'Acumulador de trama'),
(48, 'Palpador de trama'),
(49, 'Paro de trama'),
(50, 'Freno de trama'),
(51, 'Cabezal'),
(52, 'Trascaladas'),
(53, 'Transferencia hilo trama'),
(54, 'Elevador de proyectil'),
(55, 'Abridor de proyectil SU'),
(56, 'Pieza de expulsión \"taco\"'),
(57, 'Palanca de disparo'),
(58, 'Dador de trama'),
(59, 'Riel Guía'),
(60, 'Eclisa'),
(61, 'Barra de torsión'),
(62, 'Tijera'),
(63, 'Punto de disparo'),
(64, 'Hidráulico'),
(65, 'Eje transversal'),
(66, 'Inserción de guía'),
(67, 'Transporte de retorno'),
(68, 'Atoramiento de proyectil'),
(69, 'Proyectiles'),
(70, 'Diente de Guías'),
(71, 'Cinchos'),
(72, 'Carter de Batan'),
(73, 'Peine'),
(74, 'Calibración de Batan'),
(75, 'Guarniciones'),
(76, 'Retrocesor'),
(77, 'Abridor de proyectil FA'),
(78, 'Mecanismo general'),
(79, 'Freno de proyectiles'),
(80, 'Acoplamiento'),
(81, 'Cadena de transporte'),
(82, 'Atoramiento de proyectil'),
(83, 'Proyectiles'),
(84, 'Sensor de Proyectil'),
(85, 'Expulsor de proyectiles'),
(86, 'Remetidos'),
(87, 'Tela floja'),
(88, 'Cortador térmico'),
(89, 'Barra de mecanismo'),
(90, 'Orillo FA'),
(91, 'Hilo Timón'),
(92, 'Chapa'),
(93, 'Pinza de orillo'),
(94, 'Aguja de orillo'),
(95, 'Lub. Cerrojo'),
(96, 'Deposito de lubricación'),
(97, 'Lub. Proyectil'),
(98, 'Rodillos'),
(99, 'Rodillo de presión'),
(100, 'Cadena'),
(101, 'Motor de enrollador'),
(102, 'Drive / Inversor'),
(103, 'Reductor'),
(104, 'Sproket'),
(105, 'Napper'),
(106, 'Defecto de Tejido'),
(107, 'Contaminación Disparo'),
(108, 'Contaminación Recepción'),
(109, 'Revisión y limpieza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas_urd`
--

CREATE TABLE `fallas_urd` (
  `idfalla_urd` int(11) NOT NULL,
  `falla_urd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fallas_urd`
--

INSERT INTO `fallas_urd` (`idfalla_urd`, `falla_urd`) VALUES
(1, 'Aire comprimido'),
(2, 'Valvulas de regulacion corrida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_pe` mediumint(9) NOT NULL,
  `nom_pe` varchar(25) DEFAULT NULL,
  `ap_pa` varchar(20) DEFAULT NULL,
  `ap_ma` varchar(20) DEFAULT NULL,
  `fecha_reg` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_pe`, `nom_pe`, `ap_pa`, `ap_ma`, `fecha_reg`, `status`) VALUES
(1, 'CAMELLO - CAMILO', 'CAMELLO', 'CAMELLO', '2021-08-02', 1),
(2, 'PEDRIN', 'PDRIN', 'PEDRIN', '2021-08-01', 1),
(4, 'RAUL', 'RAUL', 'RAUL', '2021-08-18', 1),
(5, 'tu', 'tu', 'tutu', '2021-08-05', 1),
(6, 're', 'remamon', 're', '2021-08-04', 1),
(10, 'we', 'we', 'we', '2021-08-09', 1),
(11, 'Nombre', 'Apat', 'Amat', '2021-08-11', 1),
(222, 'Pedro Fabian', 'Carmona', 'Villanueva - B', '2020-04-05', 1),
(273, 'Roberto', 'Torres', 'Hernandez - pfrtty', '2021-09-01', 1),
(446, 'Ruloo Yerald', 'Sanchez', 'Castañeda', '2021-07-09', 1),
(534, 'Miguel Angel ', 'Zamaripa', 'Mata', '2020-03-11', 1),
(536, 'TTT', 'asas', 'asas', '2021-08-01', 1),
(647, 'Oscar JESUS', 'Salatiel', 'Pedroza', '2020-03-10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plegadores`
--

CREATE TABLE `plegadores` (
  `id_ple` char(4) NOT NULL,
  `plegador` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plegadores`
--

INSERT INTO `plegadores` (`id_ple`, `plegador`, `status`) VALUES
('PL1', 'Plegador 1', 1),
('PL2', 'Plegador 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refacciones`
--

CREATE TABLE `refacciones` (
  `idrefa` char(4) NOT NULL,
  `refaccion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `refacciones`
--

INSERT INTO `refacciones` (`idrefa`, `refaccion`) VALUES
('A', 'Acondicionada'),
('AN', 'Almacen/nueva'),
('NN', 'No necesaria'),
('RM', 'Reparada/Maquinada Externa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_cal`
--

CREATE TABLE `reportes_cal` (
  `idrepo_cal` int(11) NOT NULL,
  `idusuario3` char(4) DEFAULT NULL,
  `id_cal1` char(6) DEFAULT NULL,
  `idsis_cal1` char(5) DEFAULT NULL,
  `idfalla_cal1` int(11) DEFAULT NULL,
  `idrefa3` char(4) DEFAULT NULL,
  `idestado3` char(5) DEFAULT NULL,
  `tipofalla_cal` char(1) DEFAULT NULL,
  `com_cal` varchar(60) DEFAULT NULL,
  `turno_cal` tinyint(4) DEFAULT NULL,
  `fecharepo_cal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_cal`
--

INSERT INTO `reportes_cal` (`idrepo_cal`, `idusuario3`, `id_cal1`, `idsis_cal1`, `idfalla_cal1`, `idrefa3`, `idestado3`, `tipofalla_cal`, `com_cal`, `turno_cal`, `fecharepo_cal`) VALUES
(1, '1RT', 'CAL5', '1V', 2, 'A', 'PPR', 'T', 'Parece que va a llover el cielo se esta nublando', 3, '2020-01-01'),
(2, NULL, 'CAL6', '2TA', 1, 'NN', 'P', 'F', 'comentario de 60 caracteres', 1, '2020-01-02'),
(3, '2JE', 'CAL7', '5L', 1, 'RM', 'T', 'T', 'comentario', 2, '2020-01-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_ple`
--

CREATE TABLE `reportes_ple` (
  `idrepo_ple` int(11) NOT NULL,
  `idusuario2` char(4) DEFAULT NULL,
  `id_ple1` char(4) DEFAULT NULL,
  `idsis_ple1` char(4) DEFAULT NULL,
  `idfalla_ple1` int(11) DEFAULT NULL,
  `idrefa2` char(4) DEFAULT NULL,
  `idestado2` char(5) DEFAULT NULL,
  `tipofalla_ple` char(1) DEFAULT NULL,
  `com_ple` varchar(60) DEFAULT NULL,
  `turno_ple` tinyint(4) DEFAULT NULL,
  `fecharepo_ple` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_ple`
--

INSERT INTO `reportes_ple` (`idrepo_ple`, `idusuario2`, `id_ple1`, `idsis_ple1`, `idfalla_ple1`, `idrefa2`, `idestado2`, `tipofalla_ple`, `com_ple`, `turno_ple`, `fecharepo_ple`) VALUES
(1, '1RT', 'PL1', '2NO', 1, 'AN', 'T', 'F', 'comentario en plegador', 2, '2021-01-01'),
(2, NULL, 'PL2', '3CT', 11, 'NN', 'P', 'F', 'comentario en plegador', 2, '2021-01-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_telpro`
--

CREATE TABLE `reportes_telpro` (
  `idrepo_tpro` int(11) NOT NULL,
  `idusuario7` char(4) DEFAULT NULL,
  `id_tpro1` int(11) DEFAULT NULL,
  `id_estilo2` char(4) DEFAULT NULL,
  `idsis_tpro1` char(2) DEFAULT NULL,
  `idfalla_tpro1` char(3) DEFAULT NULL,
  `tipotelar_tpro` char(6) DEFAULT NULL,
  `com_tpro` varchar(60) DEFAULT NULL,
  `turno_tpro` tinyint(4) DEFAULT NULL,
  `fecharepo_tpro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_telpro`
--

INSERT INTO `reportes_telpro` (`idrepo_tpro`, `idusuario7`, `id_tpro1`, `id_estilo2`, `idsis_tpro1`, `idfalla_tpro1`, `tipotelar_tpro`, `com_tpro`, `turno_tpro`, `fecharepo_tpro`) VALUES
(1, '2JE', 1003, 'B8z', 'U', 'EP', 'TW11', 'comntariosxsss', 2, '2021-01-01'),
(2, NULL, 1003, 'Ctn', 'T', 'EP', 'P7100', 'comentario', 1, '2021-01-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_tj`
--

CREATE TABLE `reportes_tj` (
  `idrepo_tj` int(11) NOT NULL,
  `idusuario1` char(4) DEFAULT NULL,
  `id_tj1` char(4) DEFAULT NULL,
  `idsis_tj1` char(5) DEFAULT NULL,
  `idfalla_tj1` int(11) DEFAULT NULL,
  `idrefa1` char(4) DEFAULT NULL,
  `idestado1` char(5) DEFAULT NULL,
  `tipofalla_tj` char(1) DEFAULT NULL,
  `com_tj` varchar(60) DEFAULT NULL,
  `turno_tj` tinyint(4) DEFAULT NULL,
  `fecharepo_tj` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_tj`
--

INSERT INTO `reportes_tj` (`idrepo_tj`, `idusuario1`, `id_tj1`, `idsis_tj1`, `idfalla_tj1`, `idrefa1`, `idestado1`, `tipofalla_tj`, `com_tj`, `turno_tj`, `fecharepo_tj`) VALUES
(8, '3JV', 'TJ3', '8T', 4, 'NN', 'P', 'T', 'comentarios se cayoo chanito', 1, '2021-01-02'),
(9, '2JE', 'TJ1', '4RAT', 15, 'NN', 'PPR', 'F', 'com - el chaflan esta n detallado', 3, '2021-01-09'),
(10, '2JE', 'TJ2', '2RAH', 16, 'RM', 'T', 'T', 'herriiiiaaaaa', 1, '2021-08-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_tp`
--

CREATE TABLE `reportes_tp` (
  `idrepo_tp` int(11) NOT NULL,
  `idusuario5` char(4) DEFAULT NULL,
  `id_tp1` int(11) DEFAULT NULL,
  `id_estilo1` char(4) DEFAULT NULL,
  `idsis_tp1` int(11) DEFAULT NULL,
  `idfalla_tp1` int(11) DEFAULT NULL,
  `idrefa5` char(4) DEFAULT NULL,
  `idestado5` char(5) DEFAULT NULL,
  `tipofalla_tp` char(1) DEFAULT NULL,
  `com_tp` varchar(60) DEFAULT NULL,
  `tipotelar_tp` char(6) DEFAULT NULL,
  `turno_tp` tinyint(4) DEFAULT NULL,
  `fecharepo_tp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_tp`
--

INSERT INTO `reportes_tp` (`idrepo_tp`, `idusuario5`, `id_tp1`, `id_estilo1`, `idsis_tp1`, `idfalla_tp1`, `idrefa5`, `idestado5`, `tipofalla_tp`, `com_tp`, `tipotelar_tp`, `turno_tp`, `fecharepo_tp`) VALUES
(1, '2JE', 1007, 'B8z', 9, 1, 'NN', 'T', 'T', 'Asco tu comentario amikaa', 'PU', 2, '2021-07-02'),
(2, '5LM', 1004, 'B8z', 12, 4, 'AN', 'PPR', 'T', 'Comentario ', 'PU', 2, '2021-01-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_urdidor`
--

CREATE TABLE `reportes_urdidor` (
  `idrepo_urd` int(11) NOT NULL,
  `idusuario4` char(4) DEFAULT NULL,
  `idsis_urd1` char(5) DEFAULT NULL,
  `idfalla_urd1` int(11) DEFAULT NULL,
  `idrefa4` char(4) DEFAULT NULL,
  `idestado4` char(5) DEFAULT NULL,
  `tipofalla_urd` char(1) DEFAULT NULL,
  `com_urd` varchar(60) DEFAULT NULL,
  `turno_urd` tinyint(4) DEFAULT NULL,
  `fecharepo_urd` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_urdidor`
--

INSERT INTO `reportes_urdidor` (`idrepo_urd`, `idusuario4`, `idsis_urd1`, `idfalla_urd1`, `idrefa4`, `idestado4`, `tipofalla_urd`, `com_urd`, `turno_urd`, `fecharepo_urd`) VALUES
(1, '1RT', '1FA', 2, 'NN', 'PPR', 'F', 'Hyeet comentario', 3, '2021-01-01'),
(2, '4LS', '4CN', 2, 'NN', 'T', 'F', 'comentariosjeje', 1, '2021-07-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_vap`
--

CREATE TABLE `reportes_vap` (
  `idrepo_vap` int(11) NOT NULL,
  `idusuario6` char(4) DEFAULT NULL,
  `id_vap1` char(3) DEFAULT NULL,
  `idrefa6` char(4) DEFAULT NULL,
  `idestado6` char(5) DEFAULT NULL,
  `sisvap_com` varchar(60) DEFAULT NULL,
  `fallavap_com` varchar(60) DEFAULT NULL,
  `tipofalla_vap` char(1) DEFAULT NULL,
  `com_vap` varchar(60) DEFAULT NULL,
  `turno_vap` tinyint(4) DEFAULT NULL,
  `fecharepo_vap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes_vap`
--

INSERT INTO `reportes_vap` (`idrepo_vap`, `idusuario6`, `id_vap1`, `idrefa6`, `idestado6`, `sisvap_com`, `fallavap_com`, `tipofalla_vap`, `com_vap`, `turno_vap`, `fecharepo_vap`) VALUES
(1, NULL, 'SG', 'NN', 'P', 'va comentario ', 'va comentario', 'F', 'comentario default', 2, '2021-07-02'),
(2, '2JE', 'SG', 'AN', 'PPR', 'com sis', 'com falla', 'T', 'comentario default', 1, '2021-01-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_personal`
--

CREATE TABLE `reporte_personal` (
  `idrepo_pe` int(11) NOT NULL,
  `idusuario9` char(4) DEFAULT NULL,
  `id_reportado` mediumint(9) DEFAULT NULL,
  `turno_pe` tinyint(4) DEFAULT NULL,
  `fecharepo_per` date DEFAULT NULL,
  `comrepo_pe` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte_personal`
--

INSERT INTO `reporte_personal` (`idrepo_pe`, `idusuario9`, `id_reportado`, `turno_pe`, `fecharepo_per`, `comrepo_pe`) VALUES
(59, '1RT', NULL, 1, '2021-08-10', 'OOOOOPSS! - lol'),
(63, '3JV', 273, 3, '2021-08-18', 'ttttttTTTTT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` tinyint(4) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Admin'),
(2, 'Supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas_cal`
--

CREATE TABLE `sistemas_cal` (
  `idsis_cal` char(5) NOT NULL,
  `sis_cal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistemas_cal`
--

INSERT INTO `sistemas_cal` (`idsis_cal`, `sis_cal`) VALUES
('1V', 'Ventiladores '),
('2TA', 'Tubería Alimentación'),
('3SDG', 'Sistema Distribución de gas'),
('4EV', 'Extracción de Vapores '),
('5L', 'Lubricación '),
('6CTL', 'Control');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas_ple`
--

CREATE TABLE `sistemas_ple` (
  `idsis_ple` char(4) NOT NULL,
  `sis_ple` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistemas_ple`
--

INSERT INTO `sistemas_ple` (`idsis_ple`, `sis_ple`) VALUES
('1GA', 'Gato/Avanza'),
('2NO', '90°'),
('3CT', 'Control'),
('4LU', 'Lubricación'),
('5LL', 'Llantas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas_telpro`
--

CREATE TABLE `sistemas_telpro` (
  `idsis_tpro` char(2) NOT NULL,
  `sis_tpro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistemas_telpro`
--

INSERT INTO `sistemas_telpro` (`idsis_tpro`, `sis_tpro`) VALUES
('T', 'Trama'),
('U', 'Urdimbre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas_tj`
--

CREATE TABLE `sistemas_tj` (
  `idsis_tj` char(5) NOT NULL,
  `sis_tj` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistemas_tj`
--

INSERT INTO `sistemas_tj` (`idsis_tj`, `sis_tj`) VALUES
('1F', 'Filetas'),
('2RAH', 'Rodillos Arrastre Hilos'),
('3FT', 'Formación Tejido'),
('4RAT', 'Rodillo Arrastre Tela'),
('5E', 'Enrollador'),
('6L', 'Lubricación'),
('7PG', 'Panel General'),
('8T', 'Trabajando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas_tp`
--

CREATE TABLE `sistemas_tp` (
  `idsis_tp` int(11) NOT NULL,
  `sis_tp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistemas_tp`
--

INSERT INTO `sistemas_tp` (`idsis_tp`, `sis_tp`) VALUES
(1, 'Accionamiento Frenado Maquina'),
(2, 'Armario de Mando'),
(3, 'Dispositivo Vigilancia'),
(4, 'Desenrollador de Plegador'),
(5, 'Formación de Calada'),
(6, 'Regulador de Tejido'),
(7, 'Alimentación de trama'),
(8, 'Disparo'),
(9, 'Batán'),
(10, 'Recepción'),
(11, 'Formación de Orillos'),
(12, 'Sistema de Lubricación'),
(13, 'Enrollador'),
(14, 'Dos Colores'),
(15, 'Calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemas_urd`
--

CREATE TABLE `sistemas_urd` (
  `idsis_urd` char(5) NOT NULL,
  `sis_urd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sistemas_urd`
--

INSERT INTO `sistemas_urd` (`idsis_urd`, `sis_urd`) VALUES
('1FA', 'File A'),
('1FB', 'File B'),
('1FC', 'File C'),
('2PE', 'Peine'),
('3EN', 'Enfriamiento'),
('4CN', 'Circuito Neumático'),
('5CHG', 'Circuito hidráulico gatos'),
('6CHM', 'Circuito hidráulico motor'),
('7CTL', 'Control'),
('8LP', 'Lubricación de plegador'),
('9LU', 'Lubricación urdido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telares_jumbo`
--

CREATE TABLE `telares_jumbo` (
  `id_tj` char(4) NOT NULL,
  `telar_jumbo` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telares_jumbo`
--

INSERT INTO `telares_jumbo` (`id_tj`, `telar_jumbo`, `status`) VALUES
('TJ1', 'Telar Jumbo 1', 1),
('TJ2', 'Telar Jumbo 2', 1),
('TJ3', 'Telar Jumbo 3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telares_planos`
--

CREATE TABLE `telares_planos` (
  `id_tp` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telares_planos`
--

INSERT INTO `telares_planos` (`id_tp`, `status`) VALUES
(1000, 1),
(1001, 1),
(1002, 1),
(1003, 1),
(1004, 1),
(1005, 1),
(1006, 1),
(1007, 1),
(1008, 1),
(1009, 1),
(2000, 1),
(2001, 1),
(2002, 1),
(2003, 1),
(2004, 1),
(2005, 1),
(2006, 1),
(2007, 1),
(2008, 1),
(3000, 1),
(3001, 1),
(3002, 1),
(3003, 1),
(3004, 1),
(3005, 1),
(3006, 1),
(3007, 1),
(3008, 1),
(3009, 1),
(4000, 1),
(4001, 1),
(4002, 1),
(4003, 1),
(4004, 1),
(4005, 1),
(4006, 1),
(4007, 1),
(4008, 1),
(4009, 1),
(5000, 1),
(5001, 1),
(5002, 1),
(5003, 1),
(5004, 1),
(5005, 1),
(5006, 1),
(5007, 1),
(5008, 1),
(6000, 1),
(6001, 1),
(6002, 1),
(6003, 1),
(6004, 1),
(6005, 1),
(6006, 1),
(6007, 1),
(6008, 1),
(7000, 1),
(7001, 1),
(7002, 1),
(7003, 1),
(7004, 1),
(7005, 1),
(7006, 1),
(7007, 1),
(7008, 1),
(8000, 1),
(8001, 1),
(8002, 1),
(8003, 1),
(8004, 1),
(8005, 1),
(8006, 1),
(8007, 1),
(8008, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telares_pro`
--

CREATE TABLE `telares_pro` (
  `id_tpro` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `telares_pro`
--

INSERT INTO `telares_pro` (`id_tpro`, `status`) VALUES
(1000, 1),
(1001, 1),
(1002, 1),
(1003, 1),
(1004, 1),
(1005, 1),
(1006, 1),
(1007, 1),
(2000, 1),
(2001, 1),
(2002, 1),
(2003, 1),
(2004, 1),
(2005, 1),
(3000, 1),
(3001, 1),
(3002, 1),
(3003, 1),
(3004, 1),
(3005, 1),
(3006, 1),
(3007, 1),
(3008, 1),
(3009, 1),
(4000, 1),
(4001, 1),
(4002, 1),
(4003, 1),
(4004, 1),
(4005, 1),
(4006, 1),
(4007, 1),
(4008, 1),
(4009, 1),
(5000, 1),
(5001, 1),
(5002, 1),
(5003, 1),
(5004, 1),
(5005, 1),
(5006, 1),
(5007, 1),
(5008, 1),
(6000, 1),
(6001, 1),
(6002, 1),
(6003, 1),
(6004, 1),
(6005, 1),
(6006, 1),
(6007, 1),
(6008, 1),
(7000, 1),
(7001, 1),
(7002, 1),
(7003, 1),
(7004, 1),
(7005, 1),
(7006, 1),
(7007, 1),
(7008, 1),
(8000, 1),
(8001, 1),
(8002, 1),
(8003, 1),
(8004, 1),
(8005, 1),
(8006, 1),
(8007, 1),
(8008, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` char(4) NOT NULL,
  `nom_usuario` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nom_usuario`, `correo`, `clave`, `status`) VALUES
('1RT', 'Roberto Torres', 'Roberto.Torres@bagcorp.com', 'clave1', 1),
('2JE', 'Jairo Estrada', 'joseestrada@bagcorp.com', 'clave3', 1),
('3JV', 'Jesus Valero', 'Jesus.Valero@bagcorp.com', 'clave4', 1),
('4LS', 'Luis Silva', 'Luis.Silva@bagcorp.com', 'clave5', 1),
('5LM', 'Luis Martinez', 'Luis.Martines@bagcorp.com', 'clave6', 1),
('6RA', 'Ramon Acosta', 'Ramon.Acosta@bagcorp.com', 'clave7', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_roles`
--

CREATE TABLE `usuarios_roles` (
  `idusuario8` char(4) DEFAULT NULL,
  `id_rol1` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_roles`
--

INSERT INTO `usuarios_roles` (`idusuario8`, `id_rol1`) VALUES
('1RT', 1),
('2JE', 2),
('3JV', 2),
('4LS', 2),
('5LM', 2),
('6RA', 2),
('1RT', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vaporizadores`
--

CREATE TABLE `vaporizadores` (
  `id_vap` char(3) NOT NULL,
  `vaporizador` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vaporizadores`
--

INSERT INTO `vaporizadores` (`id_vap`, `vaporizador`, `status`) VALUES
('SG', 'Suministro de Gas', 1),
('V', 'Vaporizador', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calentadores`
--
ALTER TABLE `calentadores`
  ADD PRIMARY KEY (`id_cal`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD PRIMARY KEY (`id_estilo`);

--
-- Indices de la tabla `fallas_cal`
--
ALTER TABLE `fallas_cal`
  ADD PRIMARY KEY (`idfalla_cal`);

--
-- Indices de la tabla `fallas_ple`
--
ALTER TABLE `fallas_ple`
  ADD PRIMARY KEY (`idfalla_ple`);

--
-- Indices de la tabla `fallas_telpro`
--
ALTER TABLE `fallas_telpro`
  ADD PRIMARY KEY (`idfalla_tpro`);

--
-- Indices de la tabla `fallas_tj`
--
ALTER TABLE `fallas_tj`
  ADD PRIMARY KEY (`idfalla_tj`);

--
-- Indices de la tabla `fallas_tp`
--
ALTER TABLE `fallas_tp`
  ADD PRIMARY KEY (`idfalla_tp`);

--
-- Indices de la tabla `fallas_urd`
--
ALTER TABLE `fallas_urd`
  ADD PRIMARY KEY (`idfalla_urd`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_pe`);

--
-- Indices de la tabla `plegadores`
--
ALTER TABLE `plegadores`
  ADD PRIMARY KEY (`id_ple`);

--
-- Indices de la tabla `refacciones`
--
ALTER TABLE `refacciones`
  ADD PRIMARY KEY (`idrefa`);

--
-- Indices de la tabla `reportes_cal`
--
ALTER TABLE `reportes_cal`
  ADD PRIMARY KEY (`idrepo_cal`),
  ADD KEY `FK_idusuario3` (`idusuario3`),
  ADD KEY `FK_id_cal1` (`id_cal1`),
  ADD KEY `FK_idsis_cal1` (`idsis_cal1`),
  ADD KEY `FK_idfalla_cal1` (`idfalla_cal1`),
  ADD KEY `FK_idrefa3` (`idrefa3`),
  ADD KEY `FK_idestado3` (`idestado3`);

--
-- Indices de la tabla `reportes_ple`
--
ALTER TABLE `reportes_ple`
  ADD PRIMARY KEY (`idrepo_ple`),
  ADD KEY `FK_idusuario2` (`idusuario2`),
  ADD KEY `FK_id_ple1` (`id_ple1`),
  ADD KEY `FK_idsis_ple1` (`idsis_ple1`),
  ADD KEY `FK_idfalla_ple1` (`idfalla_ple1`),
  ADD KEY `FK_idrefa2` (`idrefa2`),
  ADD KEY `FK_idestado2` (`idestado2`);

--
-- Indices de la tabla `reportes_telpro`
--
ALTER TABLE `reportes_telpro`
  ADD PRIMARY KEY (`idrepo_tpro`),
  ADD KEY `FK_idusuario7` (`idusuario7`),
  ADD KEY `FK_id_tpro1` (`id_tpro1`),
  ADD KEY `FK_id_estilo2` (`id_estilo2`),
  ADD KEY `FK_idsis_tpro1` (`idsis_tpro1`),
  ADD KEY `FK_idfalla_tpro1` (`idfalla_tpro1`);

--
-- Indices de la tabla `reportes_tj`
--
ALTER TABLE `reportes_tj`
  ADD PRIMARY KEY (`idrepo_tj`),
  ADD KEY `FK_idusuario1` (`idusuario1`),
  ADD KEY `FK_id_tj1` (`id_tj1`),
  ADD KEY `FK_idsis_tj1` (`idsis_tj1`),
  ADD KEY `FK_idfalla_tj1` (`idfalla_tj1`),
  ADD KEY `FK_idrefa1` (`idrefa1`),
  ADD KEY `FK_idestado1` (`idestado1`);

--
-- Indices de la tabla `reportes_tp`
--
ALTER TABLE `reportes_tp`
  ADD PRIMARY KEY (`idrepo_tp`),
  ADD KEY `FK_idusuario5` (`idusuario5`),
  ADD KEY `FK_id_tp1` (`id_tp1`),
  ADD KEY `FK_id_estilo1` (`id_estilo1`),
  ADD KEY `FK_idsis_tp1` (`idsis_tp1`),
  ADD KEY `FK_idfalla_tp1` (`idfalla_tp1`),
  ADD KEY `FK_idrefa5` (`idrefa5`),
  ADD KEY `FK_idestado5` (`idestado5`);

--
-- Indices de la tabla `reportes_urdidor`
--
ALTER TABLE `reportes_urdidor`
  ADD PRIMARY KEY (`idrepo_urd`),
  ADD KEY `FK_idusuario4` (`idusuario4`),
  ADD KEY `FK_idsis_urd1` (`idsis_urd1`),
  ADD KEY `FK_idfalla_urd1` (`idfalla_urd1`),
  ADD KEY `FK_idrefa4` (`idrefa4`),
  ADD KEY `FK_idestado4` (`idestado4`);

--
-- Indices de la tabla `reportes_vap`
--
ALTER TABLE `reportes_vap`
  ADD PRIMARY KEY (`idrepo_vap`),
  ADD KEY `FK_idusuario6` (`idusuario6`),
  ADD KEY `FK_id_vap1` (`id_vap1`),
  ADD KEY `FK_idrefa6` (`idrefa6`),
  ADD KEY `FK_idestado6` (`idestado6`);

--
-- Indices de la tabla `reporte_personal`
--
ALTER TABLE `reporte_personal`
  ADD PRIMARY KEY (`idrepo_pe`),
  ADD KEY `FK_idusuario9` (`idusuario9`),
  ADD KEY `FK_id_pe1` (`id_reportado`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sistemas_cal`
--
ALTER TABLE `sistemas_cal`
  ADD PRIMARY KEY (`idsis_cal`);

--
-- Indices de la tabla `sistemas_ple`
--
ALTER TABLE `sistemas_ple`
  ADD PRIMARY KEY (`idsis_ple`);

--
-- Indices de la tabla `sistemas_telpro`
--
ALTER TABLE `sistemas_telpro`
  ADD PRIMARY KEY (`idsis_tpro`);

--
-- Indices de la tabla `sistemas_tj`
--
ALTER TABLE `sistemas_tj`
  ADD PRIMARY KEY (`idsis_tj`);

--
-- Indices de la tabla `sistemas_tp`
--
ALTER TABLE `sistemas_tp`
  ADD PRIMARY KEY (`idsis_tp`);

--
-- Indices de la tabla `sistemas_urd`
--
ALTER TABLE `sistemas_urd`
  ADD PRIMARY KEY (`idsis_urd`);

--
-- Indices de la tabla `telares_jumbo`
--
ALTER TABLE `telares_jumbo`
  ADD PRIMARY KEY (`id_tj`);

--
-- Indices de la tabla `telares_planos`
--
ALTER TABLE `telares_planos`
  ADD PRIMARY KEY (`id_tp`);

--
-- Indices de la tabla `telares_pro`
--
ALTER TABLE `telares_pro`
  ADD PRIMARY KEY (`id_tpro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD KEY `FK_idusuario8` (`idusuario8`),
  ADD KEY `FK_id_rol1` (`id_rol1`);

--
-- Indices de la tabla `vaporizadores`
--
ALTER TABLE `vaporizadores`
  ADD PRIMARY KEY (`id_vap`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fallas_cal`
--
ALTER TABLE `fallas_cal`
  MODIFY `idfalla_cal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fallas_ple`
--
ALTER TABLE `fallas_ple`
  MODIFY `idfalla_ple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `fallas_tj`
--
ALTER TABLE `fallas_tj`
  MODIFY `idfalla_tj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `fallas_tp`
--
ALTER TABLE `fallas_tp`
  MODIFY `idfalla_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `fallas_urd`
--
ALTER TABLE `fallas_urd`
  MODIFY `idfalla_urd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes_cal`
--
ALTER TABLE `reportes_cal`
  MODIFY `idrepo_cal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reportes_ple`
--
ALTER TABLE `reportes_ple`
  MODIFY `idrepo_ple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes_telpro`
--
ALTER TABLE `reportes_telpro`
  MODIFY `idrepo_tpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes_tj`
--
ALTER TABLE `reportes_tj`
  MODIFY `idrepo_tj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reportes_tp`
--
ALTER TABLE `reportes_tp`
  MODIFY `idrepo_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes_urdidor`
--
ALTER TABLE `reportes_urdidor`
  MODIFY `idrepo_urd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportes_vap`
--
ALTER TABLE `reportes_vap`
  MODIFY `idrepo_vap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reporte_personal`
--
ALTER TABLE `reporte_personal`
  MODIFY `idrepo_pe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sistemas_tp`
--
ALTER TABLE `sistemas_tp`
  MODIFY `idsis_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reportes_cal`
--
ALTER TABLE `reportes_cal`
  ADD CONSTRAINT `reportes_cal_ibfk_1` FOREIGN KEY (`idusuario3`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_cal_ibfk_2` FOREIGN KEY (`id_cal1`) REFERENCES `calentadores` (`id_cal`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_cal_ibfk_3` FOREIGN KEY (`idsis_cal1`) REFERENCES `sistemas_cal` (`idsis_cal`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_cal_ibfk_4` FOREIGN KEY (`idfalla_cal1`) REFERENCES `fallas_cal` (`idfalla_cal`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_cal_ibfk_5` FOREIGN KEY (`idrefa3`) REFERENCES `refacciones` (`idrefa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_cal_ibfk_6` FOREIGN KEY (`idestado3`) REFERENCES `estados` (`idestado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes_ple`
--
ALTER TABLE `reportes_ple`
  ADD CONSTRAINT `reportes_ple_ibfk_1` FOREIGN KEY (`idusuario2`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ple_ibfk_2` FOREIGN KEY (`id_ple1`) REFERENCES `plegadores` (`id_ple`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ple_ibfk_3` FOREIGN KEY (`idsis_ple1`) REFERENCES `sistemas_ple` (`idsis_ple`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ple_ibfk_4` FOREIGN KEY (`idfalla_ple1`) REFERENCES `fallas_ple` (`idfalla_ple`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ple_ibfk_5` FOREIGN KEY (`idrefa2`) REFERENCES `refacciones` (`idrefa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ple_ibfk_6` FOREIGN KEY (`idestado2`) REFERENCES `estados` (`idestado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes_telpro`
--
ALTER TABLE `reportes_telpro`
  ADD CONSTRAINT `reportes_telpro_ibfk_1` FOREIGN KEY (`idusuario7`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_telpro_ibfk_2` FOREIGN KEY (`id_tpro1`) REFERENCES `telares_pro` (`id_tpro`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_telpro_ibfk_3` FOREIGN KEY (`idsis_tpro1`) REFERENCES `sistemas_telpro` (`idsis_tpro`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_telpro_ibfk_5` FOREIGN KEY (`id_estilo2`) REFERENCES `estilos` (`id_estilo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_telpro_ibfk_6` FOREIGN KEY (`idfalla_tpro1`) REFERENCES `fallas_telpro` (`idfalla_tpro`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes_tj`
--
ALTER TABLE `reportes_tj`
  ADD CONSTRAINT `reportes_tj_ibfk_4` FOREIGN KEY (`idusuario1`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tj_ibfk_5` FOREIGN KEY (`id_tj1`) REFERENCES `telares_jumbo` (`id_tj`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tj_ibfk_6` FOREIGN KEY (`idsis_tj1`) REFERENCES `sistemas_tj` (`idsis_tj`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tj_ibfk_7` FOREIGN KEY (`idfalla_tj1`) REFERENCES `fallas_tj` (`idfalla_tj`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tj_ibfk_8` FOREIGN KEY (`idrefa1`) REFERENCES `refacciones` (`idrefa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tj_ibfk_9` FOREIGN KEY (`idestado1`) REFERENCES `estados` (`idestado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes_tp`
--
ALTER TABLE `reportes_tp`
  ADD CONSTRAINT `reportes_tp_ibfk_1` FOREIGN KEY (`idusuario5`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tp_ibfk_2` FOREIGN KEY (`id_tp1`) REFERENCES `telares_planos` (`id_tp`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tp_ibfk_3` FOREIGN KEY (`idsis_tp1`) REFERENCES `sistemas_tp` (`idsis_tp`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tp_ibfk_4` FOREIGN KEY (`idfalla_tp1`) REFERENCES `fallas_tp` (`idfalla_tp`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tp_ibfk_5` FOREIGN KEY (`idrefa5`) REFERENCES `refacciones` (`idrefa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tp_ibfk_6` FOREIGN KEY (`idestado5`) REFERENCES `estados` (`idestado`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_tp_ibfk_7` FOREIGN KEY (`id_estilo1`) REFERENCES `estilos` (`id_estilo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes_urdidor`
--
ALTER TABLE `reportes_urdidor`
  ADD CONSTRAINT `reportes_urdidor_ibfk_3` FOREIGN KEY (`idusuario4`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_urdidor_ibfk_4` FOREIGN KEY (`idsis_urd1`) REFERENCES `sistemas_urd` (`idsis_urd`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_urdidor_ibfk_5` FOREIGN KEY (`idfalla_urd1`) REFERENCES `fallas_urd` (`idfalla_urd`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_urdidor_ibfk_6` FOREIGN KEY (`idrefa4`) REFERENCES `refacciones` (`idrefa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_urdidor_ibfk_7` FOREIGN KEY (`idestado4`) REFERENCES `estados` (`idestado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes_vap`
--
ALTER TABLE `reportes_vap`
  ADD CONSTRAINT `reportes_vap_ibfk_1` FOREIGN KEY (`idusuario6`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_vap_ibfk_2` FOREIGN KEY (`id_vap1`) REFERENCES `vaporizadores` (`id_vap`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_vap_ibfk_3` FOREIGN KEY (`idrefa6`) REFERENCES `refacciones` (`idrefa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_vap_ibfk_4` FOREIGN KEY (`idestado6`) REFERENCES `estados` (`idestado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte_personal`
--
ALTER TABLE `reporte_personal`
  ADD CONSTRAINT `reporte_personal_ibfk_1` FOREIGN KEY (`idusuario9`) REFERENCES `usuarios` (`idusuario`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_personal_ibfk_2` FOREIGN KEY (`id_reportado`) REFERENCES `personal` (`id_pe`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD CONSTRAINT `usuarios_roles_ibfk_6` FOREIGN KEY (`idusuario8`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_roles_ibfk_7` FOREIGN KEY (`id_rol1`) REFERENCES `roles` (`id_rol`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
