# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: lotusyoga
# Generation Time: 2016-07-29 14:51:45 +0000
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
	(1,'alex','alexLadmin.at','pw123',1,NULL),
	(2,'admin','asd','$2y$10$N3vs.Spr5NcEtedhChiCrehow8aNNDcKLjMaJJdrKBYpcWImdnoS2',1,NULL),
	(3,'test','test@test.bla','1234',1,NULL),
	(4,'','','',0,'0000-00-00 00:00:00');

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


# Dump of table breadcrubms_checkout
# ------------------------------------------------------------

DROP TABLE IF EXISTS `breadcrubms_checkout`;

CREATE TABLE `breadcrubms_checkout` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `breadcrubms_checkout` WRITE;
/*!40000 ALTER TABLE `breadcrubms_checkout` DISABLE KEYS */;

INSERT INTO `breadcrubms_checkout` (`id`, `name`, `position`, `is_active`, `deleted_at`)
VALUES
	(1,'Warenkorb',1,1,NULL),
	(2,'Anmelden',2,1,NULL),
	(3,'Adresse',3,1,NULL),
	(4,'Bezahlung & Versand',4,1,NULL),
	(5,'Zusammenfassung',5,1,NULL);

/*!40000 ALTER TABLE `breadcrubms_checkout` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(1000) NOT NULL,
  `type` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL DEFAULT '',
  `sequence` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `_name`, `type`, `content`, `sequence`, `is_active`, `deleted_at`)
VALUES
	(3,'','Über Uns','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',0,1,NULL),
	(4,'','Datenschutz','Lorem Ipsum\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',0,1,NULL),
	(5,'','test','test',0,1,NULL),
	(6,'','rrtreb','regbergb',0,1,NULL),
	(7,'','rrtr','reert',0,1,NULL),
	(8,'','qwefwf','wqfwfewf',0,1,NULL),
	(9,'','uiko8l','muuimi76m6',0,1,NULL),
	(10,'','ukmumum','m67m67',0,1,NULL),
	(11,'','h tehh','enb ',0,1,NULL),
	(12,'','erhrh','rthzhtb',0,1,NULL),
	(13,'','fbgrenn','ku,iz,io',0,0,'0000-00-00 00:00:00'),
	(14,'','uk,u,u','ut,ui,',0,0,'0000-00-00 00:00:00'),
	(15,'Kontakt','headline','Kontakt',0,1,NULL),
	(16,'Kontakt','content','Du hast Fragen ?',1,1,NULL),
	(17,'Kontakt','subheadline','Unser Studio',3,1,NULL),
	(18,'Kontakt','tel','01 555 555 55',4,1,NULL),
	(19,'Kontakt','content','Kontaktiere uns doch einfach und wir melden uns unverzüglich.',2,1,NULL),
	(20,'Kontakt','email','office@lotusyoga.at',5,1,NULL),
	(21,'Kontakt','content','Siebensterngasse 2',6,1,NULL),
	(22,'Kontakt','content','Österreich, Wien',8,1,NULL),
	(23,'Kontakt','content','Stock 1 | Tür 13',7,1,NULL),
	(24,'Kontakt','content','1070',9,1,NULL),
	(25,'Map','lat','48.20294029999999',0,1,NULL),
	(26,'Map','lng','16.356826899999987',1,1,NULL),
	(27,'contactform_main','name','Vorname | Nachname*',1,1,NULL),
	(28,'contactform_main','tel','Telefonnummer*',2,1,NULL),
	(29,'contactform_main','email','E-Mailadresse*',3,1,NULL),
	(30,'contactform_main','comment','Kommentar',4,1,NULL),
	(31,'contactform_main','submit','Absenden',5,1,NULL),
	(32,'contactform_main','subheadline','Schreibe uns',0,1,NULL),
	(33,'footer','subheadline','Socialmedia',0,1,NULL),
	(34,'footer','Facebook','http://www.facebook.com',1,1,NULL),
	(35,'footer','Instagram','http://www.instagram.com',2,1,NULL),
	(36,'footer','Youtube','http://www.youtube.com',3,1,NULL),
	(37,'footer','subheadline','Kurse',4,1,NULL),
	(38,'footer','Yin Yoga','#',5,1,NULL),
	(39,'footer','Ashtanga Yoga','#',6,1,NULL),
	(40,'footer','Tri Yoga','#',7,1,NULL),
	(41,'footer','subheadline','Shop',8,1,NULL),
	(42,'footer','Angebote','#',9,1,NULL),
	(43,'footer','Rückgaberecht','#',10,1,NULL),
	(44,'footer','Lorem','#',11,1,NULL),
	(45,'footer','subheadline','Lorem',12,1,NULL),
	(46,'footer','Impressum','index.php?page=Impressum',13,1,NULL),
	(47,'footer','AGB','index.php?page=AGB',14,1,NULL),
	(48,'footer','Datenschutz','index.php?page=Datenschutz',15,1,NULL),
	(49,'footer','FAQs','index.php?page=FAQs',16,1,NULL);

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
	(1,'ueber uns',1,NULL),
	(2,'kurse',1,NULL),
	(3,'aktionen',1,NULL),
	(4,'kontakt',1,NULL),
	(5,'shop',1,NULL),
	(6,'login',1,NULL);

/*!40000 ALTER TABLE `header_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;

INSERT INTO `log` (`id`, `_name`, `type`, `location`, `created_at`, `deleted_at`)
VALUES
	(1,'Franzi','hinzugefügt','users','2016-07-26 21:27:00',NULL);

/*!40000 ALTER TABLE `log` ENABLE KEYS */;
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


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `shop_categories_id` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
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

