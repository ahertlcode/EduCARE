CREATE DATABASE  IF NOT EXISTS `educaredb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `educaredb`;
-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: educaredb
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applicants` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `application_Number` varchar(15) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `application_fee` float(12,4) DEFAULT NULL,
  `passport_photograph` varchar(50) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `state_of_origin` varchar(50) DEFAULT NULL,
  `religion` varchar(25) DEFAULT NULL,
  `present_class` varchar(10) DEFAULT NULL,
  `class_seeking_admission_to` varchar(10) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `previous_school` varchar(255) DEFAULT NULL,
  `certificate_obtained` varchar(100) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `other_information` varchar(255) DEFAULT NULL,
  `clergy_attestation` varchar(100) DEFAULT NULL,
  `birth_certificate` varchar(100) DEFAULT NULL,
  `test_score` float(5,2) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `completed` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applicants`
--

LOCK TABLES `applicants` WRITE;
/*!40000 ALTER TABLE `applicants` DISABLE KEYS */;
INSERT INTO `applicants` VALUES (1,'09/0390','Apetu Abayomi Oluwasegun','abayomismart@gmail.com','08063582789',15000.0000,'abayomi.jpeg','1980-11-09','Male','Nigeria','Ogun','Christianity','Primary VI','JSS 1','No 6, Era Road, Ilogbo Station','Local Govt Primary School','abycert.jpg','football, running','gfjfdhjhgfdjh','jfhlvfdjvbdfvbdfvjlf','abydob.jpg',87.00,8,'0','2018-04-26 14:23:24','2018-04-26 14:23:24');
/*!40000 ALTER TABLE `applicants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ar_internal_metadata`
--

DROP TABLE IF EXISTS `ar_internal_metadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ar_internal_metadata` (
  `key` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ar_internal_metadata`
--

