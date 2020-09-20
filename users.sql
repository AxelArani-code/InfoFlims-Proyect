-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2020 a las 15:23:18
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(400) NOT NULL,
  `bio` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` int(20) NOT NULL,
  `genero` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `profile_image`, `bio`, `nombre`, `apellido`, `email`, `telefono`, `genero`, `username`, `password`, `created_at`) VALUES
(1, '1600435348-1600435349858..jpg', 'Me gusta pocos tipo de películas', 'Candido', 'Aranibar', 'axelaranibar3@gmail.com', 167391539, 'Masculino', 'aaranibar', '$2y$10$dHQyBCEE1d9FhKNs5UF0mOr2ZWdHP3LPpLqZTdr8iQjxe3mz3Ujke', '2020-09-14 09:04:21'),
(2, '1600378638-unnamed.png', 'me gusta ', '', '', '', 0, '', 'aarabibar', '$2y$10$3tII6BuK3xJgIHtql6yfte7EcG1HKAADCGar4xTPo.rfaHRvSLU0.', '2020-09-14 13:13:59'),
(3, '1600401561-1600396633189..jpg', 'Me gusta pasa películas nuevas ', 'Ricardo', 'Aranibar', 'axelaranibar3@gmail.com', 1628462812, 'Masculino ', 'Vero', '$2y$10$srI96k3xL7VL.fdS5lG1mu9ILjJM8WXbK0JeziwcRB6QWQ0nbnRnq', '2020-09-17 22:33:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
