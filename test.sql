SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `TEST`
--
CREATE DATABASE IF NOT EXISTS `TEST` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `TEST`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Number`
--

DROP TABLE IF EXISTS `Number`;
CREATE TABLE `Number` (
  `id` int(11) NOT NULL,
  `word` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Number`:
--

--
-- Truncar tablas antes de insertar `Number`
--

TRUNCATE TABLE `Number`;
--
-- Volcado de datos para la tabla `Number`
--

INSERT INTO `Number` (`id`, `word`) VALUES
(1, 'uno'),
(2, 'dos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Number`
--
ALTER TABLE `Number`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Number`
--
ALTER TABLE `Number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
