-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2018 a las 22:12:39
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sigupsues`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `carnet` varchar(7) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `lugar_trabajo` varchar(100) DEFAULT NULL,
  `telefono_trabajo` varchar(100) DEFAULT NULL,
  `ingresadoPor` varchar(255) DEFAULT NULL,
  `modificadoPor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`carnet`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `lugar_trabajo`, `telefono_trabajo`, `ingresadoPor`, `modificadoPor`, `created_at`, `updated_at`) VALUES
('AA13014', 'juan', 'pedro', 'col pal', '22232323', 'juanpedro@gmail.com', 'trabajo', '34343434', 'coordinadorsistemas@gmail.com', NULL, '2018-03-21 18:06:37', '2018-03-21 18:06:37'),
('AA13331', 'alumno 1 industrail', 'hai', 'jhjhhj', '44444444', 'coreo@gmail.com', 'kljljlkj', '77777777', 'coordinadorindustrial@gmail.com', NULL, '2018-03-22 21:26:02', '2018-03-22 21:26:02'),
('PP10100', 'Pedro', 'Portualo', 'col', '23232323', 'pedro@gmail.com', 'hola', '44444444', 'coordinadorsistemas@gmail.com', NULL, '2018-03-22 19:51:42', '2018-03-22 19:51:42'),
('AA13014', 'juan', 'pedro', 'col pal', '22232323', 'juanpedro@gmail.com', 'trabajo', '34343434', 'coordinadorsistemas@gmail.com', NULL, '2018-03-21 18:06:37', '2018-03-21 18:06:37'),
('AA13331', 'alumno 1 industrail', 'hai', 'jhjhhj', '44444444', 'coreo@gmail.com', 'kljljlkj', '77777777', 'coordinadorindustrial@gmail.com', NULL, '2018-03-22 21:26:02', '2018-03-22 21:26:02'),
('PP10100', 'Pedro', 'Portualo', 'col', '23232323', 'pedro@gmail.com', 'hola', '44444444', 'coordinadorsistemas@gmail.com', NULL, '2018-03-22 19:51:42', '2018-03-22 19:51:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiario`
--

CREATE TABLE `beneficiario` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `dui` varchar(10) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `organizacion` varchar(255) DEFAULT NULL,
  `telefono_organizacion` varchar(255) DEFAULT NULL,
  `correo_organizacion` varchar(255) DEFAULT NULL,
  `direccion_organizacion` varchar(255) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beneficiario`
--

INSERT INTO `beneficiario` (`id`, `nombre`, `apellido`, `dui`, `correo`, `telefono`, `organizacion`, `telefono_organizacion`, `correo_organizacion`, `direccion_organizacion`, `municipio_id`, `tipo_id`, `created_at`, `updated_at`) VALUES
(1, 'Iker', 'Casillas', '12345678-0', 'ik@algo.com', '2201223', 'Real Madrid', '2222222', 'coo@cc.com', 'col miramonte', 217, 1, '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(2, 'Oliver', 'Kann', '12345678-9', 'ok@algo.com', '2201223', 'Bayern', '2222222', 'coo@cc.com', 'col miramonte', 217, 1, '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(3, 'Ronaldo', 'Nazario', '12345678-4', 'rn@algo.com', '2201223', 'Brasil', '2222222', 'coo@cc.com', 'col miramonte', 217, 1, '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(1, 'Iker', 'Casillas', '12345678-0', 'ik@algo.com', '2201223', 'Real Madrid', '2222222', 'coo@cc.com', 'col miramonte', 217, 1, '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(2, 'Oliver', 'Kann', '12345678-9', 'ok@algo.com', '2201223', 'Bayern', '2222222', 'coo@cc.com', 'col miramonte', 217, 1, '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(3, 'Ronaldo', 'Nazario', '12345678-4', 'rn@algo.com', '2201223', 'Brasil', '2222222', 'coo@cc.com', 'col miramonte', 217, 1, '2018-03-21 17:42:12', '2018-03-21 17:42:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `accion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) DEFAULT NULL,
  `codigo` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `codigo`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'DIS', 'Disponible', '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(2, 'ECS', 'En curso', '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(3, 'ABN', 'Abandonado', '2018-03-21 17:42:12', '2018-03-21 17:42:12'),
