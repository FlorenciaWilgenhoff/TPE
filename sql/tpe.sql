-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2016 a las 21:07:40
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
-- Estructura de tabla para la tabla `anime`
--

CREATE TABLE `anime` (
  `id_anime` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `año` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `noticia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anime`
--

INSERT INTO `anime` (`id_anime`, `nombre`, `año`, `link`, `noticia`) VALUES
(1, 'Sword art online', 2012, 'http://jkanime.net/sword-art-online/', 'Escapar es imposible hasta terminar el juego; un game over significaría una verdadera "muerte". Sin saber la "verdad" de la siguiente generación del Multijugador Masivo Online, ''Sword Art Online(SAO)'', con 10 mil usuarios unidos juntos abriendo las cortinas para esta cruel batalla a muerte. Participando solo en SAO, el protagonista Kirito ha aceptado inmediatamente la "verdad" de este MMO. Y, en el mundo del juego, un gigante castillo flotante llamado ''Aincrad'', Kirito se distinguió a si mismo como un jugador solitario. Apuntando a terminar el juego al alcanzar la planta mas alta el solo continua avanzando arriesgadamente hasta que recibe una invitación a la fuerza de una guerrera y esgrimista experta, Asuna, con la cual tendra que hacer equipo.'),
(2, 'Dragon ball super', 2015, 'http://jkanime.net/dragon-ball-super/', 'La serie se desarrollara en la tierra, tiempo después de la lucha terrible contra Majin Buu. Por órdenes de Milk, Goku trabaja fuertemente todos los días en la agricultura. Sin embargo también tiene algunos momentos para entrenar. Por otra parte, Mr Satan, luego de haber salvado al planeta por segunda vez recibe el ¡¿Premio Mundial de la Paz?!');

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
(1, 'Accion'),
(2, 'Drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_anime`
--

CREATE TABLE `categoria_anime` (
  `id_ca` int(11) NOT NULL,
  `fk_id_categoria` int(11) NOT NULL,
  `fk_id_anime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_anime`
--

INSERT INTO `categoria_anime` (`id_ca`, `fk_id_categoria`, `fk_id_anime`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_anime`
--

CREATE TABLE `imagen_anime` (
  `id_ia` int(11) NOT NULL,
  `path` text NOT NULL,
  `fk_id_anime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id_anime`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `categoria_anime`
--
ALTER TABLE `categoria_anime`
  ADD PRIMARY KEY (`id_ca`);

--
-- Indices de la tabla `imagen_anime`
--
ALTER TABLE `imagen_anime`
  ADD PRIMARY KEY (`id_ia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anime`
--
ALTER TABLE `anime`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `categoria_anime`
--
ALTER TABLE `categoria_anime`
  MODIFY `id_ca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imagen_anime`
--
ALTER TABLE `imagen_anime`
  MODIFY `id_ia` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
