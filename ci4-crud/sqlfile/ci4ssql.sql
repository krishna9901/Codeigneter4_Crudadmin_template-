-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ci4_crud
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_table` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_table_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_table`
--

LOCK TABLES `user_table` WRITE;
/*!40000 ALTER TABLE `user_table` DISABLE KEYS */;
INSERT INTO `user_table` VALUES (1,'Mrs. Vella Kassulke IV','phoeger@example.net','Female','2020-10-21 12:52:23','2020-10-21 12:52:23'),(2,'Dr. Herbert Abernathy MD','fluettgen@example.net','Male','2020-10-21 12:52:24','2020-10-21 12:52:24'),(3,'Glenna Murphy','pkuhic@example.org','Male','2020-10-21 12:52:24','2020-10-21 12:52:24'),(4,'Ines Fadel','eveline.mante@example.com','Female','2020-10-21 12:52:24','2020-10-21 12:52:24'),(5,'Audreanne Wolf V','maryse.cartwright@example.net','Female','2020-10-21 12:52:24','2020-10-21 12:52:24'),(6,'Mrs. Sydni Emard','hills.evalyn@example.org','Male','2020-10-21 12:52:24','2020-10-21 12:52:24'),(7,'Imelda Prosacco','colton55@example.net','Female','2020-10-21 12:52:24','2020-10-21 12:52:24'),(8,'Mr. Alec Hansen','casey.wehner@example.com','Male','2020-10-21 12:52:24','2020-10-21 12:52:24'),(9,'Shanny O\'Connell PhD','kirlin.leopoldo@example.org','Male','2020-10-21 12:52:24','2020-10-21 12:52:24'),(10,'Elouise Hand IV','phaley@example.org','Female','2020-10-21 12:52:25','2020-10-21 12:52:25'),(11,'Augustus Denesik','rhammes@example.net','Female','2020-10-21 12:52:25','2020-10-21 12:52:25'),(12,'Emiliano Schaden Sr.','selena.jakubowski@example.com','Female','2020-10-21 12:52:25','2020-10-21 12:52:25'),(13,'Fabiola Bartoletti DDS','bonita.donnelly@example.org','Female','2020-10-21 12:52:25','2020-10-21 12:52:25'),(14,'Jaiden Farrell','hermann.ida@example.com','Female','2020-10-21 12:52:25','2020-10-21 12:52:25'),(15,'Neha Kunde I','langosh.colton@example.com','Male','2020-10-21 12:52:25','2020-10-21 12:52:25'),(16,'Dr. Troy Schamberger','gparker@example.org','Male','2020-10-21 12:52:25','2020-10-21 12:52:25'),(17,'Kadin Wolf','cwhite@example.net','Male','2020-10-21 12:52:25','2020-10-21 12:52:25'),(18,'Timothy Schneider','jaylin62@example.net','Female','2020-10-21 12:52:26','2020-10-21 12:52:26'),(19,'Miss Viviane Gleichner','efren.lang@example.com','Male','2020-10-21 12:52:26','2020-10-21 12:52:26'),(20,'Nya Harber','tkutch@example.net','Female','2020-10-21 12:52:26','2020-10-21 12:52:26'),(21,'Emmanuelle Zieme','gustave.kemmer@example.com','Male','2020-10-21 12:52:26','2020-10-21 12:52:26'),(22,'Mrs. Cheyanne Schroeder','ahmed.friesen@example.org','Female','2020-10-21 12:52:26','2020-10-21 12:52:26'),(23,'Raleigh Upton','temmerich@example.org','Female','2020-10-21 12:52:26','2020-10-21 12:52:26'),(24,'Carey Blick','haley.elinore@example.org','Female','2020-10-21 12:52:26','2020-10-21 12:52:26'),(25,'Lennie Lind','barton.jazmin@example.com','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(26,'Riley Gibson','vhayes@example.com','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(27,'Mario Toy','justen.nienow@example.org','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(28,'Tatum Tromp','wisozk.celia@example.org','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(29,'Prof. Rosendo O\'Connell II','chad69@example.com','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(30,'Donald Paucek','mertz.gerhard@example.org','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(31,'Prof. Jevon Feil MD','oschulist@example.com','Female','2020-10-21 12:52:27','2020-10-21 12:52:27'),(32,'Miss Savanna Hickle','willis.kuhn@example.org','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(33,'Prof. Demetris Crooks PhD','bogan.green@example.org','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(34,'Major Nienow','rudy.haag@example.com','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(35,'Alexander Braun','carli.witting@example.org','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(37,'Alden Hane III','larkin.ena@example.org','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(38,'Maximus Lesch','lucienne93@example.org','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(39,'Chanel Heller','tiffany.bechtelar@example.com','Male','2020-10-21 12:52:28','2020-10-21 12:52:28'),(40,'Merlin Koch','cassidy36@example.net','Female','2020-10-21 12:52:28','2020-10-21 12:52:28'),(41,'Josianne Halvorson','gdouglas@example.net','Female','2020-10-21 12:52:29','2020-10-21 12:52:29'),(42,'Selmer McKenzie','collier.erna@example.com','Female','2020-10-21 12:52:29','2020-10-21 12:52:29'),(43,'Mrs. Vernice Schmeler','senger.felipa@example.org','Male','2020-10-21 12:52:29','2020-10-21 12:52:29'),(44,'Diana Jaskolski','ymueller@example.org','Male','2020-10-21 12:52:29','2020-10-21 12:52:29'),(45,'Dr. Michael Gottlieb','leonard.torp@example.org','Male','2020-10-21 12:52:29','2020-10-21 12:52:29'),(46,'Pauline Lynch','dietrich.kennedi@example.net','Male','2020-10-21 12:52:29','2020-10-21 12:52:29'),(47,'Hershel Eichmann','becker.martine@example.net','Male','2020-10-21 12:52:29','2020-10-21 12:52:29'),(48,'Tyrel Denesik','gfisher@example.org','Male','2020-10-21 12:52:29','2020-10-21 12:52:29'),(49,'Manley Murazik','hickle.laurie@example.net','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(50,'Alta Hauck','bella73@example.com','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(51,'Mrs. Kaela Mitchell','orn.neoma@example.com','Male','2020-10-21 12:52:30','2020-10-21 12:52:30'),(52,'Adam Wilderman','murazik.wilhelmine@example.com','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(53,'Micaela Farrell','kutch.turner@example.net','Male','2020-10-21 12:52:30','2020-10-21 12:52:30'),(54,'Dr. Angie Lynch I','hwest@example.com','Male','2020-10-21 12:52:30','2020-10-21 12:52:30'),(55,'Dr. Dixie Kuhn','mae.lebsack@example.net','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(56,'Rudolph Kozey','legros.micheal@example.org','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(57,'Jazmyne Harvey Jr.','leo.kuhic@example.com','Male','2020-10-21 12:52:30','2020-10-21 12:52:30'),(58,'Mollie Luettgen','schristiansen@example.net','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(59,'Magdalena Beer V','bartell.kassandra@example.com','Male','2020-10-21 12:52:30','2020-10-21 12:52:30'),(60,'Perry Harris','dariana.labadie@example.net','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(61,'Unique Schulist','maxime.koepp@example.net','Female','2020-10-21 12:52:30','2020-10-21 12:52:30'),(62,'Magnolia Jacobi','greg.swaniawski@example.com','Female','2020-10-21 12:52:31','2020-10-21 12:52:31'),(63,'Allie Olson V','qgrady@example.org','Male','2020-10-21 12:52:31','2020-10-21 12:52:31'),(65,'Dr. Lane Lakin','hlynch@example.com','Male','2020-10-21 12:52:31','2020-10-21 12:52:31'),(66,'Larue Tromp','tremblay.shyanne@example.net','Male','2020-10-21 12:52:31','2020-10-21 12:52:31'),(67,'Shana Gleichner','floyd18@example.net','Male','2020-10-21 12:52:31','2020-10-21 12:52:31'),(68,'Laurie Lemke','adella06@example.net','Female','2020-10-21 12:52:31','2020-10-21 12:52:31'),(69,'D\'angelo Turcotte I','tschaden@example.net','Male','2020-10-21 12:52:31','2020-10-21 12:52:31'),(70,'Miss Bridgette Jacobs','erau@example.net','Female','2020-10-21 12:52:31','2020-10-21 12:52:31'),(71,'Mr. Warren Windler I','hhuels@example.com','Female','2020-10-21 12:52:31','2020-10-21 12:52:31'),(72,'Hester Greenfelder','cleveland.schneider@example.com','Female','2020-10-21 12:52:31','2020-10-21 12:52:31'),(73,'Ethelyn Russel','rtremblay@example.net','Female','2020-10-21 12:52:31','2020-10-21 12:52:31'),(74,'Dr. Carole Cruickshank','marjolaine.krajcik@example.com','Female','2020-10-21 12:52:32','2020-10-21 12:52:32'),(75,'Neva Weber DDS','lexie.sauer@example.com','Female','2020-10-21 12:52:32','2020-10-21 12:52:32'),(76,'Braulio Keeling','mackenzie23@example.net','Male','2020-10-21 12:52:32','2020-10-21 12:52:32'),(77,'Roderick Denesik','joel.schoen@example.org','Male','2020-10-21 12:52:32','2020-10-21 12:52:32'),(78,'Heidi Bahringer','ezra17@example.org','Male','2020-10-21 12:52:32','2020-10-21 12:52:32'),(79,'Prof. Eino O\'Hara','noelia.rolfson@example.net','Female','2020-10-21 12:52:32','2020-10-21 12:52:32'),(80,'Kenny Bernhard','ricky.padberg@example.com','Female','2020-10-21 12:52:32','2020-10-21 12:52:32'),(81,'Prof. Vernie Dickinson','cassidy.larkin@example.org','Female','2020-10-21 12:52:32','2020-10-21 12:52:32'),(82,'Janet Kovacek','ibergnaum@example.com','Male','2020-10-21 12:52:32','2020-10-21 12:52:32'),(83,'Prof. Kiana Altenwerth','orlo33@example.net','Female','2020-10-21 12:52:32','2020-10-21 12:52:32'),(84,'Tracy Kris','tyreek48@example.net','Male','2020-10-21 12:52:33','2020-10-21 12:52:33'),(85,'Alverta Gleason','cathryn.white@example.com','Male','2020-10-21 12:52:33','2020-10-21 12:52:33'),(86,'Prof. Emerson McLaughlin PhD','tromp.mauricio@example.org','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(87,'Dr. Georgette Corkery V','carolina.breitenberg@example.net','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(88,'Damon Bechtelar DDS','elijah01@example.com','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(89,'Ike Douglas','yrunolfsdottir@example.com','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(90,'Hal Mraz II','champlin.haleigh@example.org','Male','2020-10-21 12:52:33','2020-10-21 12:52:33'),(91,'Lauriane Borer','jacobs.vernie@example.net','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(92,'Prof. Hettie Price DVM','zoey.cole@example.net','Male','2020-10-21 12:52:33','2020-10-21 12:52:33'),(93,'Maci Block','brent.moen@example.net','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(94,'Prof. Doyle Zieme','milan06@example.net','Female','2020-10-21 12:52:33','2020-10-21 12:52:33'),(95,'Jerome Reynolds','trantow.judge@example.org','Female','2020-10-21 12:52:34','2020-10-21 12:52:34'),(96,'Dr. Casey Bradtke','augustus.pagac@example.org','Male','2020-10-21 12:52:34','2020-10-21 12:52:34'),(97,'Lesley Rippin Jr.','jimmie29@example.org','Female','2020-10-21 12:52:34','2020-10-21 12:52:34'),(98,'Kira Deckow','vhaag@example.org','Male','2020-10-21 12:52:34','2020-10-21 12:52:34'),(99,'Arch Sporer','ikilback@example.org','Male','2020-10-21 12:52:34','2020-10-21 12:52:34'),(100,'Brandyn Bogan','abernathy.penelope@example.org','Male','2020-10-21 12:52:34','2020-10-21 12:52:34'),(101,'John Smith','johnsmith@gmail.com','Male',NULL,NULL),(102,'Peter Parker','peterparker@gmail.com','Female',NULL,NULL),(103,'Donna Huber','donnahuber@mailinator.com','Female',NULL,NULL),(105,'Jim Perry','jim_perry@gmail.com','Male',NULL,NULL),(111,'admin','k@gmail.com','Male',NULL,NULL);
/*!40000 ALTER TABLE `user_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'krishna','admin@gmail.com','$2y$10$jW5Kq3P2T3hpfvukhbvluO2ypkCzC.EEiBbeUVW1Y5OiJC8.Ygy5S','2024-04-02 10:22:19');
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

-- Dump completed on 2024-04-08 16:04:25