(4, 'FIN', 'Finalizado', '2018-03-21 17:42:12', '2018-03-21 17:42:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id` int(11) DEFAULT NULL,
  `alumno_escuela_id` int(11) DEFAULT NULL,
  `fecha_apertura` datetime DEFAULT NULL,
  `fecha_cierre` datetime DEFAULT NULL,
  `observaciones` text,
  `totalHoras` int(11) DEFAULT NULL,
  `totalMontos` int(11) DEFAULT NULL,
  `estado_expediente_id` int(11) DEFAULT NULL,
  `certificado` tinyint(1) DEFAULT NULL,
  `ingresadoPor` varchar(255) DEFAULT NULL,
  `modificadoPor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id`, `alumno_escuela_id`, `fecha_apertura`, `fecha_cierre`, `observaciones`, `totalHoras`, `totalMontos`, `estado_expediente_id`, `certificado`, `ingresadoPor`, `modificadoPor`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2018-03-22 00:00:00', 'Ninguna', 500, NULL, 3, 0, NULL, NULL, '2018-03-21 18:06:37', '2018-03-22 21:26:23'),
(2, 2, NULL, NULL, 'Ninguna', 300, NULL, 2, 0, NULL, NULL, '2018-03-22 19:51:43', '2018-03-22 19:52:02'),
(3, 3, NULL, NULL, 'Ninguna', 444, NULL, 2, 0, NULL, NULL, '2018-03-22 21:26:02', '2018-03-22 21:26:23'),
(1, 1, NULL, '2018-03-22 00:00:00', 'Ninguna', 500, NULL, 3, 0, NULL, NULL, '2018-03-21 18:06:37', '2018-03-22 21:26:23'),
(2, 2, NULL, NULL, 'Ninguna', 300, NULL, 2, 0, NULL, NULL, '2018-03-22 19:51:43', '2018-03-22 19:52:02'),
(3, 3, NULL, NULL, 'Ninguna', 444, NULL, 2, 0, NULL, NULL, '2018-03-22 21:26:02', '2018-03-22 21:26:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente_servicio_socials`
--

CREATE TABLE `expediente_servicio_socials` (
  `id` int(11) DEFAULT NULL,
  `expediente_alumno_id` int(11) DEFAULT NULL,
  `servicio_social_id` int(11) DEFAULT NULL,
  `horas_ganadas` int(11) DEFAULT NULL,
  `estado_ss_estudiante` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expediente_servicio_socials`
--

INSERT INTO `expediente_servicio_socials` (`id`, `expediente_alumno_id`, `servicio_social_id`, `horas_ganadas`, `estado_ss_estudiante`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 500, 4, '2018-03-21 18:10:45', '2018-03-21 18:10:45'),
(2, 2, 1, 300, 2, '2018-03-22 19:52:02', '2018-03-22 19:52:02'),
(3, 3, 5, 444, 2, '2018-03-22 21:26:23', '2018-03-22 21:26:23'),
(1, 1, 1, 500, 4, '2018-03-21 18:10:45', '2018-03-21 18:10:45'),
(2, 2, 1, 300, 2, '2018-03-22 19:52:02', '2018-03-22 19:52:02'),
(3, 3, 5, 444, 2, '2018-03-22 21:26:23', '2018-03-22 21:26:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_Usuario` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `accion` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`id_log`, `id_Usuario`, `usuario`, `email`, `accion`, `fecha`) VALUES
(8, 1, 'Roberto', 'roberto75@gmail.com', 'Inicio Sesion', '2018-06-14 10:21:39'),
(9, 1, 'Roberto', 'roberto75@gmail.com', 'Finalizo Sesion', '2018-06-14 10:22:04'),
(10, 1, 'Roberto', 'roberto75@gmail.com', 'Inicio Sesion', '2018-06-14 10:23:31'),
(11, 1, 'Roberto', 'roberto75@gmail.com', 'Inicio Sesion', '2018-06-14 11:09:21'),
(12, 1, 'Roberto', 'roberto75@gmail.com', 'Inicio Sesion', '2018-06-14 13:56:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_social`
--

CREATE TABLE `servicio_social` (
  `id` int(11) DEFAULT NULL,
  `escuela_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `beneficiario_id` int(11) DEFAULT NULL,
  `municipio_id` int(11) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `beneficiarios_directos` int(11) DEFAULT NULL,
  `beneficiarios_indirectos` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `horas_totales` int(11) DEFAULT NULL,
  `numero_estudiantes` int(11) DEFAULT NULL,
  `modalidad_id` int(11) DEFAULT NULL,
  `ingresadoPor` varchar(255) DEFAULT NULL,
  `modificadoPor` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio_social`
--

INSERT INTO `servicio_social` (`id`, `escuela_id`, `nombre`, `descripcion`, `tutor_id`, `beneficiario_id`, `municipio_id`, `fecha_ingreso`, `fecha_fin`, `monto`, `beneficiarios_directos`, `beneficiarios_indirectos`, `estado_id`, `horas_totales`, `numero_estudiantes`, `modalidad_id`, `ingresadoPor`, `modificadoPor`, `created_at`, `updated_at`) VALUES
(1, 1, 'proyecto 1', 'descripcion 1', 2, 2, 1, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 2000, 20, 20, 2, 600, 4, 1, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-21 18:10:17', '2018-03-22 03:16:51'),
(2, 1, 'proeycto 2', 'proeycto 2', 2, 1, 26, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 1000, 100, 100, 2, 600, 5, 2, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-22 03:14:02', '2018-03-22 03:17:10'),
(3, 1, 'proyecto 3', 'proyecto 3', 3, 3, 30, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 5000, 500, 500, 3, 700, 6, 1, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-22 03:15:22', '2018-03-22 03:17:27'),
(4, 1, 'proyecto 4', 'proyecto 4', 1, 2, 29, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 9000, 90, 90, 2, 900, 9, 1, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-22 03:20:13', '2018-03-22 03:20:32'),
(5, 3, 'proyecto 1 industrial', 'proyecto 1 industrial', 2, 3, 13, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 500, 5000, 500, 2, 500, 5, 1, 'coordinadorindustrial@gmail.com', 'coordinadorindustrial@gmail.com', '2018-03-22 03:32:29', '2018-03-22 03:36:41'),
(1, 1, 'proyecto 1', 'descripcion 1', 2, 2, 1, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 2000, 20, 20, 2, 600, 4, 1, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-21 18:10:17', '2018-03-22 03:16:51'),
(2, 1, 'proeycto 2', 'proeycto 2', 2, 1, 26, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 1000, 100, 100, 2, 600, 5, 2, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-22 03:14:02', '2018-03-22 03:17:10'),
(3, 1, 'proyecto 3', 'proyecto 3', 3, 3, 30, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 5000, 500, 500, 3, 700, 6, 1, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-22 03:15:22', '2018-03-22 03:17:27'),
(4, 1, 'proyecto 4', 'proyecto 4', 1, 2, 29, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 9000, 90, 90, 2, 900, 9, 1, 'coordinadorsistemas@gmail.com', 'coordinadorsistemas@gmail.com', '2018-03-22 03:20:13', '2018-03-22 03:20:32'),
(5, 3, 'proyecto 1 industrial', 'proyecto 1 industrial', 2, 3, 13, '2018-03-21 00:00:00', '2018-03-22 00:00:00', 500, 5000, 500, 2, 500, 5, 1, 'coordinadorindustrial@gmail.com', 'coordinadorindustrial@gmail.com', '2018-03-22 03:32:29', '2018-03-22 03:36:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roberto', 'roberto75@gmail.com', '$2y$10$/suq6mJTj2wFiteSdwDKYuUbbAEEdGMdvlg3PC.nv1yNO1KSKPLI2', 'RVGNC87wElo84uNTfm5tgU85XXT0eosUaw0zk9v8NddlXRAPIOoNmOQnB4pt', '2018-05-12 04:25:06', '2018-05-12 04:25:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
