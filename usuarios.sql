-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2023 a las 19:13:23
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
-- Base de datos: `cursofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `PRIMER APELLIDO` varchar(50) NOT NULL,
  `SEGUNDO APELLIDO` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `PASSWORD_HASH` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `PRIMER APELLIDO`, `SEGUNDO APELLIDO`, `EMAIL`, `LOGIN`, `PASSWORD_HASH`) VALUES
(1, 'Antonio', 'García', 'Suárez', 'suarezA@gmail.com', 'Ansu', 'edf9cf90718610ee7de53c0dcc250739239044de9ba115bb0ca6026c3e4958a5'),
(2, 'Andrea', 'García', 'Pérez', 'andre@gmail.com', 'AndreP', '$2y$10$ImyBRotzlGnxWZsQgIOiPuLW50cXPACXVF8yxvgwbWOwvtkmbEH3.'),
(4, 'Sofía', 'Méndez', 'Fernández', 'sofiMF@yahoo.es', 'Sofi', '$2y$10$TLUJrKdVKGpb2Ttmynh6Neulqho/2iR.g7XmIRD6JVlpOVvqV8HrG'),
(5, 'Juan', 'Lago', 'Liméres', 'soyjuan@hotmail.com', 'JuanLL', '$2y$10$z60MNNpWy3nseuQdY.K5qeDPlm0QIc0LyUOCrdBZVkPeQStWJwrE2'),
(6, 'Ana', 'Peña', 'Ferro', 'anaFP@gmail.com', 'Ana', '$2y$10$A9EdIoOCewwxHB90RDu3SewRwVcSBtUdYTjA/BOXJDLwAu5fr6HqW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
