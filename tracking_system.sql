-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 09:48 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE IF NOT EXISTS `calculator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`id`, `destination`, `weight`, `result`) VALUES
(1, 'Intra - Region', '0.5kg', '1800'),
(2, 'Intra - Region', '1.0kg', '1980'),
(3, 'Intra - Region', '1.5kg', '2160'),
(4, 'Intra - Region', '2.0kg', '2340'),
(5, 'Intra - Region', '2.5kg', '2520'),
(6, 'Intra - Region', '3.0kg', '2700'),
(7, 'Intra - Region', '3.5kg', '2880'),
(8, 'Intra - Region', '4.0kg', '3060'),
(9, 'Intra - Region', '4.5kg', '3240'),
(10, 'Intra - Region', '5.0kg', '3420'),
(11, 'Intra - State', '0.5kg', '1620'),
(12, 'Intra - State', '1.0kg', '1740'),
(13, 'Intra - State', '1.5kg', '1860'),
(14, 'Intra - State', '2.0kg', '1980'),
(15, 'Intra - State', '2.5kg', '2100'),
(16, 'Intra - State', '3.0kg', '2220'),
(17, 'Intra - State', '3.5kg', '2340'),
(18, 'Intra - State', '4.0kg', '2460'),
(19, 'Intra - State', '4.5kg', '2580'),
(20, 'Intra - City', '5.0kg', '2700'),
(21, 'Intra - City', '0.5kg', '480'),
(22, 'Intra - City', '1.0kg', '564'),
(23, 'Intra - City', '1.5kg', '648'),
(24, 'Intra - City', '2.0kg', '732'),
(25, 'Intra - City', '2.5kg', '816'),
(26, 'Intra - City', '3.0kg', '900'),
(27, 'Intra - City', '3.5kg', '984'),
(28, 'Intra - City', '4.0kg', '1068'),
(29, 'Intra - City', '4.5kg', '1152'),
(30, 'Intra - City', '5.0kg', '1236');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `shipe_code` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`shipe_code`, `status`, `date`, `id`) VALUES
('PC-20182200233', 'Delivered', '21:09:18', 1),
('PC-201835332', 'Packed', '18:09:18', 2),
('PC-20182023333', 'Delivered', '21:09:18', 3),
('PC-201823023022', 'Delivered', '21:09:18', 4),
('PC-20180322223', 'Delivered', '21:09:18', 5),
('PC-2018222022', 'Packed', '21:09:18', 6);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Tirmizi', 'Prince2010'),
(3, 'zahra', 'aminu'),
(4, 'maishanu zaharadeen', 'maryam'),
(5, 'sadiq', '1231');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE IF NOT EXISTS `parcel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shipe_code` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(200) NOT NULL,
  `s_number` varchar(200) NOT NULL,
  `s_city` varchar(222) NOT NULL,
  `s_address` varchar(222) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_number` varchar(255) NOT NULL,
  `r_city` varchar(100) NOT NULL,
  `r_address` varchar(200) NOT NULL,
  `r-zipcode` varchar(200) NOT NULL,
  `p_destination` varchar(255) NOT NULL,
  `p_ship_cost` varchar(200) NOT NULL,
  `p_weight` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `shipe_code`, `date`, `admin`, `s_name`, `s_email`, `s_number`, `s_city`, `s_address`, `r_name`, `r_email`, `r_number`, `r_city`, `r_address`, `r-zipcode`, `p_destination`, `p_ship_cost`, `p_weight`) VALUES
(7, 'PC-201835332', '18:09:18', 'Admin', 'Musa Sadiq', 'mee@gmail.com', '09011111112', 'Jalingo', 'NO. 65 GRA Road ', 'Yakubu Ibrahim', 'bvj@mhkk.com', '09011111111', 'Kano', 'No121 Zoo road', '21131', 'Intra - State', 'N1860', '1.5kg'),
(8, 'PC-20182023333', '21:09:18', 'Admin', 'John Yahaya', 'jyaha@gmg.com', '09011111114', 'Jalingo', 'No.78 Barde road', 'Salima Isah', 'salima@mhkk.com', '09011111115', 'Lau', 'Lau bye pass', '55643', 'Intra - City', 'N816', '2.5kg'),
(9, 'PC-201823023022', '21:09:18', 'Admin', 'Christor Adeno', 'adeno@gmail.com', '09011113114', 'Jimeta', 'No. J21B Clark Quaters', 'Emanuel Shopie', 'shopies@gmail.com', '09011166115', 'Apapa', 'No. 123 Sky crescent', '43212', 'Intra - Region', 'N2340', '2.0kg'),
(10, 'PC-20182200233', '21:09:18', 'Admin', 'Mohammad Lawan', 'lmoh@gmail.com', '09022111114', 'Maiduguri', 'No.21 Monday Streat', 'Maina Hamidu', 'hamid@gmail.com', '09013311115', 'Benin', 'No.89 Kuruna road', '12114', 'Intra - Region', 'N2340', '2.0kg'),
(11, 'PC-20180322223', '21:09:18', 'Admin', 'Musa Bello', 'bello@gmail.com', '09012211114', 'Jalingo', 'No05 Road block', 'Salihu Ahmad', 'sali@gmail.com', '06011111115', 'Kaduna', 'No 23 Zango street', '88621', 'Intra - State', 'N1980', '2.0kg'),
(12, 'PC-2018222022', '21:09:18', 'Admin', 'Mike Musa', 'mkmusa@gmail.com', '05011111114', 'Bauchi', 'No 246 Yakubu road', 'Helen Dauda', 'dauer22@gmail.com', '02011111115', 'Yobe', 'No99 Sir Kashim road', '12234', 'Intra - State', 'N2340', '3.5kg');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE IF NOT EXISTS `pricing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `0.5kg` varchar(100) NOT NULL,
  `1.0kg` varchar(100) NOT NULL,
  `1.5kg` varchar(100) NOT NULL,
  `2.0kg` varchar(100) NOT NULL,
  `2.5kg` varchar(100) NOT NULL,
  `3.0kg` varchar(100) NOT NULL,
  `3.5kg` varchar(100) NOT NULL,
  `4.0kg` varchar(100) NOT NULL,
  `4.5kg` varchar(100) NOT NULL,
  `5.0kg` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `destination`, `0.5kg`, `1.0kg`, `1.5kg`, `2.0kg`, `2.5kg`, `3.0kg`, `3.5kg`, `4.0kg`, `4.5kg`, `5.0kg`) VALUES
(1, 'INTRA-REGION', '1800', '1980', '2160', '2340', '2520', '2700', '2880', '3060', '3240', '3420'),
(2, 'INTRA-STATE', '1620', '1740', '1860', '1980', '2100', '2220', '2340', '2460', '2580', '2700'),
(3, 'INTRA-CITY', '480', '564', '648', '732', '816', '900', '984', '1068', '1152', '1236');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
