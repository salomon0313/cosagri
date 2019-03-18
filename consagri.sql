-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2019 a las 20:48:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consagri`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_v`
--

CREATE TABLE `gastos_v` (
  `id_gasto_v` int(3) NOT NULL,
  `fecha` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `n_serie` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_m` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Costo` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gastos_v`
--

INSERT INTO `gastos_v` (`id_gasto_v`, `fecha`, `n_serie`, `tipo_m`, `Descripcion`, `Costo`) VALUES
(4, '2019-02-28', '165616xs1', 'Correctivo', 'cambio de bomba', '56'),
(10, '2019-02-01', '165616xs1', 'Preventivo', 'cambio de aceite', '300'),
(11, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `limite_m` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_producto`, `nombre`, `descripcion`, `precio`, `unidad`, `cantidad`, `limite_m`) VALUES
(2, 'azucar', 'azucar', '13.723958', 'bulto', '42', '1'),
(4, 'cafe', 'cafe dolca', '500', 'bultos', '1', '10'),
(6, 'ADP', '', '500', 'LITROS', '0', ''),
(7, 'BORAX', '', '485.71428', 'KG', '14', '50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(4) NOT NULL,
  `id_producto` int(4) NOT NULL,
  `nom_prestado` varchar(44) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_compra` int(10) NOT NULL,
  `id_proveedor` int(3) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `vale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(44) COLLATE utf8_unicode_ci NOT NULL,
  `importe` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `abono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_compra`, `id_proveedor`, `fecha`, `vale`, `descripcion`, `precio`, `cantidad`, `unidad`, `importe`, `abono`, `total`, `estado`) VALUES
(6, 1, '2019-03-02', '65', 'jjjjjjj', '100', '5', 'pz', '500', '500', '0', ''),
(7, 5, '2019-03-06', '968', 'abono', '100', '10', 'bulto', '1000', '500', '500', ''),
(11, 5, '2019-03-07', '8962', 'Abono Complex', '500', '5', 'bulto', '2500', '0', '2500', ''),
(17, 5, '2019-03-09', '575', '66', '500', '2', 'pz', '1000', '1000', '1000', ''),
(18, 5, '2019-03-12', '888', '888', '88', '88', '88', '7744', '88', '7656', ''),
(19, 5, '2019-03-12', '888', '888', '88', '88', '88', '7744', '88', '7656', ''),
(20, 5, '2019-03-12', '3', '3', '3', '3', '3', '9', '3', '6', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_e`
--

CREATE TABLE `productos_e` (
  `id_compra_e` int(10) NOT NULL,
  `id_proveedor` int(3) NOT NULL,
  `fecha` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `vale` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `unidad` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `importe_d` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `abono_d` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tc` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `total_mx` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_e`
--

INSERT INTO `productos_e` (`id_compra_e`, `id_proveedor`, `fecha`, `vale`, `descripcion`, `precio`, `cantidad`, `unidad`, `importe_d`, `abono_d`, `tc`, `total_mx`) VALUES
(3, 1, '2019-03-06', '56', 'jbhgdg', '10', '10', 'pz', '100', '100', '20', '0'),
(4, 1, '2019-03-06', '0313', 'malla sombr', '50', '20', 'rollo', '1000', '200', '20', '16000'),
(5, 1, '2019-03-12', '65', '76', '8', '8', '5', '64', '8', '8', '448');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(3) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_proveedor` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `n_tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `tipo_proveedor`, `direccion`, `n_tel`, `email`) VALUES
(1, 'klusters', 'Extrangero', 'EUA', '2831216994', 'jose_salomn03@hotmail.com'),
(5, 'Agrodemenegui', 'Nacional', 'CD. isla', '2831216994', 'demenegui_hotmail');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `a_materno` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `a_paterno` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `numero_t` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `privilegio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `a_materno`, `a_paterno`, `numero_t`, `pass`, `privilegio`) VALUES
('admin', 'Jose Hipolito', 'Martinez', 'Salomon', '2831216994', '123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `n_serie` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_veiculo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_a` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kilometraje` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`n_serie`, `tipo_veiculo`, `fecha_a`, `marca`, `modelo`, `descripcion`, `kilometraje`) VALUES
('165616xs1', 'Camioneta', '2019-02-28', 'sdfg', 'yui', 'hjk', '7324');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos_v`
--
ALTER TABLE `gastos_v`
  ADD PRIMARY KEY (`id_gasto_v`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `productos_e`
--
ALTER TABLE `productos_e`
  ADD PRIMARY KEY (`id_compra_e`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`n_serie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos_v`
--
ALTER TABLE `gastos_v`
  MODIFY `id_gasto_v` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_producto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `id_prestamo` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_compra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `productos_e`
--
ALTER TABLE `productos_e`
  MODIFY `id_compra_e` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
