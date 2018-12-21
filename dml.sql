-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2018 a las 23:57:09
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `comments_db`
--

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `comment`, `email`, `date`) VALUES
(1, 'Si me gustó', 'elincredulo@dominio.com', '2018-12-21 11:23:39'),
(2, 'Esta app es muy cool', 'john@doe.com', '2018-12-21 11:28:42'),
(3, 'Muy buena', 'pepe@pepe.com', '2018-12-21 11:37:36'),
(4, 'Lo vuelvo a repetir', 'john@doe.com', '2018-12-21 11:53:21');
COMMIT;
