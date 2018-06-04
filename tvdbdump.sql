-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: ricky.heliohost.org    Database: nipuna_tvdb
-- ------------------------------------------------------
-- Server version	5.6.37

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `place` (
  `pid` varchar(2) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pname` (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `place`
--

LOCK TABLES `place` WRITE;
/*!40000 ALTER TABLE `place` DISABLE KEYS */;
INSERT INTO `place` VALUES ('b1','Box1'),('b2','Box2'),('b3','Box3'),('b4','Box4'),('b5','Box5'),('p','Desktop'),('l','Laptop');
/*!40000 ALTER TABLE `place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storedin`
--

DROP TABLE IF EXISTS `storedin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storedin` (
  `tvid` int(4) NOT NULL,
  `pid` varchar(2) NOT NULL,
  `tvfrom` varchar(3) NOT NULL,
  `tvto` varchar(3) NOT NULL,
  PRIMARY KEY (`tvid`,`pid`,`tvfrom`),
  KEY `pid` (`pid`),
  CONSTRAINT `storedin_ibfk_1` FOREIGN KEY (`tvid`) REFERENCES `tvseries` (`tvid`),
  CONSTRAINT `storedin_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `place` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storedin`
--

LOCK TABLES `storedin` WRITE;
/*!40000 ALTER TABLE `storedin` DISABLE KEYS */;
INSERT INTO `storedin` VALUES (1,'b2','S01','S02'),(2,'b2','S01','S07'),(3,'b2','S01','S01'),(4,'b2','S01','S01'),(5,'b2','S01','S01'),(6,'b3','S01','S02'),(7,'b4','S01','S07'),(7,'p','S08','S08'),(8,'b1','S01','S05'),(8,'p','S06','S07'),(9,'p','S01','S10'),(10,'p','S01','S01'),(11,'b4','S01','S01'),(12,'b1','S01','S03'),(13,'b1','S01','S04'),(14,'b1','S01','S06'),(15,'p','S01','S01'),(16,'b3','S01','S01'),(17,'p','S01','S01'),(18,'b1','S01','S09'),(19,'b2','S01','S01'),(20,'p','S01','S01'),(21,'b2','S01','S01'),(22,'p','S01','S05'),(23,'b2','S01','S01'),(24,'p','S01','S01'),(25,'b2','S01','S01'),(25,'p','S02','S02'),(26,'b2','S01','S01'),(27,'p','S01','S05'),(28,'b3','S01','S01'),(29,'p','S01','S01'),(30,'p','S01','S02'),(31,'b2','S01','S01'),(32,'b2','S01','S01'),(33,'b3','S01','S05'),(34,'b2','S01','S05'),(35,'b2','S01','S05'),(35,'p','S01','S05'),(36,'b4','S01','S01'),(37,'b2','S01','S04'),(38,'b1','S01','S05'),(39,'b2','S01','S03'),(40,'b1','S01','S01'),(41,'p','S01','S09'),(42,'b4','S01','S01'),(43,'p','S01','S01'),(44,'b3','S01','S04'),(44,'p','S05','S05'),(45,'b2','S01','S01'),(46,'b1','S01','S02'),(47,'b2','S01','S01'),(48,'b4','S01','S05'),(49,'b2','S01','S01'),(50,'p','S01','S04'),(51,'b2','S01','S01'),(52,'b2','S01','S01'),(53,'b2','S01','S08'),(54,'b2','S01','S07'),(55,'p','S01','S01'),(56,'p','S01','S05'),(57,'b2','S01','S01'),(58,'p','S01','S04'),(59,'b2','S01','S01'),(60,'b2','S02','S02'),(61,'b1','S01','S03'),(62,'b2','S01','S04'),(63,'b2','S01','S06'),(64,'b1','S01','S05'),(65,'b2','S01','S01'),(66,'b2','S01','S02'),(67,'b2','S01','S05'),(68,'b2','S01','S01'),(69,'b2','S01','S01'),(70,'p','S01','S03'),(71,'b4','S01','S04'),(72,'b2','S01','S01'),(73,'b1','S01','S09'),(74,'b2','S01','S01'),(75,'b2','S01','S01'),(76,'b2','S01','S01'),(77,'b1','S01','S04'),(77,'p','S05','S05'),(78,'b3','S01','S04'),(79,'b2','S01','S02'),(80,'b2','S01','S03'),(81,'b2','S01','S01'),(82,'b2','S01','S03'),(83,'p','S01','S01'),(84,'b2','S01','S01'),(85,'p','S01','S02'),(86,'p','S01','S10'),(87,'b2','S01','S01'),(88,'p','S01','S02'),(89,'p','S01','S02'),(90,'b2','S01','S01'),(91,'b1','S01','S05'),(92,'b2','S01','S01'),(93,'b1','S01','S04'),(94,'b3','S01','S01'),(95,'b2','S01','S04'),(96,'b2','S01','S01'),(97,'b1','S01','S01'),(98,'p','S01','S01'),(99,'b3','S01','S03'),(100,'p','S01','S02'),(101,'b3','S01','S01'),(101,'p','S02','S02'),(102,'p','S01','S03'),(103,'p','S01','S01'),(104,'l','S02','S02'),(104,'p','S01','S01'),(105,'p','S01','S02'),(106,'p','S01','S01'),(107,'p','S01','S01'),(108,'b4','S01','S02'),(108,'p','S03','S03'),(109,'b4','S01','S05'),(109,'p','S06','S06'),(110,'b2','S01','S01'),(111,'b4','S01','S04'),(111,'l','S06','S06'),(111,'p','S05','S05'),(112,'p','S01','S02'),(113,'p','S01','S01'),(114,'b3','S01','S02'),(115,'b4','S01','S01'),(115,'p','S02','S02'),(116,'p','S01','S01'),(117,'b4','S01','S02'),(117,'l','S04','S04'),(117,'p','S03','S03'),(118,'b4','S01','S02'),(118,'l','S04','S04'),(118,'p','S03','S03'),(119,'b2','S01','S02'),(120,'b4','S01','S05'),(120,'p','S06','S06'),(121,'b3','S01','S01'),(121,'b5','S03','S03'),(121,'p','S02','S02'),(122,'l','S02','S02'),(122,'p','S01','S01'),(123,'b4','S01','S02'),(124,'b4','S01','S03'),(124,'l','S05','S05'),(124,'p','S04','S04'),(125,'p','S01','S01'),(126,'p','S01','S03'),(127,'p','S01','S01'),(128,'b2','S01','S01'),(129,'b4','S01','S01'),(129,'l','S03','S03'),(129,'p','S02','S02'),(130,'b4','S01','S02'),(130,'l','S04','S04'),(130,'p','S03','S03'),(131,'b3','S01','S01'),(132,'p','S01','S01'),(133,'p','S01','S01'),(134,'b2','S01','S06'),(134,'p','S07','S07'),(135,'b2','S03','S05'),(135,'p','S01','S02'),(135,'p','S06','S06'),(136,'b4','S01','S01'),(136,'p','S02','S02'),(137,'b4','S01','S05'),(137,'p','S06','S06'),(138,'b4','S01','S04'),(138,'l','S05','S05'),(139,'b1','S01','S09'),(140,'b2','S01','S01'),(141,'p','S01','S01'),(142,'b2','S01','S02'),(143,'b1','S01','S01'),(144,'b2','S01','S05'),(145,'b3','S01','S02'),(146,'p','S01','S04'),(147,'b1','S01','S01'),(147,'l','S02','S02'),(148,'b3','S01','S01'),(149,'p','S01','S02'),(150,'b3','S01','S07'),(151,'p','S01','S02'),(152,'p','S01','S03'),(153,'p','S01','S04'),(154,'p','S01','S01'),(155,'b3','S01','S02'),(155,'p','S03','S03'),(156,'b1','S01','S01'),(157,'p','S01','S01'),(158,'b2','S01','S03'),(158,'p','S04','S04'),(159,'b3','S01','S03'),(160,'b1','S01','S01'),(161,'p','S01','S02'),(162,'p','S01','S06'),(163,'p','S01','S12'),(164,'b4','S01','S02'),(164,'p','S03','S04'),(165,'b3','S01','S02'),(165,'p','S02','S03'),(166,'b1','S01','S01'),(167,'p','S01','S01'),(168,'b3','S01','S02'),(168,'p','S03','S03'),(169,'p','S01','S01'),(170,'b1','S01','S01'),(171,'p','S01','S06'),(172,'p','S01','S09'),(173,'p','S01','S01'),(174,'p','S01','S01'),(175,'p','S01','S05'),(176,'b1','S01','S01'),(177,'p','S01','S01'),(178,'p','S01','S01'),(179,'p','S01','S02'),(180,'p','S01','S01'),(181,'p','S01','S01'),(182,'p','S01','S04'),(183,'p','S01','S04'),(184,'p','S01','S01'),(185,'p','S01','S01'),(186,'p','S01','S08'),(187,'p','S01','S02'),(188,'p','S01','S04'),(189,'p','S01','S01'),(190,'p','S01','S01'),(191,'p','S01','S01'),(192,'p','S01','S01'),(193,'p','S01','S02'),(194,'p','S01','S01'),(195,'p','S01','S03'),(196,'p','S01','S04'),(197,'p','S01','S03'),(198,'p','S01','S03'),(199,'b1','S01','S07'),(200,'b1','S01','S01'),(201,'b1','S01','S01'),(202,'b1','S01','S01'),(203,'p','S01','S04'),(204,'p','S01','S01'),(205,'p','S01','S01'),(206,'p','S01','S01'),(207,'b1','S01','S01'),(208,'p','S01','S04'),(209,'b1','S01','S01'),(210,'b1','S01','S01'),(211,'b1','S01','S04'),(212,'b1','S01','S01'),(213,'b1','S01','S01'),(214,'p','S01','S01'),(215,'b5','S01','S02'),(216,'l','S01','S01'),(217,'b1','S01','S01'),(218,'b2','S01','S04'),(219,'b1','S01','S01'),(220,'b1','S01','S04'),(221,'b1','S01','S04'),(222,'b1','S01','S01'),(223,'p','S01','S01'),(224,'b1','S01','S03'),(225,'p','S01','S01'),(226,'b5','S01','S03'),(227,'b5','S01','S01'),(228,'b5','S01','S01'),(229,'p','S01','S01'),(230,'b5','S01','S05'),(231,'p','S01','S01'),(232,'b5','S01','S12'),(233,'b5','S01','S04'),(234,'b5','S01','S01'),(235,'b1','S01','S01'),(236,'b4','S01','S01'),(237,'l','S01','S01'),(238,'l','S01','S01'),(239,'l','S01','S04');
/*!40000 ALTER TABLE `storedin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tvdict`
--

DROP TABLE IF EXISTS `tvdict`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tvdict` (
  `tvid` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tvid`),
  CONSTRAINT `tvdictfk` FOREIGN KEY (`tvid`) REFERENCES `tvseries` (`tvid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvdict`
--

LOCK TABLES `tvdict` WRITE;
/*!40000 ALTER TABLE `tvdict` DISABLE KEYS */;
INSERT INTO `tvdict` VALUES (1,'https://en.wikipedia.org/wiki/Legend_of_the_Seeker'),(2,'https://en.wikipedia.org/wiki/The_Mentalist'),(3,'https://en.wikipedia.org/wiki/Moon_Embracing_the_Sun'),(4,'https://en.wikipedia.org/wiki/The_Secret_Circle_(TV_series)'),(5,'https://en.wikipedia.org/wiki/The_Tomorrow_People_(U.S._TV_series)'),(6,'https://en.wikipedia.org/wiki/Transporter:_The_Series'),(7,'https://en.wikipedia.org/wiki/The_Vampire_Diaries'),(8,'https://en.wikipedia.org/wiki/The_Walking_Dead_(TV_series)'),(9,'https://en.wikipedia.org/wiki/The_X-Files'),(10,'https://en.wikipedia.org/wiki/The_Marvelous_Mrs._Maisel'),(11,'https://en.wikipedia.org/wiki/Ultimate_Spider-Man_(TV_series)'),(41,'https://en.wikipedia.org/wiki/Dexter_(TV_series)'),(66,'https://en.wikipedia.org/wiki/Agent_Carter_(TV_series)'),(119,'https://en.wikipedia.org/wiki/Jessica_Jones_(TV_series)'),(123,'https://en.wikipedia.org/wiki/Daredevil_(TV_series)'),(124,'https://en.wikipedia.org/wiki/Agents_of_S.H.I.E.L.D.'),(125,'https://en.wikipedia.org/wiki/Iron_Fist_(TV_series)'),(127,'https://en.wikipedia.org/wiki/Powerless_(TV_series)'),(135,'https://en.wikipedia.org/wiki/Homeland_(TV_series)'),(150,'https://en.wikipedia.org/wiki/Once_Upon_a_Time_(TV_series)'),(164,'https://en.wikipedia.org/wiki/The_100_(TV_series)'),(176,'https://en.wikipedia.org/wiki/The_Defenders_(miniseries)'),(201,'https://en.wikipedia.org/wiki/The_Punisher_(TV_series)'),(202,'https://en.wikipedia.org/wiki/Inhumans_(TV_series)'),(204,'https://en.wikipedia.org/wiki/The_Girlfriend_Experience_(TV_series)'),(206,'https://en.wikipedia.org/wiki/Runaways_(TV_series)'),(207,'https://en.wikipedia.org/wiki/Dark_(TV_series)'),(208,'https://en.wikipedia.org/wiki/The_IT_Crowd'),(209,'https://en.wikipedia.org/wiki/Time_After_Time_(TV_series)'),(210,'https://en.wikipedia.org/wiki/Designated_Survivor_(TV_series)'),(212,'https://en.wikipedia.org/wiki/Altered_Carbon_(TV_series)'),(214,'https://en.wikipedia.org/wiki/Inside_Edge_(2017_TV_series)'),(216,'https://en.wikipedia.org/wiki/AÅŸk_Laftan_Anlamaz'),(221,'https://en.wikipedia.org/wiki/Reign_(TV_series)'),(222,'https://en.wikipedia.org/wiki/Troy:_Fall_of_a_City'),(223,'https://en.wikipedia.org/wiki/Life_Sentence_(TV_series)'),(224,'https://en.wikipedia.org/wiki/Love_(TV_series)'),(225,'https://en.wikipedia.org/wiki/The_Handmaid%27s_Tale_(TV_series)'),(226,'https://en.wikipedia.org/wiki/You_Me_Her'),(227,'https://en.wikipedia.org/wiki/Krypton_(TV_series)'),(228,'https://en.wikipedia.org/wiki/Hard_Sun'),(229,'https://en.wikipedia.org/wiki/Electric_Dreams_(2017_TV_series)'),(230,'https://en.wikipedia.org/wiki/Quantum_Leap'),(231,'https://en.wikipedia.org/wiki/The_Oath_(U.S._TV_series)'),(232,'https://en.wikipedia.org/wiki/Two_and_a_Half_Men'),(233,'https://en.wikipedia.org/wiki/Melissa_%26_Joey'),(234,'https://en.wikipedia.org/wiki/Lost_in_Space_(2018_TV_series)'),(235,'https://en.wikipedia.org/wiki/Breathe_(TV_series)'),(236,'https://en.wikipedia.org/wiki/The_World_at_War'),(237,'https://en.wikipedia.org/wiki/Brockmire'),(238,'https://en.wikipedia.org/wiki/Burn_Notice'),(239,'https://en.wikipedia.org/wiki/BoJack_Horseman');
/*!40000 ALTER TABLE `tvdict` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tvseries`
--

DROP TABLE IF EXISTS `tvseries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tvseries` (
  `tvid` int(4) NOT NULL AUTO_INCREMENT,
  `tvname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `showtype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`tvid`),
  UNIQUE KEY `tvname` (`tvname`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tvseries`
--

LOCK TABLES `tvseries` WRITE;
/*!40000 ALTER TABLE `tvseries` DISABLE KEYS */;
INSERT INTO `tvseries` VALUES (1,'The Legend of the Seeker','Completed',''),(2,'The Mentalist','Completed',''),(3,'The Moon That Embraces The Sun','Completed',''),(4,'The Secret Circle','Completed',''),(5,'The Tomorrow People','Completed',''),(6,'The Transporter','Completed','See Notes'),(7,'The Vampire Diaries','Completed',''),(8,'The Walking Dead','Completed',''),(9,'The X-Files','Completed',''),(10,'The Marvelous Mrs. Maisel','Completed',''),(11,'Ultimate Spiderman','Completed','W/SHIELD'),(12,'Under the Dome','Completed',''),(13,'Vikings','Airing',''),(14,'White Collar','Completed',''),(15,'You are Wanted','Completed',''),(16,'11.22.63','Completed','W/ Breaking Bad'),(17,'13 Reasons Why','Completed',''),(18,'24','Completed',''),(19,'A to Z','Completed',''),(20,'Aftermath','Completed',''),(21,'Agent X ','Completed',''),(22,'Alias','Completed',''),(23,'Almost Human','Completed','W/Mortal Kombat Legacy'),(24,'Alphas','Completed',''),(25,'Atlantis','Completed','W/ Blacksails S01E01-E04\r\n'),(26,'Awake','Completed','W/Halo'),(27,'Awkward','Completed',''),(28,'Bent','Completed',''),(29,'Bewitched','Completed',''),(30,'Beyond','Airing',''),(31,'Blacksails','Completed','Atlantis S01 /w Blacksails S01E01-E04'),(32,'Boys Over Flowers','Completed',''),(33,'Breaking Bad','Completed','W/ 11.22.63'),(34,'Castle','Completed',''),(35,'Chuck','Completed',''),(36,'Constantine','Completed','W/ The 100'),(37,'Continuum','Completed','Only S04 W/ Heroes Reborn'),(38,'Covert Affairs','Completed',''),(39,'Da Vinci\'s Demons','Completed','W/ One Big Happy'),(40,'Descendants of the Sun','Completed',''),(41,'Dexter','Completed',''),(42,'Dracula','Completed','W/ Teen Wolf'),(43,'Easy','Completed',''),(44,'Elementary','Completed',''),(45,'Fantastic Four ','Completed',''),(46,'Femme Fatales','Completed',''),(47,'Forever','Completed',''),(48,'Fringe','Completed',''),(49,'Halo Nightfall','Completed','W/ Awake'),(50,'Heroes','Completed',''),(51,'Heroes Reborn','Completed','W/ Continuum S04'),(52,'Houdini and Doyle','Completed',''),(53,'House MD','Completed','W/ The Cape'),(54,'How I Met Your Mother','Completed',''),(55,'Humans','Completed',''),(56,'I Dream of Jeannie','Completed',''),(57,'Intelligence','Completed','W/ Lost'),(58,'Knight Rider (1982)','Completed',''),(59,'Knight Rider (2008)','Completed',''),(60,'Kung Fu Panda','Completed',''),(61,'Kyle XY','Completed',''),(62,'Legend of Korra','Completed','W/ Scooby Doo'),(63,'Lost','Completed','W/ Intelligence'),(64,'Lost Girl','Completed',''),(65,'Love Rain','Completed',''),(66,'Marvel\'s Agent Carter','Completed',''),(67,'Merlin','Completed',''),(68,'Mortal Kombat Legacy','Completed','W/ Almost Human'),(69,'My Love from Another Star','Completed','W/ The Secret Circle'),(70,'Narcos','Completed',''),(71,'Nikita','Completed',''),(72,'One Big Happy','Completed','W/ Davinci\'s Demons'),(73,'One Tree Hill','Completed',''),(74,'Personal Taste','Completed','W/ Game of Thrones'),(75,'Playful Kiss','Completed',''),(76,'Prime Minister and I','Completed',''),(77,'Prison Break','Completed',''),(78,'Revenge','Completed',''),(79,'Revolution','Completed',''),(80,'Robin Hood','Completed',''),(81,'Rome','Completed',''),(82,'Roswell','Completed','+PDF Files Dummies Ebooks'),(83,'Rush Hour (2016)','Completed',''),(84,'Scooby Doo','Completed','W/ Legend of Korra'),(85,'Sheena','Completed',''),(86,'Smallville','Completed',''),(87,'Sonny with a Chance','Completed',''),(88,'Space Cases','Completed',''),(89,'Spellbinder','Completed',''),(90,'Star-Crossed','Completed',''),(91,'Strike Back','Completed',''),(92,'Sungkyukwan Scandal','Completed',''),(93,'Switched at Birth','Completed',''),(94,'The Batman','Completed',''),(95,'The Beauty and the Beast','Completed','See Notes'),(96,'The Cape','Completed','W/ House MD'),(97,'The Heirs','Completed',''),(98,'The Legend of Blue Sea','Completed',''),(99,'The Originals','Break','W/ Lucifer'),(100,'The Real O\'Neals','Break',''),(101,'The Shannara Chronicles','Break','See Notes'),(102,'The Strain','Break',''),(103,'The White Queen','Break',''),(104,'Timeless','Break',''),(105,'Travelers','Break',''),(106,'Van Helsing','Break',''),(107,'Westworld','Break',''),(108,'12 Monkeys','Break',''),(109,'2 Broke Girls ','Completed',''),(110,'Ancient Aliens','Break',''),(111,'Arrow ','Airing',''),(112,'Blindspot','Break',''),(113,'Channel Zero','Break',''),(114,'CSI Cyber','Break',''),(115,'DC\'s Legends of Tomorrow','Airing','W/ Gotham'),(116,'Frequency','Break',''),(117,'Gotham ','Airing','W/ Legends of Tomorrow'),(118,'iZombie','Break',''),(119,'Marvel\'s Jessica Jones','Break','/w Mozart in the Jungle'),(120,'Last Man Standing','Completed',''),(121,'Lucifer','Airing','See Notes'),(122,'MacGyver (2016)','Airing',''),(123,'Marvel\'s Daredevil','Break',''),(124,'Marvel\'s Agents of S.H.I.E.L.D.','Break','W/ Spiderman'),(125,'Marvel\'s Iron Fist','Break',''),(126,'Mr. Robot','Break',''),(127,'Powerless','Break',''),(128,'Preacher','Break','W/ Damien'),(129,'Supergirl','Break',''),(130,'The Flash','Break',''),(131,'The Returned','Airing','See Notes'),(132,'You are the Worst','Airing',''),(133,'American Gods','Airing',''),(134,'Game of Thrones','Break','See Notes'),(135,'Homeland','Airing','S01,S02,S06 in PC & S03-S05 in DVD'),(136,'Shadowhunters','Airing',''),(137,'Teen Wolf','Completed','W/ Dracula'),(138,'The Americans','Airing',''),(139,'The Big Bang Theory','Airing','See Notes'),(140,'Damien','Completed','W/ Preacher'),(141,'Legion','Completed','W/ Preacher'),(142,'Dominion','Completed',''),(143,'Famous in Love','Completed',''),(144,'Grimm','Completed',''),(145,'Helix','Completed','See Notes'),(146,'House of Cards','Break','See Notes'),(147,'Into the Badlands','Break',''),(148,'Limitless','Completed',''),(149,'Man in the High Castle','Break',''),(150,'Once Upon A Time','Completed',''),(151,'Outlander','Airing',''),(152,'Penny Dreadful','Completed',''),(153,'Person of Interest','Completed',''),(154,'Riverdale','Airing',''),(155,'Scorpion','Airing',''),(156,'Scream Queens','Completed',''),(157,'Sense8','Break',''),(158,'Sherlock','Break',''),(159,'Sleepy Hallow','Completed',''),(160,'Stan Lee\'s Lucky Man','Break',''),(161,'Stranger Things','Break',''),(162,'Suits','Break',''),(163,'Supernatural','Airing',''),(164,'The 100','Break','W/ Constantine'),(165,'The Blacklist','Airing',''),(166,'The Class','Completed',''),(167,'The Exorcist','Airing',''),(168,'The Last Ship','Break',''),(169,'City Hunter','Completed',''),(170,'Coffe Prince','Completed',''),(171,'Community','Completed',''),(172,'Friends','Completed',''),(173,'Healer','Completed',''),(174,'I Hear Your Voice','Completed',''),(175,'Justice League','Completed',''),(176,'Marvel\'s The Defenders','Completed',''),(177,'Mindhunter','Completed',''),(178,'Monsters Vs Aliens','Completed',''),(179,'Motive','Completed',''),(180,'My Girl','Completed',''),(181,'Berlin Station','Airing',''),(182,'Spartacus','Completed',''),(183,'Teenage Mutant Ninja Turtles','Completed',''),(184,'Terra Nova','Completed',''),(185,'To the Beautiful You','Completed',''),(186,'Weeds','Completed',''),(187,'Young Justice','Completed',''),(188,'Felicity','Completed',''),(189,'Faith','Completed',''),(190,'The Gifted','Airing',''),(191,'A Series of Unfortunate Events','Break',''),(192,'Avengers Assemble','Break',''),(193,'Dragon Riders Of Berk','Break',''),(194,'Guardians of the Galaxy','Break',''),(195,'Halt and Catch Fire','Break',''),(196,'Silicon Valley','Break',''),(197,'Better Call Saul','Break',''),(198,'Rick and Morty','Break',''),(199,'MacGyver (1985)','Completed',''),(200,'Future Man','Completed',''),(201,'Marvel\'s The Punisher','Completed',''),(202,'Marvel\'s Inhumans','Completed',''),(203,'Black Mirror','Break',''),(204,'The Girlfriend Experience','Break',''),(205,'The End of the Fucking World','Completed',''),(206,'Marvel\'s Runaways','Break',''),(207,'Dark','Break',''),(208,'The IT Crowd','Completed',''),(209,'Time After Time','Completed',''),(210,'Designated Survivor','Break',''),(211,'Hart of Dixie','Completed',''),(212,'Altered Carbon','Completed',''),(213,'Camelot','Completed',''),(214,'Inside Edge','Completed',''),(215,'Lethal Weapon','Break','See Notes'),(216,'Aşk Laftan Anlamaz','Completed',''),(217,'Lore','Completed',''),(218,'Mozart in the Jungle','Break','/w Jessica Jones'),(219,'Bride of the Water God','Completed',''),(220,'Banshee','Completed',''),(221,'Reign','Completed',''),(222,'Troy: Fall of a City','Break','/w World @ War'),(223,'Life Sentence','Airing',''),(224,'Love','Completed',''),(225,'The Handmaid\'s Tale','Break',''),(226,'You Me Her','Break','See Notes'),(227,'Krypton','Break','See Notes'),(228,'Hard Sun','Break','See Notes'),(229,'Electric Dreams','Completed',''),(230,'Quantum Leap','Completed',''),(231,'The Oath','Completed',''),(232,'Two and a Half Men','Completed','See Notes'),(233,'Melissa & Joey','Completed','See Notes'),(234,'Lost in Space','Completed','See Notes'),(235,'Breathe','Completed',''),(236,'The World at War','Completed','/w Troy'),(237,'Brockmire','Airing',''),(238,'Burn Notice','Completed',''),(239,'BoJack Horseman','Break','');
/*!40000 ALTER TABLE `tvseries` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-04 20:54:01
