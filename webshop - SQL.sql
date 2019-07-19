-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 18 jul 2019 om 19:11
-- Serverversie: 5.7.24
-- PHP-versie: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_aankoop`
--

DROP TABLE IF EXISTS `t_aankoop`;
CREATE TABLE IF NOT EXISTS `t_aankoop` (
  `pk_aankoop` int(11) NOT NULL AUTO_INCREMENT,
  `fk_product` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_klant` int(11) NOT NULL,
  `aantal` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pk_aankoop`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `t_aankoop`
--

INSERT INTO `t_aankoop` (`pk_aankoop`, `fk_product`, `date`, `fk_klant`, `aantal`) VALUES
(5, 16, '2019-04-25 12:59:31', 2, 2),
(6, 3, '2019-04-28 13:45:40', 2, 1),
(7, 5, '2019-04-28 13:46:04', 2, 1),
(35, 6, '2019-07-18 19:07:32', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_products`
--

DROP TABLE IF EXISTS `t_products`;
CREATE TABLE IF NOT EXISTS `t_products` (
  `pk_product` int(11) NOT NULL AUTO_INCREMENT,
  `merk` varchar(211) NOT NULL,
  `model` varchar(211) NOT NULL,
  `prijs` int(11) NOT NULL,
  `korting` int(11) DEFAULT NULL,
  `aantal` int(11) NOT NULL,
  `beschrijving` varchar(888) NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?',
  `img` varchar(211) NOT NULL,
  `display` int(1) NOT NULL DEFAULT '1',
  `discount` int(1) NOT NULL DEFAULT '0',
  `highlight` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk_product`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `t_products`
--

INSERT INTO `t_products` (`pk_product`, `merk`, `model`, `prijs`, `korting`, `aantal`, `beschrijving`, `img`, `display`, `discount`, `highlight`) VALUES
(1, 'nikes', ' Air Force One Low', 100, 90, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Force-1-Low-White-Product.jpg', 1, 1, 0),
(2, 'Nike', 'Air Force One High Flax', 134, NULL, 3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Force-1-High-Flax-2017-Product.jpg', 1, 0, 1),
(3, 'Nike', 'Air Jordan', 110, 100, 16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Air-Jordan-1-Mid-Triple-White-Product.jpg', 1, 1, 0),
(4, 'Nike', 'Air Jordan Origin Story', 225, 220, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Air-Jordan-1-Retro-High-Origin-Story-1.jpg', 1, 0, 1),
(5, 'Nike X Off White', 'Chicago', 2201, 150, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Air-Jordan-1-Retro-High-Off-White-Chicago-Product.jpg', 1, 0, 1),
(6, 'adidas', 'Yeezy Boost 350 V2 Cream', 280, 260, 4, 'Does cash rule everything around you? If so, then it would be wise to cop the adidas Yeezy Boost 350 Cream White. Returning for round two with a huge restock, the luminous colored Yeezy Boost 350 has a cream white upper, core white midsole, and a camouflaged “SPLY-350” branding across the stripe on the sides.', 'Adidas-Yeezy-Boost-350-V2-Cream-White-1-1.jpg', 1, 0, 0),
(7, 'Adidas', 'Ultra Boost 4.0', 100, 90, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Adidas-Ultra-Boost-4-0-Running-White-Product.jpg', 1, 1, 0),
(8, 'Adidas', 'NMD R2', 200, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'adidas-NMD-R2-Triple-White.jpg', 1, 0, 0),
(9, 'Nike', 'Air Presto', 65, 50, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Presto-Triple-White-Product.jpg', 1, 0, 0),
(10, 'Adidas', 'Stan Smith', 120, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Adidas-Stan-Smith-Primeknit-Triple-White.jpg', 1, 0, 0),
(11, 'Nike', 'VaporMax', 220, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-VaporMax-Triple-White.jpg', 1, 0, 0),
(12, 'Air', 'Huarache Drift', 80, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Huarache-Drift-Triple-White.jpg', 1, 0, 0),
(15, 'Nike', 'Air Force One SF', 185, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-SF-Air-Force-1-All-White-Complex.jpg', 1, 0, 0),
(14, 'Nike', 'Air Force One Flyknit', 135, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Force-1-Ultra-Flyknit-Mid-Triple-White.jpg', 1, 0, 0),
(16, 'Off White', 'Industrial Belt', 165, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'off-white-belt-white-2.jpg', 1, 0, 0),
(17, 'Nike', 'Air Force One High', 70, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Force-1-High-White-2016.jpg', 1, 0, 0),
(18, 'Nike', 'Air Max 90', 90, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Air-Max-90-Triple-White.jpg', 1, 0, 0),
(19, 'Nike', 'Epic React Flyknit', 80, NULL, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', 'Nike-Epic-React-Flyknit-True-White.jpg', 1, 0, 0),
(24, 'Merk', 'Model', 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dignissimos eaque explicabo facilis harum iusto obcaecati similique unde voluptas?', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `t_users`
--

DROP TABLE IF EXISTS `t_users`;
CREATE TABLE IF NOT EXISTS `t_users` (
  `pk_user` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(211) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  `email` varchar(211) NOT NULL,
  `pass` varchar(211) NOT NULL,
  PRIMARY KEY (`pk_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `t_users`
--

INSERT INTO `t_users` (`pk_user`, `naam`, `admin`, `email`, `pass`) VALUES
(1, 'axel', 1, 'axel.oord@live.nl', 'pass'),
(2, 'luke', 0, 'luke@gmail.com', 'pass'),
(3, 'axel oord', 0, 'axel.oord88@live.nl', 'pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
