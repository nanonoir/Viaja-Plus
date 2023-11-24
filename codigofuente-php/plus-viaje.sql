-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 08:30:18
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
-- Base de datos: `plus-viaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `butaca`
--

CREATE TABLE `butaca` (
  `id_butaca` int(11) NOT NULL,
  `estado` enum('disponible','reservado','caducado') NOT NULL,
  `categoria` enum('cama','semicama','comun') NOT NULL,
  `lugar` enum('pasillo','ventana') NOT NULL,
  `nro` int(200) NOT NULL,
  `id_unidadtransporte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `butaca`
--

INSERT INTO `butaca` (`id_butaca`, `estado`, `categoria`, `lugar`, `nro`, `id_unidadtransporte`) VALUES
(5, 'disponible', 'comun', 'pasillo', 1, 1),
(6, 'disponible', 'comun', 'pasillo', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conector`
--

CREATE TABLE `conector` (
  `id_itinerario` int(11) NOT NULL,
  `id_puntointermedio` int(11) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conector`
--

INSERT INTO `conector` (`id_itinerario`, `id_puntointermedio`, `numero`) VALUES
(1, 1, 1),
(1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumidor`
--

CREATE TABLE `consumidor` (
  `id_consumidor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(11) NOT NULL,
  `email` text NOT NULL,
  `celular` int(11) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consumidor`
--

INSERT INTO `consumidor` (`id_consumidor`, `nombre`, `apellido`, `dni`, `email`, `celular`, `edad`) VALUES
(1, 'Hasbulla ', 'Magomedovich', 12345678, 'Magomedovich@gmail.com', 999999999, 20231012);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itinerario`
--

CREATE TABLE `itinerario` (
  `id_itinerario` int(11) NOT NULL,
  `lugardedestino` int(11) NOT NULL,
  `lugardeorigen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `itinerario`
--

INSERT INTO `itinerario` (`id_itinerario`, `lugardedestino`, `lugardeorigen`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id_lugar` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_lugar`, `nombre`) VALUES
(1, 'Resistencia'),
(2, 'Capital Federal'),
(3, 'Santa Fe'),
(4, 'Corrientes'),
(5, 'Entre Rios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `id_pasaje` int(11) NOT NULL,
  `fechaReserva` datetime NOT NULL,
  `estado` enum('Disponible','Reservado','Caducado','') NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `id_consumidor` int(11) NOT NULL,
  `id_butaca` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pasaje`
--

INSERT INTO `pasaje` (`id_pasaje`, `fechaReserva`, `estado`, `id_servicio`, `id_unidad`, `id_consumidor`, `id_butaca`, `valor`) VALUES
(1, '2023-10-31 11:43:31', '', 1, 1, 1, 6, 99999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntointermedio`
--

CREATE TABLE `puntointermedio` (
  `id_puntointermedio` int(11) NOT NULL,
  `id_lugar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntointermedio`
--

INSERT INTO `puntointermedio` (`id_puntointermedio`, `id_lugar`) VALUES
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `fechadesalida` datetime NOT NULL,
  `fechadearribo` datetime NOT NULL,
  `tipo` text NOT NULL,
  `id_itinerario` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `fechadesalida`, `fechadearribo`, `tipo`, `id_itinerario`, `id_unidad`) VALUES
(1, '2023-10-31 11:41:28', '2023-11-01 07:41:28', 'Premium', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `id_unidad` int(11) NOT NULL,
  `nroButacas` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `nroViajes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`id_unidad`, `nroButacas`, `estado`, `nroViajes`) VALUES
(1, 5, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `butaca`
--
ALTER TABLE `butaca`
  ADD PRIMARY KEY (`id_butaca`),
  ADD KEY `id_unidadtransporte` (`id_unidadtransporte`);

--
-- Indices de la tabla `conector`
--
ALTER TABLE `conector`
  ADD PRIMARY KEY (`id_itinerario`,`id_puntointermedio`),
  ADD KEY `relacionparadaIntermedia` (`id_puntointermedio`);

--
-- Indices de la tabla `consumidor`
--
ALTER TABLE `consumidor`
  ADD PRIMARY KEY (`id_consumidor`);

--
-- Indices de la tabla `itinerario`
--
ALTER TABLE `itinerario`
  ADD PRIMARY KEY (`id_itinerario`),
  ADD KEY `ciudaddestino` (`lugardedestino`,`lugardeorigen`),
  ADD KEY `ciudadpartida` (`lugardeorigen`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lugar`),
  ADD KEY `id_ciudad` (`id_lugar`);

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`id_pasaje`),
  ADD KEY `id_servicio` (`id_servicio`,`id_unidad`,`id_consumidor`,`id_butaca`),
  ADD KEY `id_unidadTransporte` (`id_unidad`),
  ADD KEY `id_cliente` (`id_consumidor`),
  ADD KEY `id_asiento` (`id_butaca`);

--
-- Indices de la tabla `puntointermedio`
--
ALTER TABLE `puntointermedio`
  ADD PRIMARY KEY (`id_puntointermedio`),
  ADD KEY `id_itinerario` (`id_lugar`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_itinerario` (`id_itinerario`,`id_unidad`),
  ADD KEY `id_unidadtransporte` (`id_unidad`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`id_unidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `butaca`
--
ALTER TABLE `butaca`
  MODIFY `id_butaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `consumidor`
--
ALTER TABLE `consumidor`
  MODIFY `id_consumidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `itinerario`
--
ALTER TABLE `itinerario`
  MODIFY `id_itinerario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_lugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  MODIFY `id_pasaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `puntointermedio`
--
ALTER TABLE `puntointermedio`
  MODIFY `id_puntointermedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `butaca`
--
ALTER TABLE `butaca`
  ADD CONSTRAINT `butaca_ibfk_1` FOREIGN KEY (`id_unidadtransporte`) REFERENCES `unidad` (`id_unidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `conector`
--
ALTER TABLE `conector`
  ADD CONSTRAINT `relacionitinerario` FOREIGN KEY (`id_itinerario`) REFERENCES `itinerario` (`id_itinerario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacionparadaIntermedia` FOREIGN KEY (`id_puntointermedio`) REFERENCES `puntointermedio` (`id_puntointermedio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `itinerario`
--
ALTER TABLE `itinerario`
  ADD CONSTRAINT `itinerario_ibfk_1` FOREIGN KEY (`lugardedestino`) REFERENCES `lugar` (`id_lugar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itinerario_ibfk_2` FOREIGN KEY (`lugardeorigen`) REFERENCES `lugar` (`id_lugar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD CONSTRAINT `pasaje_ibfk_1` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasaje_ibfk_2` FOREIGN KEY (`id_consumidor`) REFERENCES `consumidor` (`id_consumidor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasaje_ibfk_3` FOREIGN KEY (`id_butaca`) REFERENCES `butaca` (`id_butaca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasaje_ibfk_4` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntointermedio`
--
ALTER TABLE `puntointermedio`
  ADD CONSTRAINT `puntointermedio_ibfk_1` FOREIGN KEY (`id_lugar`) REFERENCES `lugar` (`id_lugar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`id_itinerario`) REFERENCES `itinerario` (`id_itinerario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
