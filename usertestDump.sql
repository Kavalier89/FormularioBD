-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: userstest
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idusers` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `fechanacimiento` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `codigopostal` varchar(45) DEFAULT NULL,
  `tarjeta` varchar(45) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kermit','Gustavo','Aqui va la fecha','quake211@gmail.com','79343121','C/Sesame Street','Tarragona','España','43205','2122321232212333','398384811P','Masculino',''),(2,'Maria','DB','Aqui va la fecha','mariana@msn.com','3244324','C/Maripili','Tarragona','España','223434','23423214234234234','23423234L','Masculino','uploads/gustavo.jpg'),(4,'Sergio','Justicia','Aqui va la fecha','quake211@gmail.com','79343121','C/SesameStreet','Tarragona','España','43205','2122321232212333','39902098L','Masculino','uploads/gustavo.jpg'),(5,'Sergio','Justicia','2023-04-11','quake211@gmail.com','79343121','C/SesameStreet','Tarragona','España','43205','2122321232212333','39902098L','Masculino','uploads/gustavo.jpg'),(6,'Ana','Maria','2023-04-20','mariana@msn.com','79343121','C/Maripili','Tarragona','España','43205','23423214234234234','39929802P','Femenino','uploads/flux.png'),(7,'','','','','','','','','','','','','uploads/'),(8,'asdasdasd','asdasdasd','2023-04-04','quakyman15@gmail.com','234234234','2asdasdas','asdasd','España','43253','21231123123','123456','Masculino','uploads/flux.png'),(9,'asdasdasd','asdasdasd','2023-04-12','quakyman15@gmail.com','234234234','2asdasdas','asdasd','España','43253','21231123123','1234567','Masculino','uploads/cascada.png'),(10,'asdasdasd','asdasdasd','2023-03-29','quakyman15@gmail.com','34134234','2asdasdas','','España','43253','21231123123','12345678','Masculino','uploads/cascada.png'),(11,'asdasdasd','asdasdasd','2023-04-12','','','','','España','','','123456789','Masculino','uploads/IterativoIncremental.jpg'),(12,'','','','quakyman15@gmail.com','','','','España','','','123456789','Masculino','uploads/IterativoIncremental.jpg');
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

-- Dump completed on 2023-04-28 13:46:33
