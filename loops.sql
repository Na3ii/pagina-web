-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2023 a las 01:30:46
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loops`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL COMMENT 'nombre del evento',
  `date_event` datetime NOT NULL COMMENT 'fecha del evento',
  `location` varchar(100) NOT NULL COMMENT 'localización del evento',
  `information` text NOT NULL COMMENT 'información del evento',
  `number_tickets` int(11) NOT NULL COMMENT 'cantidad de tickets para este evento',
  `spotify` varchar(100) NOT NULL COMMENT 'url de spotify del evento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `event_name`, `date_event`, `location`, `information`, `number_tickets`, `spotify`) VALUES
(1, 'Las Rosas Bailan Solas', '2023-07-31 22:54:00', 'Gran Santiago de Chile diagonal 47', 'prohibido traer mascotas de toda indole', 500, 'http://localhost/pagina-web-main/view/events/event.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `labels`
--

CREATE TABLE `labels` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'llave primaria',
  `user_type` enum('1','2','3','4') NOT NULL COMMENT 'tipo de usuarios(administrador,cliente,artista,co-worker)',
  `workspace` enum('1','2','3') DEFAULT NULL COMMENT 'area de trabajo (docente,administrador,editor)',
  `name` varchar(60) DEFAULT NULL COMMENT 'nombre',
  `lastname` varchar(60) DEFAULT NULL COMMENT 'apellido',
  `photo` varchar(255) DEFAULT NULL COMMENT 'foto',
  `document_type` enum('1','2') DEFAULT NULL COMMENT 'tipo de documento (cedula de ciudadania,pasaporte)',
  `document_number` varchar(60) DEFAULT NULL COMMENT 'numero de documento',
  `phone` varchar(15) DEFAULT NULL COMMENT 'numero de telefono, indicativo mas numero telefonico',
  `birth_date` date DEFAULT NULL COMMENT 'fecha de nacimiento',
  `email` varchar(100) DEFAULT NULL COMMENT 'correo electronico',
  `password` varchar(255) NOT NULL COMMENT 'contraseña',
  `state` enum('1','2') DEFAULT NULL COMMENT 'estado del usuario (activo,inactivo)',
  `stage_name` varchar(60) DEFAULT NULL COMMENT 'nombre artistico',
  `biography` text DEFAULT NULL COMMENT 'biografia',
  `Label` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'llave foranea de la tabla labels',
  `instagram` varchar(100) DEFAULT NULL COMMENT 'url de instagram',
  `twitter` varchar(100) DEFAULT NULL COMMENT 'url de twitter',
  `tikTok` varchar(100) DEFAULT NULL COMMENT 'url de tiktok',
  `facebook` varchar(100) DEFAULT NULL COMMENT 'url de facebppk',
  `youTube` varchar(100) DEFAULT NULL COMMENT 'url de youtobe',
  `spotify` varchar(100) DEFAULT NULL COMMENT 'url de spotify',
  `apple_music` varchar(100) DEFAULT NULL COMMENT 'url de apple music',
  `beatport` varchar(100) DEFAULT NULL COMMENT 'url de beatport',
  `soundcloud` varchar(100) DEFAULT NULL COMMENT 'url de soundcloud',
  `traxsource` varchar(100) DEFAULT NULL COMMENT 'url de traxsource',
  `bandcamp` varchar(100) DEFAULT NULL COMMENT 'url de bandcamp',
  `tidal` varchar(100) DEFAULT NULL COMMENT 'url de tidal',
  `deezer` varchar(100) DEFAULT NULL COMMENT 'url de deezer',
  `demo_message` text DEFAULT NULL COMMENT 'mensaje del artista que coloca su demo',
  `demo_mp3` varchar(100) DEFAULT NULL COMMENT 'ruta mp3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_type`, `workspace`, `name`, `lastname`, `photo`, `document_type`, `document_number`, `phone`, `birth_date`, `email`, `password`, `state`, `stage_name`, `biography`, `Label`, `instagram`, `twitter`, `tikTok`, `facebook`, `youTube`, `spotify`, `apple_music`, `beatport`, `soundcloud`, `traxsource`, `bandcamp`, `tidal`, `deezer`, `demo_message`, `demo_mp3`) VALUES
(1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sertepsa2016@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '', NULL, 'reprueba', 'prueba@gmail.com', NULL, NULL, NULL, NULL, NULL, '12345', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2', NULL, 'jaimito', 'aranas', NULL, NULL, NULL, NULL, NULL, 'jaranas@gmail.com', '54321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2', NULL, 'Claudia ', 'pescador', NULL, NULL, NULL, NULL, NULL, 'pesca@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2', NULL, 'pedro', 'paulosqui', NULL, NULL, NULL, NULL, NULL, 'paulosqui@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2', NULL, 'pablo', 'parquimedes', NULL, NULL, NULL, NULL, NULL, 'parquimedes@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2', NULL, 'isabela', 'pescador', NULL, NULL, NULL, NULL, NULL, 'isabel@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_event`
--

CREATE TABLE `user_event` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'llave foranea de usuarios',
  `event_id` bigint(20) UNSIGNED NOT NULL COMMENT 'llave foranea de eventos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_labels_foreign` (`Label`);

--
-- Indices de la tabla `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_user-event_foreign` (`user_id`),
  ADD KEY `events_user-event_foreign` (`event_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `labels`
--
ALTER TABLE `labels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user_event`
--
ALTER TABLE `user_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
