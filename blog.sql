-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 20:53:06
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(200) NOT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Primer Articulo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis quam sit amet justo placerat rutrum. In sit amet hendrerit velit. Nulla vel mauris nec nulla condimentum scelerisque. In et velit ', '2020-11-26 19:27:13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis quam sit amet justo placerat rutrum. In sit amet hendrerit velit. Nulla vel mauris nec nulla condimentum scelerisque. In et velit nunc. Fusce placerat quam ut tincidunt posuere. Donec posuere augue quis massa auctor ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum mi enim. Sed malesuada aliquet elit sed luctus. Integer suscipit erat vitae erat pulvinar venenatis. Proin augue neque, commodo at venenatis ac, ultricies sed magna. Aliquam eros dolor, suscipit volutpat mollis in, ullamcorper eget neque. Donec aliquam leo in tortor facilisis, eget bibendum tellus eleifend. Cras consequat felis tortor, maximus scelerisque ipsum elementum sit amet. Fusce vitae arcu nisl.', '1.png'),
(2, 'Segundo Articulo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis quam sit amet justo placerat rutrum. In sit amet hendrerit velit. Nulla vel mauris nec nulla condimentum scelerisque. In et velit ', '2020-11-26 19:27:13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis quam sit amet justo placerat rutrum. In sit amet hendrerit velit. Nulla vel mauris nec nulla condimentum scelerisque. In et velit nunc. Fusce placerat quam ut tincidunt posuere. Donec posuere augue quis massa auctor ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum mi enim. Sed malesuada aliquet elit sed luctus. Integer suscipit erat vitae erat pulvinar venenatis. Proin augue neque, commodo at venenatis ac, ultricies sed magna. Aliquam eros dolor, suscipit volutpat mollis in, ullamcorper eget neque. Donec aliquam leo in tortor facilisis, eget bibendum tellus eleifend. Cras consequat felis tortor, maximus scelerisque ipsum elementum sit amet. Fusce vitae arcu nisl.', '2.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
