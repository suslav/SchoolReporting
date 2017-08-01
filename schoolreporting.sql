CREATE DATABASE  IF NOT EXISTS `schoolreporting` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `schoolreporting`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: schoolreporting
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `RowID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Billno` int(11) NOT NULL,
  `Particulars` varchar(200) DEFAULT NULL,
  `Debit` float DEFAULT NULL,
  `Credit` float DEFAULT NULL,
  `Uptdate` datetime DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  PRIMARY KEY (`RowID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'2017-07-31',1,'particulars1',12,13,'2017-07-31 00:00:00',2),(2,'2017-07-31',2,'particulars2',13,14,'2017-07-31 00:00:00',2),(3,'2017-07-31',3,'particulars3',14,15,'2017-07-31 00:00:00',3),(4,'2017-07-31',4,'particulars4',15,16,'2017-07-31 00:00:00',3);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Particulars` varchar(100) DEFAULT NULL,
  `Representative` varchar(100) DEFAULT NULL,
  `Remarks` varchar(200) DEFAULT NULL,
  `Status` varchar(45) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'2017-08-01','Particulars1','Representative4','Remarks1','Status1',2),(2,'2017-08-01','Particulars2','Representative3','Remarks2','Status2',3),(3,'2017-08-01','Particulars3','Representative2','Remarks3','Status3',2),(4,'2017-08-01','Particulars4','Representative1','Remarks4','Status4',3);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(100) DEFAULT NULL,
  `OrderedQnty` int(11) DEFAULT NULL,
  `DeliveredQnty` int(11) DEFAULT NULL,
  `BalanceQuantity` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'ProductName1',5,3,2,2),(2,'ProductName2',5,2,3,2),(3,'ProductName3',5,4,1,3),(4,'ProductName4',5,1,4,3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserTypeID` int(11) NOT NULL,
  `UserName` varchar(300) NOT NULL,
  `FirstName` varchar(500) NOT NULL,
  `LastName` varchar(500) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `Address` varchar(1000) DEFAULT NULL,
  `Mobile` varchar(45) DEFAULT NULL,
  `RegisteredDate` datetime DEFAULT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin@gmail.com','admin','admin','7c4a8d09ca3762af61e59520943dc26494f8941b',NULL,NULL,'2017-07-31 00:00:00',''),(2,2,'user1@gmail.com','user1','user1','7c4a8d09ca3762af61e59520943dc26494f8941b',NULL,NULL,'2017-07-31 00:00:00',''),(3,2,'user2@gmail.com','user2','user2','7c4a8d09ca3762af61e59520943dc26494f8941b',NULL,NULL,'2017-07-31 00:00:00','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertypes`
--

DROP TABLE IF EXISTS `usertypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertypes` (
  `UserTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `UserType` varchar(45) NOT NULL,
  PRIMARY KEY (`UserTypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertypes`
--

LOCK TABLES `usertypes` WRITE;
/*!40000 ALTER TABLE `usertypes` DISABLE KEYS */;
INSERT INTO `usertypes` VALUES (1,'Admin'),(2,'User');
/*!40000 ALTER TABLE `usertypes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'schoolreporting'
--

--
-- Dumping routines for database 'schoolreporting'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-01 17:30:52
