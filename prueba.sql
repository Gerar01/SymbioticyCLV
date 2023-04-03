-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para prueba
CREATE DATABASE IF NOT EXISTS `prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `prueba`;

-- Volcando estructura para tabla prueba.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellidos` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comentario` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.blog: ~0 rows (aproximadamente)

-- Volcando estructura para tabla prueba.catalogo_ofertas
CREATE TABLE IF NOT EXISTS `catalogo_ofertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(150) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `costo` varchar(50) DEFAULT NULL,
  `vigencia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.catalogo_ofertas: ~6 rows (aproximadamente)
INSERT INTO `catalogo_ofertas` (`id`, `ruta`, `titulo`, `descripcion`, `costo`, `vigencia`) VALUES
	(1, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\ofertas\\chiflon.jpg', 'Chiflon', 'Aprovecha nuestras ofertas ', '2 personas  x $800', '21 de marzo del 2023'),
	(2, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\ofertas\\lagoscolon.jpg', 'Lagos Colon', 'No puedes perder de nuestras grandes promociones ', '3 personas x $1200', '19 de marzo del 2023'),
	(3, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\ofertas\\lagosdemontebello.jpg', 'Lagos de Montebello', 'Hacemos de lo imposible, algo simple ', '2 personas x $1000', '16 de marzo del 2023'),
	(4, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\ofertas\\palenque.jpg', 'Palenque', 'Tu mejor aventura comienza aquí', '3 personas x $2400', '22 de marzo del 2023'),
	(5, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\ofertas\\yaxchilan.jpg', 'Yaxchilan', 'Somos un lugar turístico soñado para que lo vivas y recuerdes', '4 personas x $2600', '15 de marzo del 2023'),
	(6, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\ofertas\\uninajab.jpg', 'Uninajab', 'Tu visita será de nuestro agrado y tu disfrute será auténtico', '5 personas x $3000', '24 de marzo del 2023');

-- Volcando estructura para tabla prueba.datos
CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Empresa` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Descripcion_Emp` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Ruta` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Rol` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18446744073709551615 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.datos: ~3 rows (aproximadamente)
INSERT INTO `datos` (`id`, `Empresa`, `Descripcion_Emp`, `Ruta`, `Rol`) VALUES
	(1, 'Symbiotic Revolution S.A de C.V', 'Symbiotic una empresa lider en tecnologia, marketing digital, en donde te ofrecemos diferentes servicios, como lo son diseños de logos, fotografia, diseño web, etc.', 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\sym.png', 'Diseño y Publicidad'),
	(2, 'Corre La Voz Travel', 'Sitio web de viajes y atracciones locales', 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\CLVT2.png', 'Agencia de Viajes Ecoturisticos'),
	(3, 'Hostal Casa Del Sol', 'Hostal Casa Del Sol un sitio muy comodo si buscas hospedarte cerca de la ciudad de comitan', 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\logo_hostal2.png', 'Hospedaje');

-- Volcando estructura para tabla prueba.imagen_index
CREATE TABLE IF NOT EXISTS `imagen_index` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `ruta` char(250) DEFAULT NULL,
  `Sub_imagen` varchar(100) DEFAULT NULL,
  `Titulo` varchar(450) DEFAULT NULL,
  `Descripcion` varchar(850) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.imagen_index: ~35 rows (aproximadamente)
INSERT INTO `imagen_index` (`id`, `ruta`, `Sub_imagen`, `Titulo`, `Descripcion`) VALUES
	(1, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Taipei2.jpeg', 'Visita', 'Tenemos promocion en el hostal', 'La RV'),
	(2, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\el-chiflon-chiapas.jpg', 'CLVT', 'Visitanos', 'Somos tu mejor opción'),
	(3, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\fdc.gif', 'GIF', 'Cascadas del Chiflon', 'Corre La Voz X Hostal Casa del Sol'),
	(4, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\palanque.jpg', 'IMG', 'Visita Palenque', 'Solo con CLV'),
	(5, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\cascadas.gif', 'GIF', 'Las Nubes', 'Visita este hermoso lugar'),
	(6, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\gif.gif', 'GIF', 'La naturaleza es asombrosa', 'Quetzal <3'),
	(7, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\toninaa_x.jpg', 'SLIDER', 'Las más grandez obras', 'Y majestuosas'),
	(8, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\view.png', 'IMG', 'Tenam Puente', 'Cerca de comitan!!!!'),
	(9, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Gif_suite.gif', 'SLIDER', NULL, NULL),
	(10, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\suite.gif', 'SLIDER', NULL, NULL),
	(11, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Chiflon.mp4', 'VIDEO', 'Visita el chiflon', 'Deleitate con estas hermosas cascadas'),
	(12, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Tonina.png', 'SLIDER', 'Que esperas!!!!', 'Visita CLVT'),
	(13, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Tenam.jpg', 'REPLICA', 'Visita Chiapas!!!', 'Visita Tenam!!!!'),
	(14, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Tenam2.jpg', 'REPLICA X2', 'Tenam Puente', 'Fotos por CLVT'),
	(15, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Tenam3.jpg', NULL, NULL, NULL),
	(16, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\chiflon7.jpg', 'SLIDER 1 INDEX', NULL, NULL),
	(17, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\chiflon8.jpg', 'SLIDER 1 INDEX', NULL, NULL),
	(18, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\chiflon9.jpg', 'SLIDER 1 INDEX', NULL, NULL),
	(19, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\playa.jpg', 'SLIDER 2 INDEX', NULL, NULL),
	(20, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\p1.jpg', 'SLIDER 2 INDEX', NULL, NULL),
	(21, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\fotos.jpg', 'SLIDER 2 INDEX', NULL, NULL),
	(22, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\LagosdeColon.jpg', 'SLIDER 3 INDEX', NULL, NULL),
	(23, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\lagosdecolon2.jpg', 'SLIDER 3 INDEX', NULL, NULL),
	(24, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Lagos.jpg', 'SLIDER 3 INDEX', NULL, NULL),
	(25, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\tonina2.jpg', 'SLIDER 4 INDEX', NULL, NULL),
	(26, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\uninajab.jpg', 'SLIDER 5 INDEX', NULL, NULL),
	(27, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\uninajab1.jpg', 'SLIDER 5 INDEX', NULL, NULL),
	(28, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\uninajab2.jpg', 'SLIDER 5 INDEX', NULL, NULL),
	(29, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\lagosdemontebello.jpg', 'SLIDER 6 INDEX', NULL, NULL),
	(30, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\lagosdemontebello2.jpg', 'SLIDER 6 INDEX', NULL, NULL),
	(31, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\lagosdemontebello3.jpg', 'SLIDER 6 INDEX', NULL, NULL),
	(32, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\palenque.jpg', 'SLIDER 7 INDEX', NULL, NULL),
	(33, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\palenque2.jpg', 'SLIDER 7 INDEX', NULL, NULL),
	(34, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\palenque3.jpg', 'SLIDER 7 INDEX', NULL, NULL),
	(35, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Yaxchilan1.jpg', 'SLIDER 8 INDEX', NULL, NULL),
	(36, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\yaxchilan2.jpg', 'SLIDER 8 INDEX', NULL, NULL),
	(37, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\yaxchilan3.jpg', 'SLIDER 8 INDEX', NULL, NULL);

-- Volcando estructura para tabla prueba.imagen_index_slider
CREATE TABLE IF NOT EXISTS `imagen_index_slider` (
  `Id` int(4) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `titulo` varchar(260) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `descripcion` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `descripcion2` varchar(900) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Lugar` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `personas` int(3) DEFAULT NULL,
  `duracion` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.imagen_index_slider: ~15 rows (aproximadamente)
