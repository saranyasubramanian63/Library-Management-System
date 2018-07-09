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
-- Table structure for table `mstbook`
--

DROP TABLE IF EXISTS `mstbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mstbook` (
  `bookId` int(11) NOT NULL AUTO_INCREMENT,
  `BookName` varchar(100) DEFAULT NULL,
  `AuthorName` varchar(100) DEFAULT NULL,
  `Publisher` varchar(100) DEFAULT NULL,
  `Edition` varchar(100) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  `isReturn` bit(1) DEFAULT b'1',
  PRIMARY KEY (`bookId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mstbook`
--

LOCK TABLES `mstbook` WRITE;
/*!40000 ALTER TABLE `mstbook` DISABLE KEYS */;
INSERT INTO `mstbook` VALUES (1,'Harrypotter','J. K. Rowling','Bloomsbury','5','','\0'),(2,'Jungle Book','Rudyard Kipling','Macmillan','4','','\0'),(3,'Treasure Island','Robert Louis Stevenson','Cassel and Company','3','','\0'),(4,'Harrypotter','J. K. Rowling','Bloomsbury','4','','\0'),(5,'Jungle Book','Rudyard Kipling','Macmillan','3','','\0'),(6,'Treasure Island','Robert Louis Stevenson','Cassel and Company','2','','\0'),(7,'Snow White','Jacob Grimm','Disney','6','','\0'),(8,'Snow White','Jacob Grimm','Disney','6','',''),(9,'Snow White','Jacob Grimm','Disney','6','','\0'),(10,'Snow White','Jacob Grimm','Disney','6','','\0'),(11,'dfdf','fdfd','gdgg','6','',''),(12,'An Autobiography','Jawaharlal Nehru','IND Govt.','1','',''),(13,'An Autobiography','Jawaharlal Nehru','IND Govt.','2','','');
/*!40000 ALTER TABLE `mstbook` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-08 17:15:54