LOCK TABLES `ar_internal_metadata` WRITE;
/*!40000 ALTER TABLE `ar_internal_metadata` DISABLE KEYS */;
INSERT INTO `ar_internal_metadata` VALUES ('environment','development','2018-04-26 13:49:36','2018-04-26 13:49:36');
/*!40000 ALTER TABLE `ar_internal_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(25) NOT NULL,
  `bank_code` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `bankname_UNIQUE` (`bank_name`),
  UNIQUE KEY `bankcode_UNIQUE` (`bank_code`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banks`
--

LOCK TABLES `banks` WRITE;
/*!40000 ALTER TABLE `banks` DISABLE KEYS */;
INSERT INTO `banks` VALUES (8,'Guaranty Trust Bank','GTB');
/*!40000 ALTER TABLE `banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class_subjects`
--

DROP TABLE IF EXISTS `class_subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `class` varchar(6) NOT NULL,
  `added_by` varchar(25) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` char(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_subjects`
--

LOCK TABLES `class_subjects` WRITE;
/*!40000 ALTER TABLE `class_subjects` DISABLE KEYS */;
/*!40000 ALTER TABLE `class_subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `declarations`
--

DROP TABLE IF EXISTS `declarations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `declarations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `applicant_declaration` char(1) DEFAULT '0',
  `declaration_date` datetime DEFAULT NULL,
  `parent_declaration` char(1) DEFAULT '0',
  `parent_declaration_date` datetime DEFAULT NULL,
  `parent_consent` char(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `student_id` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `declarations`
--

LOCK TABLES `declarations` WRITE;
/*!40000 ALTER TABLE `declarations` DISABLE KEYS */;
/*!40000 ALTER TABLE `declarations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_setups`
--

DROP TABLE IF EXISTS `exam_setups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam_setups` (
  `id` int(11) NOT NULL,
  `exam_type` varchar(45) NOT NULL,
  `questions` int(11) NOT NULL,
  `examiner` varchar(25) NOT NULL,
  `time_allowed` int(11) NOT NULL,
  `subject` tinytext NOT NULL,
  `status` char(1) DEFAULT '0',
  `test_name` varchar(120) NOT NULL,
  `created_at` date NOT NULL,
  `class_of_student` varchar(20) NOT NULL,
  `educareucls` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_setups`
--

LOCK TABLES `exam_setups` WRITE;
/*!40000 ALTER TABLE `exam_setups` DISABLE KEYS */;
/*!40000 ALTER TABLE `exam_setups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades_table`
--

DROP TABLE IF EXISTS `grades_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades_table` (
  `upper_limit` float(5,2) NOT NULL,
  `lower_limit` float(5,2) NOT NULL,
  `grade` char(1) NOT NULL,
  `status` char(1) DEFAULT '1',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades_table`
--

LOCK TABLES `grades_table` WRITE;
/*!40000 ALTER TABLE `grades_table` DISABLE KEYS */;
INSERT INTO `grades_table` VALUES (39.00,0.00,'F','1',1),(44.00,40.00,'E','1',2),(49.00,45.00,'D','1',3),(100.00,70.00,'A','1',4),(69.00,65.00,'B','1',5),(64.00,60.00,'C','1',6);
/*!40000 ALTER TABLE `grades_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `junior_first_term_reports`
--

DROP TABLE IF EXISTS `junior_first_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `junior_first_term_reports` (
  `id` int(11) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `junior_first_term_reports`
--

LOCK TABLES `junior_first_term_reports` WRITE;
/*!40000 ALTER TABLE `junior_first_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `junior_first_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `junior_second_term_reports`
--

DROP TABLE IF EXISTS `junior_second_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `junior_second_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `junior_second_term_reports`
--

LOCK TABLES `junior_second_term_reports` WRITE;
/*!40000 ALTER TABLE `junior_second_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `junior_second_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `junior_third_term_reports`
--

DROP TABLE IF EXISTS `junior_third_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `junior_third_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `junior_third_term_reports`
--

LOCK TABLES `junior_third_term_reports` WRITE;
/*!40000 ALTER TABLE `junior_third_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `junior_third_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicals`
--

DROP TABLE IF EXISTS `medicals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicals` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `applNo` varchar(15) NOT NULL,
  `applVulDis` varchar(255) DEFAULT NULL,
  `applBldGrp` varchar(10) NOT NULL,
  `applGenoType` varchar(10) NOT NULL,
  `applDocVisit` varchar(255) DEFAULT NULL,
  `applIllType` varchar(255) DEFAULT NULL,
  `applAllergies` varchar(255) DEFAULT NULL,
  `applSpecialNeed` varchar(255) DEFAULT NULL,
  `faDoctorName` varchar(25) NOT NULL,
  `faDoctorAddr` varchar(255) NOT NULL,
  `faDoctorPhone` varchar(15) NOT NULL,
  `applMedicalReport` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicals`
--

LOCK TABLES `medicals` WRITE;
/*!40000 ALTER TABLE `medicals` DISABLE KEYS */;
INSERT INTO `medicals` VALUES (1,'09/0390','none','O+','AA','3','none','egusi soup, groundnut','none','Dr. Olatunji Bello','Ilogbo Central Hospital','08065859500','abymedreport.jpg','2018-04-26 15:03:09','2018-04-26 15:03:09');
/*!40000 ALTER TABLE `medicals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mid_term_reports`
--

DROP TABLE IF EXISTS `mid_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mid_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mid_term_reports`
--

LOCK TABLES `mid_term_reports` WRITE;
/*!40000 ALTER TABLE `mid_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `mid_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nursery_reports`
--

DROP TABLE IF EXISTS `nursery_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nursery_reports` (
  `id` int(11) NOT NULL,
  `student_id` varchar(4) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `continous_assessment` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nursery_reports`
--

LOCK TABLES `nursery_reports` WRITE;
/*!40000 ALTER TABLE `nursery_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `nursery_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parents_table`
--

DROP TABLE IF EXISTS `parents_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parents_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `father_name` varchar(45) NOT NULL,
  `father_Work` varchar(25) NOT NULL,
  `father_Phone` varchar(13) NOT NULL,
  `father_Email` varchar(50) NOT NULL,
  `father_Home_Address` varchar(254) DEFAULT NULL,
  `father_Postal_Address` varchar(254) DEFAULT NULL,
  `mother_Name` varchar(45) NOT NULL,
  `mother_Work` varchar(25) NOT NULL,
  `mother_Phone` varchar(13) NOT NULL,
  `mother_Email` varchar(50) NOT NULL,
  `mother_Home_Address` varchar(254) DEFAULT NULL,
  `moPostAddr` varchar(254) DEFAULT NULL,
  `reffered` char(1) DEFAULT '0',
  `ref` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parents_table`
--

LOCK TABLES `parents_table` WRITE;
/*!40000 ALTER TABLE `parents_table` DISABLE KEYS */;
INSERT INTO `parents_table` VALUES (1,'Obi','plumber','09087676556','obi@gmai.com','89,dfghdghdghsgjd','23546723','Theresa','Trader','080657465787','theresa@gmail.com','89,hdggtsffh','34546765','0','');
/*!40000 ALTER TABLE `parents_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teller_number` varchar(20) NOT NULL,
  `payee` varchar(45) NOT NULL,
  `payee_phone` varchar(13) NOT NULL,
  `Bank` varchar(25) NOT NULL,
  `Account_Number` varchar(10) NOT NULL,
  `amount_Paid` float(12,2) NOT NULL,
  `deposit_date` datetime DEFAULT NULL,
  `source_Wallet` varchar(13) DEFAULT NULL,
  `dest_Wallet` varchar(13) DEFAULT NULL,
  `slip_Upload` varchar(50) NOT NULL,
  `payment_purpose` varchar(25) NOT NULL,
  `paymentchannel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tellerno_UNIQUE` (`teller_number`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'Q092937482','Abayomi Apetu','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(2,'T8797297','Abayomi Apetu','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(3,'D09888779','Apetu Abayomi','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(5,'A1092837','Abayomi Apetu','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(6,'d098776776','Apetu Abayomi','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(7,'l1245789','Abayomi Apetu','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(11,'t89827365','Abayomi Apetu','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(12,'A09088766','Abysmart Apetu','08063582789','Guaranty Trust Bank','0009217408',10000.00,'2017-07-27 00:00:00',NULL,NULL,'fel-eben3.jpg','Application Fee for SSS','Bank Desposit'),(14,'IB8977608','Apetu Gideon','09020071100','Guaranty Trust Bank','0009217408',5000.00,'2017-08-21 00:00:00',NULL,NULL,'Screenshot from 2017-07-21 10-31-23.png','Application Fee for JSS','Internet Banking'),(15,'IB72535640','Dare Apetu','08198786543','Guaranty Trust Bank','0009217408',5000.00,'2017-08-21 00:00:00',NULL,NULL,'Screenshot from 2017-07-21 10-31-23.png','Application Fee for JSS','Internet Banking');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permits`
--

DROP TABLE IF EXISTS `permits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permits` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `access` char(1) NOT NULL,
  `access_person` varchar(50) NOT NULL,
  `emergence_person` varchar(50) NOT NULL,
  `access_person_phone` varchar(15) NOT NULL,
  `access_person_address` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `student_id` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id_UNIQUE` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permits`
--

LOCK TABLES `permits` WRITE;
/*!40000 ALTER TABLE `permits` DISABLE KEYS */;
INSERT INTO `permits` VALUES (1,'1','Comfort Apetu','Samuel Apetu','0802456769000','2b Chief Akinlade street, Owode Yewa, Ogun State.','2018-04-26 15:12:27','2018-04-26 15:12:27','');
/*!40000 ALTER TABLE `permits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primary_first_term_reports`
--

DROP TABLE IF EXISTS `primary_first_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primary_first_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `second_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primary_first_term_reports`
--

LOCK TABLES `primary_first_term_reports` WRITE;
/*!40000 ALTER TABLE `primary_first_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `primary_first_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primary_second_term_reports`
--

DROP TABLE IF EXISTS `primary_second_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primary_second_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primary_second_term_reports`
--

LOCK TABLES `primary_second_term_reports` WRITE;
/*!40000 ALTER TABLE `primary_second_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `primary_second_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primary_third_term_reports`
--

DROP TABLE IF EXISTS `primary_third_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primary_third_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primary_third_term_reports`
--

LOCK TABLES `primary_third_term_reports` WRITE;
/*!40000 ALTER TABLE `primary_third_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `primary_third_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_bank`
--

DROP TABLE IF EXISTS `questions_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `optionA` tinytext NOT NULL,
  `optionB` tinytext NOT NULL,
  `optionC` tinytext NOT NULL,
  `optionD` tinytext NOT NULL,
  `optionE` tinytext,
  `master_chained` char(1) DEFAULT '0',
  `siblings` varchar(20) DEFAULT '0',
  `answer` text NOT NULL,
  `subject` varchar(50) NOT NULL,
  `exam_type` varchar(10) NOT NULL,
  `question_Image` tinytext,
  `scorepoint` float(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_bank`
--

LOCK TABLES `questions_bank` WRITE;
/*!40000 ALTER TABLE `questions_bank` DISABLE KEYS */;
/*!40000 ALTER TABLE `questions_bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `results_control`
--

DROP TABLE IF EXISTS `results_control`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `results_control` (
  `id` int(11) NOT NULL,
  `session` varchar(10) NOT NULL,
  `term` varchar(6) NOT NULL,
  `class` varchar(6) NOT NULL,
  `class_teacher` varchar(25) NOT NULL,
  `keystr` varchar(25) NOT NULL,
  `resul_tdate` datetime DEFAULT NULL,
  `status` char(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `keystr_UNIQUE` (`keystr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `results_control`
--

LOCK TABLES `results_control` WRITE;
/*!40000 ALTER TABLE `results_control` DISABLE KEYS */;
/*!40000 ALTER TABLE `results_control` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schema_migrations`
--

DROP TABLE IF EXISTS `schema_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schema_migrations` (
  `version` varchar(255) NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schema_migrations`
--

LOCK TABLES `schema_migrations` WRITE;
/*!40000 ALTER TABLE `schema_migrations` DISABLE KEYS */;
INSERT INTO `schema_migrations` VALUES ('20180426134751'),('20180426145115'),('20180426150839'),('20180426151555');
/*!40000 ALTER TABLE `schema_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scores_table`
--

DROP TABLE IF EXISTS `scores_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scores_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  `class` varchar(6) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `CAT` float(5,2) DEFAULT NULL,
  `EXAM` float(5,2) DEFAULT NULL,
  `GRADE` char(2) DEFAULT NULL,
  `TOTAL` float(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scores_table`
--

LOCK TABLES `scores_table` WRITE;
/*!40000 ALTER TABLE `scores_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `scores_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senior_first_term_reports`
--

DROP TABLE IF EXISTS `senior_first_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senior_first_term_reports` (
  `id` int(11) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senior_first_term_reports`
--

LOCK TABLES `senior_first_term_reports` WRITE;
/*!40000 ALTER TABLE `senior_first_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `senior_first_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senior_second_term_reports`
--

DROP TABLE IF EXISTS `senior_second_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senior_second_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `mid_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senior_second_term_reports`
--

LOCK TABLES `senior_second_term_reports` WRITE;
/*!40000 ALTER TABLE `senior_second_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `senior_second_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senior_third_term_reports`
--

DROP TABLE IF EXISTS `senior_third_term_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senior_third_term_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `Term` varchar(10) NOT NULL,
  `Session` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `first_test` float(5,2) DEFAULT NULL,
  `second_test` float(5,2) DEFAULT NULL,
  `total_test` float(5,2) DEFAULT NULL,
  `Exam` float(5,2) DEFAULT NULL,
  `subject` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senior_third_term_reports`
--

LOCK TABLES `senior_third_term_reports` WRITE;
/*!40000 ALTER TABLE `senior_third_term_reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `senior_third_term_reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(25) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `place_of_birth` varchar(50) DEFAULT NULL,
  `parent_id` varchar(10) DEFAULT NULL,
  `state_of_origin` varchar(50) DEFAULT NULL,
  `local_govt_area` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `blood_group` char(5) DEFAULT NULL,
  `genotype` char(5) DEFAULT NULL,
  `home_address` text,
  `sport_house` varchar(45) DEFAULT NULL,
  `class_on_admission` varchar(20) DEFAULT NULL,
  `current_class` varchar(45) DEFAULT NULL,
  `passport_photograph` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stdID_UNIQUE` (`student_id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'01930','Apetu','Abayomi','Oluwasegun','1992-08-22','owode','P2012001','ogun','yewa south','oja-odan','MALE','O+','AA','36, Eleso Street, off Era Road, via Iyana Era Bustop, Ijanikin, Lagos','OBAMA','JSS 1','JSS 3','abayomi.JPG','abayomismart@gmail.com','08063582789');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employment_id` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `marital_status` varchar(10) DEFAULT NULL,
  `home_address` tinytext,
  `qualification` varchar(255) NOT NULL,
  `date_employed` date DEFAULT NULL,
  `uonline` char(1) DEFAULT '0',
  `subjects` tinytext,
  `status` char(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `EmploymentId_UNIQUE` (`employment_id`),
  UNIQUE KEY `Email_UNIQUE` (`email`),
  UNIQUE KEY `PhonNo_UNIQUE` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'FEL/09/S/0014','Ebere Gabriel','MALE','gabriella@gmail.com','08067568990','MARRIED','4, ERA ROAD, ABULE, IJANIKIN, OTO-AWORI, LAGOS','NCE, BEd, M.Ed, PhD','2009-01-10','0','music, fine art,integrated science,basic science,chemistry,advance leve maths','1');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registered_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jonmark@gmail.com','applicant','7e081838cb82f40046f20e74031d408e','2017-06-27 18:54:05'),(2,'marksmith@gmail.com','applicant','8c5787e797b51d7fad413ee59174e033','2017-06-27 18:58:21'),(3,'harrypot@gmail.com','applicant','9f2ca7a990eb53a40b6bcca33a16c51b','2017-06-27 19:03:03'),(4,'ebusdan@gmail.com','applicant','86f2d322020a39da31a486f7e2c25ea4','2017-06-27 19:08:57'),(9,'taiwopeter@gmail.com','applicant','a0bef8f044836fd683fb4499bf025c79','2017-09-07 11:34:24'),(6,'omonalade@gmail.com','applicant','7f95a5284012908d441600fd20437240','2017-07-11 17:05:46'),(8,'abayomismart@gmail.com','student','86f2d322020a39da31a486f7e2c25ea4','2017-07-13 22:38:02'),(14,'gabriella@gmail.com','teacher','2a8306749c80cfeb2a935fc5259971a7','2017-09-15 02:35:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'educaredb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-03 16:29:41