INSERT INTO `products` (`id`, `_name`, `price`, `shop_categories_id`, `description`, `pic`, `thumb_1`, `thumb_2`, `thumb_3`, `in_aktion`, `price_in_aktion`, `is_active`, `deleted_at`)
VALUES
	(7,'Damen T-Shirt',19.99,1,'Damen T-Shirt aus 100% Bio-Baumwolle. Durch die angenehme Passform und den längeren Schnitt ist dieses schlichte T-Shirt optimal um Yoga zu praktizieren. Maschienenwaschbar bei 40°C.','img/shop-images/damen-tshirt.png','img/shop-images/damen-tshirt.png','img/shop-images/jumper-grau.png','img/shop-images/jumper_white.png',0,0,1,NULL),
	(8,'Yogabag & Matte',39.99,2,'jkjnjk','img/shop-images/tragetasche_yogamatte.png','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(9,'Jumper',39.99,1,'Jumper - Unisex','img/shop-images/jumper-grau.png','img/shop-images/jumper-grau.png','img/shop-images/jumper-grau.png','img/shop-images/jumper-grau.png',0,0,1,NULL),
	(10,'Yogaring',24.99,2,'jkjnjk','img/shop-images/yogaring.png','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(11,'Notizbuch',19.99,3,'jkjnjk','img/shop-images/notebook.png','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(12,'Herren T-Shirt',19.99,1,'jkjnjk','img/shop-images/herren-tshirt-rot.png','rbtbtb','tbtbtb','rtbtb',0,0,1,NULL),
	(13,'Lotus Band',9.99,3,'Latex Armband mit Lotusyoga Logo','img/shop-images/2er-band.png','img/shop-images/2er-band.png','img/shop-images/2er-band.png','img/shop-images/2er-band.png',1,5.99,1,NULL),
	(14,'Lotus Band 3er',15.99,3,'Latex Armband mit Lotusyoga Logo','img/shop-images/3er-band.png','img/shop-images/3er-band.png','img/shop-images/3er-band.png','img/shop-images/3er-band.png',1,8.99,1,NULL),
	(15,'Baumwollband',12.99,3,'Baumwollband','img/shop-images/baumwoll-band.png','img/shop-images/baumwoll-band.png','img/shop-images/baumwoll-band.png','img/shop-images/baumwoll-band.png',1,9.99,1,NULL),
	(16,'Core Trainer',29.99,3,'Core Trainer','img/shop-images/core-trainer.png','img/shop-images/core-trainer.png','img/shop-images/core-trainer.png','img/shop-images/core-trainer.png',1,19.99,1,NULL),
	(17,'Lotus Handtuch',12.99,2,'Handtuch','img/shop-images/handtuch.png','img/shop-images/handtuch.png','img/shop-images/handtuch.png','img/shop-images/handtuch.png',0,0,1,NULL),
	(18,'Yoga Matte',19.99,2,'Yoga Matte','img/shop-images/yogamatte.png','img/shop-images/yogamatte.png','img/shop-images/yogamatte.png','img/shop-images/yogamatte.png',0,0,1,NULL),
	(19,'asd',3,0,'asd','','asd','asd','asd',0,3,1,NULL),
	(20,'',0,0,'','','','','',0,0,1,NULL);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_answered` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_messages` WRITE;
/*!40000 ALTER TABLE `user_messages` DISABLE KEYS */;

INSERT INTO `user_messages` (`id`, `fullname`, `telno`, `email`, `comment`, `created_at`, `is_answered`, `deleted_at`)
VALUES
	(1,'Chrisopher',6,'df@asd.at','asd','2016-07-26 22:19:29',NULL,NULL);

/*!40000 ALTER TABLE `user_messages` ENABLE KEYS */;
UNLOCK TABLES;


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
  `city` varchar(40) DEFAULT NULL,
  `zip_code` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `_name`, `fullname`, `email`, `password_hash`, `gender`, `birthday`, `pref_delivery`, `pref_payment`, `address`, `city`, `zip_code`, `created_at`, `is_active`, `deleted_at`)
VALUES
	(2,'alex','Alex','alex@bla.at','hallo','female','1992-08-30','Post','Rechnung','Blagasse 42/13','Wien',1210,'2016-04-19 09:19:59',1,NULL),
	(3,'Babsi','','babsi.babsi@babsi.at','pw123','female','2016-04-11','DHL','Rechnung','Schönbrunn 4/44',NULL,1010,'2016-04-19 10:06:27',1,NULL),
	(4,'berni','','berni@bla.at','pw123','male','1989-06-15','dhl','vorkasse','zuhause 123','Wien',1220,'0000-00-00 00:00:00',1,NULL),
	(5,'test','','test@test','test','male','1998-06-18','post','rechnung','bla 1234',NULL,1010,'2016-05-02 11:35:50',1,NULL),
	(6,'ferdi','','ferdi@ferdi.at','ferdi123','male','1987-09-16','post','vorkasse','siebenbrunnenplatz 1',NULL,1050,'0000-00-00 00:00:00',1,NULL),
	(7,'','','','','','0000-00-00','','','',NULL,0,'2016-05-02 11:37:13',0,'0000-00-00 00:00:00'),
	(8,'gusi','','gusi@bla.bla','hallo','male','1991-05-27','dpd','rechnung','Siebenbrunnengasse 88/13',NULL,1050,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(9,'','','','','','0000-00-00','','','',NULL,0,'2016-05-02 16:02:47',0,'0000-00-00 00:00:00'),
	(10,'asdasd','hallo','halloa@ad.asd','$2y$10$N3vs.Spr5NcEtedhChiCrehow8aNNDcKLjMaJJdrKBYpcWImdnoS2','hallo','1212-12-12','','','hallo',NULL,0,'2016-07-25 18:25:51',0,'0000-00-00 00:00:00'),
	(11,'asdasd','asdasdasd','asdasd','$2y$10$zkNS9gq9j.ABKDgnh0xaHeG0LPn80EP70qqJ/yW9ytgqV3YFwtHF6','asd','0123-03-12','','','asd',NULL,0,'2016-07-26 12:31:38',0,'0000-00-00 00:00:00'),
	(12,'asdasd','asdasdasd','email@bla','asd','male','0123-03-12','asd','asd','asd',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(13,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 14:02:28',0,'0000-00-00 00:00:00'),
	(14,'asdasd','asdasdasd','email@bla','asd','male','0123-03-12','asd','asd','asd',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(15,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 14:06:05',0,'0000-00-00 00:00:00'),
	(16,'asdasd','asdasdasd','email@bla','asd','male','0123-03-12','asd','asd','asd',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(17,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 14:06:35',0,'0000-00-00 00:00:00'),
	(18,'testberti','testberti','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(19,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:19:33',0,'0000-00-00 00:00:00'),
	(20,'asdasd','asdasd','asdasd','asdasd','asdasd','2016-07-12','asdasd','asd','asd',NULL,0,'2016-07-26 15:21:00',0,'0000-00-00 00:00:00'),
	(21,'','','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(22,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:24:18',0,'0000-00-00 00:00:00'),
	(23,'','','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(24,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:24:22',0,'0000-00-00 00:00:00'),
	(27,'','','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(28,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:24:32',0,'0000-00-00 00:00:00'),
	(29,'','','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(30,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:24:38',0,'0000-00-00 00:00:00'),
	(31,'','','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(32,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:24:43',0,'0000-00-00 00:00:00'),
	(33,'','','email@bla','test','','0000-00-00','','','',NULL,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00'),
	(34,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:24:56',0,'0000-00-00 00:00:00'),
	(35,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:30:41',0,'0000-00-00 00:00:00'),
	(36,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:30:42',0,'0000-00-00 00:00:00'),
	(37,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:32:37',0,'0000-00-00 00:00:00'),
	(38,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:32:38',0,'0000-00-00 00:00:00'),
	(39,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:35:26',0,'0000-00-00 00:00:00'),
	(40,'','','','','','0000-00-00','','','',NULL,0,'2016-07-26 15:35:27',0,'0000-00-00 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;