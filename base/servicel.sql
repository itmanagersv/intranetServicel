-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2018 a las 23:20:12
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

--
-- Volcado de datos para la tabla `tblboleta`
--

INSERT INTO `tblboleta` (`idboleta`, `idpersona`, `boleta`, `nombreBoleta`, `tipo`, `idmes`, `quincena`, `anyo`) VALUES
(6, 1, '../img/boletas/892018.png', '892018.png', 'image/png', 9, 1, 2018),
(7, 1, '../img/boletas/932018.png', '932018.png', 'image/png', 3, 2, 2018),
(8, 9, '../img/boletas/932018.png', '932018.png', 'image/png', 3, 1, 2018),
(9, 8, '../img/boletas/852018.jpg', '852018.jpg', 'image/jpeg', 5, 2, 2018),
(10, 8, '../img/boletas/52018.jpg', '52018.jpg', 'image/jpeg', 5, 1, 2018),
(11, 1, '../img/boletas/132018.jpg', '132018.jpg', 'image/jpeg', 3, 2, 2018),
(12, 8, '../img/boletas/22018.jpg', '22018.jpg', 'image/jpeg', 2, 1, 2018),
(13, 1, '../img/boletas/Emp1Mes9Año2018.jpg', 'Emp1Mes9Año2018.jpg', 'image/jpeg', 9, 1, 2018),
(14, 6, '../img/boletas/E6-M7-A2018.jpg', 'E6-M7-A2018.jpg', 'image/jpeg', 7, 2, 2018),
(15, 8, '../img/boletas/E8-M41-A2018.jpg', 'E8-M41-A2018.jpg', 'image/jpeg', 4, 1, 2018);

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
  `comentarios` varchar(100) NOT NULL,
  `idestado` int(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcita`
--

INSERT INTO `tblcita` (`idcita`, `idpersona`, `fechasolicitud`, `fechacita`, `idhora`, `comentarios`, `idestado`, `visible`) VALUES
(53, 1, '2018-05-08', '1970-01-15', 6, 'Prueba datepicker 1', 1, 1),
(54, 1, '2018-05-08', '2018-05-16', 4, 'Prueba datepicker 2', 1, 1),
(55, 1, '2018-05-08', '1970-01-01', 1, 'dsfsdf', 2, 1),
(56, 1, '2018-05-08', '1970-01-01', 4, 'sfdsfsfs', 1, 1);

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
  `material` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblmaterial`
--

INSERT INTO `tblmaterial` (`idmaterial`, `material`) VALUES
(1, 'Papel bond'),
(2, 'Engrapadora');

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
(1, 'Luis Martínez', '04493581-5', '0614-010991-107-9'),
(6, 'Francisco Gálvez', '123456789-0', '0614-000000-107-5'),
(7, 'Técnico1', '12345678-0', '0614-050207-107-9'),
(8, 'Marlene Alvarado', '04493581-0', '0614-150195-107-7'),
(9, 'Oscar Ortiz', '12323232', '23232323'),
(10, 'Recursos Humanos', '22222222-5', '0614-010101-107-9'),
(11, 'Prueba', '11111111-1', '1111-111111-111-1');

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

--
-- Volcado de datos para la tabla `tblsolicitud`
--

INSERT INTO `tblsolicitud` (`idsolicitud`, `idpersona`, `idtipo`, `fecha`, `comentario`, `idmotivo`, `estado`) VALUES
(9, 6, 1, '2018-04-27', 'Hola', 1, 0),
(93, 1, 1, '2018-05-02', 'Prueba estado', 1, 1),
(94, 1, 1, '2018-05-02', 'Prueba correo', 2, 1),
(95, 1, 1, '2018-05-02', 'Prueba correo', 2, 1),
(96, 1, 2, '2018-05-02', 'Prueba borrado', 1, 1),
(99, 1, 1, '2018-05-08', '23232', 1, 1),
(100, 1, 2, '2018-05-29', 'Prueba lunes', 1, 1);

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

--
-- Volcado de datos para la tabla `tblsolsuplemento`
--

INSERT INTO `tblsolsuplemento` (`idsolicitud`, `idpersona`, `idtipo`, `idmaterial`, `fecha`, `cantidad`, `estado`) VALUES
(1, 1, 1, 2, '2018-05-04', 3, 1),
(2, 1, 1, 2, '2018-05-22', 1, 1),
(3, 1, 1, 1, '2018-05-22', 5, 1);

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
(2, 'Constancia salarial');

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
(9, 'Logística');

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
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`idusuario`, `idpersona`, `idtipo`, `user`, `pass`, `activo`) VALUES
(1, 1, 1, 'soporte2@servicelsv.net', 'Guill3rmo$', 1),
(2, 6, 1, 'soporte@servicelsv.net', '$ervicel', 1),
(3, 7, 3, 'tecnico1@servicelsv.net', '123', 1),
(4, 8, 1, 'mar.alvarado@servicelsv.net', '456', 1),
(5, 10, 2, 'recursos@servicelsv.net', '123', 1);

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
  MODIFY `idboleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tblcita`
--
ALTER TABLE `tblcita`
  MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tblsolicitud`
--
ALTER TABLE `tblsolicitud`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `tblsolsuplemento`
--
ALTER TABLE `tblsolsuplemento`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbltiposolicitud`
--
ALTER TABLE `tbltiposolicitud`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbltipousuario`
--
ALTER TABLE `tbltipousuario`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
