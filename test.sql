-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2019 a las 05:07:12
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

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
-- Estructura de tabla para la tabla `Testing`
--

DROP TABLE IF EXISTS `Testing`;
CREATE TABLE `Testing` (
  `id` int(11) NOT NULL,
  `word` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Testing`:
--

--
-- Truncar tablas antes de insertar `Testing`
--

TRUNCATE TABLE `Testing`;
--
-- Volcado de datos para la tabla `Testing`
--

INSERT INTO `Testing` (`id`, `word`) VALUES
(1, 'one'),
(2, 'two'),
(3, 'three'),
(4, 'four'),
(5, 'five'),
(6, 'six');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Testing`
--
ALTER TABLE `Testing`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Testing`
--
ALTER TABLE `Testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;