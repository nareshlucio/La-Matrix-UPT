-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2019 a las 17:12:41
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `automatizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Nombre_Alumno` varchar(80) NOT NULL,
  `Matricula` varchar(15) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Carrera` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesorias`
--

CREATE TABLE `asesorias` (
  `Nombre_Tutor` varchar(80) NOT NULL,
  `Motivo_Asesoria` varchar(5) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Calificacion` varchar(5) NOT NULL,
  `Descripcion_Motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `Nombre de Carrera` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_satisfaccion`
--

CREATE TABLE `encuesta_satisfaccion` (
  `Nombre_Tutor` varchar(80) NOT NULL,
  `Nombre_Maestro` varchar(80) NOT NULL,
  `Pregunta_1` int(5) NOT NULL,
  `Pregunta_2` int(5) NOT NULL,
  `Pregunta_3` int(5) NOT NULL,
  `Pregunta_4` int(5) NOT NULL,
  `Nombre_Alumno` varchar(80) NOT NULL,
  `Promedio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Nombre_Profesor` varchar(80) NOT NULL,
  `Matricula` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `Nombre_Tutor` varchar(80) NOT NULL,
  `Matricula` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria_grupal`
--

CREATE TABLE `tutoria_grupal` (
  `Nombre_Tutor` varchar(80) NOT NULL,
  `Motivo_Grupo` varchar(5) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutoria_indivudual`
--

CREATE TABLE `tutoria_indivudual` (
  `Nombre_Tutor` varchar(80) NOT NULL,
  `Nombre_Maestro` varchar(80) NOT NULL,
  `Nombre_Alumno` varchar(80) NOT NULL,
  `Motivo` varchar(5) NOT NULL,
  `Grupo` varchar(10) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Descripcion_Motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Nombre_Alumno`),
  ADD KEY `Grupo` (`Grupo`),
  ADD KEY `Carrera` (`Carrera`);

--
-- Indices de la tabla `asesorias`
--
ALTER TABLE `asesorias`
  ADD PRIMARY KEY (`Nombre_Tutor`),
  ADD KEY `Grupo` (`Grupo`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`Nombre de Carrera`);

--
-- Indices de la tabla `encuesta_satisfaccion`
--
ALTER TABLE `encuesta_satisfaccion`
  ADD PRIMARY KEY (`Nombre_Tutor`),
  ADD KEY `Nombre_Maestro` (`Nombre_Maestro`),
  ADD KEY `Nombre_Alumno` (`Nombre_Alumno`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Nombre_Profesor`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`Nombre_Tutor`);

--
-- Indices de la tabla `tutoria_grupal`
--
ALTER TABLE `tutoria_grupal`
  ADD PRIMARY KEY (`Nombre_Tutor`),
  ADD KEY `Grupo` (`Grupo`);

--
-- Indices de la tabla `tutoria_indivudual`
--
ALTER TABLE `tutoria_indivudual`
  ADD PRIMARY KEY (`Nombre_Tutor`),
  ADD KEY `Nombre_Maestro` (`Nombre_Maestro`),
  ADD KEY `Nombre_Alumno` (`Nombre_Alumno`),
  ADD KEY `Grupo` (`Grupo`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`Carrera`) REFERENCES `carrera` (`Nombre de Carrera`) ON DELETE CASCADE;

--
-- Filtros para la tabla `asesorias`
--
ALTER TABLE `asesorias`
  ADD CONSTRAINT `asesorias_ibfk_1` FOREIGN KEY (`Nombre_Tutor`) REFERENCES `tutores` (`Nombre_Tutor`) ON DELETE CASCADE,
  ADD CONSTRAINT `asesorias_ibfk_2` FOREIGN KEY (`Grupo`) REFERENCES `alumnos` (`Grupo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `encuesta_satisfaccion`
--
ALTER TABLE `encuesta_satisfaccion`
  ADD CONSTRAINT `encuesta_satisfaccion_ibfk_1` FOREIGN KEY (`Nombre_Maestro`) REFERENCES `profesores` (`Nombre_Profesor`) ON DELETE CASCADE,
  ADD CONSTRAINT `encuesta_satisfaccion_ibfk_2` FOREIGN KEY (`Nombre_Tutor`) REFERENCES `tutores` (`Nombre_Tutor`) ON DELETE CASCADE,
  ADD CONSTRAINT `encuesta_satisfaccion_ibfk_3` FOREIGN KEY (`Nombre_Alumno`) REFERENCES `alumnos` (`Nombre_Alumno`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tutoria_grupal`
--
ALTER TABLE `tutoria_grupal`
  ADD CONSTRAINT `tutoria_grupal_ibfk_1` FOREIGN KEY (`Nombre_Tutor`) REFERENCES `tutores` (`Nombre_Tutor`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutoria_grupal_ibfk_2` FOREIGN KEY (`Grupo`) REFERENCES `alumnos` (`Grupo`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tutoria_indivudual`
--
ALTER TABLE `tutoria_indivudual`
  ADD CONSTRAINT `tutoria_indivudual_ibfk_1` FOREIGN KEY (`Nombre_Alumno`) REFERENCES `alumnos` (`Nombre_Alumno`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutoria_indivudual_ibfk_2` FOREIGN KEY (`Nombre_Tutor`) REFERENCES `tutores` (`Nombre_Tutor`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutoria_indivudual_ibfk_3` FOREIGN KEY (`Nombre_Maestro`) REFERENCES `profesores` (`Nombre_Profesor`) ON DELETE CASCADE,
  ADD CONSTRAINT `tutoria_indivudual_ibfk_4` FOREIGN KEY (`Grupo`) REFERENCES `alumnos` (`Grupo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
