-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2016 a las 16:47:24
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(2, 'Drama'),
(3, 'Comedia'),
(4, 'Terror'),
(5, 'Suspenso'),
(8, 'Aventura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fk_id_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `nombre`, `email`, `puntaje`, `comentario`, `fk_id_serie`) VALUES
(1, 'jose', 'jose@gmail.com', 4, 'me gusta mucho esa serie', 1),
(2, 'axel', 'axelbau@gmail.com', 3, 'Estuvo piola la serie', 0),
(3, 'axel', 'axelbau@gmail.com', 3, 'Estuvo piola la serie', 0),
(4, 'axel', 'axelbau@gmail.com', 3, 'Estuvo piola la serie', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_serie`
--

CREATE TABLE `imagen_serie` (
  `id_is` int(11) NOT NULL,
  `path` text NOT NULL,
  `fk_id_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `año` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `noticia` text NOT NULL,
  `fk_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`id_serie`, `nombre`, `año`, `link`, `noticia`, `fk_id_categoria`) VALUES
(47, 'The big bang theory', 2010, 'series.com', '  ', 2),
(52, 'the walking dead', 2013, 'cjsk.com', '', 5),
(53, 'The exorcist', 2016, 'elexorcits.com', '', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `puesto` varchar(10) NOT NULL,
  `motivo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id_staff`, `nombre`, `apellido`, `edad`, `email`, `puesto`, `motivo`) VALUES
(1, 'Jose', 'Lopez', 27, 'joseluislopez@gmail.com', 'edi', 'Me gusta ser editor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`, `administrador`, `nombre`) VALUES
(1, 'miemail@gmail.com', '$2y$10$feT6KO3cjGlyDmynsNmsGu8Q6TJytVx7YzRBfpAXnDH5t9XYYKalG', 1, 'Carlos'),
(5, 'eze@gmail.com', '$2y$10$21iNgN3GpyV8Ea1kbUcmy.h8JQPnYFDvyUVNT2bjnY/5jTk0SN.du', 0, 'Lucas'),
(6, 'eze@gmail.com', '$2y$10$L05wEC2UwfTBpGshztZLEeB8FNk42yTtzOr28Z1941xr8K9w1k2ku', 1, 'Josefina'),
(7, 'eze@gmail.com', '$2y$10$L05wEC2UwfTBpGshztZLEeB8FNk42yTtzOr28Z1941xr8K9w1k2ku', 0, 'Jose'),
(8, 'eze@gmail.com', '$2y$10$L05wEC2UwfTBpGshztZLEeB8FNk42yTtzOr28Z1941xr8K9w1k2ku', 0, 'Juan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `imagen_serie`
--
ALTER TABLE `imagen_serie`
  ADD PRIMARY KEY (`id_is`),
  ADD KEY `fk_id_anime` (`fk_id_serie`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `imagen_serie`
--
ALTER TABLE `imagen_serie`
  MODIFY `id_is` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen_serie`
--
ALTER TABLE `imagen_serie`
  ADD CONSTRAINT `eliminacionImg` FOREIGN KEY (`fk_id_serie`) REFERENCES `serie` (`id_serie`) ON DELETE CASCADE;

--
-- Filtros para la tabla `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `eliminacion` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
