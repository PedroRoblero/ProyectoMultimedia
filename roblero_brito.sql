-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2017 a las 04:11:53
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
(50, 18354369, '2', 'camila', 'franco', 'botro', 'cosina', 2015, 1, 'camila@gmail.com', 'img/saiyan_girls_dragon_ball_super_by_msjoelart-daagok8.png', 'temp/18354369.png'),
(51, 11224362, '3', 'pedro', 'roblero', 'olivares', 'industrial', 1995, 1, 'roblero-pro@hotmail.com', 'img/thewitcher.com_en_2560x1440_57bef7525b308.jpg', 'temp/11224362.png'),
(52, 11258456, '3', 'alberto', 'perez', 'tobar', 'artes', 2015, 0, 'tyko@gmail.com', 'img/the_witcher_3_wild_hunt_blood_and_wine-wallpaper-3840x2160.jpg', 'temp/11258456.png'),
(53, 19753654, '7', 'rodrigo', 'guzman', 'teleche', 'industrial', 2015, 1, 'rodrigitokun@gmail.com', 'img/womens-day-2147233_960_720.jpg', 'temp/19753654.png'),
(54, 23587423, '7', 'maria', 'elsa', 'payo', 'artes', 2017, 1, 'marialesapato@gmail.com', 'img/project_vayne_by_kenjiokumura-dbtrkrf.jpg', 'temp/23587423.png'),
(56, 11222333, '8', 'raul', 'cornejo', 'garrido', 'industrial', 2014, 1, 'rauldurako@gmail.com', 'img/23972824_10213758239126288_1685785816_n.png', 'temp/11222333.png'),
(62, 18761603, '4', 'pedro', 'roblero', 'concha', 'informatica', 2013, 1, 'pedro@gmail.com', 'img/project_vayne_promo_by_kenjiokumura-dbugbjh.jpg', 'temp/18761603.png'),
(70, 16050336, 'K', 'oriele', 'gonzalez', 'astorga', 'cosina', 2016, 1, 'orielechupadeo@gmail.com', 'img/womens-day-2147233_960_720.jpg', 'temp/16050336.png'),
(72, 12068163, 'K', 'olga', 'castillo', 'miranda', 'artes', 2012, 1, 'olgita@gmail.com', 'img/womens-day-2147233_960_720.jpg', 'temp/12068163.png'),
(73, 13116362, '2', 'panculo', 'eldu', 'vaio', 'cosina', 2011, 1, 'pancheka@gmail.com', 'img/womens-day-2147233_960_720.jpg', 'temp/13116362.png');

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
(2, 50, 1),
(3, 51, 1),
(4, 53, 1),
(5, 72, 0),
(6, 54, 0);

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
-- Estructura de tabla para la tabla `uso_beca`
--

CREATE TABLE `uso_beca` (
  `cod_uso_beca` int(6) NOT NULL,
  `cod_beca` int(6) NOT NULL,
  `uso_beca` tinyint(1) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(35, 50, NULL, NULL, 'alumno', '18354369', '18354369', 'camila@gmail.com'),
(36, 51, NULL, NULL, 'alumno', '11224362', '11224362', 'roblero-pro@hotmail.com'),
(38, NULL, 3, NULL, 'admin_dae', '10720641', '10720641', 'marcela_concha@gmail.com'),
(41, NULL, NULL, 1, 'admin_casino', '18900738', '18900738', 'pantakill_05@gmail.com'),
(43, 52, NULL, NULL, 'alumno', '11258456', '11258456', 'tyko@gmail.com'),
(44, 53, NULL, NULL, 'alumno', '19753654', '19753654', 'rodrigitokun@gmail.com'),
(46, NULL, NULL, 3, 'funcionario', '9456358', '9456358', 'tijavieritaloka@gmail.com'),
(48, 54, NULL, NULL, 'alumno', '23587423', '23587423', 'marialesapato@gmail.com'),
(49, 56, NULL, NULL, 'alumno', '11222333', '11222333', 'rauldurako@gmail.com'),
(56, 62, NULL, NULL, 'alumno', '18761603', 'pedro123', 'pedro@gmail.com'),
(65, NULL, NULL, 7, 'funcionario', '13317428', 'funcionario123', 'myriamlapela@gmail.com'),
(66, NULL, NULL, 8, 'funcionario', '13733822', '13733822', 'sandra@gmail.com'),
(67, 70, NULL, NULL, 'alumno', '16050336', '16050336', 'orielechupadeo@gmail.com'),
(68, NULL, NULL, 9, 'admin_casino', '13116212', '13116212', 'claudita_gb@gmail.com'),
(74, 72, NULL, NULL, 'alumno', '12068163', '12068163', 'olgita@gmail.com'),
(75, NULL, 4, NULL, 'secre', '11040048', 'secre123', 'veronicacomilona@gmail.com'),
(76, NULL, 5, NULL, 'asist_social', '12334074', 'asist', 'albertmaster_sexy@gmail.com'),
(77, 73, NULL, NULL, 'alumno', '13116362', '13116362', 'pancheka@gmail.com');

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
  MODIFY `id_alumno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `beca`
--
ALTER TABLE `beca`
  MODIFY `cod_beca` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT de la tabla `uso_beca`
--
ALTER TABLE `uso_beca`
  MODIFY `cod_uso_beca` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
