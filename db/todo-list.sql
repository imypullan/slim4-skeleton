# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: todo
# Generation Time: 2021-05-27 13:45:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table todo-list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `todo-list`;

CREATE TABLE `todo-list` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `task_name` varchar(10000) DEFAULT NULL,
  `completed` tinyint(1) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `todo-list` WRITE;
/*!40000 ALTER TABLE `todo-list` DISABLE KEYS */;

INSERT INTO `todo-list` (`id`, `task_name`, `completed`, `deleted`)
VALUES
	(1,'walk dog',1,1),
	(2,'move into house',1,1),
	(4,'make coffee',0,1),
	(16,'go somewhere',1,1),
	(19,'make dinner',1,1),
	(20,'walk dog',1,1),
	(21,'drink a smoothie',0,1),
	(22,'make coffee',0,1),
	(23,'make coffee',1,1),
	(24,'see friends',0,1),
	(25,'do some things',0,1),
	(26,'help me now',1,1),
	(27,'make lunch',0,1),
	(28,'learn css real bad',0,1),
	(29,'go somewhere',1,0),
	(30,'food shopping',1,0),
	(31,'drive ',1,1),
	(32,'tell of solly',0,1),
	(33,'tell solly he is great',1,1),
	(34,'make presentation',1,0),
	(35,'tell off laura',1,1),
	(36,'food shopping',0,0),
	(37,'pick laura up from school',1,1),
	(38,'move into house',0,0),
	(39,'',0,1),
	(40,'say hello',0,1),
	(41,'go somewhere',0,0),
	(42,'be great',0,1);

/*!40000 ALTER TABLE `todo-list` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
