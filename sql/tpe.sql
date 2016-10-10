-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2016 a las 22:44:35
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
  `noticia` text NOT NULL,
  `fk_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `anime`
--

INSERT INTO `anime` (`id_anime`, `nombre`, `año`, `link`, `noticia`, `fk_id_categoria`) VALUES
(2, 'Dragon ball super', 2015, 'http://jkanime.net/dragon-ball-super/', 'La serie se desarrollara en la tierra, tiempo después de la lucha terrible contra Majin Buu. Por órdenes de Milk, Goku trabaja fuertemente todos los días en la agricultura. Sin embargo también tiene algunos momentos para entrenar. Por otra parte, Mr Satan, luego de haber salvado al planeta por segunda vez recibe el ¡¿Premio Mundial de la Paz?!', 2),
(40, 'Sword art online', 2012, 'http://jkanime.net/sword-art-online/', 'Escapar es imposible hasta terminar el juego; un game over significaría una verdadera "muerte". Sin saber la "verdad" de la siguiente generación del Multijugador Masivo Online, ''Sword Art Online(SAO)'', con 10 mil usuarios unidos juntos abriendo las cortinas para esta cruel batalla a muerte. Participando solo en SAO, el protagonista Kirito ha aceptado inmediatamente la "verdad" de este MMO. Y, en el mundo del juego, un gigante castillo flotante llamado ''Aincrad'', Kirito se distinguió a si mismo como un jugador solitario. Apuntando a terminar el juego al alcanzar la planta mas alta el solo continua avanzando arriesgadamente hasta que recibe una invitación a la fuerza de una guerrera y esgrimista experta, Asuna, con la cual tendra que hacer equipo.', 0),
(41, 'Shingeki no kyojin', 2013, 'http://jkanime.net/Shingeki no kyojin/', 'La historia nos traslada a un mundo en el que la humanidad estuvo a punto de ser exterminada cientos de años atrás por los Titanes. Los Titanes son seres enormes, parecen no ser inteligentes y devoran humanos. Lo peor es que parece que lo hacen por placer y no por alimentarse. Una pequeña parte de la humanidad ha conseguido sobrevivir protegiéndose con unos altísimos muros, más altos que el mayor de los Titanes. La ciudad vive su vida tranquila, y hace más de 100 años que ningún Titan aparece por allí. Eren y Mikasa son todavía unos adolescentes cuando ven algo horroroso: un Titan mucho mayor que todos los que la humanidad había conocido', 0);

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
-- Estructura de tabla para la tabla `imagen_anime`
--

CREATE TABLE `imagen_anime` (
  `id_ia` int(11) NOT NULL,
  `path` text NOT NULL,
  `fk_id_anime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen_anime`
--

INSERT INTO `imagen_anime` (`id_ia`, `path`, `fk_id_anime`) VALUES
(1, 'images/asfasfawrq_1.jpg', 1),
(2, 'images/DragonBallSuper.jpg', 2),
(5, 'images/57f192d190b10_nisekoi.jpg', 37),
(6, 'images/57f1931fe10a5_Dragonballsuper1.jpeg', 38),
(7, 'images/57f1931ff391c_Gakusen.jpg', 38),
(8, 'images/57f193201573d_Gakusen1.jpg', 38),
(9, 'images/57f193202d9a6_nisekoi.jpg', 38),
(10, 'images/57f1932083293_Dragonballsuper1.jpeg', 39),
(14, 'images/57f1950aeb1cd_Dragonballsuper1.jpeg', 39),
(15, 'images/57f1950b0ab92_Gakusen.jpg', 39),
(16, 'images/57f196b769ac1_asfasfawrq_1.jpg', 40);

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
-- Indices de la tabla `imagen_anime`
--
ALTER TABLE `imagen_anime`
  ADD PRIMARY KEY (`id_ia`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anime`
--
ALTER TABLE `anime`
  MODIFY `id_anime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `imagen_anime`
--
ALTER TABLE `imagen_anime`
  MODIFY `id_ia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
