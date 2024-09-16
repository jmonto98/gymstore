-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-09-2024 a las 04:40:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Equipos de Entrenamiento', 'Pesas, bandas elásticas, esterillas de yoga, máquinas de ejercicio, etc.', '2024-09-16 10:12:20', '2024-09-16 10:12:20'),
(2, 'Ropa Deportiva', 'Camisetas, pantalones, chaquetas, ropa interior, etc.', '2024-09-16 10:50:41', '2024-09-16 10:50:41'),
(3, 'Calzado Deportivo', 'Zapatillas de running, fútbol, baloncesto, senderismo, etc.', '2024-09-16 10:51:04', '2024-09-16 10:51:04'),
(4, 'Accesorios Deportivos', 'Botellas de agua, gorras, mochilas, calcetines, muñequeras, etc.', '2024-09-16 10:51:25', '2024-09-16 10:51:25'),
(5, 'Deportes al Aire Libre', 'Ciclismo, camping, senderismo, deportes acuáticos, etc.', '2024-09-16 10:51:47', '2024-09-16 10:51:47'),
(6, 'Deportes de Equipo', 'Balones de fútbol, baloncesto, voleibol, equipamiento para béisbol, etc.', '2024-09-16 10:52:26', '2024-09-16 10:52:26'),
(7, 'Deportes de Raqueta', 'Tenis, pádel, bádminton, squash, raquetas, pelotas, etc.', '2024-09-16 10:53:07', '2024-09-16 10:53:07'),
(8, 'Deportes de Combate', 'Guantes de boxeo, protectores bucales, sacos de boxeo, kimono, etc.', '2024-09-16 10:53:25', '2024-09-16 10:53:25'),
(9, 'Suplementos y Nutrición Deportiva', 'Proteínas, vitaminas, bebidas energéticas, barritas, etc.', '2024-09-16 10:53:43', '2024-09-16 10:53:43'),
(10, 'Tecnología Deportiva', 'Relojes inteligentes, pulsómetros, auriculares deportivos, aplicaciones fitness, etc.', '2024-09-16 10:54:02', '2024-09-16 10:54:02');
