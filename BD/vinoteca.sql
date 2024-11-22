-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 22:01:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinoteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cumpleanio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` enum('superadmin','admin','usuario') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre_usuario`, `nombre_completo`, `password`, `rol`) VALUES
(1, 'correo@correo.com', 'daniel', 'Jorge Daniel Cataldo', '$2y$10$e1EVL9b./fKW5iIotv1u2uyoHHfRHI6g7WUBeQIdyaMsxMJHoeQra', 'superadmin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedad`
--

CREATE TABLE `variedad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `variedad`
--

INSERT INTO `variedad` (`id`, `nombre`) VALUES
(1, 'Vinos de Región'),
(2, 'Vinos de Pueblo'),
(3, 'Vinos de Finca'),
(4, 'Ofertas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinos`
--

CREATE TABLE `vinos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cosecha` varchar(50) NOT NULL,
  `caracteristicas` text NOT NULL,
  `alcohol` varchar(50) NOT NULL,
  `acidez_total` varchar(50) NOT NULL,
  `azucar_residual` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `variedad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vinos`
--

INSERT INTO `vinos` (`id`, `titulo`, `marca`, `cosecha`, `caracteristicas`, `alcohol`, `acidez_total`, `azucar_residual`, `imagen`, `precio`, `variedad_id`) VALUES
(1, 'Vinos de Region', 'ZUCCARDI SERIE A MALBEC', 'Manual, en bines de plástico durante la primer y s', 'Vinificación : Las uvas fueron despalilladas y estrujadas. Maceración en frio durante 5-7 días antes\r\n        de la vinificación clásica con levaduras nativas y fermentado a 77° F (25277 CI).\r\n        Posteriormente se macera durante 20 días con remontados y desestabilizados\r\n        periódicos. Parte del vino fue envejecido en barricas de roble francés', '14,2', '2,1', '5,63', 'ZUCC-SERIEA-malbec_1.webp', 2700, 1),
(2, 'Vinos de Region', 'ZUCCARDI SERIE A CABERNET SAUVIGNON 2021', 'Manual durante la primera y segunda semana de abri', 'Vinificación : Las uvas fueron descobajadas y molidas, luego se realizó una maceración\r\n        prefermentativa fría a 7%C durante 5- 7 días, para seguir con una vinificación\r\n        clásica en tinto, y fermentación con levaduras indígenas a 25-27°C.\r\n        Maceración de 20 días sobre los orujos, con remontajes y delestage periódicos.\r\n        Parte del vino fue madurado en barricas de roble francés durante 10 meses. De gran cuerpo, tiene intensos aromas a cassis, grosellas rojas con un toque de\r\n        pimienta verde. En boca muestra una buena integración de los taninos y\r\n        sabores con un final suave y fresco', '14,5', '5,32', '3,65', 'serieA-cs.webp', 2900, 1),
(3, 'Vinos de Region', 'ZUCCARDI SERIE A CHARDONNAY VIOGNIER 2019', 'Cosecha manual durante la última semana de marzo d', 'Vinificación : Selección manual de racimos antes del despalillado y prensado.\r\n        Fermentación con levaduras nativas. Crianza con sus lías durante 6 meses', '13,5', '6,6', '1,58', 'serieA-chard-viognier.webp', 3000, 1),
(4, 'Vinos de Region', 'ZUCCARDI SERIE A SYRAH 2019', 'Manual durante la segunda semana de abril del 2019', 'Vinificación : Las uvas fueron despalilladas y estrujadas. Se sometió a una maceración en frío durante 5-7 dias antes de la vinificación clásica con levaduras nativas.\r\n        Luego se maceraron durante 20 días con remontaje periódico y delestage.\r\n        Parte del vino fue cada en barricas de roble francés', '14,5', '5,3', '5,7', 'serieA-syrah.webp', 2800, 1),
(5, 'Vinos de Región', 'ZUCCARDI SERIE A BONARDA 2017', 'En Santa Rosa, Mendoza cosecha manual durante la s', 'Vinificación : Las uvas fueron descobajadas y molidas, luego se realizó una maceración pre-fermentativa a 5%C durante 4-6 días. Posteriormente, vinificación clásica en tinto con temperaturas de 25° a 27°C. Maceración: de 25 días sobre los orujos, con delestage y pigeage periódicos. Fermentación maloláctica completa. Parte del vino fue criado en roble Francés.', '13', '5,7', '2', 'ZUCC-SERIEA-bonarda.webp', 3100, 1),
(6, 'Vinos de Región', 'ZUCCARDI SERIE A TORRONTÉS 2015', 'En Cafayate, Provincia de Salta. 1800msnm.        ', 'Vinificación : Selección manual de racimos antes del despalillado y prensado.\n        Fermentación entre 15° y 18°C con levaduras seleccionadas. Contacto\n        con finas borras por 6 meses. Color amarillo intenso con destellos plata. Naríz intensa y delicada, \n        llena de frutas blancas y cítricas, cáscara de naranja, y orégano. Bien\n        estructurado, buen graso, con una acidez vibrante. Gran intensidad\n        aromática, con un largo y delicado final.', '14,30', '6,8', '2,1', 'ZUCC-SERIEA-torrontes.webp', 3400, 1),
(7, 'Vinos de Pueblo', 'POLÍGONOS DEL VALLE DE UCO PARAJE ALTAMIRA CABERNE', 'En el Paraje de Altamira, Valle de Uco. Altitud, 1', 'Suelo aluvial bien estratificado, suelo de 10 a 10 sem de profundidad sobre piedras recubiertas de grandes canales,la añada 2019 fue excepcional, donde las condiciones climáticas nos permitió cosechar cada región, variedad y tipo de suelo en el momento que esperaban. La primavera fue generalmente húmeda (no necesariamente lluviosa: pero\r\nhúmedo, con puntos de rocío superiores a la media). ha sido un año de temperaturas frescas durante una semana completa de enero, y luego temperaturas moderadas siempre por debajo de la media. La misma cosa sucedió durante febrero y marzo, sin embargo, este fue un año de alta luminosidad.\",\r\n\"Vinificación : Fermentado y criado en depósitos de hormigón (sin epoxi) con levaduras autóctonas. Maceración de 20 días. Envejecido en hormigón.\",\r\n       ', '14', '5,12', '1,8', 'zuccardi-poligonos-valle-uco-cabernet-franc-PA.webp', 18000, 2),
(8, 'Vinos de Pueblo', 'POLÍGONOS DEL VALLE DE UCO SAN PABLO CABERNET FRAN', 'En San Pablo, Valle de Uco. Altitud: 1400 msnm - 4', 'Es un suelo Aluvial, franco-arenoso, con capas de grava recubiertas de calcio\r\ncarbonato a profundidad variable.\r\nLa añada 2019 fue excepcional, donde las condiciones climáticas nos permitió cosechar cada región, variedad y tipo de suelo en el momento que esperaban. La primavera fue generalmente húmeda (no necesariamente lluviosa pero húmedo, con puntos de rocío superiores a la media). Ha sido un año de temperaturas frescas durante una semana completa de enero, y luego temperaturas moderadas siempre por debajo de la media. Lo mismo sucedió durante febrero y marzo, sin embargo, este fue un año de alta luminosidad.\r\nVinificación : Vinos de montaña Fermentado y criado en depósitos de hormigón (sin epoxi) con levaduras autóctonas. Maceración durante 20 días. Envejecido en hormigón.\r\n       ', '13', '5,33', '1,8', 'zuccardi-poligonos-valle-uco-cabernet-franc-SP.webp', 9400, 2),
(9, 'Vinos de Pueblo', 'POLÍGONOS UCO SAN PABLO MALBEC 2018', 'Fue una añada templada y seca. Estas condiciones g', 'Los vinos muestran gran color y mucha frescura, características de esta temporada, gracias a la cosecha de cada parcela en su momento óptimo. Suelos originados en el abanico aluvial del río Las Tunas, sobre su margen derecha. Normalmente franco arenosos, de profundidad media - entre 80 y 120 cm - por debajo de la cual aparece una capa de grava mediana con cobertura de carbonato de calcio. Vinificación : Fermentación con levaduras nativas, en vasijas de concreto.\r\nCrianza en vasijas de concreto.\r\n        ', '14', '5,92', '1,61', 'zuccardi-poligonos-valle-uco-MALBEC-SP.webp', 7000, 2),
(10, 'Vinos de Pueblo', 'POLÍGONOS Tungato MALBEC 2017', 'La cosecha 2017 a pesar de ser baja en rendimiento', ' Gracias a las condiciones climáticas, más parecidas a un año típico de Mendoza, se lograron vinos con muy buen equilibrio.\r\nVinificación : Fermentado y criado en depósitos de hormigón (sin epoxi) con levaduras autóctonas. Maceración durante 20 días. Envejecido en hormigón\r\n        ', '14', '5,92', '1,61', 'zuccardi-poligonos-gualtallary-MALBEC-1.webp', 10000, 2),
(11, 'Vinos de Pueblo', 'POLÍGONOS DEL VALLE DE UCO TUPUNGATO SAUVIGNON BLANC', 'Cosecha excepcional, fresca y seca', 'Con temperaturas que se ubicaron por debajo de la media y una gran amplitud térmica. Las condiciones climáticas nos dieron muy buena acidez natural, muy buena estructura, excelente fruta y nada de sobre madurez. Vinificación : Maceración de 10 días sobre las pieles.\r\nFermentación y crianza en vasijas de concreto.', '13,3', '4,2', '1,5', 'poligonos-sb.webp', 7300, 2),
(12, 'Vinos de Pueblo', 'POLÍGONOS DEL VALLE DE UCO TUPUNGATO SEMILLON 2019', 'Cosecha excepcional, fresca y seca. Con temperatur', ' Gran amplitud térmica. Las condiciones climáticas nos dieron muy buena acidez natural, excelente fruta y nada de sobre madurez. Vinificación : Prensado directo. Fermentación con levaduras nativas. Tanto la fermentación como la crianza se realizaron en barricas de roble francés: de 510 L., sin tostar.\r\nSin fermentación maloláctica.\r\n        ', '13', '6,70', '1,5', 'poligonos-semillon.webp', 8800, 2),
(13, 'Vinos de Pueblo', 'POLÍGONOS DEL VALLE DE UCO SAN PABLO VERDEJO 2019', 'Cosecha excepcional, fresca y seca.', 'Con temperaturas que se ubicaron por debajo de la media y una gran amplitud térmica. Las condiciones climáticas nos dieron muy buena acidez natural, muy buena estructura, excelente fruta y nada de sobre madurez.\r\nVinificación : Prensado directo. Fermentación con levaduras nativas.\r\nTanto la fermentación como la crianza se realizaron en vasijas de concreto. Sin fermentación maloláctica.\r\n       ', '13', '7,5', '2,5', 'zuccardi-poligonos-valle-uco-verdejo-PS.webp', 7200, 2),
(14, 'Vinos de Pueblo', 'PARAJE ALTAMIRA Malbec 2017', 'Cosecha manual.', 'Paraje Altamira, Valle de Uco, Mendoza 1100 msnm. Suelo aluvial bien estratificado, con profundidad de entre 10 y 80 cm, sobre un conglomerado de gravas calcáreas de gran tamaño.\r\nVinificación : Se realiza una maceración en piletas de hormigón (sin epoxi) con \r\nlevaduras indígenas. Maceración por 20 días. Crianza en hormigón.\r\n        \"variedad\" => \"100% Malbec\",\r\n        \"alcohol\" => \"14,6\" ,\r\n        \"acidez_total\" => \"5,43\" ,\r\n        \"azucar_residual\" => \"2,05\",\r\n        \"imagen\" => \"\",\r\n        \"precio\" => 7.300', '14,6', '5,43', '2,05', 'zuccardi-poligonos-valle-uco-MALBEC-PA.webp', 7300, 2),
(15, 'Vinos de Finca', 'ZUCCARDI FINCA CANAL UCO 2013', 'Suelo aluvial franco arenoso, con una profundidad ', 'Por debajo una capa de piedra erosionada cubierta de carbonatos de calcio en una matriz de arcilla. Vinificación : Uvas seleccionadas manualmente, despalilladas y molidas. Fermentación CanaL Uco en piletas de hormigón troncocónicas, sin epoxi, con levaduras indígenas. Crianza en barricas y en piletas de hormigón.\r\n       ', '14,5', '5,85', '1,80', 'zuccardi-finca-canal-uco.webp', 73000, 3),
(16, 'Vinos de Finca', 'ZUCCARDI FINCA LOS MEMBRILLOS 2013', 'Cosecha excepcional, fresca y seca. Con temperatur', 'PERFIL 1: suelo poco profundo, con gran cantidad de piedra erosionada\r\ncubierta de calcáreo en una matriz arenosa.\r\nPERFIL 2: Suelo con dos estratos, el superior franco arenoso y el inferior,\r\na partir de 40 cm, rico en piedra erosionada en una matriz arcillosa,\r\ncubierta de calcáreo.\r\nPERFIL 3: Suelo profundo franco arenoso con mayor contenido de limos \r\ny arcillas, con una capa de piedra de gran tamaño cubierta de calcáreo a partir de los 80cm.\r\nVinificación : Uvas seleccionadas manualmente, despalilladas y molidas. Fermentación en piletas de hormigón troncocónicas, sin epoxi, con levaduras indígenas. Crianza en barricas y en piletas de hormigón.\r\n        \"variedad\" => \"\",\r\n        \"alcohol\" => \"14,5\" ,\r\n        \"acidez_total\" => \"5,48\" ,\r\n        \"azucar_residual\" => \"2\",\r\n        \"imagen\" => \"zuccardi-finca-los-membrillos.jpg\",\r\n        \"precio\" => 95.000', '14,5', '5,48', '2', 'zuccardi-finca-los-membrillos.webp', 95000, 3),
(17, 'Vinos de Finca', 'ZUCCARDI FINCA PIEDRA INFINITA 2013', 'Cosecha excepcional, fresca y seca', 'Súper calcáreo: Suelo aluvial poco profundo, donde predominan\r\ngrandes piedras erosionadas cubiertas de carbonato de calcio a partir de los 20 cm de profundidad.\r\nVinificación : Uvas seleccionadas manualmente, despalilladas y molidas. Fermentación en piletas de hormigón troncocónicas, sin epoxi, con levaduras indígenas. Crianza en barricas y en piletas de hormigón.\r\n       ', '14', '6', '2,05', 'zuccardi-finca-piedra-infinita-pa.webp', 68000, 3),
(18, 'Vinos de Finca', 'ZUCCARDI FINCA PIEDRA INFINITA GRAVASCAL 2015', 'Cosecha manual.', ' Suelo aluvial con piedras cubiertas con carbonato de calcio a 23cm de profundidad, cosecha manual. Finca Piedra Infinita, Paraje Altamira, Valle de Uco, Mendoza 1100 msnm\",\r\nVinificación : Uvas seleccionadas manualmente, llenado de piletas por gravedad. Fermentación en piletas de hormigón, sin epoxi, con levaduras nativas. Crianza en barricas de 500 lts usadas.\r\n       ', '14', '6,15', '6,12', 'zuccardi-finca-piedra-infinita-gravascal.webp', 120000, 3),
(19, 'Vinos de Finca', 'ZUCCARDI FINCA PIEDRA INFINITA SUPERCAL 2015', 'Finca Piedra Infinita, Paraje Altamira, Valle de U', 'Suelo aluvial supercalcáreo con piedras de gran tamaño cubiertas con carbonato de calcio que se encuentran en la superficie. Cosecha manual.\r\nVinificación : Uvas seleccionadas manualmente, llenado de piletas por gravedad.\r\nFermentación en piletas de hormigón, sin epoxi, con levaduras nativas. Crianza en barricas de 500 lts usadas.\r\n        ', '13,8', '6,67', '1,8', 'zuccardi-finca-piedra-infinita-supercal.webp', 68000, 3),
(20, 'Ofertas', '3 Vinos Zuccardi Q Tempranillo(2020)', 'Cosecha manual.', 'Vinificación : Fermentación selección de la uva, descobajado y molienda suave, fermentación con levaduras seleccionadas con delestage y pigeage periódicos. Prolongada maceración post-fermentativa sobre los orujos. Fermentación maloláctica completa en la barrica. Durante 12 meses en barricas de roble francés y americano. Crianza en botella: Por 12 meses antes de la venta.', '14', '5,7', '1,8', 'oferta1.webp', 14400, 4),
(21, 'Ofertas', '1 Vino Zuccardi 2018 y 2019', 'Cosecha excepcional, fresca y seca, manual', ' Vinificación : Zuccardi Finca Canal de Uco, cosecha 2018: en barricas y en piletas de hormigón.\r\nZuccardi Finca Los Membrillos, cosecha 2018: Fermentación en piletas de hormigón y el 50% del vino tiene crianza en roble francés.\r\nVino Achaval Ferrer Finca Altamira cosecha 2019: crianza en barricas durante 14 meses en barricas de roble francés nuevas .\r\n        ', '14', '5,67 al 6,67', '1,58 al 1,8', 'OFERTA2.webp', 156400, 4),
(22, 'Ofertas', '1 Vino Zuccardi 2018 y 2019', 'Cosecha manual.', 'Vinificación : Zuccardi Finca Canal de Uco, cosecha 2018: crianza en barricas y en piletas de hormigón.\r\nZuccardi Finca Los Membrillos, cosecha 2018: crianza y fermentación en piletas de hormigón y el 50% del vino tiene crianza en roble francés.\r\n        ', '14', '5,67 al 6', '1,58 al 1,8', 'OFERTA3.webp', 113410, 4),
(23, 'Ofertas', '4 Vino Zuccardi Q 2018', 'Cosecha Manual.', 'La vinificación del Vino Zuccardi Q Tempranillo incluye la selección de uvas, fermentación con levaduras seleccionadas y prolongada maceración post-fermentativa. También se lleva a cabo una fermentación maloláctica completa en barrica y se cría en botella por 12 meses. En cuanto al Vino Zuccardi Q Cabernet Sauvignon y Malbec, se crían en barricas y piletas de hormigón.\r\n       ', '14', '5.67 al 6.67', '1,58 al 1,8', 'OFERTA4.webp', 23700, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vinos` (`variedad_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `variedad`
--
ALTER TABLE `variedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `vinos`
--
ALTER TABLE `vinos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vinos`
--
ALTER TABLE `vinos`
  ADD CONSTRAINT `fk_vinos` FOREIGN KEY (`variedad_id`) REFERENCES `variedad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
