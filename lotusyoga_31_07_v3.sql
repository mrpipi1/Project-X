-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Erstellungszeit: 31. Jul 2016 um 10:09
-- Server-Version: 5.5.49-log
-- PHP-Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lotusyoga`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `password_hash` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `password_hash`, `is_active`, `deleted_at`) VALUES
(1, 'alex', 'alexLadmin.at', 'pw123', 1, NULL),
(2, 'admin', 'asd', '$2y$10$N3vs.Spr5NcEtedhChiCrehow8aNNDcKLjMaJJdrKBYpcWImdnoS2', 1, NULL),
(3, 'test', 'test@test.bla', '1234', 1, NULL),
(4, '', '', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestell_items`
--

DROP TABLE IF EXISTS `bestell_items`;
CREATE TABLE IF NOT EXISTS `bestell_items` (
  `id` int(11) NOT NULL,
  `bestellnummer` int(100) NOT NULL,
  `shopitem_id` int(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `bestell_items`
--

INSERT INTO `bestell_items` (`id`, `bestellnummer`, `shopitem_id`, `is_active`, `deleted_at`) VALUES
(3, 2323, 23, 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `breadcrubms_checkout`
--

DROP TABLE IF EXISTS `breadcrubms_checkout`;
CREATE TABLE IF NOT EXISTS `breadcrubms_checkout` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `breadcrubms_checkout`
--

INSERT INTO `breadcrubms_checkout` (`id`, `name`, `position`, `is_active`, `deleted_at`) VALUES
(1, 'Warenkorb', 1, 1, NULL),
(2, 'Anmelden', 2, 1, NULL),
(3, 'Adresse', 3, 1, NULL),
(4, 'Bezahlung & Versand', 4, 1, NULL),
(5, 'Zusammenfassung', 5, 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_size` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `product_size`, `created_at`, `deleted_at`) VALUES
(1, 2, 7, 5, 'xs', '2016-07-30 21:35:26', NULL),
(2, 2, 9, 6, 'xl', '2016-07-30 21:35:23', NULL),
(4, 2, 12, 9, 'm', '2016-07-30 21:35:19', NULL),
(7, 2, 8, 8, '', '2016-07-30 21:33:32', NULL),
(8, 2, 10, 1, '', '2016-07-30 21:33:37', NULL),
(9, 2, 11, 2, '', '2016-07-30 21:35:32', NULL),
(10, 2, 13, 6, '', '2016-07-30 21:33:44', NULL),
(11, 2, 15, 8, '', '2016-07-30 21:34:24', NULL),
(12, 2, 17, 8, '', '2016-07-30 21:35:36', NULL),
(13, 9, 7, 1, 'L', '2016-07-31 08:58:19', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL,
  `_name` varchar(1000) NOT NULL,
  `type` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `sequence` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `contents`
--

INSERT INTO `contents` (`id`, `_name`, `type`, `content`, `sequence`, `is_active`, `deleted_at`) VALUES
(3, '', 'Über Uns', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, NULL),
(4, '', 'Datenschutz', 'Lorem Ipsum\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 0, NULL),
(5, '', 'test', 'test', 0, 0, '0000-00-00 00:00:00'),
(6, '', 'rrtreb', 'regbergb', 0, 0, '0000-00-00 00:00:00'),
(7, '', 'rrtr', 'reert', 0, 0, '0000-00-00 00:00:00'),
(8, '', 'qwefwf', 'wqfwfewf', 0, 0, '0000-00-00 00:00:00'),
(10, '', 'ukmumum', 'm67m67', 0, 0, '0000-00-00 00:00:00'),
(11, '', 'h tehh', 'enb ', 0, 0, '0000-00-00 00:00:00'),
(12, '', 'erhrh', 'rthzhtb', 0, 0, '0000-00-00 00:00:00'),
(13, '', 'fbgrenn', 'ku,iz,io', 0, 0, '0000-00-00 00:00:00'),
(14, '', 'uk,u,u', 'ut,ui,', 0, 0, '0000-00-00 00:00:00'),
(15, 'Kontakt', 'headline', 'Kontakt', 0, 0, NULL),
(16, 'Kontakt', 'content', 'Du hast Fragen ?', 1, 1, NULL),
(17, 'Kontakt', 'subheadline', 'Unser Studio', 3, 1, NULL),
(18, 'Kontakt', 'tel', '01 555 555 55', 4, 1, NULL),
(19, 'Kontakt', 'content', 'Kontaktiere uns doch einfach und wir melden uns unverzüglich.', 2, 1, NULL),
(20, 'Kontakt', 'email', 'office@lotusyoga.at', 5, 1, NULL),
(21, 'Kontakt', 'content', 'Siebensterngasse 2', 6, 1, NULL),
(22, 'Kontakt', 'content', 'Österreich, Wien', 8, 1, NULL),
(23, 'Kontakt', 'content', 'Stock 1 | Tür 13', 7, 1, NULL),
(24, 'Kontakt', 'content', '1070', 9, 1, NULL),
(25, 'Map', 'lat', '48.20294029999999', 0, 1, NULL),
(26, 'Map', 'lng', '16.356826899999987', 1, 1, NULL),
(27, 'contactform_main', 'name', 'Vorname | Nachname*', 1, 1, NULL),
(28, 'contactform_main', 'tel', 'Telefonnummer*', 2, 1, NULL),
(29, 'contactform_main', 'email', 'E-Mailadresse*', 3, 1, NULL),
(30, 'contactform_main', 'comment', 'Kommentar', 4, 1, NULL),
(31, 'contactform_main', 'submit', 'Absenden', 5, 1, NULL),
(32, 'contactform_main', 'subheadline', 'Schreibe uns', 0, 1, NULL),
(33, 'footer', 'subheadline', 'Socialmedia', 0, 1, NULL),
(34, 'footer', 'Facebook', 'http://www.facebook.com', 1, 1, NULL),
(35, 'footer', 'Instagram', 'http://www.instagram.com', 2, 1, NULL),
(36, 'footer', 'Youtube', 'http://www.youtube.com', 3, 1, NULL),
(37, 'footer', 'subheadline', 'Kurse', 4, 1, NULL),
(38, 'footer', 'Yin Yoga', '#', 5, 1, NULL),
(39, 'footer', 'Ashtanga Yoga', '#', 6, 1, NULL),
(40, 'footer', 'Tri Yoga', '#', 7, 1, NULL),
(41, 'footer', 'subheadline', 'Shop', 8, 1, NULL),
(42, 'footer', 'Angebote', '#', 9, 1, NULL),
(43, 'footer', 'Rückgaberecht', '#', 10, 1, NULL),
(44, 'footer', 'Lorem', '#', 11, 1, NULL),
(45, 'footer', 'subheadline', 'Lorem', 12, 1, NULL),
(46, 'footer', 'Impressum', 'index.php?page=Impressum', 13, 1, NULL),
(47, 'footer', 'AGB', 'index.php?page=AGB', 14, 1, NULL),
(48, 'footer', 'Datenschutz', 'index.php?page=Datenschutz', 15, 1, NULL),
(49, 'footer', 'FAQs', 'index.php?page=FAQs', 16, 1, NULL),
(50, 'testobert', 'asd', 'asd', 1, 0, NULL),
(51, 'asdasd', 'asdasd', 'adsasd', 1, 0, '0000-00-00 00:00:00'),
(52, 'test', 'test', 'test', 1, 0, '0000-00-00 00:00:00'),
(53, 'test', 'test', 'test', 0, 0, '0000-00-00 00:00:00'),
(54, 'asdasd', 'asdasd', 'asdasd', 1, 0, '0000-00-00 00:00:00'),
(55, 'ads', 'asdasd', 'adsasd', 1, 0, '0000-00-00 00:00:00'),
(56, 'testaktion', 'headlin', 'test', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `coupon_codes`
--

DROP TABLE IF EXISTS `coupon_codes`;
CREATE TABLE IF NOT EXISTS `coupon_codes` (
  `id` int(11) NOT NULL,
  `_name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `percentage_value` int(11) DEFAULT NULL,
  `flat_value` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `coupon_codes`
--

INSERT INTO `coupon_codes` (`id`, `_name`, `code`, `percentage_value`, `flat_value`, `is_active`, `deleted_at`) VALUES
(1, 'lotusyoga', 'LOTUSYOGA2016', 5, NULL, 1, NULL),
(2, 'lotusyoga', 'LOTUSYOGA2015', 10, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `courses`
--

INSERT INTO `courses` (`id`, `_name`, `description`, `is_active`, `deleted_at`) VALUES
(3, 'yin yoga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(4, 'ashtanga yoga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(5, 'tri yoga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `delivery_options`
--

DROP TABLE IF EXISTS `delivery_options`;
CREATE TABLE IF NOT EXISTS `delivery_options` (
  `id` int(11) NOT NULL,
  `_name` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `delivery_options`
--

INSERT INTO `delivery_options` (`id`, `_name`, `is_active`, `deleted_at`) VALUES
(1, 'Post', 1, NULL),
(2, 'DHL', 1, NULL),
(3, 'Expressversand', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telno` varchar(20) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `description` varchar(700) NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `email`, `telno`, `pic`, `courses_id`, `description`, `is_active`, `deleted_at`) VALUES
(1, '', '', '', 'img/mitarbeiter/1.png', 3, '', 1, NULL),
(2, 'Lisbeth Thekla', 'l.thekla@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/2.png', 4, 'Hallo, mein Name ist Lisbeth Thekla. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(3, 'Clara Augustine', 'c.augustine@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/3.png', 5, 'Hallo, mein Name ist Clara Augustine. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(4, 'Leonie Barbara', 'l.barbara@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/4.png', 3, 'Hallo, mein Name ist Lenoie Barbara. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 1, NULL),
(5, 'Zella Kristiane', 'z.kristiane@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/5.png', 4, 'Hallo, mein Name ist Zella Kristiane. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(6, 'Laurenz Luri', 'l.luri@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/6.png', 5, 'Hallo, mein Name ist Laurenz Luri. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(7, 'Elli Sophie', 'e.sophie@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/7.png', 3, 'Hallo, mein Name ist Elli Sophie. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(8, 'Lukas Bernhard', 'l.bernhard@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/8.png', 4, 'Hallo, mein Name ist Lukas Bernhard. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(9, 'Katrin Antonia', 'k.antonia@lotusyoga.at', '0664 555 555', 'img/mitarbeiter/9.png', 5, ' Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `guests`
--

DROP TABLE IF EXISTS `guests`;
CREATE TABLE IF NOT EXISTS `guests` (
  `id` int(11) NOT NULL,
  `guest_mail` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `guests`
--

INSERT INTO `guests` (`id`, `guest_mail`, `is_active`, `created_at`, `deleted_at`) VALUES
(1, '', 1, '2016-07-31 08:42:08', NULL),
(2, '', 1, '2016-07-31 08:42:53', NULL),
(3, '', 1, '2016-07-31 08:43:27', NULL),
(4, '', 1, '2016-07-31 08:43:52', NULL),
(5, '', 1, '2016-07-31 08:44:37', NULL),
(6, '', 1, '2016-07-31 08:45:29', NULL),
(7, '', 1, '2016-07-31 08:45:32', NULL),
(8, '', 1, '2016-07-31 08:47:00', NULL),
(9, '', 1, '2016-07-31 08:47:42', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `header_items`
--

DROP TABLE IF EXISTS `header_items`;
CREATE TABLE IF NOT EXISTS `header_items` (
  `id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `header_items`
--

INSERT INTO `header_items` (`id`, `h_name`, `is_active`, `deleted_at`) VALUES
(1, 'login', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL,
  `_name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `logs`
--

INSERT INTO `logs` (`id`, `_name`, `type`, `location`, `created_at`, `is_active`, `deleted_at`) VALUES
(1, 'Franzi', 'hinzugefügt', 'users', '2016-07-26 19:27:00', 0, NULL),
(2, 'ads', 'contents', 'delete', '2016-07-30 16:00:41', 0, NULL),
(3, 'testobert', 'contents', 'update', '2016-07-30 16:06:44', 0, NULL),
(4, 'testaktion', 'contents', 'insert', '2016-07-30 16:08:39', 0, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menu_backend_items`
--

DROP TABLE IF EXISTS `menu_backend_items`;
CREATE TABLE IF NOT EXISTS `menu_backend_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `menu_backend_items`
--

INSERT INTO `menu_backend_items` (`id`, `item_name`, `is_active`, `deleted_at`) VALUES
(1, 'dashboard', 1, NULL),
(2, 'statistik', 1, NULL),
(3, 'Admins', 1, NULL),
(4, 'users', 1, NULL),
(5, 'employees', 1, NULL),
(6, 'courses', 1, NULL),
(7, 'contents', 1, NULL),
(8, 'shop_categories', 1, NULL),
(9, 'products', 1, NULL),
(10, 'orders', 1, NULL),
(11, 'bestell_items', 1, NULL),
(12, 'socialmedia_icons', 1, NULL),
(13, 'menu_backend_items', 1, NULL),
(14, 'header_items', 1, NULL),
(15, 'user_messages', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `delivery_option_id` int(11) NOT NULL,
  `delivery_address` varchar(1000) NOT NULL,
  `receipt_address` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `coupon_code_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `_name` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `shop_categories_id` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `thumb_1` varchar(500) NOT NULL,
  `thumb_2` varchar(500) NOT NULL,
  `thumb_3` varchar(500) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `in_aktion` tinyint(1) NOT NULL DEFAULT '0',
  `price_in_aktion` float NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `products`
--

INSERT INTO `products` (`id`, `_name`, `price`, `shop_categories_id`, `description`, `pic`, `thumb_1`, `thumb_2`, `thumb_3`, `color`, `in_aktion`, `price_in_aktion`, `is_active`, `deleted_at`) VALUES
(7, 'Damen T-Shirt', 19.99, 1, 'Damen T-Shirt aus 100% Bio-Baumwolle. Durch die angenehme Passform und den längeren Schnitt ist dieses schlichte T-Shirt optimal um Yoga zu praktizieren. Maschienenwaschbar bei 40°C.', 'img/shop-images/damen-tshirt.png', 'img/shop-images/damen-tshirt.png', 'img/shop-images/jumper-grau.png', 'img/shop-images/jumper_white.png', NULL, 0, 0, 1, NULL),
(8, 'Yogabag & Matte', 39.99, 2, 'Yogamatte mit praktischer Bag in schlichtem Schwarz. Mit einem verschließbaren Fach für Schlüssel oder Handy.', 'img/shop-images/tragetasche_yogamatte.png', 'rbtbtb', 'tbtbtb', 'rtbtb', NULL, 0, 0, 1, NULL),
(9, 'Jumper', 39.99, 1, 'Stylischer Jumper für Männer und Frauen. Aus 100% Baumwolle und Machienenwaschbar.', 'img/shop-images/jumper-grau.png', 'img/shop-images/jumper-grau.png', 'img/shop-images/jumper-grau.png', 'img/shop-images/jumper-grau.png', NULL, 0, 0, 1, NULL),
(10, 'Pilatesring', 24.99, 2, 'Dieser Pilatesring mit ergonomischen Griffen unterstützt perfekt beim Training. Es können sowohl Beine, als auch Arme und Körpermitte gestärkt und gestrafft werden.', 'img/shop-images/yogaring.png', 'rbtbtb', 'tbtbtb', 'rtbtb', NULL, 0, 0, 1, NULL),
(11, 'Notizbuch', 15.99, 3, 'Unser Notizbuch ist der perfekte Begleiter durch den Tag. Er enthält einen Kalender und Bildanleitungen für Yoga und Pilates Übungen sowie Karierte Seiten für Notizen.', 'img/shop-images/notebook.png', 'rbtbtb', 'tbtbtb', 'rtbtb', NULL, 0, 0, 1, NULL),
(12, 'Herren T-Shirt', 19.99, 1, 'Herren T-Shirt aus 100% Bio-Baumwolle. Durch die angenehme Passform und den längeren Schnitt ist dieses schlichte T-Shirt optimal um Yoga zu praktizieren. Maschienenwaschbar bei 40°C.', 'img/shop-images/herren-tshirt-rot.png', 'rbtbtb', 'tbtbtb', 'rtbtb', NULL, 0, 0, 1, NULL),
(13, 'Lotus Band', 9.99, 3, 'Latex Armband mit Lotusyoga Logo', 'img/shop-images/2er-band.png', 'img/shop-images/2er-band.png', 'img/shop-images/2er-band.png', 'img/shop-images/2er-band.png', NULL, 1, 5.99, 1, NULL),
(14, 'Lotus Band 3er', 15.99, 3, 'Latex Armband mit Lotusyoga Logo', 'img/shop-images/3er-band.png', 'img/shop-images/3er-band.png', 'img/shop-images/3er-band.png', 'img/shop-images/3er-band.png', NULL, 1, 8.99, 1, NULL),
(15, 'Baumwollband', 12.99, 3, 'Das Baumwollband ist länger als andere Baumwollbänder um in jeder Position perfekte unterstützung zu bieten. ', 'img/shop-images/baumwoll-band.png', 'img/shop-images/baumwoll-band.png', 'img/shop-images/baumwoll-band.png', 'img/shop-images/baumwoll-band.png', NULL, 1, 9.99, 1, NULL),
(16, 'Core Trainer', 29.99, 3, 'Core Trainer', 'img/shop-images/core-trainer.png', 'img/shop-images/core-trainer.png', 'img/shop-images/core-trainer.png', 'img/shop-images/core-trainer.png', NULL, 1, 19.99, 1, NULL),
(17, 'Lotus Handtuch', 12.99, 2, 'Das super sugfähige Handtuch ist speziell für Sportler entwickelt worden. Es ist nicht nur praktisch sondern auch angenehm weich, da es aus 100% Baumwolle besteht. Es ist 50cm breit und 80cm lang und Maschienenwaschbar bei bis zu 60°C.', 'img/shop-images/handtuch.png', 'img/shop-images/handtuch.png', 'img/shop-images/handtuch.png', 'img/shop-images/handtuch.png', NULL, 0, 0, 1, NULL),
(18, 'Yoga Matte', 19.99, 2, 'Yoga Matte 5mm, zweifarbig. Die Yogamatte bietet optimalen Halt und ist besonders rutschfest.', 'img/shop-images/yogamatte.png', 'img/shop-images/yogamatte.png', 'img/shop-images/yogamatte.png', 'img/shop-images/yogamatte.png', NULL, 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shop_categories`
--

DROP TABLE IF EXISTS `shop_categories`;
CREATE TABLE IF NOT EXISTS `shop_categories` (
  `id` int(11) NOT NULL,
  `_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `_name`, `is_active`, `deleted_at`) VALUES
(1, 'Bekleidung', 1, NULL),
(2, 'Zubehör', 1, NULL),
(3, 'Sonstiges', 1, NULL),
(4, 'Alle', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `socialmedia_icons`
--

DROP TABLE IF EXISTS `socialmedia_icons`;
CREATE TABLE IF NOT EXISTS `socialmedia_icons` (
  `id` int(11) NOT NULL,
  `icon_name` varchar(100) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `socialmedia_icons`
--

INSERT INTO `socialmedia_icons` (`id`, `icon_name`, `pic`, `is_active`, `deleted_at`) VALUES
(1, 'test', 'test', 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) unsigned NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL DEFAULT '',
  `stock` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `size`, `stock`, `deleted_at`) VALUES
(1, 7, 'xs', NULL, NULL),
(2, 7, 's', 22, NULL),
(3, 7, 'm', 34, NULL),
(4, 7, 'L', 9, NULL),
(5, 7, 'xl', 4, NULL),
(27, 9, 'xs', 49, NULL),
(28, 9, 's', 25, NULL),
(29, 9, 'm', 49, NULL),
(30, 9, 'l', 61, NULL),
(31, 9, 'xl', 16, NULL),
(34, 12, 'xs', 72, NULL),
(35, 12, 's', 95, NULL),
(36, 12, 'm', 19, NULL),
(37, 12, 'l', 26, NULL),
(38, 12, 'xl', 25, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `_name` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `pref_delivery` varchar(40) NOT NULL,
  `pref_payment` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `zip_code` int(4) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `_name`, `fullname`, `email`, `password_hash`, `gender`, `birthday`, `pref_delivery`, `pref_payment`, `address`, `zip_code`, `city`, `created_at`, `is_active`, `deleted_at`) VALUES
(2, 'alex', '', 'alex@bla.at', 'hallo', 'female', '1992-08-30', 'Post', 'Rechnung', 'Blagasse 42/13', 1210, NULL, '2016-04-19 07:19:59', 1, NULL),
(3, 'Babsi', '', 'babsi.babsi@babsi.at', 'pw123', 'female', '2016-04-11', 'DHL', 'Rechnung', 'Schönbrunn 4/44', 1010, NULL, '2016-04-19 08:06:27', 1, NULL),
(4, 'berni', '', 'berni@bla.at', 'pw123', 'male', '1989-06-15', 'dhl', 'vorkasse', 'zuhause 123', 1220, NULL, '0000-00-00 00:00:00', 1, NULL),
(5, 'test', '', 'test@test', 'test', 'male', '1998-06-18', 'post', 'rechnung', 'bla 1234', 1010, NULL, '2016-05-02 09:35:50', 1, NULL),
(6, 'ferdi', '', 'ferdi@ferdi.at', 'ferdi123', 'male', '1987-09-16', 'post', 'vorkasse', 'siebenbrunnenplatz 1', 1050, NULL, '0000-00-00 00:00:00', 1, NULL),
(7, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-05-02 09:37:13', 0, '0000-00-00 00:00:00'),
(8, 'gusi', '', 'gusi@bla.bla', 'hallo', 'male', '1991-05-27', 'dpd', 'rechnung', 'Siebenbrunnengasse 88/13', 1050, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-05-02 14:02:47', 0, '0000-00-00 00:00:00'),
(10, 'asdasd', 'hallo', 'halloa@ad.asd', '$2y$10$N3vs.Spr5NcEtedhChiCrehow8aNNDcKLjMaJJdrKBYpcWImdnoS2', 'hallo', '1212-12-12', '', '', 'hallo', 0, NULL, '2016-07-25 16:25:51', 0, '0000-00-00 00:00:00'),
(11, 'asdasd', 'asdasdasd', 'asdasd', '$2y$10$zkNS9gq9j.ABKDgnh0xaHeG0LPn80EP70qqJ/yW9ytgqV3YFwtHF6', 'asd', '0123-03-12', '', '', 'asd', 0, NULL, '2016-07-26 10:31:38', 0, '0000-00-00 00:00:00'),
(12, 'asdasd', 'asdasdasd', 'email@bla', 'asd', 'male', '0123-03-12', 'asd', 'asd', 'asd', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(13, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 12:02:28', 0, '0000-00-00 00:00:00'),
(14, 'asdasd', 'asdasdasd', 'email@bla', 'asd', 'male', '0123-03-12', 'asd', 'asd', 'asd', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(15, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 12:06:05', 0, '0000-00-00 00:00:00'),
(16, 'asdasd', 'asdasdasd', 'email@bla', 'asd', 'male', '0123-03-12', 'asd', 'asd', 'asd', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(17, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 12:06:35', 0, '0000-00-00 00:00:00'),
(18, 'testberti', 'testberti', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(19, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:19:33', 0, '0000-00-00 00:00:00'),
(20, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '2016-07-12', 'asdasd', 'asd', 'asd', 0, NULL, '2016-07-26 13:21:00', 0, '0000-00-00 00:00:00'),
(21, '', '', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(22, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:24:18', 0, '0000-00-00 00:00:00'),
(23, '', '', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(24, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:24:22', 0, '0000-00-00 00:00:00'),
(27, '', '', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(28, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:24:32', 0, '0000-00-00 00:00:00'),
(29, '', '', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(30, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:24:38', 0, '0000-00-00 00:00:00'),
(31, '', '', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(32, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:24:43', 0, '0000-00-00 00:00:00'),
(33, '', '', 'email@bla', 'test', '', '0000-00-00', '', '', '', 0, NULL, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(34, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:24:56', 0, '0000-00-00 00:00:00'),
(35, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:30:41', 0, '0000-00-00 00:00:00'),
(36, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:30:42', 0, '0000-00-00 00:00:00'),
(37, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:32:37', 0, '0000-00-00 00:00:00'),
(38, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:32:38', 0, '0000-00-00 00:00:00'),
(39, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:35:26', 0, '0000-00-00 00:00:00'),
(40, '', '', '', '', '', '0000-00-00', '', '', '', 0, NULL, '2016-07-26 13:35:27', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_messages`
--

DROP TABLE IF EXISTS `user_messages`;
CREATE TABLE IF NOT EXISTS `user_messages` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `telno` int(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_answered` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `user_messages`
--

INSERT INTO `user_messages` (`id`, `fullname`, `telno`, `email`, `comment`, `created_at`, `is_answered`, `deleted_at`) VALUES
(1, 'Chrisopher', 6, 'df@asd.at', 'asd', '2016-07-26 20:19:29', NULL, NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `bestell_items`
--
ALTER TABLE `bestell_items`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `breadcrubms_checkout`
--
ALTER TABLE `breadcrubms_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `coupon_codes`
--
ALTER TABLE `coupon_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `delivery_options`
--
ALTER TABLE `delivery_options`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `header_items`
--
ALTER TABLE `header_items`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `menu_backend_items`
--
ALTER TABLE `menu_backend_items`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `socialmedia_icons`
--
ALTER TABLE `socialmedia_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `bestell_items`
--
ALTER TABLE `bestell_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `breadcrubms_checkout`
--
ALTER TABLE `breadcrubms_checkout`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT für Tabelle `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT für Tabelle `coupon_codes`
--
ALTER TABLE `coupon_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT für Tabelle `delivery_options`
--
ALTER TABLE `delivery_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT für Tabelle `header_items`
--
ALTER TABLE `header_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `menu_backend_items`
--
ALTER TABLE `menu_backend_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT für Tabelle `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `socialmedia_icons`
--
ALTER TABLE `socialmedia_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT für Tabelle `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;