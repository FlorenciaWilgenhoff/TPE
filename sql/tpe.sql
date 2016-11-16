-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2016 a las 17:43:05
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
(6, 'Comedias'),
(7, 'Array'),
(9, 'Thiller');

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
(46, 'lalal', 2012, 'cjdsknks.com', ' la descripcion', 3),
(47, 'the ig bang theory', 20120, 'series.com', '', 3),
(48, 'exorcista', 2016, 'serie.com', '', 4),
(49, 'unaserie', 2013, 'cjdnsk.com', '', 5),
(50, 'serie', 2010, 'serie.com', '', 2);

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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`) VALUES
(1, 'miemail@gmail.com', '$2y$10$feT6KO3cjGlyDmynsNmsGu8Q6TJytVx7YzRBfpAXnDH5t9XYYKalG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `imagen_serie`
--
ALTER TABLE `imagen_serie`
  MODIFY `id_is` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
