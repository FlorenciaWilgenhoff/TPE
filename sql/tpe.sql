-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 19:45:57
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
(8, 'Aventura'),
(9, 'Fantasia'),
(10, 'Accion'),
(11, 'Ciencia Ficcion'),
(12, 'Western');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `fk_id_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `fk_id_usuario`, `email`, `puntaje`, `comentario`, `fk_id_serie`) VALUES
(19, 1, '', 1, 'asfasfasf', 47),
(21, 1, '', 1, 'soy alta gila', 47),
(22, 1, '', 1, 'soy alta gila x2', 47),
(23, 1, '', 1, 'soy alta gila x2', 47),
(24, 1, '', 1, 'soy alta gila x2', 47),
(25, 1, '', 1, 'SASDASDAS', 47);

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
(47, 'The Big Bang Theory', 2010, 'series.com', 'La serie comienza con la llegada de Penny, aspirante a actriz, al apartamento vecino, que comparten Sheldon y Leonard, dos físicos que trabajan en el Instituto Tecnológico de California (Caltech). Leonard se enamora desde el primer momento de Penny.\r\n\r\nLeonard y Sheldon son estudiantes destacados en Caltech , amigos a su vez de Howard y Raj, que son presentados como unos completos geeks, alejados de las inquietudes y problemas de la gente común.', 3),
(52, 'The Walking Dead', 2010, 'cjsk.com', '   La historia nos traslada a un escenario post-pandémico en el que un virus ha acabado con la práctica totalidad de la población mundial convirtiéndolos en zombis. Seremos testigo de la lucha de un grupo de supervivientes por mantenerse a salvo en este entorno infestado de zombis o, como ellos prefieren llamarlos, caminantes.', 4),
(53, 'The Exorcist', 2016, 'elexorcits.com', 'En Asia, más precisamente en la zona de Irak, el sacerdote Lankester Merrin descubre en una excavación arqueológica una reliquia que representa al demonio Pazuzu. Tras este hallazgo, Merrin es alertado por una serie de profecías sobre el regreso de esta criatura demoniaca a la tierra. Al mismo tiempo, en Georgetown, una niña de doce años, llamada Regan MacNeil, hija de una famosa actriz, es poseída por una fuerza demoniaca que provoca una serie de cambios psicológicos y físicos en la joven. Esto provoca que, después de una serie de tratamientos inefectivos, la atea madre de Regan llame a un sacerdote para realizar una serie de exorcismos con el fin de liberar a Regan.\r\n', 4),
(54, 'Vikingos', 2013, 'series.com', 'Este nuevo drama histórico, dirigido por Michael Hirst (Elizabeth, The Tudors), de History Channel está centrado en Ragnar Lothbrok, figura mítica que aseguraba que era el descendiente de Odín, el dios principal de la mitología nórdica. ', 8),
(55, 'Juego de Tronos', 2013, 'series.com', 'HBO, desde la calidad que caracteriza a la cadena, nos brinda una vez más una magistral adaptación televisiva de la serie de novelas Canción de hielo y fuego del escritor estadounidense George R. R. Martin. La versión para la pequeña pantalla de esta historia comparte título con el primero de los libros de la saga, Juego de tronos, y está escrita y producida por David Benioff (Troya, X-Men Origins: Wolverine) y D.B. Weiss.\r\n', 9),
(56, 'Los 100', 2014, 'series.com', 'Los 100 es un drama post apocalíptico escrito por Jason Rothenberg (Body Politic), basado en los libros de Kass Morgan. La historia está centrada en lo que ocurre con la civilización casi cien años después de que una guerra nuclear la haya devastado.\r\n', 2),
(57, 'Stranger Things', 2016, 'serie.com', 'Stranger Things (originalmente titulada Montauk) es una serie de televisión dramática de misterio que está ambientada en una localidad de Indiana. Dicho lugar adquiere fama por los extraños acontecimientos que están sucediendo, similares a los del Proyecto Montauk, un supuesto proyecto secreto llevado a cabo por el gobierno de los Estados Unidos en el que se realizaban experimentos con la finalidad de desarrollar técnicas de guerra psicológica.\r\n', 9),
(58, 'American Horror Story', 2011, 'serie.com', 'Concebida por los creadores de Glee y Nip/Tuck, a golpe de bisturí, Ryan Murphy y Brad Falchuk, American Horror Story narra en cada una de sus temporadas una historia independiente ambientada en lugares y con personajes distintos. La primera de la historias que trata la serie habla sobre la vida de la familia Harmon con tintes terroríficos que recuerdan a Paranormal Activity. Ben (Dylan McDermott El Abogado) es un sensible terapeuta que lleva una vida normal hasta que un oscuro secreto le obliga a mudarse a Los Ángeles junto a su familia. Le acompañan su mujer Vivien (Connie Britton Friday Night Lights) y la hija que tienen ambos en común, Violet (Taissa Farmiga -hermana pequeña de Vera Farmiga-).\r\n', 4),
(59, 'Como defender a un asesino', 2014, 'serieanie.com', 'Cómo defender a un asesino sigue a cuatro estudiantes de derecho con una proyección de futuro muy ambiciosa. Michaela, Laurel, Wes y Patrick estudian en la Facultad de Derecho de la Costa Este, uno de los centros que dan opción a sus estudiantes a participar en casos reales y no ficticios.\r\n\r\n\r\n', 5),
(60, 'Westworld ', 2016, 'slsm.com', '\r\n\r\nWestworld (Almas de metal) está ambientada en un parque de atracciones futurista dirigido por el Doctor Robert Ford (Anthony Hopkins). Las instalaciones cuentan con androides cuya apariencia física es humana, y gracias a ellos los visitantes pueden introducirse en cualquier tipo de fantasía por muy oscura que sea.\r\n', 11),
(61, 'Arrow', 2012, 'serie.com', 'Desarrollada por Greg Berlanti (Eli Stone), Marc Guggenheim (Green Lantern) y Andrew Kreisberg (Fringe), Arrow moderniza el personaje de Flecha Verde creado en 1941 por Mort Weisinger y George Papp para DC Comics. En esta nueva aventura, tras ser interpretado por el actor Justin Hartley en Smallville, el Arquero Esmeralda cobrará vida gracias a Stephen Amell, conocido por series como Hung (Superdotado), Crónicas vampíricas o Sensación de vivir.\r\n', 10);

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
(1, 'miemail@gmail.com', '$2y$10$feT6KO3cjGlyDmynsNmsGu8Q6TJytVx7YzRBfpAXnDH5t9XYYKalG', 0, 'Carlos'),
(5, 'eze@gmail.com', '$2y$10$21iNgN3GpyV8Ea1kbUcmy.h8JQPnYFDvyUVNT2bjnY/5jTk0SN.du', 0, 'Lucas'),
(6, 'eze@gmail.com', '$2y$10$L05wEC2UwfTBpGshztZLEeB8FNk42yTtzOr28Z1941xr8K9w1k2ku', 0, 'Josefina'),
(7, 'eze@gmail.com', '$2y$10$L05wEC2UwfTBpGshztZLEeB8FNk42yTtzOr28Z1941xr8K9w1k2ku', 0, 'Jose'),
(8, 'eze@gmail.com', '$2y$10$L05wEC2UwfTBpGshztZLEeB8FNk42yTtzOr28Z1941xr8K9w1k2ku', 0, 'Juan'),
(9, 'yo@gmail.com', '$2y$10$PDmijgqQxGWXw9CZBTP/4ukC2DYJnm0Txdw/Fot2h3DpWpU5Urri.', 0, ''),
(10, 'porfinanda@gmail.com', '$2y$10$lWC8EHhzlgfGnF6wEhiZ2erJDpSYcSvSpWwM4TuMcz2pXw4RQfpfm', 0, ''),
(11, 'flor@hotmail.com', '$2y$10$cdMynLHWS5ZKwNEo7bnS2uWk9j/4kJAm4ia7yRFoY/4slaKFIKqi6', 0, ''),
(12, 'hola@gmail.com', '$2y$10$csXEyWpGzD1L1umvKuTRG.Kp0fGeRIguT1WgLUN06CfE/dadaqYo6', 0, ''),
(13, 'lala@gmail.com', '$2y$10$3v.CcrT0jk6F92GOlo9bl.XHv0fLVSylmN.bI1TFiwfRzbjVegs8e', 0, ''),
(14, 'aranda@gmail.com', '$2y$10$utTmouRuTUh.FKOeQj4OqeuQLCwp0LA1fsBNyPhVZcHtOd/JBvRKi', 0, ''),
(15, 'layoli@gmail.com', '$2y$10$0K.UtNLH.h6KmiJW2x0TFOKbKW.sNckf4HSDCCugg18/3UZSstrxu', 0, 'jauasd'),
(16, 'esteesmiemail@gmail.com', '$2y$10$e0Q/Q3s0tbP77zQf7xQj4.sChm2.2zFBaVskwXfKBYKhqx6togYHK', 0, 'juan35235');

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `imagen_serie`
--
ALTER TABLE `imagen_serie`
  MODIFY `id_is` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
