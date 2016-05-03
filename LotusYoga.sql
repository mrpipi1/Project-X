-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2016 at 12:43 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LotusYoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `password_hash` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `password_hash`, `is_active`, `deleted_at`) VALUES
(1, 'alex', 'alexLadmin.at', 'pw123', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bestell_items`
--

CREATE TABLE `bestell_items` (
  `id` int(11) NOT NULL,
  `bestellnummer` int(100) NOT NULL,
  `shopitem_id` int(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bestell_items`
--

INSERT INTO `bestell_items` (`id`, `bestellnummer`, `shopitem_id`, `is_active`, `deleted_at`) VALUES
(3, 2323, 23, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `headline` varchar(150) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `headline`, `text`, `is_active`, `deleted_at`) VALUES
(3, 'Über Uns', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(4, 'Datenschutz', 'Lorem Ipsum\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(5, 'test', 'test', 1, NULL),
(6, 'rrtreb', 'regbergb', 1, NULL),
(7, 'rrtr', 'reert', 1, NULL),
(8, 'qwefwf', 'wqfwfewf', 1, NULL),
(9, 'uiko8l', 'muuimi76m6', 1, NULL),
(10, 'ukmumum', 'm67m67', 1, NULL),
(11, 'h tehh', 'enb ', 1, NULL),
(12, 'erhrh', 'rthzhtb', 1, NULL),
(13, 'fbgrenn', 'ku,iz,io', 1, NULL),
(14, 'uk,u,u', 'ut,ui,', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `beschreibung` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `_name`, `beschreibung`, `is_active`, `deleted_at`) VALUES
(3, 'yin yoga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(4, 'ashtanga yoga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL),
(5, 'tri yoga', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telno` varchar(20) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `beschreibung` varchar(700) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `email`, `telno`, `pic`, `courses_id`, `beschreibung`, `is_active`, `deleted_at`) VALUES
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
-- Table structure for table `header_items`
--

CREATE TABLE `header_items` (
  `id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `header_items`
--

INSERT INTO `header_items` (`id`, `h_name`, `is_active`, `deleted_at`) VALUES
(1, 'login', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_backend_items`
--

CREATE TABLE `menu_backend_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_backend_items`
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `bestellnummer` int(50) NOT NULL,
  `users_id` int(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gutscheincode` varchar(40) NOT NULL,
  `zahlungsart` varchar(40) NOT NULL,
  `versandart` varchar(40) NOT NULL,
  `lieferadresse` varchar(60) NOT NULL,
  `rechnungsadresse` varchar(60) NOT NULL,
  `price` float NOT NULL,
  `bestellstatus` varchar(20) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `bestellnummer`, `users_id`, `created_at`, `gutscheincode`, `zahlungsart`, `versandart`, `lieferadresse`, `rechnungsadresse`, `price`, `bestellstatus`, `deleted_at`) VALUES
(1, 2, 0, '0000-00-00 00:00:00', '123', 'rechnung', 'dhl', 'da', 'auch da', 13.33, 'nicht da', NULL),
(2, 0, 0, '2016-04-29 16:01:23', '', '', '', '', '', 0, '', NULL),
(3, 0, 0, '2016-04-29 16:01:40', '', '', '', '', '', 0, '', NULL),
(4, 0, 0, '2016-04-29 16:01:40', '', '', '', '', '', 0, '', NULL),
(5, 0, 0, '2016-04-29 21:51:08', '', '', '', '', '', 0, '', NULL),
(6, 0, 0, '2016-04-29 21:52:00', '', '', '', '', '', 0, '', NULL),
(7, 2, 0, '2016-04-29 21:52:21', '333', 'bla', 'dhl', 'da', 'auch da', 13.99, 'nicht da', NULL),
(8, 0, 0, '2016-04-29 21:54:00', '', '', '', '', '', 0, '', NULL),
(9, 0, 0, '2016-04-29 22:05:23', '', '', '', '', '', 0, '', NULL),
(10, 0, 0, '0000-00-00 00:00:00', '133', 'rf', 'ewfr', 'rff', 'frf', 212, 'wff', NULL),
(11, 0, 0, '2016-04-29 22:06:29', '', '', '', '', '', 0, '', NULL),
(12, 0, 0, '0000-00-00 00:00:00', '133', 'rf', 'ewfr', 'rff', 'frf', 212, 'wff', NULL),
(13, 0, 0, '2016-04-29 22:07:01', '', '', '', '', '', 0, '', NULL),
(14, 12, 0, '0000-00-00 00:00:00', '123', 'rechnung', 'post', 'zuhause', 'zauhause', 12.99, 'versandt', NULL),
(15, 0, 0, '2016-04-29 22:08:00', '', '', '', '', '', 0, '', NULL),
(16, 12, 0, '0000-00-00 00:00:00', '123', 'rechnung', 'post', 'zuhause', 'zauhause', 12.99, 'versandt', NULL),
(17, 0, 0, '2016-04-29 22:09:40', '', '', '', '', '', 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `products_name` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `shop_categories_id` int(10) NOT NULL,
  `beschreibung` varchar(300) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `thumb_1` varchar(500) NOT NULL,
  `thumb_2` varchar(500) NOT NULL,
  `thumb_3` varchar(500) NOT NULL,
  `size` varchar(10) NOT NULL,
  `in_aktion` tinyint(1) NOT NULL DEFAULT '0',
  `price_in_aktion` float NOT NULL,
  `stock` int(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products_name`, `price`, `shop_categories_id`, `beschreibung`, `pic`, `thumb_1`, `thumb_2`, `thumb_3`, `size`, `in_aktion`, `price_in_aktion`, `stock`, `is_active`, `deleted_at`) VALUES
(7, 'test', 12, 3, 'jkjnjk', 'test', 'rbtbtb', 'tbtbtb', 'rtbtb', 'm', 0, 0, 4, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL,
  `_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `_name`, `is_active`, `deleted_at`) VALUES
(1, 'Bekleidung', 1, NULL),
(2, 'Zubehör', 1, NULL),
(3, 'Sonstiges', 1, NULL),
(4, 'Alle', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia_icons`
--

CREATE TABLE `socialmedia_icons` (
  `id` int(11) NOT NULL,
  `icon_name` varchar(100) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socialmedia_icons`
--

INSERT INTO `socialmedia_icons` (`id`, `icon_name`, `pic`, `is_active`, `deleted_at`) VALUES
(1, 'test', 'test', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `_name`, `fullname`, `email`, `password_hash`, `gender`, `birthday`, `pref_delivery`, `pref_payment`, `address`, `zip_code`, `created_at`, `is_active`, `deleted_at`) VALUES
(2, 'alex', '', 'alex@bla.at', 'hallo', 'female', '1992-08-30', 'Post', 'Rechnung', 'Blagasse 42/13', 1210, '2016-04-19 09:19:59', 1, NULL),
(3, 'Babsi', '', 'babsi.babsi@babsi.at', 'pw123', 'female', '2016-04-11', 'DHL', 'Rechnung', 'Schönbrunn 4/44', 1010, '2016-04-19 10:06:27', 0, '0000-00-00 00:00:00'),
(4, 'berni', '', 'berni@bla.at', 'pw123', 'male', '1989-06-15', 'dhl', 'vorkasse', 'zuhause 123', 1220, '0000-00-00 00:00:00', 1, NULL),
(5, 'test', '', 'test@test', 'test', 'male', '1998-06-18', 'post', 'rechnung', 'bla 1234', 1010, '2016-05-02 11:35:50', 0, NULL),
(6, 'ferdi', '', 'ferdi@ferdi.at', 'ferdi123', 'male', '1987-09-16', 'post', 'vorkasse', 'siebenbrunnenplatz 1', 1050, '0000-00-00 00:00:00', 1, NULL),
(7, '', '', '', '', '', '0000-00-00', '', '', '', 0, '2016-05-02 11:37:13', 1, NULL),
(8, 'gusi', '', 'gusi@bla.bla', 'hallo', 'male', '1991-05-27', 'dpd', 'rechnung', 'Siebenbrunnengasse 88/13', 1050, '0000-00-00 00:00:00', 1, NULL),
(9, '', '', '', '', '', '0000-00-00', '', '', '', 0, '2016-05-02 16:02:47', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `telno` int(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_answered` tinyint(1) NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestell_items`
--
ALTER TABLE `bestell_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_items`
--
ALTER TABLE `header_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_backend_items`
--
ALTER TABLE `menu_backend_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia_icons`
--
ALTER TABLE `socialmedia_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bestell_items`
--
ALTER TABLE `bestell_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `header_items`
--
ALTER TABLE `header_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_backend_items`
--
ALTER TABLE `menu_backend_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `socialmedia_icons`
--
ALTER TABLE `socialmedia_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
