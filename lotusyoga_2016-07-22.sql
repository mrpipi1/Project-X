# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: lotusyoga
# Generation Time: 2016-07-22 15:24:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `password_hash` varchar(250) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `password_hash`, `is_active`, `deleted_at`)
VALUES
	(1,'alex','alexLadmin.at','pw123',1,NULL);

/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bestell_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bestell_items`;

CREATE TABLE `bestell_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bestellnummer` int(100) NOT NULL,
  `shopitem_id` int(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `bestell_items` WRITE;
/*!40000 ALTER TABLE `bestell_items` DISABLE KEYS */;

INSERT INTO `bestell_items` (`id`, `bestellnummer`, `shopitem_id`, `is_active`, `deleted_at`)
VALUES
	(3,2323,23,1,NULL);

/*!40000 ALTER TABLE `bestell_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `headline`, `content`, `is_active`, `deleted_at`)
VALUES
	(3,'Über Uns','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(4,'Datenschutz','Lorem Ipsum\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(5,'test','test',1,NULL),
	(6,'rrtreb','regbergb',1,NULL),
	(7,'rrtr','reert',1,NULL),
	(8,'qwefwf','wqfwfewf',1,NULL),
	(9,'uiko8l','muuimi76m6',1,NULL),
	(10,'ukmumum','m67m67',1,NULL),
	(11,'h tehh','enb ',1,NULL),
	(12,'erhrh','rthzhtb',1,NULL),
	(13,'fbgrenn','ku,iz,io',1,NULL),
	(14,'uk,u,u','ut,ui,',1,NULL);

/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`id`, `_name`, `description`, `is_active`, `deleted_at`)
VALUES
	(3,'yin yoga','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(4,'ashtanga yoga','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(5,'tri yoga','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL);

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telno` varchar(20) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `courses_id` int(11) NOT NULL,
  `description` varchar(700) NOT NULL DEFAULT '',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;

INSERT INTO `employees` (`id`, `fullname`, `email`, `telno`, `pic`, `courses_id`, `description`, `is_active`, `deleted_at`)
VALUES
	(1,'','','','img/mitarbeiter/1.png',3,'',1,NULL),
	(2,'Lisbeth Thekla','l.thekla@lotusyoga.at','0664 555 555','img/mitarbeiter/2.png',4,'Hallo, mein Name ist Lisbeth Thekla. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(3,'Clara Augustine','c.augustine@lotusyoga.at','0664 555 555','img/mitarbeiter/3.png',5,'Hallo, mein Name ist Clara Augustine. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(4,'Leonie Barbara','l.barbara@lotusyoga.at','0664 555 555','img/mitarbeiter/4.png',3,'Hallo, mein Name ist Lenoie Barbara. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n',1,NULL),
	(5,'Zella Kristiane','z.kristiane@lotusyoga.at','0664 555 555','img/mitarbeiter/5.png',4,'Hallo, mein Name ist Zella Kristiane. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(6,'Laurenz Luri','l.luri@lotusyoga.at','0664 555 555','img/mitarbeiter/6.png',5,'Hallo, mein Name ist Laurenz Luri. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(7,'Elli Sophie','e.sophie@lotusyoga.at','0664 555 555','img/mitarbeiter/7.png',3,'Hallo, mein Name ist Elli Sophie. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(8,'Lukas Bernhard','l.bernhard@lotusyoga.at','0664 555 555','img/mitarbeiter/8.png',4,'Hallo, mein Name ist Lukas Bernhard. Ich bin ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1,NULL),
	(9,'Katrin Antonia','k.antonia@lotusyoga.at','0664 555 555','img/mitarbeiter/9.png',5,' Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',0,'0000-00-00 00:00:00');

/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table header_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `header_items`;

CREATE TABLE `header_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_name` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `header_items` WRITE;
/*!40000 ALTER TABLE `header_items` DISABLE KEYS */;

INSERT INTO `header_items` (`id`, `h_name`, `is_active`, `deleted_at`)
VALUES
	(1,'login',1,NULL);

/*!40000 ALTER TABLE `header_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu_backend_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_backend_items`;

CREATE TABLE `menu_backend_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menu_backend_items` WRITE;
/*!40000 ALTER TABLE `menu_backend_items` DISABLE KEYS */;

INSERT INTO `menu_backend_items` (`id`, `item_name`, `is_active`, `deleted_at`)
VALUES
	(1,'dashboard',1,NULL),
	(2,'statistik',1,NULL),
	(3,'Admins',1,NULL),
	(4,'users',1,NULL),
	(5,'employees',1,NULL),
	(6,'courses',1,NULL),
	(7,'contents',1,NULL),
	(8,'shop_categories',1,NULL),
	(9,'products',1,NULL),
	(10,'orders',1,NULL),
	(11,'bestell_items',1,NULL),
	(12,'socialmedia_icons',1,NULL),
	(13,'menu_backend_items',1,NULL),
	(14,'header_items',1,NULL),
	(15,'user_messages',1,NULL);

/*!40000 ALTER TABLE `menu_backend_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `shop_categories_id` int(10) NOT NULL,
  `beschreibung` varchar(300) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `thumb_1` varchar(500) NOT NULL,
  `thumb_2` varchar(500) NOT NULL,
  `thumb_3` varchar(500) NOT NULL,
  `in_aktion` tinyint(1) NOT NULL DEFAULT '0',
  `price_in_aktion` float NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `products_name`, `price`, `shop_categories_id`, `beschreibung`, `pic`, `thumb_1`, `thumb_2`, `thumb_3`, `in_aktion`, `price_in_aktion`, `is_active`, `deleted_at`)
VALUES
	(7,'Damen T-Shirt',19.99,1,'Damen T-Shirt aus 100% Bio-Baumwolle. Durch die angenehme Passform und den längeren Schnitt ist dieses schlichte T-Shirt optimal um Yoga zu praktizieren. Maschienenwaschbar bei 40°C.','test','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(8,'Yogabag & Matte',39.99,3,'jkjnjk','test','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(9,'Jumper',39.99,1,'Jumper - Unisex','test','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(10,'Yogaring',24.99,3,'jkjnjk','test','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(11,'Notizbuch',19.99,3,'jkjnjk','test','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(12,'Herren T-Shirt',19.99,3,'jkjnjk','test','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_categories`;

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `shop_categories` WRITE;
/*!40000 ALTER TABLE `shop_categories` DISABLE KEYS */;

INSERT INTO `shop_categories` (`id`, `_name`, `is_active`, `deleted_at`)
VALUES
	(1,'Bekleidung',1,NULL),
	(2,'Zubehör',1,NULL),
	(3,'Sonstiges',1,NULL),
	(4,'Alle',1,NULL);

/*!40000 ALTER TABLE `shop_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table socialmedia_icons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `socialmedia_icons`;

CREATE TABLE `socialmedia_icons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon_name` varchar(100) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `socialmedia_icons` WRITE;
/*!40000 ALTER TABLE `socialmedia_icons` DISABLE KEYS */;

INSERT INTO `socialmedia_icons` (`id`, `icon_name`, `pic`, `is_active`, `deleted_at`)
VALUES
	(1,'test','test',1,NULL);

/*!40000 ALTER TABLE `socialmedia_icons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table stock
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `color` varchar(11) NOT NULL DEFAULT '',
  `size` varchar(11) NOT NULL DEFAULT '',
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;

INSERT INTO `stock` (`id`, `product_id`, `color`, `size`, `stock`)
VALUES
	(1,7,'black','xs',NULL),
	(2,7,'black','s',22),
	(3,7,'black','m',34),
	(4,7,'black','l',9),
	(5,7,'black','xl',4),
	(6,7,'red','xs',12),
	(7,7,'red','s',28),
	(8,7,'red','m',25),
	(9,7,'red','l',14),
	(10,7,'red','xl',29),
	(11,7,'gray','xs',21),
	(12,7,'gray','s',NULL),
	(13,7,'gray','m',53),
	(14,7,'gray','l',31),
	(15,7,'gray','xl',30),
	(16,8,'','',67),
	(17,9,'black','xs',3),
	(18,9,'black','s',54),
	(19,9,'black','m',15),
	(20,9,'black','l',13),
	(21,9,'black','xl',71),
	(22,9,'red','xs',45),
	(23,9,'red','s',16),
	(24,9,'red','m',25),
	(25,9,'red','l',82),
	(26,9,'red','xl',49),
	(27,9,'gray','xs',49),
	(28,9,'gray','s',25),
	(29,9,'gray','m',49),
	(30,9,'gray','l',61),
	(31,9,'gray','xl',16),
	(32,10,'','',93),
	(33,11,'','',107),
	(34,12,'black','xs',72),
	(35,12,'black','s',95),
	(36,12,'black','m',19),
	(37,12,'black','l',26),
	(38,12,'black','xl',25),
	(39,12,'red','xs',11),
	(40,12,'red','s',61),
	(41,12,'red','m',4),
	(42,12,'red','l',19),
	(43,12,'red','xl',51),
	(44,12,'gray','xs',37),
	(45,12,'gray','s',82),
	(46,12,'gray','m',101),
	(47,12,'gray','l',29),
	(48,12,'gray','xl',10);

/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_messages`;

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `telno` int(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_answered` tinyint(1) NOT NULL,
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `_name`, `fullname`, `email`, `password_hash`, `gender`, `birthday`, `pref_delivery`, `pref_payment`, `address`, `zip_code`, `created_at`, `is_active`, `deleted_at`)
VALUES
	(2,'alex','','alex@bla.at','hallo','female','1992-08-30','Post','Rechnung','Blagasse 42/13',1210,'2016-04-19 11:19:59',1,NULL),
	(3,'Babsi','','babsi.babsi@babsi.at','pw123','female','2016-04-11','DHL','Rechnung','Schönbrunn 4/44',1010,'2016-04-19 12:06:27',0,'0000-00-00 00:00:00'),
	(4,'berni','','berni@bla.at','pw123','male','1989-06-15','dhl','vorkasse','zuhause 123',1220,'0000-00-00 00:00:00',1,NULL),
	(5,'test','','test@test','test','male','1998-06-18','post','rechnung','bla 1234',1010,'2016-05-02 13:35:50',0,NULL),
	(6,'ferdi','','ferdi@ferdi.at','ferdi123','male','1987-09-16','post','vorkasse','siebenbrunnenplatz 1',1050,'0000-00-00 00:00:00',1,NULL),
	(7,'','','','','','0000-00-00','','','',0,'2016-05-02 13:37:13',1,NULL),
	(8,'gusi','','gusi@bla.bla','hallo','male','1991-05-27','dpd','rechnung','Siebenbrunnengasse 88/13',1050,'0000-00-00 00:00:00',1,NULL),
	(9,'','','','','','0000-00-00','','','',0,'2016-05-02 18:02:47',1,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
