-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	5.5.28

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
-- Table structure for table `trnissueentry`
--

DROP TABLE IF EXISTS `trnissueentry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trnissueentry` (
  `issueId` int(11) NOT NULL AUTO_INCREMENT,
  `bookId` int(11) DEFAULT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ExpiryDate` datetime DEFAULT NULL,
  `isReturn` bit(1) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  `RenewDate` datetime DEFAULT NULL,
  PRIMARY KEY (`issueId`),
  KEY `bookId` (`bookId`),
  KEY `StudentId` (`StudentId`),
  CONSTRAINT `trnissueentry_ibfk_1` FOREIGN KEY (`bookId`) REFERENCES `mstbook` (`bookId`),
  CONSTRAINT `trnissueentry_ibfk_2` FOREIGN KEY (`StudentId`) REFERENCES `mststudent` (`StudentId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trnissueentry`
--

LOCK TABLES `trnissueentry` WRITE;
/*!40000 ALTER TABLE `trnissueentry` DISABLE KEYS */;
INSERT INTO `trnissueentry` VALUES (1,2,7,'2018-07-20 11:43:54','\0','','2018-07-05 11:43:54'),(2,3,3,'2018-07-21 14:40:39','\0','','2018-07-06 14:40:39'),(3,5,5,'2018-07-21 14:57:26','\0','','2018-07-06 14:57:26'),(4,7,2,'2018-07-21 15:09:41','\0','','2018-07-06 15:09:41'),(5,6,8,'2018-07-21 17:30:46','\0','','2018-07-06 17:30:46'),(6,1,8,'2018-07-21 17:32:17','\0','','2018-07-06 17:32:17'),(7,4,8,'2018-07-21 17:35:16','','','2018-07-06 17:35:16'),(8,8,7,'2018-07-21 21:18:08','','','2018-07-06 21:18:08'),(9,9,10,'2018-07-21 21:19:23','','','2018-07-06 21:19:23'),(10,10,10,'2018-07-22 10:37:24','\0','','2018-07-07 10:37:24'),(11,9,10,'2018-07-22 11:56:59','\0','','2018-07-07 11:56:59'),(12,4,4,'2018-07-22 12:06:26','\0','','2018-07-07 12:06:26'),(13,8,10,'2018-07-22 12:36:11','','','2018-07-07 12:36:11'),(14,8,7,'2018-07-22 12:58:29','','','2018-07-07 12:58:29');
/*!40000 ALTER TABLE `trnissueentry` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-08 17:15:57
