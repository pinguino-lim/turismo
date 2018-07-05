-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2018 a las 16:42:15
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamientos`
--

CREATE TABLE `alojamientos` (
  `name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zipcode` int(7) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `price` int(5) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `maxPersons` int(11) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `pets` tinyint(1) NOT NULL,
  `bathroom` tinyint(1) NOT NULL,
  `equestrianRoute` tinyint(1) NOT NULL,
  `cookingworkshop` tinyint(1) NOT NULL,
  `fishing` tinyint(1) NOT NULL,
  `heritage` tinyint(1) NOT NULL,
  `seaactivities` tinyint(1) NOT NULL,
  `description` varchar(400) NOT NULL,
  `note` int(2) NOT NULL,
  `image` varchar(200) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alojamientos`
--

INSERT INTO `alojamientos` (`name`, `city`, `state`, `country`, `zipcode`, `address`, `phonenumber`, `email`, `price`, `currency`, `maxPersons`, `internet`, `pets`, `bathroom`, `equestrianRoute`, `cookingworkshop`, `fishing`, `heritage`, `seaactivities`, `description`, `note`, `image`, `checkin`, `checkout`, `available`) VALUES
('Quinta Guadalupe', 'Colombres', 'Asturias', 'España', 33590, 'Plaza Manuel Ibañez, s/n', '985 41 20 05', 'quintaguadalupe@amadeus.com', 19, 'EUR', 10, 1, 0, 1, 1, 0, 1, 1, 1, 'En la parte alta de un magnífico jardín, la Quinta Guadalupe fue conocida como «el elefante blanco», originalmente estuvo pintada de este color. ', 10, 'https://jdcdn-wabisabiinvestme.netdna-ssl.com/wp-content/uploads/2014/05/32.jpg', '0000-00-00', '0000-00-00', 1),
('Villa Excelsior', 'Barcellina', 'Asturias', 'España', 33700, 'Barcellina sn', '+34 985123456', 'villaexcelsior@amadeus.com', 20, 'EUR', 5, 0, 0, 1, 1, 0, 1, 1, 1, 'La que un día fue reconocida como una de las villas más singulares y preciosas del norte', 10, 'https://zanobbi.files.wordpress.com/2018/02/dtcz8huxkamqu0y.jpg?w=480&h=640', '0000-00-00', '0000-00-00', 1),
('Villa la Argentina', 'Luarca', 'Asturias', 'España', 33700, 'Villar s/n.', '+34 985640102', 'info@villalaargentina.com', 25, 'EUR', 9, 1, 0, 1, 1, 0, 1, 1, 1, 'Ideal para el descanso en un medio rural tranquilo próximo al puerto', 10, 'http://www.villalaargentina.com/public/img/galeria/medium/atrasera_lateral.jpg', '0000-00-00', '0000-00-00', 1),
('Villa Rosa', 'Querúas', 'Asturias', 'España', 33789, 'Querúas sn', '+34 985770088', 'villarosa@amadeus.com', 23, 'EUR', 6, 1, 1, 1, 1, 1, 1, 1, 1, 'Villa Rosa es una casa que sencilla para el estilo indiano,sin embargo tiene un encanto especial', 10, 'http://2.bp.blogspot.com/_LPWrvnRPQtI/TEN5KAx8ALI/AAAAAAAABoE/3zWUIIZ_Me0/s1600/villarosa14.jpg', '0000-00-00', '0000-00-00', 1),
('Villa Josefina', 'Gijón', 'Asturias', 'España', 33203, 'Calle del Prof. Pérez Pimentel, 822', '+34 985876543', 'villajosefina@amadeus.com', 25, 'EUR', 4, 1, 1, 1, 0, 1, 0, 1, 1, 'Preciosa finca con hermoso camino de tilos que conduce directamente a la casa', 10, 'http://3.bp.blogspot.com/-UIMWf_dx2Ek/U6yIHuZQr6I/AAAAAAAAGMQ/KREG2kUb-Tk/s1600/DSC00398(2).jpg', '0000-00-00', '0000-00-00', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
