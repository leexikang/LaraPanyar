-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: panyar_lara
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Programming'),(2,'Business Development'),(3,'English learning'),(4,'Science '),(5,'Graphic Design'),(6,'Computer Basic'),(7,'Video Editing'),(8,'Photographing');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `courseId` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `description` text,
  `note` text,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `fee` int(11) NOT NULL,
  `photo` varchar(80) NOT NULL,
  PRIMARY KEY (`courseId`),
  KEY `id` (`id`),
  KEY `categoryId` (`categoryId`),
  CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `course_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,'Java Web Development ',1,'','','13:00:00','15:30:00','2015-03-20','2015-06-20',30000,'image/web-development-design.jpg'),(2,1,'Video Editing Basic',7,'','','12:30:00','15:30:00','2015-06-20','2015-10-20',120000,'image/Free-Video-Editing.jpg'),(3,1,'Advance PHP Web Development',1,'','','12:30:00','14:30:00','2015-01-21','2015-06-21',18000,'image/web-development.jpg'),(4,1,'Web Development With Django',1,'','','09:30:00','11:00:00','2015-09-05','2015-12-05',45000,'image/python-im-web-django-1-728.jpg'),(5,1,'Graphic Design ',7,'','','10:30:00','12:00:00','2015-01-21','2015-06-21',1800000,'image/670px-Become-a-Graphic-Designer-Step-02.jpg'),(6,1,'Graphic Design Advance',5,'','','10:30:00','12:00:00','2015-01-20','2015-06-20',2500000,'image/graphic_banner.jpg'),(7,2,'ROR Advance Web Development',1,'','','12:30:00','14:00:00','2015-06-20','2015-06-20',12000,'image/companies-using-ruby-on-rails.jpg'),(8,2,'Django Web App Basic',1,'','','09:30:00','11:00:00','2015-03-20','2015-06-20',120000,'image/django-logo-negative.png'),(9,2,'Basic Photography',8,'','','09:30:00','14:00:00','2015-01-21','2015-06-20',12000000,'image/Close-up-of-photographer--008.jpg'),(10,3,'Web Development With ROR',1,'','','12:30:00','14:00:00','2015-01-20','2015-09-20',200000,'image/companies-using-ruby-on-rails.jpg'),(11,4,'IELTS',3,'','','09:30:00','12:00:00','2015-03-20','2015-06-20',1800000,'image/ielts-b.jpg'),(12,4,'',3,'','','12:30:00','14:30:00','2015-06-20','2015-06-20',1800000,'image/IELTS_OfficialTestCentre_logo.jpg'),(13,10,'English learning ',3,'','','09:30:00','12:00:00','2015-09-20','2015-09-20',120000,'image/learn-english-online-in-bangkok.png'),(14,3,'Photography Basic',8,'','','12:30:00','14:30:00','2015-03-20','2015-06-20',205000,'image/o-TRAVEL-PHOTOGRAPHY-facebook.jpg'),(15,4,'Computer ',6,'','','09:30:00','11:00:00','2015-06-20','2015-09-20',12000,'image/onlinecomputercourse.jpg'),(16,5,'IELTS',3,'','','09:30:00','11:00:00','2015-01-20','2015-03-20',3000,'image/english-is-fun.jpg'),(17,5,'Video Editing Advance',7,'','','12:30:00','14:30:00','2015-03-20','2015-06-20',1400000,'image/video.jpg'),(18,6,'Photography Advance',8,'','','12:30:00','14:30:00','2015-12-20','2015-12-20',1800000,'image/learn-how-to-take-better-pictures.jpg'),(19,6,'Microsoft Office',6,'','','09:30:00','12:00:00','2015-02-20','2015-06-20',1800000,'image/26_10_2013_14_03_00_mb3sh5bfavfmv3ln174qsfl591_77irhljis7.jpg'),(20,6,'Computer Basic',6,'','','10:30:00','12:00:00','2015-03-20','2015-06-20',1800000,'image/Hcom-Academy-Short-Course-Basic-Computer1-450x306.jpg'),(21,7,'Photography with Adobe',8,'','','09:30:00','14:00:00','2015-09-20','2015-09-20',120000,'image/a-guide-to-video-editing-on-the-mac-1.jpg'),(22,7,'Advance Video Editing',7,'','','18:00:00','20:00:00','2015-09-20','2015-09-20',120000,'image/video.jpg'),(23,8,'Advance Web Development',1,'','','09:30:00','14:00:00','2015-06-20','2015-09-20',120000,'image/web-development (1).jpg'),(24,9,'Video Editing Advance',7,'','','13:00:00','15:30:00','2015-06-20','2015-06-20',1800000,'image/a-guide-to-video-editing-on-the-mac-1.jpg'),(25,9,'PHP Web Development',1,'','','10:30:00','12:00:00','2015-01-20','2015-06-20',20000,'image/webdevelopmentbanner.png'),(26,9,'Learning English For Kid ',3,'','','12:30:00','14:00:00','2015-06-20','2015-09-20',2000,'image/images.jpg'),(27,8,'Basic Web Development',1,'','','09:30:00','14:00:00','2016-01-20','2016-01-20',120000,'image/webdevelopmentbanner.png'),(28,8,'Agile',2,'','','09:30:00','14:00:00','2015-06-20','2015-06-20',120000,'image/agile_banner.jpg'),(29,10,'Business Mangement',2,'','','09:30:00','14:00:00','2015-06-20','2015-09-20',120000,'image/business-management.jpg'),(30,10,'Programming with Python',1,'','','09:30:00','14:00:00','2015-09-20','2016-01-20',120000,'image/Python-Programming-Language.png');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'IBCT','Thit Sa','123','ibct@gmail.com',''),(2,'MCC','Mha Road','123','MCC@gmail.com',''),(3,'KMD','Min Nar Road','123','KMD@gmail.com','Best Traning Center In Myanmar '),(4,'MAD','Kin Ha Road','123','MAD@gmail.com',''),(5,'I-NET','That Pang Road','123','inet@gmail.com',''),(6,'BCT','That Pang Road','123','IBCT@gmail.com','Best Services For Your Future'),(7,'G-Link','Greant Road','123','glink@gmail.com',''),(8,'Trion','Tida Min Road','123','Trion@gmail.com',''),(9,'MIT','Shwe Phy Pala Zar','123','MIT@gmail.com',''),(10,'Zan','Thit Sa','123','zan@gmail.com',''),(11,'Kang','','123','kang@gmail.com','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-06 11:23:06
