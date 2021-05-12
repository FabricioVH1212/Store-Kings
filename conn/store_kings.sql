-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2021 a las 04:06:25
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store kings`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_detalle`
--

CREATE TABLE `tienda_detalle` (
  `IDE_FACTURA` varchar(50) NOT NULL COMMENT 'Código de la factura',
  `DSC_CODIGO` varchar(100) NOT NULL COMMENT 'Código del producto',
  `NUM_CANTIDAD` int(100) NOT NULL COMMENT 'Cantidad del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_detalle`
--

INSERT INTO `tienda_detalle` (`IDE_FACTURA`, `DSC_CODIGO`, `NUM_CANTIDAD`) VALUES
('SK-pg4k8', 'ZADODISN', 1),
('SK-cj67v', 'SUETBEWNW', 1),
('SK-cj67v', 'ADISD3A', 1),
('SK-qwean', 'ADISD3A', 3),
('SK-qwean', 'ZADODISN', 5),
('SK-hx2y4', 'ADISD3A', 3),
('SK-hx2y4', 'ZADODISN', 5),
('SK-umhk0', 'ADISD3A', 2),
('SK-umhk0', 'SUETBEWNW', 3),
('SK-umhk0', 'ZADODISN', 1),
('SK-pcjl2', 'ZADODISN', 1),
('SK-pcjl2', 'ADISD3A', 1),
('SK-082zp', 'JOGERR422', 1),
('SK-uat4y', 'JOGERR422', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_estado`
--

CREATE TABLE `tienda_estado` (
  `IDE_ESTADO` int(2) NOT NULL COMMENT 'Identificador de los estado',
  `DSC_ESTADO` varchar(50) NOT NULL COMMENT 'Descripción del estado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_estado`
--

INSERT INTO `tienda_estado` (`IDE_ESTADO`, `DSC_ESTADO`) VALUES
(0, 'Inactivo'),
(1, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_factura`
--

CREATE TABLE `tienda_factura` (
  `IDE_FACTURA` varchar(50) NOT NULL,
  `NUM_IDENTIFICACION` int(15) NOT NULL,
  `FEC_FACTURACION` timestamp NOT NULL DEFAULT current_timestamp(),
  `DSC_DIRECCION` varchar(100) NOT NULL,
  `DSC_ARCHIVO` varchar(50) NOT NULL,
  `IDE_ESTADO` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_factura`
--

INSERT INTO `tienda_factura` (`IDE_FACTURA`, `NUM_IDENTIFICACION`, `FEC_FACTURACION`, `DSC_DIRECCION`, `DSC_ARCHIVO`, `IDE_ESTADO`) VALUES
('SK-082zp', 60365006, '0000-00-00 00:00:00', 'Heredia', 'comprobantes/60365006_CV_Fabricio.pdf', 1),
('SK-cj67v', 63261312, '0000-00-00 00:00:00', 'El Molino, Cartago', 'comprobantes/63261312_Desarrollo web II.pdf', 1),
('SK-hx2y4', 63261312, '0000-00-00 00:00:00', 'Ingrese su dirección', 'comprobantes/63261312_Trabajo práctico _2.docx', 1),
('SK-pcjl2', 60365006, '2021-05-04 04:32:00', 'Ingrese su dirección', 'comprobantes/60365006_1.5', 1),
('SK-pg4k8', 63261312, '0000-00-00 00:00:00', 'El Molino, Cartago', 'comprobantes/63261312_Exam 1 A2 - Fabricio Vindas ', 1),
('SK-qwean', 63261312, '2021-03-06 06:08:55', 'Limón, Costa Rica', 'comprobantes/63261312_Desarrollo web II.pdf', 1),
('SK-uat4y', 60365006, '0000-00-00 00:00:00', 'Barva, Heredia', 'comprobantes/60365006_Semana 1 - Introducción.pdf', 1),
('SK-umhk0', 63261312, '2021-03-07 03:05:24', 'Ipis, Costa Rica', 'comprobantes/63261312_Programa Inteligencia Artifi', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_perfil`
--

CREATE TABLE `tienda_perfil` (
  `IDE_PERFIL` int(2) NOT NULL,
  `DSC_PERFIL` varchar(150) NOT NULL,
  `IDE_ESTADO` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_perfil`
--

INSERT INTO `tienda_perfil` (`IDE_PERFIL`, `DSC_PERFIL`, `IDE_ESTADO`) VALUES
(1, 'Administrador', 1),
(2, 'Cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_productos`
--

CREATE TABLE `tienda_productos` (
  `DSC_CODIGO` varchar(100) NOT NULL COMMENT 'Código del producto',
  `DSC_NOMBRE` varchar(50) NOT NULL COMMENT 'Nombre del producto',
  `NUM_PRECIO` decimal(65,2) NOT NULL COMMENT 'Precio del producto',
  `DSC_DESCRIPCION` varchar(300) NOT NULL COMMENT 'Descripción del producto',
  `DSC_IMAGEN` varchar(50) NOT NULL COMMENT 'Imagen del producto',
  `IDE_TIPO_PRODUCTO` int(2) NOT NULL COMMENT 'Identificador del producto',
  `IDE_ESTADO` int(2) NOT NULL COMMENT 'Estado del producto, 1 activo 0 inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_productos`
--

INSERT INTO `tienda_productos` (`DSC_CODIGO`, `DSC_NOMBRE`, `NUM_PRECIO`, `DSC_DESCRIPCION`, `DSC_IMAGEN`, `IDE_TIPO_PRODUCTO`, `IDE_ESTADO`) VALUES
('ADISD3A', 'Camisa adidas negra', '20000.00', 'Talla: M,S,L', 'catalogo_imagenes/Adidas.jpg', 1, 1),
('JOGERR422', 'Jogger mieo', '22000.00', 'Jogger de todas las tallas', 'catalogo_imagenes/jogger.jpg', 2, 1),
('SUETBEWNW', 'Sueta negra vans', '25000.00', 'Sueter pichuda', 'catalogo_imagenes/vans.jpg', 4, 1),
('ZADODISN', 'Tenis nike', '24000.00', 'Todas las tallas', 'catalogo_imagenes/nike.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_tipo_producto`
--

CREATE TABLE `tienda_tipo_producto` (
  `IDE_PRODUCTO` int(2) NOT NULL COMMENT 'Identificador del producto',
  `DSC_PRODUCTO` varchar(15) NOT NULL COMMENT 'Descripción de la provincia',
  `IDE_ESTADO` int(2) NOT NULL COMMENT 'Estado del producto, 1 activo 0 inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_tipo_producto`
--

INSERT INTO `tienda_tipo_producto` (`IDE_PRODUCTO`, `DSC_PRODUCTO`, `IDE_ESTADO`) VALUES
(1, 'Camisa', 1),
(2, 'Pantalón', 1),
(3, 'Calzado', 1),
(4, 'Otros', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_usuario`
--

CREATE TABLE `tienda_usuario` (
  `NUM_IDENTIFICACION` int(15) NOT NULL DEFAULT 0 COMMENT 'Número de cédula del usuario',
  `DSC_NOMBRE` varchar(50) NOT NULL COMMENT 'Nombre del usuario',
  `DSC_APELLIDOS` varchar(50) NOT NULL COMMENT 'Apellidos del usuario',
  `DSC_CORREO` varchar(50) NOT NULL COMMENT 'Correo electrónico del usuario',
  `DSC_PASSWORD` varchar(500) NOT NULL COMMENT 'Contraseña de ingreso',
  `DSC_CODIGO` int(10) NOT NULL COMMENT 'Código postal del usuario',
  `NUM_TELEFONO` int(15) NOT NULL COMMENT 'Número celular del usuario',
  `IDE_PERFIL` int(2) NOT NULL,
  `IDE_ESTADO` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda_usuario`
--

INSERT INTO `tienda_usuario` (`NUM_IDENTIFICACION`, `DSC_NOMBRE`, `DSC_APELLIDOS`, `DSC_CORREO`, `DSC_PASSWORD`, `DSC_CODIGO`, `NUM_TELEFONO`, `IDE_PERFIL`, `IDE_ESTADO`) VALUES
(60365006, 'Ronald', 'De Leon', 'ronald123@hotmail.com', 'bfBvMhdKbxojw', 40201, 60365006, 2, 1),
(63261312, 'Mario', 'Vindas Hernandez', 'mariovindas150@hotmail.com', '52Wz0O.sHIKXg', 30302, 63261312, 2, 1),
(117500270, 'Rodney', 'Araya Herrera ', 'rh_araya@hotmail.com', '98qDMcM4fq5q.', 10805, 85326146, 1, 1),
(702710518, 'Ronald', 'De León Marín', 'rddm27@icloud.com', '98qDMcM4fq5q.', 40104, 60365006, 1, 1),
(702850381, 'Fabricio', 'Vindas Hernandez', 'fabriciomario01@gmail.com', '29NaAuR1zeqdY', 30102, 63261312, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tienda_detalle`
--
ALTER TABLE `tienda_detalle`
  ADD KEY `tienda_detalle_FK_1` (`IDE_FACTURA`),
  ADD KEY `tienda_detalle_FK_2` (`DSC_CODIGO`);

--
-- Indices de la tabla `tienda_estado`
--
ALTER TABLE `tienda_estado`
  ADD PRIMARY KEY (`IDE_ESTADO`);

--
-- Indices de la tabla `tienda_factura`
--
ALTER TABLE `tienda_factura`
  ADD PRIMARY KEY (`IDE_FACTURA`),
  ADD KEY `tienda_factura_FK_1` (`IDE_ESTADO`),
  ADD KEY `tienda_factura_FK_2` (`NUM_IDENTIFICACION`);

--
-- Indices de la tabla `tienda_perfil`
--
ALTER TABLE `tienda_perfil`
  ADD PRIMARY KEY (`IDE_PERFIL`),
  ADD KEY `tienda_perfil_FK_1` (`IDE_ESTADO`);

--
-- Indices de la tabla `tienda_productos`
--
ALTER TABLE `tienda_productos`
  ADD PRIMARY KEY (`DSC_CODIGO`),
  ADD KEY `tienda_productos_FK_1` (`IDE_TIPO_PRODUCTO`),
  ADD KEY `tienda_productos_FK_2` (`IDE_ESTADO`);

--
-- Indices de la tabla `tienda_tipo_producto`
--
ALTER TABLE `tienda_tipo_producto`
  ADD PRIMARY KEY (`IDE_PRODUCTO`),
  ADD KEY `tienda_tipo_producto_FK_1` (`IDE_ESTADO`);

--
-- Indices de la tabla `tienda_usuario`
--
ALTER TABLE `tienda_usuario`
  ADD PRIMARY KEY (`NUM_IDENTIFICACION`),
  ADD KEY `tienda_usuario_FK_1` (`IDE_PERFIL`),
  ADD KEY `tienda_usuario_FK_2` (`IDE_ESTADO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tienda_detalle`
--
ALTER TABLE `tienda_detalle`
  ADD CONSTRAINT `tienda_detalle_FK_1` FOREIGN KEY (`IDE_FACTURA`) REFERENCES `tienda_factura` (`IDE_FACTURA`),
  ADD CONSTRAINT `tienda_detalle_FK_2` FOREIGN KEY (`DSC_CODIGO`) REFERENCES `tienda_productos` (`DSC_CODIGO`);

--
-- Filtros para la tabla `tienda_factura`
--
ALTER TABLE `tienda_factura`
  ADD CONSTRAINT `tienda_factura_FK_1` FOREIGN KEY (`IDE_ESTADO`) REFERENCES `tienda_estado` (`IDE_ESTADO`),
  ADD CONSTRAINT `tienda_factura_FK_2` FOREIGN KEY (`NUM_IDENTIFICACION`) REFERENCES `tienda_usuario` (`NUM_IDENTIFICACION`);

--
-- Filtros para la tabla `tienda_perfil`
--
ALTER TABLE `tienda_perfil`
  ADD CONSTRAINT `tienda_perfil_FK_1` FOREIGN KEY (`IDE_ESTADO`) REFERENCES `tienda_estado` (`IDE_ESTADO`);

--
-- Filtros para la tabla `tienda_productos`
--
ALTER TABLE `tienda_productos`
  ADD CONSTRAINT `tienda_productos_FK_1` FOREIGN KEY (`IDE_TIPO_PRODUCTO`) REFERENCES `tienda_tipo_producto` (`IDE_PRODUCTO`),
  ADD CONSTRAINT `tienda_productos_FK_2` FOREIGN KEY (`IDE_ESTADO`) REFERENCES `tienda_estado` (`IDE_ESTADO`);

--
-- Filtros para la tabla `tienda_tipo_producto`
--
ALTER TABLE `tienda_tipo_producto`
  ADD CONSTRAINT `tienda_tipo_producto_FK_1` FOREIGN KEY (`IDE_ESTADO`) REFERENCES `tienda_estado` (`IDE_ESTADO`);

--
-- Filtros para la tabla `tienda_usuario`
--
ALTER TABLE `tienda_usuario`
  ADD CONSTRAINT `tienda_usuario_FK_1` FOREIGN KEY (`IDE_PERFIL`) REFERENCES `tienda_perfil` (`IDE_PERFIL`),
  ADD CONSTRAINT `tienda_usuario_FK_2` FOREIGN KEY (`IDE_ESTADO`) REFERENCES `tienda_estado` (`IDE_ESTADO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
