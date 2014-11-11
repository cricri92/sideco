-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2014 a las 18:25:53
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sideco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `applicant`
--

INSERT INTO `applicant` (`id`, `name`, `cedula`, `email`, `password`, `slug`, `create_at`, `update_at`) VALUES
(2, 'Antonio Castañeda', '9483823', 'castaneda@redesfacyt.com', '8cb2237d0679ca88db6464eac60da96345513964', 'antonio-castaneda', '2014-11-06 20:12:16', '2014-11-06 20:12:16'),
(5, 'María Fátima de Abreu', '23456', 'mfdabreu@sideco.com', 'c24d0a1968e339c3786751ab16411c2c24ce8a2e', 'maria-fatima-de-abreu', '2014-11-08 14:18:50', '2014-11-08 14:18:50'),
(8, 'Elsa Tovar', '45678', 'etovar@sideco.com', '3b4f3367054b005bf971f96026b4a55003189565', 'elsa-tovar', '2014-11-08 14:22:38', '2014-11-08 14:22:38'),
(10, 'Amadis Martinez', '897456', 'amartinez@sideco.com', '', 'amadis-martinez', '2014-11-08 16:25:54', '2014-11-08 16:25:54'),
(11, 'Salomon Ruiz', '123456789', 'sruiz@gmail.com', '786bd9a52ee9af08db5c139b86cc60533ca1c7b6', 'salomon-ruiz', '2014-11-11 01:05:01', '2014-11-11 01:05:01'),
(12, 'Oriana Ruiz', '21032766', 'oruiz@sideco.com', '4b0b99aa78b19bf81811b104f22caa63bae621c0', 'oriana-ruiz', '2014-11-11 04:25:45', '2014-11-11 04:25:45'),
(13, 'Hector Flores', '20162504', 'hecto932@gmail.com', '786bd9a52ee9af08db5c139b86cc60533ca1c7b6', 'hector-flores', '2014-11-11 06:52:16', '2014-11-11 06:52:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `counselor`
--

CREATE TABLE IF NOT EXISTS `counselor` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `counselor_type_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `counselor`
--

INSERT INTO `counselor` (`id`, `name`, `lastname`, `counselor_type_id`, `create_at`, `update_at`) VALUES
(1, 'Amadis', 'Martinez', 4, '2014-11-08 11:14:24', '2014-11-08 11:14:24'),
(2, 'Marylin', 'Giugni', 1, '2014-11-08 12:29:37', '2014-11-08 12:29:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `counselor_type`
--

CREATE TABLE IF NOT EXISTS `counselor_type` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `counselor_type`
--

INSERT INTO `counselor_type` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Representante de los profesores', '2014-11-07 05:41:56', '2014-11-07 05:41:56'),
(2, 'Representante de los estudiantes', '2014-11-07 05:41:56', '2014-11-07 05:41:56'),
(3, 'Representante suplente de los PROFESORES', '2014-11-07 05:43:34', '2014-11-07 05:43:34'),
(4, 'Director (E)-PRESIDENTE', '2014-11-07 05:43:34', '2014-11-07 05:43:34'),
(5, 'Representante suplente de los estudiantes', '2014-11-08 10:11:31', '2014-11-08 10:11:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependence`
--

CREATE TABLE IF NOT EXISTS `dependence` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `dependence`
--

INSERT INTO `dependence` (`id`, `name`, `subject_id`, `slug`, `create_at`, `update_at`) VALUES
(1, 'Preparadores', 0, 'preparadores', '2014-11-08 19:07:33', '2014-11-11 00:24:12'),
(2, 'Pasantías', 0, 'pasantias', '2014-11-08 19:07:53', '2014-11-08 19:07:53'),
(3, 'Ninguna', 0, 'ninguna', '2014-11-08 19:11:05', '2014-11-08 19:11:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
`id` int(11) NOT NULL,
  `diary_type_id` int(11) NOT NULL,
  `num_acta` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `consideration` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `activated` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `diary`
--

INSERT INTO `diary` (`id`, `diary_type_id`, `num_acta`, `date`, `consideration`, `comment`, `activated`, `create_at`, `update_at`) VALUES
(2, 1, '8h8h978', '2014-11-10', 'g7gyiu', NULL, 0, '2014-11-10 22:50:35', '2014-11-10 22:50:35'),
(4, 1, 'N-002-2001', '2014-11-11', NULL, NULL, 0, '2014-11-11 08:23:01', '2014-11-11 08:36:33'),
(5, 1, 'asdadsd', '2014-11-14', NULL, NULL, 0, '2014-11-11 08:31:36', '2014-11-11 08:39:47'),
(6, 2, '48486', '2014-11-12', NULL, NULL, 0, '2014-11-11 08:39:23', '2014-11-11 08:40:23'),
(7, 2, 'sadsadsad', '2014-11-11', NULL, NULL, 0, '2014-11-11 08:40:23', '2014-11-11 08:41:01'),
(8, 1, 'sadsadasdsad232323', '2014-11-23', NULL, NULL, 1, '2014-11-11 08:41:01', '2014-11-11 09:40:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diary_attachment`
--

CREATE TABLE IF NOT EXISTS `diary_attachment` (
`id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diary_points`
--

CREATE TABLE IF NOT EXISTS `diary_points` (
`id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `diary_points`
--

INSERT INTO `diary_points` (`id`, `diary_id`, `request_id`, `create_at`, `update_at`) VALUES
(1, 8, 48, '2014-11-11 14:31:23', '2014-11-11 14:31:23'),
(2, 8, 50, '2014-11-11 15:52:27', '2014-11-11 15:52:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diary_type`
--

CREATE TABLE IF NOT EXISTS `diary_type` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_a` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `diary_type`
--

INSERT INTO `diary_type` (`id`, `name`, `create_at`, `update_a`) VALUES
(1, 'Ordinaria', '2014-11-10 22:15:26', '2014-11-10 22:15:26'),
(2, 'Extraordinaria', '2014-11-10 22:15:26', '2014-11-10 22:15:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Administrador', '2014-11-02 03:37:57', '2014-11-02 03:37:57'),
(2, 'Usuario', '2014-11-02 03:37:57', '2014-11-02 03:37:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`id` int(11) NOT NULL,
  `type_request_id` int(11) NOT NULL,
  `type_applicant_id` int(11) NOT NULL,
  `dependence_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `request`
--

INSERT INTO `request` (`id`, `type_request_id`, `type_applicant_id`, `dependence_id`, `date`, `status_id`, `applicant_id`, `description`, `resolution`, `create_at`, `update_at`) VALUES
(48, 5, 3, 1, '2014-11-11', 6, 12, 'Esta es una solicitud de Pasantias 2', NULL, '2014-11-11 04:27:10', '2014-11-11 06:38:06'),
(49, 5, 2, 2, '2014-11-11', 5, 13, '<p>Hola, soy una descripcion</p>\n', NULL, '2014-11-11 06:52:37', '2014-11-11 06:52:37'),
(50, 6, 1, 1, '2014-11-11', 6, 13, '<p>Comunicado Nro. DC-103-2012, de fecha 26/01/2012, recibida en esta Secretaria el 27/01/2012, emitido por el&nbsp;<strong>Prof. Amad&iacute;s Martinez - Director (E), informando que esta direccion le otorgo un permiso a la Prof. Ana Aguilera, por razones personales.</strong></p>\n', NULL, '2014-11-11 15:51:56', '2014-11-11 15:52:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request_attachment`
--

CREATE TABLE IF NOT EXISTS `request_attachment` (
`id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `request_attachment`
--

INSERT INTO `request_attachment` (`id`, `request_id`, `name`, `type`, `create_at`, `update_at`) VALUES
(2, 48, 'Documento ERS 1.1.pdf', 'application/pdf', '2014-11-11 04:27:10', '2014-11-11 04:27:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `semester`
--

INSERT INTO `semester` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, '2014 - I', '2014-11-02 17:50:46', '2014-11-02 17:50:46'),
(2, '2014 - II', '2014-11-02 17:50:46', '2014-11-02 17:50:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Aprobado', '2014-11-02 20:46:29', '2014-11-02 20:46:29'),
(2, 'Negado', '2014-11-02 20:46:29', '2014-11-02 20:46:29'),
(3, 'Diferido', '2014-11-02 20:48:04', '2014-11-02 20:48:04'),
(4, 'En cuenta', '2014-11-02 20:48:04', '2014-11-02 20:48:04'),
(5, 'Recibida', '2014-11-02 21:05:44', '2014-11-02 21:05:44'),
(6, 'En agenda', '2014-11-03 20:36:41', '2014-11-03 20:36:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subject_schedule_point`
--

CREATE TABLE IF NOT EXISTS `subject_schedule_point` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_applicant`
--

CREATE TABLE IF NOT EXISTS `type_applicant` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `type_applicant`
--

INSERT INTO `type_applicant` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Profesor', '2014-11-08 18:33:19', '2014-11-08 18:33:19'),
(2, 'Tutor', '2014-11-08 18:34:05', '2014-11-08 18:34:05'),
(3, 'Coordinador', '2014-11-08 18:34:15', '2014-11-08 18:34:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_request`
--

CREATE TABLE IF NOT EXISTS `type_request` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `type_request`
--

INSERT INTO `type_request` (`id`, `name`, `slug`, `create_at`, `update_at`) VALUES
(5, 'Coordinacion de Pasantias', 'coordinacion-de-pasantias', '2014-11-08 12:45:37', '2014-11-08 12:45:37'),
(6, 'Coordinacion de Preparadores', 'coordinacion-de-preparadores', '2014-11-08 12:45:59', '2014-11-08 12:45:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userback`
--

CREATE TABLE IF NOT EXISTS `userback` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `userback`
--

INSERT INTO `userback` (`id`, `username`, `name`, `email`, `password`, `privilege_id`, `slug`, `create_at`, `update_at`) VALUES
(1, 'admin', 'Administrador', 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'administrador', '2014-11-02 03:34:29', '2014-11-03 01:17:49'),
(2, 'cricri92', 'Oriana Ruiz', 'oriru92@gmail.com', '994519b667315632474c34d145622bc4d0ea7aab', 1, 'oriana-ruiz', '2014-11-02 06:13:36', '2014-11-03 01:17:54'),
(3, 'hflores4', 'Hector Flores', 'hecto932@gmail.com', '786bd9a52ee9af08db5c139b86cc60533ca1c7b6', 1, 'hector-flores', '2014-11-02 06:25:24', '2014-11-06 16:35:14'),
(5, 'usuario1', 'Usuario1', 'usuario1@gmail.com', 'ada6d34bca926b40be00893cabc0aeae138ea2a0', 2, 'usuario1', '2014-11-02 17:38:07', '2014-11-03 01:18:02'),
(6, 'dhrosquete', 'Daniel Rosquete', 'dhrosquete@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 'daniel-rosquete', '2014-11-02 18:28:24', '2014-11-03 01:18:04'),
(8, 'fruiz', 'Flavio Ruiz', 'fruiz@gorditocuchi.com', 'e60aaa4e7dd43e19eecaa8af7691c1bacd724e23', 2, 'flavio-ruiz', '2014-11-03 03:08:19', '2014-11-03 03:08:19'),
(9, 'm0ises2', 'Moises Alvarado', 'moisesalvarado84@gmail.com', '41fd6e5db8918e117fc38ed0c1a8bbac1b34f096', 2, 'moises-alvarado', '2014-11-05 23:31:47', '2014-11-05 23:31:47'),
(10, 'aguerra', 'Anibal Guerra', 'aguerra@gmail.com', '705dbe71b3aa50ebbbcf84ba4d3b81e4dbac870a', 2, 'anibal-guerra', '2014-11-06 06:36:35', '2014-11-06 06:36:35');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `applicant`
--
ALTER TABLE `applicant`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `counselor`
--
ALTER TABLE `counselor`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`counselor_type_id`);

--
-- Indices de la tabla `counselor_type`
--
ALTER TABLE `counselor_type`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dependence`
--
ALTER TABLE `dependence`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diary`
--
ALTER TABLE `diary`
 ADD PRIMARY KEY (`id`), ADD KEY `diary_type_id` (`diary_type_id`);

--
-- Indices de la tabla `diary_attachment`
--
ALTER TABLE `diary_attachment`
 ADD PRIMARY KEY (`id`), ADD KEY `request_id` (`request_id`);

--
-- Indices de la tabla `diary_points`
--
ALTER TABLE `diary_points`
 ADD PRIMARY KEY (`id`), ADD KEY `diary_id` (`diary_id`), ADD KEY `request_id` (`request_id`);

--
-- Indices de la tabla `diary_type`
--
ALTER TABLE `diary_type`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `privilege`
--
ALTER TABLE `privilege`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`id`), ADD KEY `type_request_id` (`type_request_id`), ADD KEY `status_id` (`status_id`), ADD KEY `user_id` (`applicant_id`), ADD KEY `type_applicant_id` (`type_applicant_id`), ADD KEY `dependence_id` (`dependence_id`);

--
-- Indices de la tabla `request_attachment`
--
ALTER TABLE `request_attachment`
 ADD PRIMARY KEY (`id`), ADD KEY `request_id` (`request_id`);

--
-- Indices de la tabla `semester`
--
ALTER TABLE `semester`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subject_schedule_point`
--
ALTER TABLE `subject_schedule_point`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_applicant`
--
ALTER TABLE `type_applicant`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_request`
--
ALTER TABLE `type_request`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `userback`
--
ALTER TABLE `userback`
 ADD PRIMARY KEY (`id`), ADD KEY `privilege_id` (`privilege_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `applicant`
--
ALTER TABLE `applicant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `counselor`
--
ALTER TABLE `counselor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `counselor_type`
--
ALTER TABLE `counselor_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `dependence`
--
ALTER TABLE `dependence`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `diary`
--
ALTER TABLE `diary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `diary_attachment`
--
ALTER TABLE `diary_attachment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `diary_points`
--
ALTER TABLE `diary_points`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `diary_type`
--
ALTER TABLE `diary_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `privilege`
--
ALTER TABLE `privilege`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `request`
--
ALTER TABLE `request`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `request_attachment`
--
ALTER TABLE `request_attachment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `semester`
--
ALTER TABLE `semester`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `subject_schedule_point`
--
ALTER TABLE `subject_schedule_point`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `type_applicant`
--
ALTER TABLE `type_applicant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `type_request`
--
ALTER TABLE `type_request`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `userback`
--
ALTER TABLE `userback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `counselor`
--
ALTER TABLE `counselor`
ADD CONSTRAINT `counselor_ibfk_1` FOREIGN KEY (`counselor_type_id`) REFERENCES `counselor_type` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `diary`
--
ALTER TABLE `diary`
ADD CONSTRAINT `diary_ibfk_1` FOREIGN KEY (`diary_type_id`) REFERENCES `diary_type` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `diary_attachment`
--
ALTER TABLE `diary_attachment`
ADD CONSTRAINT `diary_attachment_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `diary_points`
--
ALTER TABLE `diary_points`
ADD CONSTRAINT `diary_points_ibfk_1` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `diary_points_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `request`
--
ALTER TABLE `request`
ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`type_request_id`) REFERENCES `type_request` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `request_ibfk_4` FOREIGN KEY (`type_applicant_id`) REFERENCES `type_applicant` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `request_ibfk_5` FOREIGN KEY (`dependence_id`) REFERENCES `dependence` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `request_attachment`
--
ALTER TABLE `request_attachment`
ADD CONSTRAINT `request_attachment_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `userback`
--
ALTER TABLE `userback`
ADD CONSTRAINT `userback_ibfk_1` FOREIGN KEY (`privilege_id`) REFERENCES `privilege` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
