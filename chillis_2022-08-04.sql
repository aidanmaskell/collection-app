# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.38)
# Database: chillis
# Generation Time: 2022-08-04 08:42:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table chillis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `chillis`;

CREATE TABLE `chillis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL DEFAULT '',
  `origin` varchar(1000) NOT NULL DEFAULT '',
  `shu` int(11) unsigned NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `chillis` WRITE;
/*!40000 ALTER TABLE `chillis` DISABLE KEYS */;

INSERT INTO `chillis` (`id`, `name`, `origin`, `shu`, `deleted`)
VALUES
	(1,'Aji Limon','Peru',40000,0),
	(2,'Habanero','Cuba',225000,0),
	(3,'Scotch Bonnet','Brazil',225000,0),
	(4,'Jalapeno','Mexico',5250,0),
	(5,'Bird\'s Eye','Mexico',75000,0),
	(6,'Cherry Bomb','Hungary',5000,0),
	(7,'Carolina Reaper','USA',2200000,0),
	(8,'Cayenne','French Guiana',40000,0),
	(9,'Kashmiri','India',1500,0),
	(10,'Piri Piri','Mozambique',175000,0),
	(11,'Padron','Spain',1000,0),
	(12,'Serrano','Mexico',20000,0),
	(13,'Tabasco','Mexico',40000,0),
	(14,'Trinidad Scorpion','Trinidad & Tobago',1200000,0),
	(15,'Poblano','Mexico',1250,0);

/*!40000 ALTER TABLE `chillis` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
