-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2023 a las 14:18:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `olympicstore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `ID_biblioteca` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`ID_biblioteca`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca_juegos`
--

CREATE TABLE `biblioteca_juegos` (
  `ID_biblioteca` int(3) DEFAULT NULL,
  `ID_videojuego` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `biblioteca_juegos`
--

INSERT INTO `biblioteca_juegos` (`ID_biblioteca`, `ID_videojuego`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(3, 3),
(3, 4),
(4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `ID_tienda` int(3) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`ID_tienda`, `nombre`) VALUES
(666, 'olympicstore');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_juegos`
--

CREATE TABLE `tienda_juegos` (
  `ID_tienda` int(3) DEFAULT NULL,
  `ID_juego` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda_juegos`
--

INSERT INTO `tienda_juegos` (`ID_tienda`, `ID_juego`) VALUES
(666, 1),
(666, 1),
(666, 2),
(666, 3),
(666, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(3) NOT NULL,
  `ID_biblioteca` int(3) DEFAULT NULL,
  `ID_tienda` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `ID_biblioteca`, `ID_tienda`) VALUES
(1, 1, NULL),
(2, 2, NULL),
(3, 3, NULL),
(4, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_datos`
--

CREATE TABLE `usuarios_datos` (
  `ID_usuario` int(3) NOT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `correo_e` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_datos`
--

INSERT INTO `usuarios_datos` (`ID_usuario`, `nickname`, `contraseña`, `correo_e`) VALUES
(1, 'ialonso', 'ialonso', 'inal147@vidalibarraquer.net'),
(2, 'iveloz', 'iveloz', 'isve157@vidalibarraquer.net'),
(3, 'azafzafi', 'azafzafi', 'abde@hola.com'),
(4, 'unai', 'unai', 'unai@unai.unai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `ID_JUEGOS` int(3) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`ID_JUEGOS`, `nombre`) VALUES
(1, 'Fortnite'),
(2, 'Warzone 2.0'),
(3, 'Street Fighter'),
(4, 'League of legends');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos_datos`
--

CREATE TABLE `videojuegos_datos` (
  `ID_JUEGO` int(3) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `PEGI` int(2) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `videojuegos_datos`
--

INSERT INTO `videojuegos_datos` (`ID_JUEGO`, `nombre`, `PEGI`, `descripcion`) VALUES
(1, 'Fortnite', 12, 'Battle Royale frenético basado en un sistema de construcción'),
(2, 'Warzone 2.0', 18, 'Battle Royale frenético táctico '),
(3, 'Street Fighter', 12, 'Videojuego de peleas mítico en la historia de los videojuegos'),
(4, 'League of legends', 99, 'NO JUGAR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`ID_biblioteca`);

--
-- Indices de la tabla `biblioteca_juegos`
--
ALTER TABLE `biblioteca_juegos`
  ADD KEY `ID_biblioteca` (`ID_biblioteca`),
  ADD KEY `ID_videojuego` (`ID_videojuego`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`ID_tienda`);

--
-- Indices de la tabla `tienda_juegos`
--
ALTER TABLE `tienda_juegos`
  ADD KEY `ID_tienda` (`ID_tienda`),
  ADD KEY `ID_juego` (`ID_juego`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD KEY `ID_biblioteca` (`ID_biblioteca`),
  ADD KEY `ID_tienda` (`ID_tienda`);

--
-- Indices de la tabla `usuarios_datos`
--
ALTER TABLE `usuarios_datos`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`ID_JUEGOS`);

--
-- Indices de la tabla `videojuegos_datos`
--
ALTER TABLE `videojuegos_datos`
  ADD KEY `ID_JUEGO` (`ID_JUEGO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `biblioteca_juegos`
--
ALTER TABLE `biblioteca_juegos`
  ADD CONSTRAINT `biblioteca_juegos_ibfk_1` FOREIGN KEY (`ID_biblioteca`) REFERENCES `biblioteca` (`ID_biblioteca`),
  ADD CONSTRAINT `biblioteca_juegos_ibfk_2` FOREIGN KEY (`ID_videojuego`) REFERENCES `videojuegos` (`ID_JUEGOS`);

--
-- Filtros para la tabla `tienda_juegos`
--
ALTER TABLE `tienda_juegos`
  ADD CONSTRAINT `tienda_juegos_ibfk_1` FOREIGN KEY (`ID_tienda`) REFERENCES `tienda` (`ID_tienda`),
  ADD CONSTRAINT `tienda_juegos_ibfk_2` FOREIGN KEY (`ID_juego`) REFERENCES `videojuegos` (`ID_JUEGOS`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_biblioteca`) REFERENCES `biblioteca` (`ID_biblioteca`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`ID_tienda`) REFERENCES `tienda` (`ID_tienda`);

--
-- Filtros para la tabla `usuarios_datos`
--
ALTER TABLE `usuarios_datos`
  ADD CONSTRAINT `usuarios_datos_ibfk_1` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `videojuegos_datos`
--
ALTER TABLE `videojuegos_datos`
  ADD CONSTRAINT `videojuegos_datos_ibfk_1` FOREIGN KEY (`ID_JUEGO`) REFERENCES `videojuegos` (`ID_JUEGOS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
