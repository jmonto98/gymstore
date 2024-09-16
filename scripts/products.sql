-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2024 a las 04:40:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymstore-db`
--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `image`, `sumReviews`, `totalReviews`, `category_id`, `state`, `created_at`, `updated_at`) VALUES
(41, 'Camisetas', 17, 8, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(42, 'Pantalones', 60, 8, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(43, 'Chaquetas', 10, 9, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(44, 'Ropa interior deportiva', 53, 1, 'images/default_image.png', 0, 0, 2, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(45, 'Zapatillas de running', 84, 10, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(46, 'Zapatillas de fútbol', 84, 1, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(47, 'Zapatillas de baloncesto', 82, 8, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(48, 'Botas de senderismo', 41, 4, 'images/default_image.png', 0, 0, 3, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(49, 'Pesas', 80, 10, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(50, 'Bandas elásticas', 48, 4, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(51, 'Esterillas de yoga', 81, 9, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(52, 'Máquinas de ejercicio', 31, 2, 'images/default_image.png', 0, 0, 1, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(53, 'Botellas de agua', 25, 1, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(54, 'Gorras', 36, 9, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(55, 'Mochilas', 56, 2, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(56, 'Muñequeras', 89, 9, 'images/default_image.png', 0, 0, 4, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(57, 'Bicicletas', 64, 7, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(58, 'Tiendas de campaña', 66, 8, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(59, 'Equipos de senderismo', 88, 8, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(60, 'Equipos de deportes acuáticos', 12, 10, 'images/default_image.png', 0, 0, 5, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(61, 'Balones de fútbol', 37, 8, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(62, 'Balones de baloncesto', 31, 9, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(63, 'Voleibol', 92, 2, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(64, 'Equipamiento de béisbol', 97, 3, 'images/default_image.png', 0, 0, 6, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(65, 'Raquetas de tenis', 11, 8, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(66, 'Raquetas de pádel', 73, 8, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(67, 'Pelotas de tenis/pádel', 15, 3, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(68, 'Raquetas de squash', 11, 5, 'images/default_image.png', 0, 0, 7, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(69, 'Guantes de boxeo', 21, 10, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(70, 'Protectores bucales', 21, 5, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(71, 'Sacos de boxeo', 80, 8, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(72, 'Kimonos', 21, 3, 'images/default_image.png', 0, 0, 8, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(73, 'Proteínas', 30, 2, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(74, 'Vitaminas', 73, 5, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(75, 'Bebidas energéticas', 11, 1, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(76, 'Barritas', 88, 2, 'images/default_image.png', 0, 0, 9, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(77, 'Relojes inteligentes', 28, 6, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(78, 'Pulsómetros', 77, 6, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(79, 'Auriculares deportivos', 19, 4, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22'),
(80, 'Aplicaciones fitness', 51, 3, 'images/default_image.png', 0, 0, 10, 'active', '2024-09-16 10:13:22', '2024-09-16 10:13:22');