INSERT INTO `imagen_index_slider` (`Id`, `ruta`, `titulo`, `descripcion`, `descripcion2`, `Lugar`, `personas`, `duracion`) VALUES
	(1, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Taipei2.jpeg', '', NULL, NULL, NULL, NULL, NULL),
	(2, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\tenam.jpg', 'Piramides de Tenam Puente', 'Tenam Puente ​ es un sitio arqueológico de la cultura maya localizado en el valle de Balum Canan, en el municipio de La Trinitaria, a 12 kilómetros al sur de Comitán, Chiapas, en México. Se accede a él por una desviación de la carretera panamericana n.º 190 que conduce a La Trinitaria.', 'La principal época de ocupación corresponde a los periodos clásico y posclásico temprano (entre los años 300 y 1200 d.C). Su posición estratégica, en la ruta que comunica a los Altos de Chiapas y Guatemala, le permitió tener acceso a importantes redes comerciales, tal como lo demuestra la presencia de objetos llegados de largas distancias como vasos de alabastro, conchas marinas y metales. Alrededor de 60 estructuras conforman su zona nuclear, que se extiende por 30 hectáreas.', 'Piramides de Tenam Puente', 2, '15 min'),
	(3, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\p1.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\fotos.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\el-chiflon-chiapas.jpg', 'Cascadas del chiflon', 'Esta cascada es una de las más impresionantes de Chiapas y tiene una caída escalonada que mide hasta 120 metros de altura. Esta formada por las aguas del Río San Vicente que es uno de los más caudalosos de esta región Chiapaneca', 'Para llegar al Centro Ecoturistico El Chiflon, desde Tuxtla Gutiérrez: Tomar en dirección de Comitán de Domínguez vía Pujiltic (146 kilómetro) y después hacia el municipio de Tzimol. Desde San Cristóbal de las Casas: tomar en dirección de Comitán de Domínguez vía Villa las Rosas (122Kilómetro) y después hacia el municipio de Tzimol.', 'Cascadas del chiflon', 4, '30 min'),
	(6, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Elchiflon3.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Elchiflon4.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\toninaa_x.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\Tonina.png', NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\lagoscolon.jpg', 'Lagos de colón', 'Los Lagos de Colón, son un paraje hermoso creado por un río procedente de Guatemala que al entrar a Chiapas reduce su velocidad, se separa en múltiples brazos y forma una serie de encantadoras pozas cristalinas con tonos verdiazules.', 'Se localiza en el municipio de La Trinitaria, en la Región Fronteriza del estado, a 73km de Comitán de Dominguez. Se toma el camino de La Trinitaria hacia Frontera Comalapa, por la carretera panamericana (190) y a la altura de San Gregorio Chamic se localiza un desvío de 12 km que lleva hasta el poblado Cristóbal Colón; ahí se continúa por un sendero de 2 kms, entre árboles de chicozapote, que finalmente conduce a la zona.', 'Lagos de colón', 3, '2 horas'),
	(11, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\tonina.jpg', 'Piramides de Toniná', 'La estructura piramidal de Toniná es la más grande de México, con una fachada que abarca 320 metros, en la esquina del noreste tiene 62 metros de altura y por el frente alcanza una altura de 75 metros, precisó.', 'Se localiza en el sector norte del Valle de Ocosingo. Desde la ciudad de Tuxtla Gutiérrez por la Carretera Federal Panamericana hacia la ciudad de Ocosingo se encuentra a 180 km; desde Ocosingo, 10 km al este, se encuentra el camino de ingreso a la zona arqueológica.', 'Piramides de toniná', 4, '3 horas 30 min'),
	(12, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\uninajab3.jpg', 'Balneario Uninajab', 'Uninajab es una reserva natural ubicada en Comitán en donde podrás encontrar un centro ecoturístico en donde las albercas naturales son la principal atracción, además es posible encontrar otras actividades como caminata, natación, montar a caballo y hasta buceo.', 'El lugar se encuentra a tan solo 30 minutos de Comitán de Domínguez y al llegar te encontrarás un pequeño poblado lleno de propiedades con albercas que te guiarán hasta el punto principal en donde descubrirás el conjunto de canales que funcionan como albercas nutridas por el nacimiento natural de agua, pero esto es solo el principio de todo lo que este rincón tiene para ofrecer.', 'Balneario Uninajab', 2, '30 min'),
	(13, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\lagosdemontebello4.jpg', 'Lagos de montebello', 'Parque Nacional Lagunas de Montebello, Chiapas. Ubicación: Se localiza en los municipios de La Independencia y La Trinitaria, en el Estado de Chiapas. Categoría: Parque Nacional. Dirección Regional: Frontera Sur, Istmo y Pacífico Sur.', 'En el lugar se ofrecen paseos en lancha, kayak, también puedes practicar el campismo y el senderismo. Cuenta con servicios básicos a lo largo de las orillas de las lagunas que son ofrecidos por los comuneros del lugar. También hay visitas guiadas a algunos puntos interesantes de los alrededores.', 'Lagos de montebello', 4, '1 hora 10 min'),
	(14, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\palenque1.jpg', 'Ruinas de Palenque', 'Palenque, es uno de los asentamientos de la cultura maya más importantes del periodo Clásico (250-900 d. C.). Fue la capital de una poderosa dinastía que dominó una extensa región, la cual abarcaba el norte de Chiapas y el sur de Tabasco.', 'Además de la zona arqueológica de Palenque, aquí podrás visitar museos, parques nacionales, lagunas, cascadas y balnearios. Así mismo, en el pueblo hay algunas festividades importantes como la Feria de Santa Cruz el 3 de mayo y la Feria de Santo Domingo en agosto.', 'Palenque', 2, '5 horas 20 min'),
	(15, 'C:\\xampp\\htdocs\\celestino\\celestino\\images\\yaxchilan.jpg', 'Ruinas Yaxchilán', 'Yaxchilán es una antigua ciudad de la cultura maya situada en la orilla del Río Usumacinta, en lo que hoy es el municipio de Ocosingo del estado de Chiapas en México.', 'Lo más recomendable para visitar Yaxchilán es venir a primera hora de la mañana, ya que la temperatura es más baja y podrás hacer el recorrido con más tranquilidad. – Ten en cuenta que en esta zona de México suele hacer bastante calor, por lo que conviene llevar agua o algún refresco.', 'Ruinas Yaxchilán', 3, '6 horas 30 min');

-- Volcando estructura para tabla prueba.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pass` int(255) NOT NULL,
  `correo` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla prueba.usuarios: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
