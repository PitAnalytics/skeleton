
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `TESTBIS`
--
CREATE DATABASE IF NOT EXISTS `TESTBIS` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `TESTBIS`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fruits`
--

DROP TABLE IF EXISTS `Fruits`;
CREATE TABLE IF NOT EXISTS `Fruits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fruit` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Fruits`:
--

--
-- Truncar tablas antes de insertar `Fruits`
--

TRUNCATE TABLE `Fruits`;
--
-- Volcado de datos para la tabla `Fruits`
--

INSERT INTO `Fruits` (`id`, `fruit`) VALUES
(1, 'apple'),
(2, 'pear'),
(3, 'lemon'),
(4, 'orange'),
(5, 'strawberry'),
(6, 'raspberry'),
(7, 'tangerine');
COMMIT;
