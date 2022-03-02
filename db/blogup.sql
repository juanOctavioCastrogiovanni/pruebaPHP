-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-03-2022 a las 11:32:50
-- Versión del servidor: 10.3.32-MariaDB-cll-lve
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarionuevo_up`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `id_blogs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `nombre`, `id_blogs`) VALUES
(31, '50%.pdf', 16),
(32, 'Material extra.pdf', 16),
(33, '100%.pdf', 17),
(34, 'Planificacion 50%.pdf', 18),
(35, 'Planificacion 100%.pdf', 18),
(36, 'Planificacion 100%.pdf', 19),
(37, 'consignas extra.pdf', 20),
(38, 'Planificacion 50%.pdf', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `cuerpo` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_docentes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `titulo`, `cuerpo`, `fecha`, `id_docentes`) VALUES
(16, 'Documentos 50%', 'Para todos los que esten cursando Discurso III les dejo la planificacion del 50% por favor no olviden de leerla para la proxima clase.', '2022-03-02 13:55:38', 1),
(17, 'Planificacion 100%', 'Para todos los que esten cursando Discurso III les dejo la planificacion del 100% por favor no olviden de leerla para la proxima clase.', '2022-03-02 14:13:06', 1),
(18, 'Info 50%', 'Para todos los que esten cursando Discurso III les dejo la planificacion del 50% por favor no olviden de leerla para la proxima clase.', '2022-03-02 14:27:18', 3),
(19, 'info 100% ', 'Para todos los que esten cursando Discurso III les dejo la planificacion del 100% por favor no olviden de leerla para la proxima clase.', '2022-03-02 14:27:44', 3),
(20, '50% mas material extra', 'Para todos los que esten cursando Discurso III les dejo la planificacion del 50% por favor no olviden de leerla para la proxima clase.', '2022-03-02 14:32:02', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedras`
--

CREATE TABLE `catedras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `id_docentes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catedras`
--

INSERT INTO `catedras` (`id`, `nombre`, `id_docentes`) VALUES
(1, 'Discurso Audiovisual 1', 1),
(2, 'Produccion I', 3),
(3, 'Publicidad I', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pass` text NOT NULL,
  `imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `email`, `pass`, `imagen`) VALUES
(1, 'Bettendorff', 'Maria', 'MB@hotmail.com', '$2y$10$jDO4SjFHVxzU9TYYmTlrU.lpCc08GQ/tTdOyGhUiIhZ0DACFGsgyu', 'perfil1.jpg'),
(2, 'Paula', 'Domeniconi', 'PD@hotmail.com', '$2y$10$jDO4SjFHVxzU9TYYmTlrU.lpCc08GQ/tTdOyGhUiIhZ0DACFGsgyu', 'perfil2.jpg'),
(3, 'Nestor', 'Borroni', 'NB@hotmail.com', '$2y$10$jDO4SjFHVxzU9TYYmTlrU.lpCc08GQ/tTdOyGhUiIhZ0DACFGsgyu', 'perfil3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `relationship3_idx` (`id_blogs`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relationship2_idx` (`id_docentes`);

--
-- Indices de la tabla `catedras`
--
ALTER TABLE `catedras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relationship1_idx` (`id_docentes`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `catedras`
--
ALTER TABLE `catedras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `relationship3` FOREIGN KEY (`id_blogs`) REFERENCES `blogs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `relationship2` FOREIGN KEY (`id_docentes`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `catedras`
--
ALTER TABLE `catedras`
  ADD CONSTRAINT `relationship1` FOREIGN KEY (`id_docentes`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
