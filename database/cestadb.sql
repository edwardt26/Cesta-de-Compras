-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2018 a las 00:56:29
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
-- Base de datos: `cestadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cestaproducto`
--

CREATE TABLE `cestaproducto` (
  `id` int(15) NOT NULL,
  `product_id` int(255) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `oferta` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_product` int(10) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_product`, `nombre`, `descripcion`, `precio`, `cantidad`) VALUES
(1, 'cambur', 'Fruta dulce sabor a banana', 2.3, 10),
(2, 'manzana', 'Fruta dulce sabor a Manzana', 1.3, 0),
(3, 'Lechoza', 'Fruta dulce sabor a Papaya', 1.8, 0),
(4, 'Parchita', 'Fruta acida sabor a Maracuya', 2, 0),
(5, 'Patilla', 'Fruta Dulce sabor a Sandia', 3.8, 0),
(6, 'Chocolate', 'Barra de Chocolate', 5, 10),
(7, 'Turron', 'Barra de Mani con Caramelo', 2, 10),
(9, 'SDFGH', 'SDFGHJ', 2.89, 10),
(10, 'WERTY', 'WERTY', 2.89, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cestaproducto`
--
ALTER TABLE `cestaproducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cestaproducto`
--
ALTER TABLE `cestaproducto`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
