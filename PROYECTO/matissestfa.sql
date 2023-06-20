-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 06:46:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `matissestfa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Tipodoc` varchar(30) NOT NULL,
  `Numdoc` int(15) NOT NULL,
  `NomAlum` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` bigint(10) NOT NULL,
  `EPS` varchar(50) NOT NULL,
  `CantClas` int(10) NOT NULL,
  `NombAcu` varchar(50) NOT NULL,
  `TelAcu` bigint(10) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Curso` varchar(50) NOT NULL,
  `Tallerista` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Tipodoc`, `Numdoc`, `NomAlum`, `Direccion`, `Telefono`, `EPS`, `CantClas`, `NombAcu`, `TelAcu`, `Mail`, `Curso`, `Tallerista`) VALUES
('ced', 79214567, 'OSCAR JAVIER RODRIGUEZ GONZALEZ', 'CALLE 25A 5 - 39 ESTE', 3007440734, 'SANITAS EPS', 8, '', 0, 'JAVIERRODRIGUEZG329@GMAIL.COM', 'manfoam', 'vam'),
('tarid', 1015424098, 'ANAMARIA RODRIGUEZ ACUÑA', 'CALLE 25A 5 - 39 ESTE', 3194724511, 'SANITAS EPS', 12, 'OSCAR JAVIER RODRIGUEZ GONZALEZ', 3007440734, 'JAVIERRODRIGUEZG329@GMAIL.COM', 'dibpin', 'gac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talleristas`
--

CREATE TABLE `talleristas` (
  `Tipodoc` mediumtext NOT NULL,
  `Numdoc` int(255) NOT NULL,
  `Nomtall` mediumtext NOT NULL,
  `Direccion` mediumtext NOT NULL,
  `Telefono` int(255) NOT NULL,
  `correo` mediumtext NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talleristas`
--

INSERT INTO `talleristas` (`Tipodoc`, `Numdoc`, `Nomtall`, `Direccion`, `Telefono`, `correo`, `contraseña`) VALUES
('C.C.', 12345678, 'Gilberto Acuña Cortes', '', 2147483647, 'giros@gmail.com', ''),
('C.C.', 52556789, 'Rosalba Mateus', '', 2147483647, 'giros@gmail.com', ''),
('C.C.', 52815932, 'Victoria Acuña Medina', '', 2147483647, 'toyadvam@gmail.com', 'VAM52815932'),
('C.C.', 123456789, 'prueba', '', 1234567890, '', 'prueba123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Numdoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
