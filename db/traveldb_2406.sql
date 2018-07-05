-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2018 a las 11:56:40
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `travelsmart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traveldb`
--

CREATE TABLE `traveldb` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `city` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `state` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `country` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `zipcode` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `phonenumber` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` int(5) NOT NULL,
  `currency` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `maxPersons` int(11) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `pets` tinyint(1) NOT NULL,
  `bathroom` tinyint(1) NOT NULL,
  `equestrianroute` tinyint(1) NOT NULL,
  `cookingws` tinyint(1) NOT NULL,
  `fishing` tinyint(1) NOT NULL,
  `seaactivities` tinyint(1) NOT NULL,
  `hicking` tinyint(1) NOT NULL,
  `surf` tinyint(1) NOT NULL,
  `owner` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activity` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `location` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `laundry` tinyint(1) NOT NULL,
  `cabeltv` tinyint(1) NOT NULL,
  `rooms` int(11) NOT NULL,
  `pool` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `note` int(11) NOT NULL,
  `cancelations` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `disponibility` int(11) NOT NULL,
  `heritage` tinyint(1) NOT NULL,
  `heritagedescription` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `generaldescription` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `avalibity` tinyint(1) NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `traveldb`
--

INSERT INTO `traveldb` (`id`, `name`, `city`, `state`, `country`, `zipcode`, `address`, `phonenumber`, `email`, `price`, `currency`, `maxPersons`, `internet`, `pets`, `bathroom`, `equestrianroute`, `cookingws`, `fishing`, `seaactivities`, `hicking`, `surf`, `owner`, `activity`, `location`, `laundry`, `cabeltv`, `rooms`, `pool`, `balcony`, `checkin`, `checkout`, `note`, `cancelations`, `disponibility`, `heritage`, `heritagedescription`, `generaldescription`, `avalibity`, `image`) VALUES
(1, 'Barraca de Amparo', 'EL Palmar', 'Valencia', 'España', '46012', '\r\nCalle de Francisco Monléon, 31', '961 62 03 36', 'labarracadeamparo@travelsmart.com', 25, 'eur', 9, 0, 1, 1, 1, 1, 0, 0, 0, 0, 'Amaparo Soler', 'Agricultura tradicional de la huerta valenciana', 'Cercano a la Albufera de Valencia', 1, 0, 4, 1, 0, '2018-06-24', '2018-06-29', 10, 'Permitidas ', 1, 1, 'Ventana abierta a la Huerta de Valencia para todos aquellos que quieran probar las mejores especialidades valencianas, conocer como se vivía en una barraca tradicional, descubrir como se trabajaba la tierra no hace muchos años y adentrarse en un entorno natural tranquilo', 'La barraca es una preciosa vivienda tradicional de 60m2 con una zona exterior ajardinada con barbacoa, piscina y zona infantil.', 1, 'https://www.tiovivocreativo.com/wp-content/uploads/2017/02/Barracas.Antonio-Jos%C3%A9-Montero.jpg'),
(2, 'Barraca La Albufera', 'Les Gavines', 'Valencia', 'España', '46012', 'Punta Llebeig sn', '961045637', 'barraclaalbufera@travelsmart.es', 24, 'EUR', 7, 0, 0, 1, 1, 1, 1, 1, 0, 0, 'Ferra Vila', 'Cultivo de arroz tradicional', 'Albufera de Valencia', 1, 0, 3, 0, 0, '2018-06-23', '2018-06-29', 10, 'Permitidas', 1, 1, 'En el Parque Natural se localiza una de las mas importantes reservas de la bioesfera', 'Situada en interior del Parque Natural de la Albufera de Valencia', 1, 'https://photo620x400.mnstatic.com/f391743e74b9a9765b86b97d42033bc2/centro-de-interpretacion-de-barraques-del-delta.jpg'),
(3, 'Barraca del Lago', 'El Saler', 'Valencia', 'España', '46012', 'Sequia de la Folla', '961567329', 'barracadellago@travelsmart.com', 34, 'eur', 8, 1, 1, 1, 1, 0, 1, 1, 0, 0, 'Merce Llopis', 'Pesca tradicional, observacion de aves autoctonas', 'Situada en el corazon de la Albufera', 1, 0, 3, 0, 0, '2018-06-29', '2018-07-18', 10, 'Permitidas 48h antes', 1, 1, 'Pesca tradicional de la angula y lubina', 'Construccion pequeña, con tejado a dos aguas, en la que vivia toda la familia', 1, 'https://www.lovevalencia.com/wp-content/uploads/2012/07/barracavalenciana.jpg'),
(4, 'Cuadra Anton', 'El Perellonet', 'Valencia', 'España', '46012', 'Avenida de las Gaviotas', '961777658', 'cuadraanton@travelsmart.com', 50, 'eur', 7, 0, 1, 1, 1, 1, 0, 0, 1, 0, 'Marti Esparraguera', 'Rutas equestres y cursos de cocina tradicional', 'Situada a orillas del Mar Mediterraneo', 1, 0, 1, 0, 1, '2018-07-18', '2018-07-26', 8, 'Hasta 24h antes', 1, 1, 'Antiguas rutas equestres de hortelanos de la zona', 'En Cuadra Anton somos expertos en el manejo y cuidado de los caballos. Te ofrecemos rutas y paseos a caballo en el entorno de la ALbufera', 1, 'https://i.ytimg.com/vi/L3GAxTYvD8o/maxresdefault.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
