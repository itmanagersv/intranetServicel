-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2018 a las 22:20:44
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblboleta`
--

CREATE TABLE `tblboleta` (
  `idboleta` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `boleta` varchar(1024) NOT NULL,
  `nombreBoleta` varchar(256) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `idmes` int(11) NOT NULL,
  `quincena` int(11) NOT NULL,
  `anyo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcita`
--

CREATE TABLE `tblcita` (
  `idcita` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `fechasolicitud` date NOT NULL,
  `fechacita` date NOT NULL,
  `idhora` int(11) NOT NULL,
  `comentarios` varchar(100) DEFAULT NULL,
  `idestado` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblestado`
--

CREATE TABLE `tblestado` (
  `idestado` int(11) NOT NULL,
  `estado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblestado`
--

INSERT INTO `tblestado` (`idestado`, `estado`) VALUES
(1, 'Pendiente'),
(2, 'Aprobado'),
(3, 'Denegado'),
(4, 'Resuelto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhora`
--

CREATE TABLE `tblhora` (
  `idhora` int(11) NOT NULL,
  `hora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblhora`
--

INSERT INTO `tblhora` (`idhora`, `hora`) VALUES
(1, '8:00AM'),
(2, '9:00AM'),
(3, '10:00AM'),
(4, '11:00AM'),
(5, '12:00PM'),
(6, '1:00PM'),
(7, '2:00PM'),
(8, '3:00PM'),
(9, '4:00PM'),
(10, '5:00PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmaterial`
--

CREATE TABLE `tblmaterial` (
  `idmaterial` int(11) NOT NULL,
  `material` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblmaterial`
--

INSERT INTO `tblmaterial` (`idmaterial`, `material`, `stock`) VALUES
(1, 'Papel bond', 5),
(2, 'Engrapadora', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmes`
--

CREATE TABLE `tblmes` (
  `idmes` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblmes`
--

INSERT INTO `tblmes` (`idmes`, `mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmotivo`
--

CREATE TABLE `tblmotivo` (
  `idmotivo` int(11) NOT NULL,
  `motivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblmotivo`
--

INSERT INTO `tblmotivo` (`idmotivo`, `motivo`) VALUES
(1, 'Banco'),
(2, 'Estudios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpersona`
--

CREATE TABLE `tblpersona` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dui` varchar(11) NOT NULL,
  `nit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpersona`
--

INSERT INTO `tblpersona` (`idpersona`, `nombre`, `dui`, `nit`) VALUES
(1, ' Alexander Vanegas', '04608200-8', '06170205921057\r'),
(2, ' Alvaro Chavez', '03974271-0', '06082108881010\r'),
(3, ' Anibal Rivas', '03960211-4', '06142706881450\r'),
(4, ' Aristides Monterroza', '01579734-5', '08160808841025\r'),
(5, ' Carlos Ayala', '04886985-4', '06142802941308\r'),
(6, ' Carlos Benavides', '02740814-8', '06140912841071\r'),
(7, ' Carlos Barrera', '04725411-1', '06143011921369\r'),
(8, ' Cesar Valladares', '03439402-5', '06141601861504\r'),
(9, ' Cesar Rodriguez', '02050877-7', '10032309761011\r'),
(10, ' Cesar Hidalgo', '05048270-7', '06142108941163\r'),
(11, ' Cesia Ramirez', '03685998-2', '06142401871218\r'),
(12, ' Christian Santos', '04505985-8', '08051011801016\r'),
(13, ' Claudia Azucena', '00483023-7', '06142003751164\r'),
(14, ' Daniel Corena', '04718654-6', '06122111921016\r'),
(15, ' David Hernandez', '04362413-6', '06162609901022\r'),
(16, ' David Guzman', '04081314-2', '08132411881027\r'),
(17, ' David Lobato', '03609757-2', '06142509861308\r'),
(18, ' Dennis Cortez', '05415898-6', '06140208951279\r'),
(19, ' Edwin Orellana', '02252192-5', '08062502751012\r'),
(20, ' Eric Campos', '00416936-9', '05111202791039\r'),
(21, ' Erika Vargas', '03312483-3', '06141509851454\r'),
(22, ' Hector Esquivel', '03859360-5', '06141612871366\r'),
(23, ' Herbert Valle', '03775413-5', '06141108871320\r'),
(24, ' Hilda Almendaño', '03335270-3', '06141210851156\r'),
(25, ' Hilda Linares', '02133562-2', '02012006601028\r'),
(26, ' Isai Fuentes', '03419137-0', '13211209841010\r'),
(27, ' Jaime Rodriguez', '04468496-9', '06101511901017\r'),
(28, ' Jairo Ramos', '04791568-6', '06121902931019\r'),
(29, ' Javier Funes', '04704563-5', '06150110921024\r'),
(30, ' Jeffry Villalobos', '05086418-7', '06142406941672\r'),
(31, ' Jerry Landaverde', '04186287-7', '06142810891433\r'),
(32, ' Jonathan Santos', '04907219-1', '07100909931010\r'),
(33, ' Jonathan Garcia', '04335436-7', '06141807901227\r'),
(34, ' Jorge Sandoval', '03289979-0', '06142008831379\r'),
(35, ' Jorge Mayorga', '00791667-6', '06142604811407\r'),
(36, 'Francisco Galvez', '04147767-2', '06140209891210\r'),
(37, ' Alfredo Villareal', '01637169-7', '11232506841046\r'),
(38, ' Jose Acuña', '04421401-5', '01070803911012\r'),
(39, ' Jose Argueta', '04431437-8', '06141603911355\r'),
(40, ' Josue Perez', '05147711-1', '05150505941047\r'),
(41, ' Juan Arevalo', '02939028-6', '08212709690015\r'),
(42, ' Julio Lemus', '04409060-7', '06140506891041\r'),
(43, ' Karenlyn Aguilar', '02309154-1', '06141711761203\r'),
(44, ' Karen Garcia', '05570073-6', '06111807971032\r'),
(45, ' Katherine Escobar', '05010431-7', '06140206941454\r'),
(46, ' Kevin Ventura', '05538725-3', '06140505971459\r'),
(47, ' Kevin Rivera', '05485317-0', '02102301971162\r'),
(48, ' Kevin Elias', '05317366-6', '06140202961361\r'),
(49, ' Kimberli Martinez', '05612808-4', '06080106971051\r'),
(50, ' Luis Martinez', '04493581-5', '06140109911079\r'),
(51, ' Manuel Mata', '03920657-8', '05031604881030\r'),
(52, ' Maria Del Carmen Garcia', '01500823-3', '11150607761012\r'),
(53, ' Maria Landaverde', '04878961-4', '06062612931035\r'),
(54, ' Mario Cortez', '00341474-5', '06141802711209\r'),
(55, ' Marlon Alvarenga', '04465645-3', '06142106911640\r'),
(56, ' Mercedes Gongora', '03138805-9', '06140310821401\r'),
(57, ' Miguel Cabrera', '04618441-0', '06121802911037\r'),
(58, ' Monica Perez', '04317347-8', '06142506901210\r'),
(59, ' Nestor Hernandez', '05392733-2', '06141108961109\r'),
(60, ' Nidia Lopez', '05256338-9', '05080310951023\r'),
(61, ' Oscar Garcia', '04786513-2', '09031903931014\r'),
(62, ' Oscar Ardon', '05403181-7', '06141802971359\r'),
(63, ' Oscar Merino', '04386946-9', '06141703901306\r'),
(64, ' Oscar Maldonado', '04041145-3', '06142809881505\r'),
(65, ' Oscar Lopez', '00456595-5', '05111702831029\r'),
(66, ' Osmin Ascencio', '00508193-8', '06141703741074\r'),
(67, ' Ottoniel Catota', '04292341-4', '06140206901320\r'),
(68, ' Pedro Ramirez', '04000982-4', '06142110881062\r'),
(69, ' Pedro Mejia', '04842372-1', '07101307931016\r'),
(70, ' Raquel Torres', '05086519-1', '06020806941037\r'),
(71, ' Raul Garcia', '04126192-4', '06172207891034\r'),
(72, ' Reyna Alvarado', '01964910-4', '07020404841021\r'),
(73, ' Saul Barrera', '04724709-1', '06160510921010\r'),
(74, ' Simeon De Leon', '01070508-4', '06153105781035\r'),
(75, ' Vanessa Serrano', '05173409-2', '06142305951073\r'),
(76, ' Veronica Del Transito', '01593565-0', '06141708760066\r'),
(77, ' Walter Asensio', '01178299-0', '01012603841036\r'),
(78, ' William Rojas', '02870367-2', '06142903851156\r'),
(79, ' Wilmer Gomez', '00679581-5', '06070804731016\r'),
(80, ' Yessica Rodriguez', '01635977-6', '09042904831015\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsolicitud`
--

CREATE TABLE `tblsolicitud` (
  `idsolicitud` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  `idmotivo` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsolsuplemento`
--

CREATE TABLE `tblsolsuplemento` (
  `idsolicitud` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `idmaterial` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltiposolicitud`
--

CREATE TABLE `tbltiposolicitud` (
  `idtipo` int(11) NOT NULL,
  `nombretipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbltiposolicitud`
--

INSERT INTO `tbltiposolicitud` (`idtipo`, `nombretipo`) VALUES
(1, 'Constancia laboral'),
(2, 'Constancia salarial'),
(3, 'Constancia FSV'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipousuario`
--

CREATE TABLE `tbltipousuario` (
  `idtipo` int(11) NOT NULL,
  `nombretipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbltipousuario`
--

INSERT INTO `tbltipousuario` (`idtipo`, `nombretipo`) VALUES
(1, 'IT'),
(2, 'Recursos Humanos'),
(3, 'Técnico'),
(4, 'Supervisor'),
(5, 'Agencia'),
(6, 'Gerencia'),
(7, 'Finanzas'),
(8, 'Bodega'),
(9, 'Logística'),
(10, 'Claims'),
(11, 'Control de Calidad'),
(12, 'Recepción'),
(13, 'Atención al cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `idusuario` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `activo` int(11) NOT NULL,
  `cambio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`idusuario`, `idpersona`, `idtipo`, `user`, `pass`, `activo`, `cambio`) VALUES
(1, 1, 3, 'tecnico05@servicelsv.net', '123', 1, 0),
(2, 2, 3, 'tecnico03@servicelsv.net', '123', 1, 0),
(3, 3, 3, 'anibal.rivas@servicelsv.net', '123', 1, 0),
(4, 4, 3, 'aristides.monterroza@servicelsv.net', '123', 1, 0),
(5, 5, 3, 'dennis.cortez@servicelsv.net', '123', 1, 0),
(6, 6, 8, 'carlos.benavides@servicelsv.net', '123', 1, 0),
(7, 7, 5, 'carlos.barrera@servicelsv.net', '123', 1, 0),
(8, 8, 3, 'cesar.valladares@servicelsv.net', '123', 1, 0),
(9, 9, 4, 'supervisor02@servicelsv.net', '123', 1, 0),
(10, 10, 5, 'cesar.hidalgo@servicelsv.net', '123', 1, 0),
(11, 11, 7, 'conta.aux@servicelsv.net', '123', 1, 0),
(12, 12, 3, 'taller.olimpica01@servicelsv.net', '123', 1, 0),
(13, 13, 9, 'claudia.azucena@servicelsv.net', '123', 1, 0),
(14, 14, 4, 'daniel.corena@servicelsv.net', '123', 1, 0),
(15, 15, 5, 'david.hernandez@servicelsv.net', '123', 1, 0),
(16, 16, 5, 'no tiene', '123', 1, 0),
(17, 17, 9, 'david.lobato@servicelsv.net', '123', 1, 0),
(18, 18, 3, 'dennis.cortez@servicelsv.net', '123', 1, 0),
(19, 19, 9, 'edwin.orellana@servicelsv.net', '123', 1, 0),
(20, 20, 8, 'eric.campos@servicelsv.net', '123', 1, 0),
(21, 21, 10, 'claims@servicelsv.net', '123', 1, 0),
(22, 22, 3, 'hector.esquivel@servicelsv.net', '123', 1, 0),
(23, 23, 3, 'herbert.valle@servicelsv.net', '123', 1, 0),
(24, 24, 9, 'arely.almendano@servicelsv.net', '123', 1, 0),
(25, 25, 3, 'no tiene', '123', 1, 0),
(26, 26, 9, 'tigo.sanmiguel@servicelsv.net', '123', 1, 0),
(27, 27, 3, 'jaime.rodriguez@servicelsv.net', '123', 1, 0),
(28, 28, 3, 'jairo.ramos@servicelsv.net', '123', 1, 0),
(29, 29, 11, 'control.calidad@servicelsv.net', '123', 1, 0),
(30, 30, 3, 'jeffry.villalobos@servicelsv.net', '123', 1, 0),
(31, 31, 3, 'jerry.landaverde@servicelsv.net', '123', 1, 0),
(32, 32, 7, 'cuenta.pagar@servicelsv.net', '123', 1, 0),
(33, 33, 8, 'jonathan.garcia@servicelsv.net', '123', 1, 0),
(34, 34, 3, 'no tiene', '123', 1, 0),
(35, 35, 11, 'jorge.mayorga@servicelsv.net', '123', 1, 0),
(36, 36, 1, 'soporte@servicelsv.net', '123', 1, 0),
(37, 37, 5, 'supervisor01@servicelsv.net', '123', 1, 0),
(38, 38, 3, 'control.calidad02@servicelsv.net', '123', 1, 0),
(39, 39, 3, 'no tiene', '123', 1, 0),
(40, 40, 5, 'josue.escalante@servicelsv.net', '123', 1, 0),
(41, 41, 7, 'conta.costos@servicelsv.net', '123', 1, 0),
(42, 42, 3, 'tecnico01@servicelsv.net', '123', 1, 0),
(43, 43, 12, 'recepcion@servicelsv.net', '123', 1, 0),
(44, 44, 3, 'tecnico06@servicelsv.net', '123', 1, 0),
(45, 45, 13, 'atencionalclientesv@servicelsv.net', '123', 1, 0),
(46, 46, 11, 'kevin.ventura@servicelsv.net', '123', 1, 0),
(47, 47, 9, 'tigo.santaana@servicelsv.net', '123', 1, 0),
(48, 48, 3, 'kevin.elias@servicelsv.net', '123', 1, 0),
(49, 49, 13, 'patricia.ponce@servicelsv.net', '123', 1, 0),
(50, 50, 1, 'soporte2@servicelsv.net', '123', 1, 0),
(51, 51, 11, 'manuel.mata@servicelsv.net', '123', 1, 0),
(52, 52, 2, 'recursoshumanos@servicelsv.net', '123', 1, 0),
(53, 53, 3, 'maria.landaverde@servicelsv.net', '123', 1, 0),
(54, 54, 6, 'gerencia.operaciones@servicelsv.net', '123', 1, 0),
(55, 55, 3, 'marlon.alvarenga@servicelsv.net', '123', 1, 0),
(56, 56, 5, 'mercedes.gongora@servicelsv.net', '123', 1, 0),
(57, 57, 3, 'miguel.cabrera@servicelsv.net', '123', 1, 0),
(58, 58, 9, 'monica.perez@servicelsv.net', '123', 1, 0),
(59, 59, 5, 'nestor.bonilla@servicelsv.net', '123', 1, 0),
(60, 60, 9, 'logistica01@servicelsv.net', '123', 1, 0),
(61, 61, 8, 'oscar.garcia@servicelsv.net', '123', 1, 0),
(62, 62, 3, 'oscar.alexander@servicelsv.net', '123', 1, 0),
(63, 63, 3, 'oscar.merino@servicelsv.net', '123', 1, 0),
(64, 64, 3, 'oscar.maldonado@servicelsv.net', '123', 1, 0),
(65, 65, 4, 'jefatura.qc@servicelsv.net', '123', 1, 0),
(66, 66, 3, 'no tiene', '123', 1, 0),
(67, 67, 3, 'control.calidad01@servicelsv.net', '123', 1, 0),
(68, 68, 3, 'tigo.lagranvia@servicelsv.net', '123', 1, 0),
(69, 69, 9, 'jaime.mejia@servicelsv.net', '123', 1, 0),
(70, 70, 3, 'no tiene', '123', 1, 0),
(71, 71, 3, 'raul.garcia@servicelsv.net', '123', 1, 0),
(72, 72, 6, 'reyna.alvarado@servicelsv.net', '123', 1, 0),
(73, 73, 3, 'saul.barrera@servicelsv.net', '123', 1, 0),
(74, 74, 4, 'simeon.vasquez@servicelsv.net', '123', 1, 0),
(75, 75, 3, 'vanessa.ruiz@servicelsv.net', '123', 1, 0),
(76, 76, 8, 'jefatura.inv@servicelsv.net', '123', 1, 0),
(77, 77, 9, 'walter.asencio@servicelsv.net', '123', 1, 0),
(78, 78, 9, 'william.rojas@servicelsv.net', '123', 1, 0),
(79, 79, 3, 'wilmer.gomez@servicelsv.net', '123', 1, 0),
(80, 80, 7, 'conta.compras@servicelsv.net', '123', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblboleta`
--
ALTER TABLE `tblboleta`
  ADD PRIMARY KEY (`idboleta`),
  ADD KEY `idpersona` (`idpersona`),
  ADD KEY `idmes` (`idmes`);

--
-- Indices de la tabla `tblcita`
--
ALTER TABLE `tblcita`
  ADD PRIMARY KEY (`idcita`),
  ADD KEY `idpersona` (`idpersona`),
  ADD KEY `idhora` (`idhora`),
  ADD KEY `idestado` (`idestado`);

--
-- Indices de la tabla `tblestado`
--
ALTER TABLE `tblestado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `tblhora`
--
ALTER TABLE `tblhora`
  ADD PRIMARY KEY (`idhora`);

--
-- Indices de la tabla `tblmaterial`
--
ALTER TABLE `tblmaterial`
  ADD PRIMARY KEY (`idmaterial`);

--
-- Indices de la tabla `tblmes`
--
ALTER TABLE `tblmes`
  ADD PRIMARY KEY (`idmes`);

--
-- Indices de la tabla `tblmotivo`
--
ALTER TABLE `tblmotivo`
  ADD PRIMARY KEY (`idmotivo`);

--
-- Indices de la tabla `tblpersona`
--
ALTER TABLE `tblpersona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `tblsolicitud`
--
ALTER TABLE `tblsolicitud`
  ADD PRIMARY KEY (`idsolicitud`),
  ADD KEY `idpersona` (`idpersona`),
  ADD KEY `fk_solicitudTipoSolicitud_idx` (`idtipo`),
  ADD KEY `fk_solicitudMotivo_idx` (`idmotivo`);

--
-- Indices de la tabla `tblsolsuplemento`
--
ALTER TABLE `tblsolsuplemento`
  ADD PRIMARY KEY (`idsolicitud`),
  ADD KEY `idpersona` (`idpersona`),
  ADD KEY `idmaterial` (`idmaterial`),
  ADD KEY `idtipo` (`idtipo`);

--
-- Indices de la tabla `tbltiposolicitud`
--
ALTER TABLE `tbltiposolicitud`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `tbltipousuario`
--
ALTER TABLE `tbltipousuario`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idpersona` (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblboleta`
--
ALTER TABLE `tblboleta`
  MODIFY `idboleta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblcita`
--
ALTER TABLE `tblcita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblestado`
--
ALTER TABLE `tblestado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblhora`
--
ALTER TABLE `tblhora`
  MODIFY `idhora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tblmaterial`
--
ALTER TABLE `tblmaterial`
  MODIFY `idmaterial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblmes`
--
ALTER TABLE `tblmes`
  MODIFY `idmes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tblmotivo`
--
ALTER TABLE `tblmotivo`
  MODIFY `idmotivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblpersona`
--
ALTER TABLE `tblpersona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `tblsolicitud`
--
ALTER TABLE `tblsolicitud`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblsolsuplemento`
--
ALTER TABLE `tblsolsuplemento`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltiposolicitud`
--
ALTER TABLE `tbltiposolicitud`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbltipousuario`
--
ALTER TABLE `tbltipousuario`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblboleta`
--
ALTER TABLE `tblboleta`
  ADD CONSTRAINT `fk_boletaMes` FOREIGN KEY (`idmes`) REFERENCES `tblmes` (`idmes`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_boletaPersona` FOREIGN KEY (`idpersona`) REFERENCES `tblpersona` (`idpersona`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblcita`
--
ALTER TABLE `tblcita`
  ADD CONSTRAINT `tblcita_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `tblpersona` (`idpersona`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcita_ibfk_2` FOREIGN KEY (`idhora`) REFERENCES `tblhora` (`idhora`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcita_ibfk_3` FOREIGN KEY (`idestado`) REFERENCES `tblestado` (`idestado`);

--
-- Filtros para la tabla `tblsolicitud`
--
ALTER TABLE `tblsolicitud`
  ADD CONSTRAINT `fk_solicitudMotivo` FOREIGN KEY (`idmotivo`) REFERENCES `tblmotivo` (`idmotivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitudPersona` FOREIGN KEY (`idpersona`) REFERENCES `tblpersona` (`idpersona`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_solicitudTipoSolicitud` FOREIGN KEY (`idtipo`) REFERENCES `tbltiposolicitud` (`idtipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblsolsuplemento`
--
ALTER TABLE `tblsolsuplemento`
  ADD CONSTRAINT `tblsolsuplemento_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `tblpersona` (`idpersona`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tblsolsuplemento_ibfk_2` FOREIGN KEY (`idmaterial`) REFERENCES `tblmaterial` (`idmaterial`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tblsolsuplemento_ibfk_3` FOREIGN KEY (`idtipo`) REFERENCES `tbltipousuario` (`idtipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `fk_usuarioPersona` FOREIGN KEY (`idpersona`) REFERENCES `tblpersona` (`idpersona`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
