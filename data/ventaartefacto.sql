-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2016 at 07:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ventaartefacto`
--

-- --------------------------------------------------------

--
-- Table structure for table `artefactos`
--

CREATE TABLE IF NOT EXISTS `artefactos` (
`id_a` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `tamano` varchar(200) NOT NULL,
  `costo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `comentario` text NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `activoo` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artefactos`
--

INSERT INTO `artefactos` (`id_a`, `modelo`, `tamano`, `costo`, `imagen`, `comentario`, `tipo`, `activoo`) VALUES
(25, 'HP X360', 'Laptop y Tableta Convertible', '1600 Dolares', 'HP X360 LAPTOP-300x300.jpg', 'Computadora de ultima generacion capaz de ejecutar programas mas complejos y pesadas, ademas de ofrecer flexibilidad al usuario al momento de transportar al lugar que desee con mucha comodidad.\r\n', 'laptop', 's'),
(27, 'MONITOR LCD DE 19 PULGADAS  ', 'TamaÃ±o 19 Pulgadas ResoluciÃ³...', '232$', 'DELL_DUAL.jpg', 'Integer scelerisque orci vitae velit eleifend, ac mollis metus facilisis. Nulla mollis risus vel mauris tincidunt viverra ac sit amet felis. Vestibulum magna elit, fringilla ut imperdiet vitae, iaculis vitae augue. Donec ut ultricies erat. Fusce venenatis eros in est vulputate tempus at in nisi. Vestibulum cursus sollicitudin velit et rhoncus. Ut et sapien tincidunt, ornare ex quis, accumsan magna. Aenean quis dolor orci. Fusce bibendum malesuada est quis pulvinar. Vivamus facilisis orci a tempor tincidunt. Vestibulum lacinia aliquet lectus at tempus. Suspendisse tincidunt felis nisi, in maximus nunc bibendum sodales. Integer congue libero in massa egestas lobortis. Phasellus id rhoncus risus. Integer id accumsan mauris, non suscipit tortor. Nullam et nisi at orci aliquam ultrices at et sem.\r\n', 'computadora', 's'),
(28, 'MONITOR LCD DE 17 PULGADAS  ', 'TamaÃ±o 17 Pulgadas ResoluciÃ³...', '343$', 'DELL_GX520-300x300.jpg', 'Integer scelerisque orci vitae velit eleifend, ac mollis metus facilisis. Nulla mollis risus vel mauris tincidunt viverra ac sit amet felis. Vestibulum magna elit, fringilla ut imperdiet vitae, iaculis vitae augue. Donec ut ultricies erat. Fusce venenatis eros in est vulputate tempus at in nisi. Vestibulum cursus sollicitudin velit et rhoncus. Ut et sapien tincidunt, ornare ex quis, accumsan magna. Aenean quis dolor orci. Fusce bibendum malesuada est quis pulvinar. Vivamus facilisis orci a tempor tincidunt. Vestibulum lacinia aliquet lectus at tempus. Suspendisse tincidunt felis nisi, in maximus nunc bibendum sodales. Integer congue libero in massa egestas lobortis. Phasellus id rhoncus risus. Integer id accumsan mauris, non suscipit tortor. Nullam et nisi at orci aliquam ultrices at et sem.\r\n', 'computadora', 's'),
(29, 'MONITOR LCD DE 17 PULGADAS ', 'TamaÃ±o 17 Pulgadas ResoluciÃ³... ', '532$', 'DELL_LCD_17-300x300.jpg', 'Vestibulum dapibus augue quis efficitur elementum. Pellentesque pharetra molestie nibh at placerat. Aenean efficitur urna sed eros consectetur, et iaculis erat laoreet. Pellentesque lacinia magna purus. Ut vestibulum tempor purus et posuere. Donec quis velit imperdiet, porttitor sem nec, lacinia purus. Fusce vitae volutpat nunc. Nunc consequat enim et turpis rhoncus mollis. Vivamus nec suscipit eros. Curabitur et dui ac lacus scelerisque sollicitudin. Vestibulum blandit auctor justo et finibus. Donec bibendum interdum nisi sed mattis. Duis sollicitudin at felis venenatis posuere.\r\n', 'computadora', 's'),
(31, 'GALAXY S6 Edge', 'Procesador Octa Core de 1.5Ghz, Pantalla 5.1"', 'Bs. 3400', 'GALAXY S6 EDGE NUEVO-300x300.jpg', 'Es el smartphone mas novedoso del momento con un diseno elegante y la pantalla edge le sorprendera las caracteristicas de este equipo ya que cuenta con una pantalla Quad HD 1440x2560px, Camara de 16MP, Procesador Octa-Core de 1.5Ghz, Memoria interna de 64GB, RAM de 3GB. Es el smartphone mas codiciado por los clientes.', 'celular', 's'),
(32, 'Samsung Galaxy S4', 'Procesador Quadcore, Pantalla 5"', 'Bs. 2000', 'D.jpg', 'Smartphone de ultima generacion, cuenta con procesador Quadcore de 1.7ghz. Pantalla full HD de % pulgadas, memoria interna de  16GB, memoria RAM de 2GB capaz de navegar en LTE. Es uno de los smartphones mas solicitados por nuestros clientes.', 'celular', 's');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_c` varchar(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_c`, `nombre`, `apellido`, `telefono`, `direccion`) VALUES
('23423432 lp', 'sfsdfdsf', 'sdfsdf', 123213213, 'vxvzxvxcv'),
('3233242 lp', 'fffffffff', 'asdasd', 234234, 'asdasdsd'),
('324234 lp', 'sdfsdfsd', 'dfgdfgdf', 456456, 'SDFSDFSDF'),
('334534 lp', 'sdfsdfsdf', 'sdfsdfsdf', 3423423, 'dsfsdfsdfsdf'),
('34234 lp', 'nnnnnnnn', 'sdfsdfsdf', 34344, 'fsdfsd'),
('3423423 lp', 'BBBBBBBBBB', 'SSSSSSSS', 2343, 'SADASDAS'),
('34324324 bn', 'sefrewfe', 'fsefsef', 2313123, '123123123'),
('345345 bn', 'ewrwerwe', 'werwerwe', 23423, 'werwerwe'),
('7083411 lp', 'Ruben', 'Cucho', 2233342, 'El Alto'),
('72213123 lp', 'dsjfhsdkjfh', 'sdjkfhkjsdhf', 324234, 'kfsdfhsdkj'),
('723423 tj', 'Alex', 'Salgado M', 234234, 'El Alto La paz'),
('7899000 pd', 'ghghjhkj', 'ughughug', 45678900, 'gjhvnmbm,nm,bm,n,mnm');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`ced` int(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` int(10) NOT NULL,
  `usu` varchar(255) NOT NULL,
  `con` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9189325 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ced`, `estado`, `nombre`, `apellido`, `telefono`, `usu`, `con`, `tipo`) VALUES
(6789739, 's', 'carlos', 'achu', 77833970, 'jhon', 'jhon', 'a'),
(7083411, 's', 'Ruben', 'Cucho', 73273821, 'rbn_u4', 'rbn_4u', 'a'),
(9084201, 's', 'zulma francia', 'chura gutierrez', 61140998, 'zulma', 'zulma', 'a'),
(9189324, 's', 'Angel', 'Limachi Yujra', 23456457, 'angelo', 'angelo', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
`id_v` int(10) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `costo` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `id_c` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`id_v`, `modelo`, `costo`, `tipo`, `id_c`) VALUES
(1, '123qqweqw', 'Bs. 3500', 'laptop', '34324324 bn'),
(2, 'HP', 'Bs. 4500', 'laptop', '7083411 lp'),
(3, 'DFGSDFS', 'Bs. 3000', 'celular', '324234 lp'),
(5, 'Samsung S6 Edge', '3200', 'celular', '723423 tj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artefactos`
--
ALTER TABLE `artefactos`
 ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`ced`);

--
-- Indexes for table `venta`
--
ALTER TABLE `venta`
 ADD PRIMARY KEY (`id_v`,`id_c`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artefactos`
--
ALTER TABLE `artefactos`
MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `ced` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9189325;
--
-- AUTO_INCREMENT for table `venta`
--
ALTER TABLE `venta`
MODIFY `id_v` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
