-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2020 a las 20:39:59
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trivizuz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(20) NOT NULL,
  `apellido_cliente` varchar(20) NOT NULL,
  `telefono_cliente` int(15) NOT NULL,
  `contraseña_cliente` varchar(20) NOT NULL,
  `nombre_usuario` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `contenido` varchar(140) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error leyendo datos de la tabla trivizuz.comentario: #1064 - Algo está equivocado en su sintax cerca 'FROM `trivizuz`.`comentario`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_pedido` int(11) NOT NULL,
  `cant_objeto` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Error leyendo datos de la tabla trivizuz.pedido: #1064 - Algo está equivocado en su sintax cerca 'FROM `trivizuz`.`pedido`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(60) NOT NULL,
  `precio_producto` decimal(10,0) NOT NULL,
  `descripcion_producto` varchar(400) NOT NULL,
  `rating_producto` int(11) NOT NULL,
  `tipo_producto` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `imagen_producto` varchar(140) NOT NULL,
  `promocionado` int(1) NOT NULL,
  `genero_producto` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `precio_producto`, `descripcion_producto`, `rating_producto`, `tipo_producto`, `id_tienda`, `imagen_producto`, `promocionado`, `genero_producto`) VALUES
(3, 'Cuphead', '40', 'Cuphead is a classic run and gun action game heavily focused on boss battles. Inspired by cartoons of the 1930s, the visuals and audio are painstakingly created with the same techniques of the era, i.e. traditional hand drawn cel animation, watercolor backgrounds, and original jazz recordings', 9, 0, 1, 'cuphead.jpg', 0, 'Aventura'),
(4, 'Fire Emblem Awakening', '96', 'Chrom, the prince of Ylisse, and his personal army, the \"Shepherds\" rescue the player character, or Avatar, who is suffering from amnesia. Over the course of the story, the Avatar aids Chrom\'s army in defending Ylisse from undead monsters - the Risen - and attacks from the hostile nation of Plegia.', 9, 0, 2, 'wp1844129-fire-emblem-wallpapers.jpg', 1, 'Estrategia'),
(5, 'Dark Souls III', '96', 'Dark Souls continues to push the boundaries with the latest, ambitious chapter in the critically-acclaimed and genre-defining series. Prepare yourself and Embrace The Darkness!', 8, 0, 1, 'dark_souls3.jpg', 1, 'Aventura'),
(6, 'Age Of Empires II', '51', 'Age of Empires II: Definitive Edition conmemora el 20 aniversario de uno de los juegos de estrategia más aclamados de todos los tiempos, en una versión que ofrece impactantes gráficos 4K Ultra HD, una pista sonora completamente remasterizada y contenido totalmente nuevo', 7, 0, 2, 'age_of_empires2.jpg', 1, 'Estrategia'),
(7, 'Borderlands 3', '80', 'The original shooter-looter returns, packing bazillions of guns and a mayhem-fueled adventure! Blast through new worlds & enemies and save your home from the most ruthless cult leaders in the galaxy.', 8, 0, 1, 'borderlands3.jpg', 0, 'Accion'),
(8, 'The Sims 4', '70', 'Disfruta el poder de crear y controlar a la gente en un mundo en que todo es posible', 6, 0, 3, 'thesims4.jpg', 0, 'Casual'),
(9, 'Pummel Party', '31', 'Pummel Party is a 4-8 player online and local-multiplayer party game. Pummel friends or AI using a wide array of absurd items in the board mode and compete to destroy friendships in the unique collection of minigames', 8, 0, 2, 'pummel_party.jpg', 0, 'Casual'),
(10, 'Totally Acurate Battle Simulator', '31', 'Totally Accurate Battle Simulator is a wacky physics-based tactics game. Experience accurate warfare through the ages. TABS uses state of the art physics-based simulation to provide you with never-before-seen insight to our greatest battles of history', 6, 0, 1, 'tabs.jpg', 1, 'Casual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_tienda` int(11) NOT NULL,
  `nombre_tienda` varchar(35) NOT NULL,
  `direccion_tienda` varchar(50) NOT NULL,
  `telefono_tienda` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_tienda`, `nombre_tienda`, `direccion_tienda`, `telefono_tienda`) VALUES
(1, 'La Anvorgueseria', 'Los Olivos - Alameda La Peña 454', 4971128),
(2, 'La Tienda de Don Pepe', 'Los Girasoles - Alameda Los Cerezos CFA-3', 4543599),
(3, 'La tienda de Stim', 'Lima, La Molina Av. Alfonso Ugarte 430', 4971992);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `calificacion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `calificacion_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `detalle_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id_tienda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
