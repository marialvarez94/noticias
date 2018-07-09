-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2018 a las 08:04:01
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `cuerpo` varchar(10000) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `titulo`, `cuerpo`, `iduser`) VALUES
(1, 'El James ingles que celebro el triunfo de octavos', 'Mientras los hinchas colombianos bailaban, tomaban y cantaban, James Cutler, un joven británico, docente en el Colegio Americano de Barranquilla, se mantenia sentado en medio de las personas que a esa hora veían el partido mundialista entre la seleccion colombiana y la de su país en La Troja.\r\n\r\nCon una bandera britanica en mano, la cual ondeaba de un lado hacia el otro, Cutler, nativo de Hasting (Inglaterra) no se sentia intimidado en medio de los hinchas que lo rodeaban entre ellos, Lina Suarez, su novia-. Para El, el partido ante Colombia era una final; como la de 1966, cuando los ingleses se coronaban por ultima vez como campeones del mundo frente a la Republica Federal de Alemania, y tenia que apoyar a su seleccion; a la potencia inglesa.', 1),
(2, 'JugÃ³ en 11 paÃ­ses diferentes  Mundial 2018', 'Durante su amplio recorrido por el planeta fÃºtbol, que incluyÃ³ 20 equipos en 11 paÃ­ses, RubÃ©n Oscar Cecco tuvo su primer experiencia en Europa en la temporada 2008-2009 contratado por Dinamo Tirana, de Albania. Y en su inserciÃ³n en el fÃºtbol europeo, su director tÃ©cnico fue Zlatko Dalic, el conductor de la Croacia semifinalista del Mundial de Rusia.\r\n\r\n\"Era tal cual se lo ve ahora en el Mundial, muy tranquilo, muy relajado. Hasta solitario, siempre con las manos en el bolsillo. Nunca se lo veÃ­a alterado, ni volviÃ©ndose loco en el banco o caminando de aquÃ­ para allÃ¡. Era muy serio y responsable, daba las indicaciones justas. Ya se veÃ­a venir que tenÃ­a un muy buen futuro por delante\", le cuenta Cecco a ClarÃ­n.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `iduser` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `Nombre`, `Email`, `pass`) VALUES
(1, 'maria', 'maria@gmail.com', '123456'),
(2, 'andrea', 'andrea@gmail.com', '123456'),
(3, 'angelica', 'angelica@gmail.com', '12345'),
(4, 'angelica', 'angelica@gmail.com', '12345'),
(5, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticias`),
  ADD KEY `id-user` (`iduser`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnoticias` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `usuarios` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
