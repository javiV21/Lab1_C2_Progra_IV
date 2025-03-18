-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2025 a las 19:09:30
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
-- Base de datos: `real_madrid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbljugadores`
--

CREATE TABLE `tbljugadores` (
  `id` int(11) NOT NULL,
  `jugador` varchar(50) NOT NULL,
  `estatura` decimal(6,2) NOT NULL,
  `posicion` varchar(25) NOT NULL,
  `numero` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbljugadores`
--

INSERT INTO `tbljugadores` (`id`, `jugador`, `estatura`, `posicion`, `numero`) VALUES
(9, 'Irula', 1.70, 'Defensa', 4),
(10, 'Vargas', 1.78, 'Lateral derecho', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbljugadores`
--
ALTER TABLE `tbljugadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbljugadores`
--
ALTER TABLE `tbljugadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
