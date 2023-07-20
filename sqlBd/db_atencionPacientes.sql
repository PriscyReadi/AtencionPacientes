-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2023 a las 22:50:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_atencionPacientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `idAtencion` bigint(20) NOT NULL,
  `idConsulta` int(11) NOT NULL,
  `idEspecialista` int(11) NOT NULL,
  `idTipoConsulta` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `estadoAtencion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `atencion`
--

INSERT INTO `atencion` (`idAtencion`, `idConsulta`, `idEspecialista`, `idTipoConsulta`, `idPaciente`, `estadoAtencion`) VALUES
(1, 1, 1, 1, 1, 2),
(2, 2, 2, 2, 2, 2),
(3, 3, 3, 3, 3, 2),
(4, 1, 3, 3, 4, 2),
(5, 3, 3, 3, 5, 2),
(6, 1, 1, 1, 7, 2),
(7, 1, 2, 2, 7, 2),
(8, 1, 2, 2, 7, 2),
(9, 1, 1, 1, 8, 2),
(10, 2, 2, 2, 1, 2),
(11, 3, 3, 3, 3, 2),
(12, 1, 1, 1, 4, 2),
(13, 2, 2, 2, 8, 2),
(14, 3, 3, 3, 5, 2),
(15, 1, 1, 1, 6, 2),
(16, 1, 1, 1, 1, 2),
(17, 1, 1, 1, 3, 2),
(18, 1, 1, 1, 5, 2),
(19, 1, 1, 1, 6, 2),
(20, 2, 2, 2, 7, 2),
(21, 3, 3, 3, 8, 2),
(22, 1, 1, 1, 2, 2),
(23, 2, 2, 2, 4, 2),
(24, 1, 1, 1, 1, 2),
(25, 1, 1, 1, 1, 2),
(26, 2, 2, 2, 2, 2),
(27, 3, 3, 3, 3, 2),
(28, 1, 1, 1, 1, 2),
(29, 2, 2, 2, 2, 2),
(30, 3, 3, 3, 3, 2),
(31, 1, 1, 1, 2, 2),
(32, 2, 2, 2, 3, 2),
(33, 3, 3, 3, 4, 2),
(34, 1, 1, 1, 1, 2),
(35, 2, 2, 2, 3, 2),
(36, 3, 3, 3, 5, 2),
(37, 1, 1, 1, 6, 2),
(38, 2, 2, 2, 7, 2),
(39, 3, 3, 3, 8, 2),
(40, 1, 1, 1, 2, 2),
(41, 2, 2, 2, 4, 2),
(42, 3, 3, 3, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `nomConsulta` varchar(50) NOT NULL,
  `estadoConsulta` tinyint(1) NOT NULL,
  `idEspecialista` int(11) NOT NULL,
  `idTipoConsulta` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`idConsulta`, `nomConsulta`, `estadoConsulta`, `idEspecialista`, `idTipoConsulta`) VALUES
(1, 'Box 1', 0, 1, 1),
(2, 'Box 2', 0, 2, 2),
(3, 'Box 3', 0, 3, 3),
(7, 'Box 4', 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialista`
--

CREATE TABLE `especialista` (
  `idEspecialista` int(11) NOT NULL,
  `nomEspecialista` varchar(250) NOT NULL,
  `iestadoEspecialista` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialista`
--

INSERT INTO `especialista` (`idEspecialista`, `nomEspecialista`, `iestadoEspecialista`) VALUES
(1, 'Alejandro Shmauck', 1),
(2, 'José Zacarías', 1),
(3, 'Pedro Bucca', 1),
(4, 'Hernán Brawn', 0),
(5, 'Sandra Márquez', 0),
(6, 'Soledad Chávez', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `nombrePaciente` varchar(250) NOT NULL,
  `edadPaciente` int(11) NOT NULL,
  `noHistCli` int(11) DEFAULT NULL,
  `estadoPaciente` tinyint(1) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idRiesgo` float NOT NULL,
  `tipoPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`nombrePaciente`, `edadPaciente`, `noHistCli`, `estadoPaciente`, `idPaciente`, `idRiesgo`, `tipoPaciente`) VALUES
('Alberto Perez', 35, 1, 1, 1, 3.2, 3),
('Valentina Mansilla', 66, 2, 2, 2, 7.06, 1),
('Roberto Facuse', 19, 3, 1, 3, 3, 3),
('Roberto Lamas', 5, 4, 2, 4, 0.75, 2),
('Andrés Garib', 35, 5, 1, 5, 3.6, 1),
('Victor Hernández', 55, 10, 2, 6, 10.1, 1),
('Ricardo Tapia', 3, 7, 2, 7, 0.5, 2),
('Carmen Valenzuela', 66, 8, 2, 8, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pAnciano`
--

CREATE TABLE `pAnciano` (
  `conDieta` tinyint(1) NOT NULL,
  `idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pAnciano`
--

INSERT INTO `pAnciano` (`conDieta`, `idPaciente`) VALUES
(1, 2),
(0, 7),
(0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pJoven`
--

CREATE TABLE `pJoven` (
  `fumador` tinyint(1) NOT NULL,
  `annosFumando` tinyint(4) NOT NULL,
  `idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pJoven`
--

INSERT INTO `pJoven` (`fumador`, `annosFumando`, `idPaciente`) VALUES
(1, 3, 1),
(1, 10, 5),
(0, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pNinno`
--

CREATE TABLE `pNinno` (
  `relPesoEstatura` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoConsulta`
--

CREATE TABLE `tipoConsulta` (
  `idTipoConsulta` bigint(20) NOT NULL,
  `nomTipoConsulta` varchar(250) NOT NULL,
  `EstadoTipoConsulta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipoConsulta`
--

INSERT INTO `tipoConsulta` (`idTipoConsulta`, `nomTipoConsulta`, `EstadoTipoConsulta`) VALUES
(1, 'Pediatría', 1),
(2, 'Urgencia', 1),
(3, 'CGI', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`idAtencion`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`),
  ADD UNIQUE KEY `idConsulta` (`idConsulta`),
  ADD UNIQUE KEY `idConsulta_2` (`idConsulta`);

--
-- Indices de la tabla `especialista`
--
ALTER TABLE `especialista`
  ADD PRIMARY KEY (`idEspecialista`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `pJoven`
--
ALTER TABLE `pJoven`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `tipoConsulta`
--
ALTER TABLE `tipoConsulta`
  ADD PRIMARY KEY (`idTipoConsulta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion`
--
ALTER TABLE `atencion`
  MODIFY `idAtencion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `especialista`
--
ALTER TABLE `especialista`
  MODIFY `idEspecialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipoConsulta`
--
ALTER TABLE `tipoConsulta`
  MODIFY `idTipoConsulta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
