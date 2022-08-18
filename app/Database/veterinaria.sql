-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2022 a las 06:49:06
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig_usuario_rol`
--

CREATE TABLE `asig_usuario_rol` (
  `id_asig` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asig_usuario_rol`
--

INSERT INTO `asig_usuario_rol` (`id_asig`, `usuario`, `rol`) VALUES
(1, 1, 1),
(2, 2, 1),
(11, 11, 2),
(15, 15, 3),
(16, 16, 4),
(17, 17, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `telefono` decimal(8,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(2, 'Ambrose Darwen', 'Jobye Surgey', '71 Prairie Rose Street', '60017847'),
(3, 'Frank Herrema', 'Akim Korneev', '504 Hoard Street', '31382808'),
(4, 'Chris Cobley', 'Kattie Antonoyev', '177 Lillian Point', '23041713'),
(8, 'Giacobo Gullivan', 'Elbertine Sturdy', '82931 Oak Plaza', '45280314'),
(9, 'Sherry Burchnall', 'Rollin Alphonso', '5483 Green Lane', '44796437'),
(10, 'Kim Elwelly', 'Gerome Pennoni', '67929 Talisman Avenue', '87345612'),
(11, 'Lissy Milk', 'Peralta Morales', 'Lincon Center', '78651234'),
(12, 'Dara Gane', 'Demetri Henningham', '37266 Everett Alley', '63646854'),
(13, 'Enrichetta Boston', 'Trace Tofpik', '14 Prairieview Way', '12899218'),
(14, 'Marcelia Pinard', 'Nelle Tawton', '919 Sachs Alley', '89050543'),
(15, 'Arturo Headings', 'Berta Maginn', '3128 Village Drive', '67848370'),
(16, 'Tiphany Govern', 'Mylo Pegrum', '94 Lawn Point', '32611903'),
(17, 'Nathalie Midghall', 'Gearard Mabey', '0 Montana Way', '58361145'),
(18, 'Mikael Linnell', 'Ulrika Fretter', '23299 Westend Trail', '68089267'),
(19, 'Linzy Gossage', 'Melania MacGeffen', '751 Miller Lane', '95923438'),
(20, 'Wren Jacmar', 'Leontine Howis', '57088 Green Park', '92712115'),
(21, 'Kyle Yeowell', 'Ariela Petrollo', '960 Talisman Street', '23220780'),
(22, 'Berget Farquar', 'Olivier Darey', '68718 Helena Alley', '43995182'),
(23, 'Jo-ann Dunbobin', 'Kaia Meachan', '0 Clyde Gallagher Street', '73337010'),
(24, 'Layne Aspin', 'Richard Emanuel', '9 Westerfield Terrace', '57715610'),
(25, 'Carroll Cristoforo', 'Bernie Russo', '5754 Schlimgen Park', '80494517'),
(26, 'Sean Mitchinson', 'Pamela Longley', '87242 Shelley Trail', '13837907'),
(27, 'Dixie Heckle', 'Ranice de Quesne', '17912 Thierer Circle', '99640732'),
(28, 'Lesya Gatman', 'Othella Richardin', '7 Mesta Plaza', '28671507'),
(29, 'Lissy Sullly', 'Grazia Theobold', '1397 Parkside Center', '54366291'),
(30, 'Concordia Duckering', 'Othello Marvin', '938 Superior Drive', '77580159'),
(31, 'Tudor Seamon', 'Cayla Shinton', '230 Monica Terrace', '33263479'),
(32, 'Lyda Tyzack', 'John Liversage', '5 Hazelcrest Way', '99999999'),
(33, 'Siusan Brandin', 'Danyelle Ferenczy', '200 Washington Terrace', '67898964'),
(34, 'Natalee Shilito', 'Reade Allmark', '6 Oneill Avenue', '41332001'),
(35, 'Geoffry McCallister', 'Cassandry Hunnaball', '16 Glendale Pass', '50710774'),
(36, 'Zeb Kohn', 'Helsa MacAscaidh', '72613 Vera Circle', '75276822'),
(37, 'Daren Spurret', 'Berk Cicco', '7665 Ryan Pass', '55329709'),
(38, 'Dorella Dorcey', 'Brita Daville', '465 Scott Parkway', '89185009'),
(39, 'Nadiya Copson', 'Terry Litster', '846 Sutteridge Crossing', '78921320'),
(40, 'Kordula Krauss', 'Johannah Kemery', '5644 Declaration Parkway', '90234700'),
(41, 'Etan Bloggett', 'Arni Yve', '38975 Farwell Avenue', '31264666'),
(42, 'Dotti Hartland', 'Pammy Londer', '32266 Dawn Drive', '18369321'),
(43, 'Merrill Lankham', 'Julian Koppeck', '60 Redwing Place', '13440734'),
(44, 'Colan Boggs', 'Aliza Tomovic', '793 Elka Plaza', '63755322'),
(45, 'Emery Tabard', 'Alvira McCall', '219 Browning Junction', '58611041'),
(46, 'Vinni Antonignetti', 'Drucy Calderon', '835 Rowland Plaza', '56842073'),
(47, 'Winslow Camm', 'Dacy Blasio', '491 Cody Plaza', '80754242'),
(48, 'Nadiya Colgan', 'Philipa Crawcour', '17 Tony Road', '92014196'),
(49, 'Shelley Grammer', 'Leonerd Vasilov', '692 Manufacturers Trail', '13118124'),
(50, 'Joann Haugen', 'Agnes Rowatt', '398 Ilene Trail', '18850856'),
(51, 'Valerye Lowfill', 'Sidonnie Alten', '9479 Hovde Alley', '99999999'),
(52, 'Dewain Kennham', 'Bevvy Blazevic', '4320 Red Cloud Pass', '58660329'),
(53, 'Gregory Bessent', 'Marcos Pfeuffer', '306 Lunder Terrace', '86891022'),
(54, 'Adelle GiacobbiniJacob', 'Bobby Giacopello', '5 Delladonna Alley', '78040954'),
(55, 'Tarah Houson', 'Amalea Rutherforth', '5425 Tony Crossing', '56987768'),
(56, 'Jillane Torald', 'Joni Bettenson', '49 Straubel Park', '30464967'),
(57, 'Garrik Wyson', 'Laraine Chown', '0508 Melrose Pass', '42549432'),
(58, 'Elladine Kesten', 'Hort Lavigne', '095 Sherman Parkway', '90071520'),
(59, 'Mar Harcase', 'Tod Titchener', '9 Almo Terrace', '28848121'),
(60, 'Dorine Dean', 'Annelise Littlechild', '4046 Melby Hill', '53052829'),
(61, 'Christian MacNaughton', 'Chastity Cloute', '06 Sage Center', '67686137'),
(62, 'Gilbert Cull', 'Roseann Huckett', '34819 Independence Lane', '60022818'),
(63, 'Mahala Lille', 'Gunar Ainge', '72 Bunting Lane', '10746071'),
(64, 'Kimmi Tranfield', 'Hyacinthie Littlewood', '41 Florence Alley', '23421884'),
(65, 'Johann Korfmann', 'Dory Scougal', '29269 Troy Court', '48120387'),
(66, 'Julita Callan', 'Nelle Kestell', '72002 Armistice Hill', '76463401'),
(67, 'Barb Krugmann', 'Ardella Kleewein', '5900 Shasta Junction', '82417471'),
(68, 'Flory Toman', 'Spencer Tarren', '9942 Hoffman Alley', '50492855'),
(69, 'Bert Gyrgorwicx', 'Byram Penrith', '51 Bobwhite Court', '16166489'),
(70, 'Lucio Megany', 'Melinda Yewdell', '677 Kedzie Drive', '15913894'),
(71, 'Krista Oleksinski', 'Carina Riply', '36727 Sommers Plaza', '14373428'),
(72, 'Peyter Mingaye', 'Arline Slemmonds', '8748 Lindbergh Street', '53619616'),
(73, 'Hedwiga Schowenburg', 'Lorilyn Lowden', '57 Wayridge Park', '58134267'),
(74, 'Atlanta Marke', 'Anastassia Itzkin', '21 Helena Junction', '36966609'),
(75, 'Julian Dannatt', 'Linzy Buss', '8286 Cardinal Center', '98626950'),
(76, 'Carlos Darios', 'Galvez Sepulveda', 'Ciudad', '0'),
(81, 'Danely Belen', 'Noriega Chajon', 'Valle de las flores', '0'),
(82, 'Manuel Alejandro', 'Rodas Mayoral', 'Ciudad', '78652312'),
(85, 'Pruebas', 'test', 'Ciudad', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellido`, `direccion`) VALUES
(1, 'Daniel Enrique', 'Noriega Chajon', 'Valle de las Flores'),
(2, 'Melany Andrea', 'Salazar Cruz', 'Villas de Palin'),
(3, 'Invitado Example', 'Not surnames', 'Ciudad'),
(6, 'Your name', 'Your surname', 'City');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(11) NOT NULL,
  `nombre_mascota` varchar(80) NOT NULL,
  `cliente` int(11) DEFAULT NULL,
  `raza` int(11) DEFAULT NULL,
  `sexo` int(11) DEFAULT NULL,
  `f_nacimiento` date DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre_mascota`, `cliente`, `raza`, `sexo`, `f_nacimiento`, `peso`, `color`) VALUES
(1, 'Kitty', 81, 2, 1, '2014-11-04', '12.00', 'Cafe con negro'),
(2, 'Chato', 56, 2, 2, '2016-05-18', '16.00', 'Cervato'),
(3, 'Max', 44, 19, 2, '2020-07-08', '12.00', 'Blanco con negro'),
(4, 'Gonzo', 46, 30, 2, '2021-01-07', '2.00', 'Amarrillo con blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `id_raza` int(11) NOT NULL,
  `nombre_raza` varchar(60) NOT NULL,
  `tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id_raza`, `nombre_raza`, `tipo`) VALUES
(1, 'Bulldog', 1),
(2, 'Pug', 1),
(3, 'Chow Chow', 1),
(4, 'Pastor Aleman', 1),
(5, 'Pomerania', 1),
(6, 'Golden Retriever', 1),
(7, 'Labrador Retriever', 1),
(8, 'Bull Terrier', 1),
(9, 'Dalmata', 1),
(10, 'Pekines', 1),
(11, 'Cocker', 1),
(12, 'Galgo ingles', 1),
(13, 'Bulldog frances', 1),
(14, 'Mini toy', 1),
(15, 'Shiba Inu', 1),
(16, 'Basset hound', 1),
(17, 'Persa', 2),
(18, 'Bengala', 2),
(19, 'Esfinge', 2),
(20, 'Maine Coon', 2),
(21, 'Americano', 2),
(22, 'Siberiano', 2),
(23, 'Himalayo', 2),
(24, 'Fold escoces', 2),
(25, 'Ruso', 2),
(26, 'Roborowski', 3),
(27, 'Chino', 3),
(28, 'Dorado', 3),
(29, 'Enano de campbell', 3),
(30, 'Periquito malva', 13),
(31, 'Periquito violeta', 13),
(32, 'Periquito violeta', 13),
(33, 'Periquito azul oscuro', 13),
(34, 'Tortuga mediterranea', 4),
(35, 'Tortuga de orejas rojas', 4),
(36, 'Tortuga Laud', 4),
(37, 'Tortuga Rusa', 4),
(38, 'Tortuga de orejas amarillas', 4),
(39, 'Tortuga mapa del norte', 4),
(40, 'Cerdo comun', 8),
(41, 'Caballo comun', 6),
(42, 'Serpiente cascabel', 12),
(43, 'Serpiente Amarilla', 12),
(44, 'Serpiente Real', 12),
(45, 'Otras serpientes', 12),
(46, 'Aguila', 13),
(47, 'Halcon', 13),
(48, 'Pichon de alas rojas', 13),
(49, 'Paloma', 13),
(50, 'Erizo comun', 14),
(51, 'Gallina blanca', 15),
(52, 'Conejo comun', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'Admin'),
(2, 'Veterinario'),
(3, 'Secretario'),
(4, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `nombre_sexo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nombre_sexo`) VALUES
(1, 'Hembra'),
(2, 'Macho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_animal`
--

CREATE TABLE `tipo_animal` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_animal`
--

INSERT INTO `tipo_animal` (`id_tipo`, `tipo`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'Hamster'),
(4, 'Tortuga'),
(5, 'Conejo'),
(6, 'Caballo'),
(7, 'Cabra'),
(8, 'Cerdo'),
(9, 'Oveja'),
(10, 'Vaca'),
(11, 'Raton'),
(12, 'Serpiente'),
(13, 'Ave'),
(14, 'Erizos'),
(15, 'Gallina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `empleado` int(11) DEFAULT NULL,
  `nick` varchar(80) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `empleado`, `nick`, `password`) VALUES
(1, 1, 'Daniel08', '$2y$10$KLZoChk1t61XkhA0ifdEU.ZDZEXwzowFtJB1o1BZx6QwNEpk96jTu'),
(2, 2, 'Melany123', '$2y$10$7Eda7ctHRQbr8gxCHaKfdeRE5VuFoERoNh6MuEGH9Di63Lpeuyd9q'),
(11, 1, 'Mr Daniel 2', '$2y$10$YF95o5C2zBoPQgHv.qF4C.jsfjUCSPgPuLLdjAEPOjmOTpmRm1Ueu'),
(15, NULL, 'test 1', '$2y$10$pr/OZGaDfGDR6tbe76sH6ePF0kejYDzjLBnZi5j/7C/69nIFNJVVa'),
(16, 1, 'test', '$2y$10$nj0FB5fmpRHDkLjERm/UOOnJhdHNKscHX3U386YIMDP1mdco44Iym'),
(17, 6, 'Admin', '$2y$10$yH1l3.SYvb9eD6QkL3jYYOi9skOP2pNH/EgHn17NKrfJsk25MLqoG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asig_usuario_rol`
--
ALTER TABLE `asig_usuario_rol`
  ADD PRIMARY KEY (`id_asig`),
  ADD KEY `fk_asignacion_rol` (`rol`),
  ADD KEY `fk_asignacion_usuario` (`usuario`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `fk_mascota_sexo` (`sexo`),
  ADD KEY `fk_mascota_cliente` (`cliente`),
  ADD KEY `fk_mascota_raza` (`raza`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id_raza`),
  ADD KEY `fk_tipo` (`tipo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tipo_animal`
--
ALTER TABLE `tipo_animal`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nick` (`nick`),
  ADD KEY `fk_usuario_empleado` (`empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asig_usuario_rol`
--
ALTER TABLE `asig_usuario_rol`
  MODIFY `id_asig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id_raza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_animal`
--
ALTER TABLE `tipo_animal`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asig_usuario_rol`
--
ALTER TABLE `asig_usuario_rol`
  ADD CONSTRAINT `fk_asignacion_rol` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_asignacion_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `fk_mascota_cliente` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mascota_raza` FOREIGN KEY (`raza`) REFERENCES `raza` (`id_raza`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_mascota_sexo` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`id_sexo`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `raza`
--
ALTER TABLE `raza`
  ADD CONSTRAINT `fk_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_animal` (`id_tipo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_empleado` FOREIGN KEY (`empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
