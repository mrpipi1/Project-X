# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: lotusyoga
# Generation Time: 2016-07-31 09:00:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


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
  `color` varchar(100) DEFAULT NULL,
  `in_aktion` tinyint(1) NOT NULL DEFAULT '0',
  `price_in_aktion` float NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `_name`, `price`, `shop_categories_id`, `description`, `pic`, `thumb_1`, `thumb_2`, `thumb_3`, `color`, `in_aktion`, `price_in_aktion`, `is_active`, `deleted_at`)
VALUES
	(7,'Damen T-Shirt',19.99,1,'Damen T-Shirt aus 100% Bio-Baumwolle. Durch die angenehme Passform und den längeren Schnitt ist dieses schlichte T-Shirt optimal um Yoga zu praktizieren. Maschienenwaschbar bei 40°C.','img/shop-images/damen-tshirt.png','img/shop-images/damen-tshirt.png','img/shop-images/jumper-grau.png','img/shop-images/jumper_white.png',NULL,0,0,1,NULL),
	(8,'Yogabag & Matte',39.99,2,'Yogamatte mit praktischer Bag in schlichtem Schwarz. Mit einem verschließbaren Fach für Schlüssel oder Handy.','img/shop-images/tragetasche_yogamatte.png','rbtbtb','tbtbtb','rtbtb',NULL,0,0,1,NULL),
	(9,'Jumper',39.99,1,'Stylischer Jumper für Männer und Frauen. Aus 100% Baumwolle und Machienenwaschbar.','img/shop-images/jumper-grau.png','img/shop-images/jumper-grau.png','img/shop-images/jumper-grau.png','img/shop-images/jumper-grau.png',NULL,0,0,1,NULL),
	(10,'Pilatesring',24.99,2,'Dieser Pilatesring mit ergonomischen Griffen unterstützt perfekt beim Training. Es können sowohl Beine, als auch Arme und Körpermitte gestärkt und gestrafft werden.','img/shop-images/yogaring.png','rbtbtb','tbtbtb','rtbtb',NULL,0,0,1,NULL),
	(11,'Notizbuch',15.99,3,'Unser Notizbuch ist der perfekte Begleiter durch den Tag. Er enthält einen Kalender und Bildanleitungen für Yoga und Pilates Übungen sowie Karierte Seiten für Notizen.','img/shop-images/notebook.png','rbtbtb','tbtbtb','rtbtb',NULL,0,0,1,NULL),
	(12,'Herren T-Shirt',19.99,1,'Herren T-Shirt aus 100% Bio-Baumwolle. Durch die angenehme Passform und den längeren Schnitt ist dieses schlichte T-Shirt optimal um Yoga zu praktizieren. Maschienenwaschbar bei 40°C.','img/shop-images/herren-tshirt-rot.png','rbtbtb','tbtbtb','rtbtb',NULL,0,0,1,NULL),
	(13,'Lotus Band',9.99,3,'Latex Armband mit Lotusyoga Logo','img/shop-images/2er-band.png','img/shop-images/2er-band.png','img/shop-images/2er-band.png','img/shop-images/2er-band.png',NULL,1,5.99,1,NULL),
	(14,'Lotus Band 3er',15.99,3,'Latex Armband mit Lotusyoga Logo','img/shop-images/3er-band.png','img/shop-images/3er-band.png','img/shop-images/3er-band.png','img/shop-images/3er-band.png',NULL,1,8.99,1,NULL),
	(15,'Baumwollband',12.99,3,'Das Baumwollband ist länger als andere Baumwollbänder um in jeder Position perfekte unterstützung zu bieten. ','img/shop-images/baumwoll-band.png','img/shop-images/baumwoll-band.png','img/shop-images/baumwoll-band.png','img/shop-images/baumwoll-band.png',NULL,1,9.99,1,NULL),
	(16,'Core Trainer',29.99,3,'Core Trainer','img/shop-images/core-trainer.png','img/shop-images/core-trainer.png','img/shop-images/core-trainer.png','img/shop-images/core-trainer.png',NULL,1,19.99,1,NULL),
	(17,'Lotus Handtuch',12.99,2,'Das super sugfähige Handtuch ist speziell für Sportler entwickelt worden. Es ist nicht nur praktisch sondern auch angenehm weich, da es aus 100% Baumwolle besteht. Es ist 50cm breit und 80cm lang und Maschienenwaschbar bei bis zu 60°C.','img/shop-images/handtuch.png','img/shop-images/handtuch.png','img/shop-images/handtuch.png','img/shop-images/handtuch.png',NULL,0,0,1,NULL),
	(18,'Yoga Matte',19.99,2,'Yoga Matte 5mm, zweifarbig. Die Yogamatte bietet optimalen Halt und ist besonders rutschfest.','img/shop-images/yogamatte.png','img/shop-images/yogamatte.png','img/shop-images/yogamatte.png','img/shop-images/yogamatte.png',NULL,0,0,1,NULL);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
