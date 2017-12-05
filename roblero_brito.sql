-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2017 a las 22:19:06
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roblero_brito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(6) NOT NULL,
  `rut` int(8) NOT NULL,
  `dv` varchar(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `promocion` int(4) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `rut`, `dv`, `nombre`, `apellido_paterno`, `apellido_materno`, `carrera`, `promocion`, `estado`, `correo`, `foto`, `qr`) VALUES
(75, 12798296, '1', 'rossana', 'banana', 'pagana', 'artes', 2015, 1, 'rossanitx_lulibananitax@yahoo.es', 'img/death_sworn_katarina_by_kenjiokumura-dbs1npa.jpg', 'temp/12798296.png'),
(76, 18761603, '4', 'pedro', 'roblero', 'concha', 'informatica', 2013, 1, 'pedro@gmail.com', 'img/shirohige_by_hecbator-d5db3qj.jpg', 'temp/18761603.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beca`
--

CREATE TABLE `beca` (
  `cod_beca` int(6) NOT NULL,
  `id_alumno` int(6) NOT NULL,
  `estado_beca` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `beca`
--

INSERT INTO `beca` (`cod_beca`, `id_alumno`, `estado_beca`) VALUES
(10, 75, 0),
(11, 76, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casino`
--

CREATE TABLE `casino` (
  `id_casino` int(11) NOT NULL,
  `rut` int(8) NOT NULL,
  `dv` varchar(1) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido_pat` varchar(60) NOT NULL,
  `apellido_mat` varchar(60) NOT NULL,
  `tipo_casino` varchar(60) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casino`
--

INSERT INTO `casino` (`id_casino`, `rut`, `dv`, `nombre`, `apellido_pat`, `apellido_mat`, `tipo_casino`, `correo`) VALUES
(1, 18900738, '8', 'matias', 'aguilera', 'mancilla', 'admin_casino', 'pantakill_05@gmail.com'),
(3, 9456358, '6', 'javiera', 'larrain', 'piÃ±era', 'funcionario', 'tijavieritaloka@gmail.com'),
(7, 13317428, '1', 'myriam', 'torres', 'caniu', 'funcionario', 'myriamlapela@gmail.com'),
(8, 13733822, 'k', 'sandra', 'delape', 'lada', 'funcionario', 'sandra@gmail.com'),
(9, 13116212, 'K', 'claudia', 'lizama', 'diaz', 'admin_casino', 'claudita_gb@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dae`
--

CREATE TABLE `dae` (
  `id_dae` int(6) NOT NULL,
  `rut` int(8) NOT NULL,
  `dv` varchar(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_pat` varchar(60) NOT NULL,
  `apellido_mat` varchar(60) NOT NULL,
  `tipo_dae` varchar(50) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dae`
--

INSERT INTO `dae` (`id_dae`, `rut`, `dv`, `nombre`, `apellido_pat`, `apellido_mat`, `tipo_dae`, `correo`) VALUES
(3, 10720641, '8', 'marcela', 'concha', 'carrillo', 'admin_dae', 'marcela_concha@gmail.com'),
(4, 11040048, '9', 'veronica', 'melocome', 'todo', 'secre', 'veronicacomilona@gmail.com'),
(5, 12334074, '4', 'alberto', 'nayif', 'yamir', 'asist_social', 'albertmaster_sexy@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadistica`
--

CREATE TABLE `estadistica` (
  `cod_estadistica` int(6) NOT NULL,
  `cod_uso_beca` int(6) NOT NULL,
  `count_dia` int(4) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id_tarjeta` int(6) NOT NULL,
  `id_alumno` int(6) NOT NULL,
  `estado_tarjeta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`id_tarjeta`, `id_alumno`, `estado_tarjeta`) VALUES
(7, 75, 0),
(8, 76, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uso_beca`
--

CREATE TABLE `uso_beca` (
  `cod_uso_beca` int(6) NOT NULL,
  `cod_beca` int(6) NOT NULL,
  `uso_beca` tinyint(1) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `uso_beca`
--

INSERT INTO `uso_beca` (`cod_uso_beca`, `cod_beca`, `uso_beca`, `fecha`) VALUES
(18, 11, 1, '2017-12-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(6) NOT NULL,
  `id_alumno` int(6) DEFAULT NULL,
  `id_dae` int(6) DEFAULT NULL,
  `id_casino` int(6) DEFAULT NULL,
  `tipo_usuario` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_alumno`, `id_dae`, `id_casino`, `tipo_usuario`, `user`, `pass`, `email`) VALUES
(3, NULL, NULL, NULL, 'admin', 'admin', 'admin123', 'admin@gmail.com'),
(38, NULL, 3, NULL, 'admin_dae', '10720641', '10720641', 'marcela_concha@gmail.com'),
(41, NULL, NULL, 1, 'admin_casino', '18900738', '18900738', 'pantakill_05@gmail.com'),
(46, NULL, NULL, 3, 'funcionario', '9456358', '9456358', 'tijavieritaloka@gmail.com'),
(65, NULL, NULL, 7, 'funcionario', '13317428', 'funcionario123', 'myriamlapela@gmail.com'),
(66, NULL, NULL, 8, 'funcionario', '13733822', '13733822', 'sandra@gmail.com'),
(68, NULL, NULL, 9, 'admin_casino', '13116212', '13116212', 'claudita_gb@gmail.com'),
(75, NULL, 4, NULL, 'secre', '11040048', 'secre123', 'veronicacomilona@gmail.com'),
(76, NULL, 5, NULL, 'asist_social', '12334074', 'asist', 'albertmaster_sexy@gmail.com'),
(79, 75, NULL, NULL, 'alumno', '12798296', '12798296', 'rossanitx_lulibananitax@yahoo.es'),
(80, 76, NULL, NULL, 'alumno', '18761603', '18761603', 'pedro@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `beca`
--
ALTER TABLE `beca`
  ADD PRIMARY KEY (`cod_beca`),
  ADD KEY `fk_id_alumno` (`id_alumno`);

--
-- Indices de la tabla `casino`
--
ALTER TABLE `casino`
  ADD PRIMARY KEY (`id_casino`);

--
-- Indices de la tabla `dae`
--
ALTER TABLE `dae`
  ADD PRIMARY KEY (`id_dae`);

--
-- Indices de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD PRIMARY KEY (`cod_estadistica`),
  ADD KEY `fk_cod_uso_beca` (`cod_uso_beca`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id_tarjeta`),
  ADD KEY `FK_ID_ALUMNO_tarjeta` (`id_alumno`);

--
-- Indices de la tabla `uso_beca`
--
ALTER TABLE `uso_beca`
  ADD PRIMARY KEY (`cod_uso_beca`),
  ADD KEY `fk_cod_beca` (`cod_beca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_id_alumno_usuario` (`id_alumno`),
  ADD KEY `fk_usuario_dae` (`id_dae`),
  ADD KEY `fk_usuario_casino` (`id_casino`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `beca`
--
ALTER TABLE `beca`
  MODIFY `cod_beca` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `casino`
--
ALTER TABLE `casino`
  MODIFY `id_casino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dae`
--
ALTER TABLE `dae`
  MODIFY `id_dae` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estadistica`
--
ALTER TABLE `estadistica`
  MODIFY `cod_estadistica` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id_tarjeta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `uso_beca`
--
ALTER TABLE `uso_beca`
  MODIFY `cod_uso_beca` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `beca`
--
ALTER TABLE `beca`
  ADD CONSTRAINT `fk_id_alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `estadistica`
--
ALTER TABLE `estadistica`
  ADD CONSTRAINT `fk_cod_uso_beca` FOREIGN KEY (`cod_uso_beca`) REFERENCES `uso_beca` (`cod_uso_beca`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `FK_ID_ALUMNO_tarjeta` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`);

--
-- Filtros para la tabla `uso_beca`
--
ALTER TABLE `uso_beca`
  ADD CONSTRAINT `fk_cod_beca` FOREIGN KEY (`cod_beca`) REFERENCES `beca` (`cod_beca`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id_alumno_usuario` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  ADD CONSTRAINT `fk_usuario_casino` FOREIGN KEY (`id_casino`) REFERENCES `casino` (`id_casino`),
  ADD CONSTRAINT `fk_usuario_dae` FOREIGN KEY (`id_dae`) REFERENCES `dae` (`id_dae`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
