-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2025 a las 01:13:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-commerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `precio_producto` varchar(50) NOT NULL,
  `descripcion_producto` varchar(1000) NOT NULL,
  `imagen_producto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `precio_producto`, `descripcion_producto`, `imagen_producto`) VALUES
(1, 'Multímetro', '19,99', 'Los multímetros digitales son instrumentos de medición que permiten medir magnitudes como voltaje, corriente y resistencia. Los valores medidos se muestran en una pantalla digital, lo que permite una lectura fácil y directa, incluso para usuarios principiantes.\r\n', 'https://totalmundo.vtexassets.com/arquivos/ids/210248/ING18HX72B30UN.png'),
(9, 'Teclado Epomaker HE75 Mag', '84,99', 'Introducción del teclado EPOMAKER Shadow-X: inspirado en el contraste entre oscuridad y luz, el teclado muestra una elegante mezcla de misteriosos tonos negros e impresionante iluminación RGB. Con un enfoque en la precisión y la comodidad, el teclado Shadow-X está diseñado para ofrecer una experiencia de escritura excepcional. Representa un enfoque visionario que traspasa los límites de la funcionalidad y la estética, fusionando tecnología y arte a la perfección\r\n', 'https://epomaker.com/cdn/shop/files/IMG_2465.png'),
(10, 'Destornillador Phillips PH1', '3', 'PH y PZ pertenecen a la categoría de tornillos Phillips. PH significa tornillos Phillips, mientras que PZ significa tornillos Pozidriv. El nombre del destornillador se compone del tipo de cabeza del tornillo, como PH, PZ, TX o SL, y la indicación del tamaño.', 'assets/products/product_10.png'),
(11, 'Mouse Logitech G502 HERO', '40', 'El Logitech G502 Hero es un popular ratón gaming con cable, conocido por su sensor HERO 25K de alta precisión, 11 botones programables y pesos ajustables. Es una opción versátil y altamente personalizable tanto para jugadores como para uso general. \r\nCaracterísticas Principales\r\nSensor HERO 25K: El corazón del G502 Hero es su sensor óptico de próxima generación, capaz de alcanzar una resolución de 100 a 25.600 ppp (DPI) sin suavizado, filtrado ni aceleración, proporcionando una precisión de seguimiento excepcional.', 'assets/products/product_11.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
