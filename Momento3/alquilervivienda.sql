-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2020 a las 18:28:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alquilervivienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `properties`
--

CREATE TABLE `properties` (
  `propertyId` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Addess` varchar(50) NOT NULL,
  `Rooms` int(11) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `properties`
--

INSERT INTO `properties` (`propertyId`, `Title`, `Type`, `Addess`, `Rooms`, `Price`, `Area`, `UserId`) VALUES
(3, 'casa blanca', 'hostal', 'garehhh', 3, '100000', '90', 52),
(4, 'casa Urbana', 'hostal', 'garehhh', 3, '30000', '90', 87),
(5, 'casa 404', 'familiar', 'garehhh', 3, '70000', '45', 87);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `TypeId` varchar(50) NOT NULL,
  `Identification` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userId`, `Name`, `LastName`, `Email`, `TypeId`, `Identification`, `Password`, `username`) VALUES
(28, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '1020423625', '1234', 'Luism'),
(29, 'luis', 'montoya', 'Luismontoya712gmail.com', 'cc', '1020423625', '1234', 'Luism'),
(30, 'luis', 'montoya', 'Luismontoya712gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(31, 'luis', 'montoya', 'Luismontoya712gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(32, 'luis', 'montoya', 'Luismontoya712gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(33, 'luis', 'montoya', 'Luismontoya712gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(34, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(35, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(36, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(37, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(38, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(39, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(40, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(41, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(42, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(43, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(44, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(45, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cedula', '1020423625', '1234', 'Luism'),
(46, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '1020423625', '1234', 'Luism'),
(47, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'pas', '12345678905432', '1234', 'Luism'),
(48, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'pas', '12345678905432', '1234', 'Luism'),
(49, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'pas', '12345678905432', '1234', 'Luism'),
(50, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'pas', '12345678905432', '1234', 'Luism'),
(51, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'pas', '1020423625', '1234', 'Luism'),
(52, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234', 'Luism'),
(53, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234', 'Luism'),
(54, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '12344567890234', 'Luism'),
(55, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '12344567890234', 'Luism'),
(56, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567890', 'Luism'),
(57, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567890456', 'Luism'),
(58, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567890456678', 'Luism'),
(59, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567890123456', 'Luism'),
(60, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(61, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(62, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(63, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(64, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(65, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*', 'Luism'),
(66, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*#', 'Luism'),
(67, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*#?', 'Luism'),
(68, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(69, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894', 'Luism'),
(70, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*', 'Luism'),
(71, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*?', 'Luism'),
(72, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(73, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(74, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(75, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(76, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(77, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '23625', '1234567894*&', 'Luism'),
(78, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '23625', '1234567894*&', 'Luism'),
(79, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '23625', '1234567894*&', 'Luism'),
(80, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(81, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '23625', '1234567894*&', 'Luism'),
(82, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '23625', '1234567894*&', 'Luism'),
(83, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(84, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(85, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '23625', '1234567894*&', 'Luism'),
(86, 'luis', 'montoya', 'Luismontoya712@gmail.com', 'cc', '23625', '1234567894*&', 'Luism'),
(87, 'luis', 'montoya', 'Luismontoya712@gmail.net', 'cc', '12345678', '1234567896@#', 'Luis712');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`propertyId`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `properties`
--
ALTER TABLE `properties`
  MODIFY `propertyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
